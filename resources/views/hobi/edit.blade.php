@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Siswa</div>
                <div class="card-body">
                <form action=" {{ route('hobi.update',$hobi->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="">Hobi</label>
                        </div>
                        <div class="col-md-10">
                        <input type="text" name="hobi" value="{{$hobi->hobi}}" class="form-control" required>
                        </div>
                    </div>
                    <button class="btn btn-outline-success" type="submit">Simpan</button>
                    <a class="btn btn-outline-primary" href="{{ route('hobi.index', $hobi->id)}}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
