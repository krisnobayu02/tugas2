@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                <a href="{{route('tambah.mahasiswa') }}" class="btn btn-primary float-right" >TAMBAH DATA</a>
                </div>
                

                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>NPM</th>
                            <th>Nama Lengkap</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>AKSI</th>
                        </tr>
                      @foreach ($mahasiswa as $mhs)
                      <tr>
                          <td>{{ $mhs->id }}</td>
                          <td>{{ $mhs->npm}}</td>
                          <td>{{ $mhs->nama_mahasiswa }}</td>
                          <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                          <td>{{$mhs->jenis_kelamin}}</td>
                          <td>{{$mhs->telepon}}</td>
                          <td>{{$mhs->alamat}}</td>
                          <td>
                          <a href="{{route('edit.mahasiswa',$mhs->id)}}" class="btn btn-sm btn-warning">Edit</a>
                          <a href=" {{route('hapus.mahasiswa',$mhs->id)}} " class="btn btn-sm btn-danger">Hapus</a>
                          </td>
                      </tr>

                      @endforeach

                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection