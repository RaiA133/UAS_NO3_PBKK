@extends('layouts.app')

@section('content')
    <h1>Menu Dosen</h1><hr>

    
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIDN</th>
                <th scope="col">Fakultas</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dosen as $dsn)
              <tr>
                <th scope="row">1</th>
                <td>{{ $dsn->nama_dosen }}</td>
                <td>{{ $dsn->nidn }}</td>
                <td>{{ $dsn->fakultas }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

@endsection