@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tabungan Siswa
                </div>
                <a href="{{ route('tabungan.create')}}" class="btn btn-primary">Tambah</a>
                <div class="card-body">
                    <div class="table-responsive">
                        @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jumlah Uang Tabungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($tabungan as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->siswa->nama}}</td>
                                    <td>{{$data->siswa->kelas}}</td>
                                    <td>{{$data->jumlah_uang}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
