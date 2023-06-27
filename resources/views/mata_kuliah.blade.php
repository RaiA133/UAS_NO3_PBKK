@extends('layouts.app')

@section('content')
    <h1>Menu Mata Kuliah</h1><hr>

    
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Koda</th>
                <th scope="col">Matkul</th>
                <th scope="col">Jurusan</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($matkul as $mata)
              <tr>
                <th scope="row">1</th>
                <td>{{ $mata->kode_mata_kuliah }}</td>
                <td>{{ $mata->nama_mata_kuliah }}</td>
                <td>{{ $mata->jurusan }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

@endsection