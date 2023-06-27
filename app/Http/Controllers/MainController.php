<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mahasiswa()
    {
        return view('mahasiswa', [
            'title' => 'Mahasiswa'
        ]);
    }
    public function dosen()
    {
        return view('dosen', [
            'title' => 'Dosen'
        ]);
    }
    public function mata_kuliah()
    {
        return view('mata_kuliah', [
            'title' => 'Mata kuliah'
        ]);
    }
}
