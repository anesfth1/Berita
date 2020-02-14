@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Siswa</div>
                <div class="card-body">
                <form action=" {{ route('siswa.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-2">
                            <label>Nama</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <label>Kelas</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="kelas" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <label>Hobi</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control pilih-hobi" multiple name="hobi_id[]">
                                 @foreach ($hobi as $item)
                            <option value="{{ $item->id}}">{{$item->hobi}}</option>
                                 @endforeach
                            </select>
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
@push('script')
<script type="text/javascript">
 $(document).ready(function(){
     $('.pilih-hobi').select2();
 });

</script>
@endpush
