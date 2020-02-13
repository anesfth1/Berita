@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

            <div class="card">
                <div class="card-header">Ini Halaman Siswa</div>
                <a href="{{ route('siswa.create')}}" class="btn btn-primary">Tambah Siswa</a>
                <table class="table">
                    @csrf
                    <thead>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                        <td> {{ $item->nama}}</td>
                        <td> {{ $item->kelas}}</td>
                        <td>
                        <form action="{{route('siswa.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <a class="btn btn-outline-info" href="{{ route('siswa.show', $item->id)}}">Show</a>
                        <a class="btn btn-outline-warning" href="{{ route('siswa.edit', $item->id)}}">Edit</a>
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                        </td>
                        </tr>
                        @endforeach
                        </form>
                    </tbody>
                </table>
            </table>
        </div>
    </div>
</div>
@endsection
