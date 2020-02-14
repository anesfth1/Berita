@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Hobi</div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                         <form action=" {{ route('tabungan.index')}}" method="POST">
                        <div class="col-md-2">
                            <label>Hobi</label>
                        </div>
                        <div class="col-md-10">
                        <input type="text" value="{{$hobi->hobi}}" readonly name="hobi" class="form-control">
                        </div>
                    </div>
                     <a class="btn btn-outline-primary" href="{{ route('hobi.index')}}">Kembali</a>
                       </form>
            </div>
        </div>
    </div>
</div>
@endsection
