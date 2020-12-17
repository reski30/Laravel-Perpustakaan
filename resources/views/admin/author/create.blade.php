@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Data Penulis</h3>
        </div>
    

        <div class="box-body">

             @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.author.store') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input id="" class="form-control" type="text" name="name" placeholder="Masukan nama penulis" value="{{ old('name') }}">
                </div>
                <div class="form_group">
                    <input type="submit" value="Tambah" class="btn btn-primary"> 
                </div>
            </form>
        </div>
    </div>

@endsection