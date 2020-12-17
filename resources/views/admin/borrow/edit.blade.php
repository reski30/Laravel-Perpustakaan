@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Data Penulis</h3>
        </div>

         <!-- alert -->
        @include('admin.templates.partials.alerts')

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

            <form action="{{ route('admin.author.update', $author) }}" method="POST">
            @csrf
            @method("PUT")
                <div class="form-group">
                    <label for="">Nama</label>
                    <input id="" class="form-control" type="text" name="name" placeholder="Masukan nama penulis" 
                    value="{{ old('name', $author->name) }}">
                </div>
                <div class="form_group">
                    <input type="submit" value="Ubah" class="btn btn-primary"> 
                </div>
            </form>
        </div>
    </div>

@endsection