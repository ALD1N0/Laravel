<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Arr;

class BerandaControl extends Controller
{
  public function index()
{
    $client = Http::withToken(config('services.apipenduduk.token'))
                  ->baseUrl(config('services.apipenduduk.url'));

    $response = $client->get('/penduduk/all');

    // Validasi respons
    if (!$response->successful()) {
        abort(500, 'Gagal mengambil data ringkasan penduduk');
    }

    $summary = $response->json('data');

    return view('beranda', compact('summary'));
}
}