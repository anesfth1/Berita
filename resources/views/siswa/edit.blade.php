@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Siswa</div>
                <div class="card-body">
                <form action=" {{ route('siswa.update',$siswa->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="nama" value="{{$siswa->nama}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="">Kelas</label>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="kelas" value="{{$siswa->kelas}}" class="form-control" required>
                        </div>
                    </div>
                    <button class="btn btn-outline-success" type="submit">Simpan</button>
                    <a class="btn btn-outline-primary" href="{{ route('siswa.index', $siswa->id)}}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
