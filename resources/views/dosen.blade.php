@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Dosen</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Aksi</th> 
              </tr>
            </thead>
            <tbody>
              @foreach ($dosen as $dsn)
              <tr>
                <th scope="row">{{$dsn -> id_dosen}}</th>
                <td>{{$dsn -> nama_dosen}}</td>
                <td>{{$dsn -> nip}}</td>
                <td>{{$dsn -> detail_dosen -> jenis_kelamin}}</td>
                <td>{{$dsn -> detail_dosen -> tempat_lahir}}</td>
                <td>{{$dsn -> detail_dosen -> tanggal_lahir}}</td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection