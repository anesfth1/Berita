@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Tabungan Siswa</div>
                <div class="card-body">
                <form action=" {{ route('tabungan.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label>Pilih Nama Siswa</label>
                        </div>
                        <div class="col-md-9">
                            <select name="siswa_id" class="from-control">
                                @foreach ($tabungan  as $item)
                                <option value="{{$item->id}}"> {{$item->nama}} - {{$item->kelas}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Jumlah uang</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" name="jumlah_uang" required>
                        </div>
                    </div>
                    <button class="btn btn-outline-success" type="submit">Simpan</button>
                    <button class="btn btn-outline-warning" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
