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
                <div class="card-header">Ini Halaman Hobi</div>
                <a href="{{ route('hobi.create')}}" class="btn btn-primary">Tambah Hobi</a>
                <table class="table">
                    @csrf
                    <thead>
                        <th>Jenis Hobi</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($hobi as $item)
                        <tr>
                        <td> {{ $item->hobi}}</td>
                        <td>
                        <form action="{{route('hobi.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <a class="btn btn-outline-info" href="{{ route('hobi.show', $item->id)}}">Show</a>
                        <a class="btn btn-outline-warning" href="{{ route('hobi.edit', $item->id)}}">Edit</a>
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
