@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Data Buku</h3>
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

            <form action="{{ route('admin.book.update', $book) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="">Judul</label>
                    <input id="" class="form-control" type="text" name="title" placeholder="Masukan judul buku" value="{{ old('title', $book->title) }}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="3" class="form-control" placeholder="Tuliskan Deskripsi Buku">{{ old('description', $book->description)}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Penulis</label>
                    <select name="author_id" id="" class="form-control select2">
                        @foreach ($authors as $author)
                            <option 
                                value="{{ $author->id }}"
                                @if ($author->id === $book->author_id)
                                    selected
                                @endif >
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Sampul</label>
                    <input id="" class="form-control" type="file" name="cover">
                </div>
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input id="" class="form-control" type="text" name="qty" placeholder="Masukan jumlah buku" value="{{ old('qty',$book->qty) }}">
                </div>
                <div class="form_group">
                    <input type="submit" value="Ubah" class="btn btn-primary"> 
                </div>
            </form>
        </div>
    </div>

@endsection

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $('.select2').select2();
    </script>
@endpush