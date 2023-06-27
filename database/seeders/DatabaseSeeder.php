<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dosen;
use App\Models\mahasiswa;
use App\Models\mataKuliah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        mahasiswa::create([
            'nama_mahasiswa' => "rifqi",
            'nim' => "41037006211013",
            'jurusan' => "teknik informatika",
        ]);

        mahasiswa::create([
            'nama_mahasiswa' => "munawar",
            'nim' => "41037006211013",
            'jurusan' => "teknik industri",
        ]);

        mahasiswa::create([
            'nama_mahasiswa' => "ridwan",
            'nim' => "41037006211013",
            'jurusan' => "teknik elektro",
        ]);

        dosen::create([
            'nama_dosen' => "bapak galih S.T M.T",
            'nidn' => "41037006211013",
            'fakultas' => "teknik",
        ]);

        mataKuliah::create([
            'kode_mata_kuliah' => "12",
            'nama_mata_kuliah' => "PBKK",
            'jurusan' => "teknik informatika",
        ]);
    }
}
