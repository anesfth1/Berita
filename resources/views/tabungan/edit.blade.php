@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Tabungan Siswa</div>
                <div class="card-body">
                <form action=" {{ route('tabungan.update',$tabungan->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <label>Pilih Nama Siswa</label>
                        </div>
                        <div class="col-md-9">
                            <select name="siswa_id">
                                @foreach ($siswa  as $item)
                                <option value="{{$item->id}}" {{ $item->id == $tabungan->siswa_id ? 'selected' : ''}}> {{$item->nama}} - {{$item->kelas}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Jumlah uang</label>
                        </div>
                        <div class="col-md-9">
                        <input type="number" name="jumlah_uang" value="{{$tabungan->jumlah_uang}}"required class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-outline-success" type="submit">Simpan</button>
                    <a class="btn btn-outline-primary" href="{{ route('tabungan.index', $tabungan->id)}}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
