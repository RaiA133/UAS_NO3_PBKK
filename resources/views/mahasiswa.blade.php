@extends('layouts.app')

@section('content')
    <h1>Menu Mahasiswa</h1><hr>


    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mahasiswa as $mhs)
              <tr>
                <th scope="row">1</th>
                <td>{{ $mhs->nama_mahasiswa }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->jurusan }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
@endsection