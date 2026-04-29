<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TwebPendudukSumberBening;
use App\Models\Clusterdero;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class SumberBeningController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        try {
            $query = TwebPendudukSumberBening::query()->where('status_dasar', 1);

            if ($request->has('search')) {
                $search = $request->get('search');
                $query->where(function($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                      ->orWhere('nik', 'like', "%{$search}%");
                });
            }

            $perPage = $request->get('per_page', 15);
            $penduduk = $query->with('cluster')->paginate($perPage);

            return response()->json([
                'status' => 'success',
                'message' => 'Data penduduk berhasil diambil',
                'data' => $penduduk->items(),
                'pagination' => [
                    'current_page' => $penduduk->currentPage(),
                    'last_page' => $penduduk->lastPage(),
                    'per_page' => $penduduk->perPage(),
                    'total' => $penduduk->total(),
                    'from' => $penduduk->firstItem(),
                    'to' => $penduduk->lastItem(),
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat mengambil data penduduk',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id): JsonResponse
    {
        $data = TwebPendudukSumberBening::find($id);

        if (!$data) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data penduduk tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Data penduduk berhasil ditemukan',
            'data' => $data
        ], 200);
    }

    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'nama' => 'required|string|max:100',
                'nik' => 'required|string|unique:tweb_penduduk,nik|size:16',
                'sex' => 'required|in:1,2',
                'tempatlahir' => 'required|string|max:100',
                'agama_id' => 'required|integer',
                'pendidikan_kk_id' => 'required|integer',
                'pekerjaan_id' => 'required|integer',
                'status_kawin' => 'required|integer',
                'warganegara_id' => 'required|integer',
                'golongan_darah_id' => 'required|integer',
                'id_cluster' => 'required|integer',
                'status_dasar' => 'required|integer',
                'alamat_sekarang' => 'required|string',
                'email' => 'nullable|email|unique:tweb_penduduk,email',
                'telepon' => 'nullable|string|max:20',
            ]);

            $penduduk = TwebPendudukSumberBening::create($validated);

            return response()->json([
                'status' => 'success',
                'message' => 'Data penduduk berhasil ditambahkan',
                'data' => $penduduk
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validasi gagal',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menambahkan data penduduk',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, TwebPendudukSumberBening $twebPendudukDero): JsonResponse
    {
        try {
            $validated = $request->validate([
                'nama' => 'sometimes|required|string|max:100',
                'nik' => 'sometimes|required|string|unique:tweb_penduduk,nik,' . $twebPendudukDero->id . '|size:16',
                'sex' => 'sometimes|required|in:1,2',
                'tempatlahir' => 'sometimes|required|string|max:100',
                'agama_id' => 'sometimes|required|integer',
                'pendidikan_kk_id' => 'sometimes|required|integer',
                'pekerjaan_id' => 'sometimes|required|integer',
                'status_kawin' => 'sometimes|required|integer',
                'warganegara_id' => 'sometimes|required|integer',
                'golongan_darah_id' => 'sometimes|required|integer',
                'id_cluster' => 'sometimes|required|integer',
                'status_dasar' => 'sometimes|required|integer',
                'alamat_sekarang' => 'sometimes|required|string',
                'email' => 'nullable|email|unique:tweb_penduduk,email,' . $twebPendudukDero->id,
                'telepon' => 'nullable|string|max:20',
            ]);

            $twebPendudukDero->update($validated);

            return response()->json([
                'status' => 'success',
                'message' => 'Data penduduk berhasil diperbarui',
                'data' => $twebPendudukDero->fresh()
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validasi gagal',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat memperbarui data penduduk',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(TwebPendudukSumberBening $twebPendudukDero): JsonResponse
    {
        try {
            $twebPendudukDero->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Data penduduk berhasil dihapus'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menghapus data penduduk',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
