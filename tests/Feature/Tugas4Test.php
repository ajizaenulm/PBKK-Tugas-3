<?php

test('1. master layout terpusat layouts/app.blade.php diwarisi tanpa duplikasi', function () {
    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('Portal akademik mahasiswa');
    $response->assertSee('Informatics');
    $response->assertSee('Departemen Teknik Informatika');
    $response->assertSee('/images/department.jpg');
    $response->assertSee('Shaping the Future of');
    $response->assertSee('Available Majors');
    $response->assertSee('Informatics Laboratories');
    $response->assertSee('Aji Zaenul Musthofa');
    $response->assertSee('5025241065');
});

test('2. tiga rute wajib fungsional diarahkan ke satu PageController', function () {
    // 2.1 Beranda (/ dan /beranda)
    $resHome = $this->get('/');
    $resHome->assertOk();
    $resBeranda = $this->get('/beranda');
    $resBeranda->assertOk();

    // 2.2 Profil Mahasiswa (/profil-mahasiswa)
    $resProfil = $this->get('/profil-mahasiswa');
    $resProfil->assertOk();
    $resProfil->assertSee('Aji Zaenul Musthofa');
    $resProfil->assertSee('5025241065');

    // 2.3 Ide-Riset (/ide-agent)
    $resIde = $this->get('/ide-agent');
    $resIde->assertOk();
    $resIde->assertSee('MAGENTIC');
    $resIde->assertSee('Formulir Pengumpulan Ide');
});

test('3. komponen kustom x-info-card digunakan pada profil mahasiswa', function () {
    $response = $this->get('/profil-mahasiswa');

    $response->assertOk();
    $response->assertSee('NRP');
    $response->assertSee('MAJOR');
    $response->assertSee('ACADEMIC ADVISOR');
    $response->assertSee('Bagus Jati Santoso');
});

test('4. tantangan 1: toggle tema dinamis mode gelap via /ide-agent?mode=dark', function () {
    $resDark = $this->get('/ide-agent?mode=dark');
    $resDark->assertOk();
    $resDark->assertSee('dark');
    $resDark->assertSee('Light');

    $resLight = $this->get('/ide-agent?mode=light');
    $resLight->assertOk();
    $resLight->assertSee('Dark');
});

test('5. tantangan 2: alert status interaktif via /beranda?user=Andi menggunakan x-status-banner', function () {
    $response = $this->get('/beranda?user=Andi');

    $response->assertOk();
    $response->assertSee('Halo,');
    $response->assertSee('Andi');
    $response->assertSee('Selamat Datang di Portal Akademik');
});

test('6. formulir pengumpulan ide di /ide-agent dapat mengirimkan data dan menampilkan alert status-banner', function () {
    $payload = [
        'author' => 'Aji Zaenul Musthofa',
        'nrp' => '5025241065',
        'title' => 'Autonomous Multi-Agent Linter & Healer',
        'category' => 'Autonomous Code Generation & Refactoring',
        'architecture' => 'ReAct Agent Loop',
        'target_user' => 'Mahasiswa & Asisten Lab',
        'priority' => 'Tinggi',
        'description' => 'Agen otonom yang memvalidasi sintaks AST dan secara proaktif mengajukan branch pull request perbaikan.',
    ];

    $response = $this->post('/ide-agent', $payload);

    $response->assertRedirect('/ide-agent#daftar-ide');
    $response->assertSessionHas('success');

    $followUp = $this->get('/ide-agent');
    $followUp->assertSee('Autonomous Multi-Agent Linter & Healer');
    $followUp->assertSee('Pengajuan Ide Berhasil Dikirim!');
});

test('7. persistensi tema mode gelap saat berpindah antar halaman', function () {
    // 1. Aktifkan tema dark di Beranda
    $resHomeDark = $this->get('/?mode=dark');
    $resHomeDark->assertOk();
    $resHomeDark->assertSee('class="scroll-smooth dark"', false);
    $resHomeDark->assertSee('Light');

    // 2. Berpindah ke Profil Mahasiswa tanpa parameter query mode
    $resProfil = $this->get('/profil-mahasiswa');
    $resProfil->assertOk();
    $resProfil->assertSee('class="scroll-smooth dark"', false);
    $resProfil->assertSee('Light');

    // 3. Berpindah ke Ide Agent tanpa parameter query mode
    $resIde = $this->get('/ide-agent');
    $resIde->assertOk();
    $resIde->assertSee('class="scroll-smooth dark"', false);
    $resIde->assertSee('Light');

    // 4. Beralih kembali ke mode light
    $resLight = $this->get('/?mode=light');
    $resLight->assertOk();
    $resLight->assertDontSee('class="scroll-smooth dark"', false);
    $resLight->assertSee('Dark');

    // 5. Berpindah ke Profil Mahasiswa (harus tetap mode light)
    $resProfilLight = $this->get('/profil-mahasiswa');
    $resProfilLight->assertOk();
    $resProfilLight->assertDontSee('class="scroll-smooth dark"', false);
    $resProfilLight->assertSee('Dark');
});
