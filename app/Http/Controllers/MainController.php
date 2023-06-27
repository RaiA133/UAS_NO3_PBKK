<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\mahasiswa;
use App\Models\mataKuliah;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa', [
            'title' => 'Mahasiswa'
        ], compact('mahasiswa'));
    }
    public function dosen()
    {
        $dosen = dosen::all();
        return view('dosen', [
            'title' => 'Dosen'
        ], compact('dosen'));
    }
    public function mata_kuliah()
    {
        $matkul= mataKuliah::all();
        return view('mata_kuliah', [
            'title' => 'Mata kuliah'
        ], compact('matkul'));
    }
}
