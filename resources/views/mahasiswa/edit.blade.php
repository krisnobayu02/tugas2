@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
        
                    <form action="{{route('update.mahasiswa', $mahasiswa->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="text" name="npm" class="form-control" placeholder="Tambahkan NPM" value="{{is_null($mahasiswa) ? '' : $mahasiswa->npm}}">
                                    <br>

                                    <label for="">NAMA</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Tambahkan Nama"  value="{{is_null($mahasiswa) ? '' : $mahasiswa->nama_mahasiswa}}">
                                    <br>

                                    <label for="">TEMPAT LAHIR</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir"  value="{{is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir}}">
                                    <br>

                                    <label for="">TANGGAL LAHIR</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir"  value="{{is_null($mahasiswa) ? '' : $mahasiswa->tgl_lahir}}">
                                    <br>
                                    
                                    <label for="">JENIS KELAMIN</label>
                                    <select name="jenis_kelamin" class="form-control">
                                    <option value="">masukkan jenis kelamin</option>
                                    <option value="L" selected="{{is_null($mahasiswa)? '' : $mahasiswa->jenis_kelamin=='L'}}">Lakian</option>
                                    <option value="P" selected="{{is_null($mahasiswa)? '' : $mahasiswa->jenis_kelamin=='P'}}">Perempuan</option>
                                    </select>
                                    <br>

                                    <label for="">TELEPON</label>
                                    <input type="text" name="telepon" class="form-control" placeholder="Tambahkan Telepon"  value="{{is_null($mahasiswa) ? '' : $mahasiswa->telepon}}">
                                    <br>
                                    
                                    <label for="">ALAMAT</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Tambahkan Alamat"  value="{{is_null($mahasiswa) ? '' : $mahasiswa->alamat}}">
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{route('mahasiswa')}}" class="btn btn-md btn-danger float-right">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection