<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — Tugas 4: Membangun Aplikasi Multi-View Profil Akademik
|--------------------------------------------------------------------------
| Seluruh halaman anak diarahkan ke satu PageController utama.
| 1. Beranda: / dan /beranda (Tantangan 2: ?user=NamaUser)
| 2. Profil Mahasiswa: /profil-mahasiswa (<x-info-card>)
| 3. Ide-Riset & Platform AI: /ide-agent (Tantangan 1: ?mode=dark & Formulir Ide)
*/

// Halaman 1: Beranda
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/beranda', [PageController::class, 'index'])->name('beranda');

// Halaman 2: Profil Mahasiswa
Route::get('/profil-mahasiswa', [PageController::class, 'profilMahasiswa'])->name('profil.mahasiswa');

// Halaman 3: Ide-Riset & Platform Agentic AI
Route::get('/ide-agent', [PageController::class, 'ideAgent'])->name('ide.agent');
Route::post('/ide-agent', [PageController::class, 'storeIdea'])->name('ide.agent.store');
Route::post('/agent/idea', [PageController::class, 'storeIdea']);

// Fallback 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
