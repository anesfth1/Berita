@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Siswa</div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                         <form action=" {{ route('tabungan.index')}}" method="POST">
                        <div class="col-md-2">
                            <label>Nama</label>
                        </div>
                        <div class="col-md-10">
                        <input type="text" value="{{$tabungan->siswa->nama}}" readonly name="nama" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>Kelas</label>
                        </div>
                        <div class="col-md-10">
                             <input type="text" value="{{$tabungan->siswa->kelas}}" readonly name="kelas" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>Tabungan</label>
                        </div>
                        <div class="col-md-10">
                             <input type="text" value="{{$tabungan->jumlah_uang}}" readonly name="jumlah_uang" class="form-control">
                        </div>
                    </div>
                     <a class="btn btn-outline-primary" href="{{ route('tabungan.index', $tabungan->id)}}">Kembali</a>
                       </form>
            </div>
        </div>
    </div>
</div>
@endsection
