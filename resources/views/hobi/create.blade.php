@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Siswa</div>
                <div class="card-body">
                <form action=" {{ route('hobi.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>Hobi</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="hobi" class="form-control" required>
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
