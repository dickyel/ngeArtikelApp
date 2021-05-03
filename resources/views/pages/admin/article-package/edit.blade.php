@extends('layouts.admin')

@section('content')

     <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Article {{ $item->title }}</h1>
                
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div class="card-shadow">
            <div class="card-body container" id="form-contact justify-content-center">
                <form action="{{ route('article-package.update', $item->id) }}" method="post" class="form-contact-class" id="form-contact-id" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div class="form-group form-name">
                        <label for="author" class="form-label">Nama anda</label>
                        <input type="text" class="form-control form-control-article" name="author" placeholder="Nama anda" value="{{ $item->author }}">
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control form-control-article" name="title" placeholder="Judul" value="{{ $item->title }}">
                    </div>

                    <div class="form-group ">
                        <label for="material" class="form-label">Artikel Kamu</label>
                        <textarea id="name" class="form-control-article form-message" name="material" rows="6" maxlength="3000" placeholder="Tulis Article Kamu disini.." value="{{ $item->material }}"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="form-button" class="btn btn-form-contact btn-lg btn-block">Ubah</button>
                    </div>
                </form>
            </div>
        </div>  

    </div>
        <!-- /.container-fluid -->

@endsection