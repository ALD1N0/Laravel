<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clustersumber;
use App\Models\TwebPendudukSumberBening;
use Illuminate\Http\Request;

class TwebPendudukSumberBeningController extends Controller
{
    public function index()
    {
       return TwebPendudukSumberBening::with('cluster')->get();
    }

    public function show($id)
    {
        return TwebPendudukSumberBening::findOrFail($id);
    }

    public function store(Request $request)
    {
        return TwebPendudukSumberBening::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $data = TwebPendudukSumberBening::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id)
    {
        TwebPendudukSumberBening::destroy($id);
        return response()->json(null, 204);
    }

}
