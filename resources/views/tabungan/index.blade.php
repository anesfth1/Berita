@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tabungan Siswa
                </div>
                <a href="{{ route('tabungan.create')}}" class="btn btn-outline-primary">Tambah</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jumlah Uang Tabungan</th>
                                    <th>Action</th>
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
                                    <td>
                                       <form action="{{route('tabungan.destroy',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-outline-info" href="{{ route('tabungan.show', $data->id)}}">Show</a>
                                        <a class="btn btn-outline-warning" href="{{ route('tabungan.edit', $data->id)}}">Edit</a>
                                         <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                                       </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
