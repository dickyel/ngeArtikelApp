@extends('layouts.form')

@section('content')

                <!-- section form kontak -->
        <section class="section-contact" id="contactSection">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-contact-heading">
                        <h2>Buat Artikel</h2>
                        
                    </div>
                </div>
            </div>
        </section>
        

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
                <form action="{{ route('article-package.store') }}" method="post" class="form-contact-class" id="form-contact-id" enctype="multipart/form-data">
                @csrf
                    
                    <div class="form-group">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control form-control-article" name="title" placeholder="Judul" value="{{ old('title') }}" >
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control form-control-article" name="image" placeholder="image" value="{{ old('image') }}" >
                    </div>
                    
                    <div class="form-group ">
                        <label for="material" class="form-label">Artikel Kamu</label>
                        <textarea id="message" class="form-control form-control-article form-message ckeditor" name="material" rows="12" maxlength="6000" placeholder="Tulis Article Kamu disini.." value="{{ old('material') }}" ></textarea>
                    </div>

                    <div class="form-group form-name">
                        <label for="author" class="form-label">Nama anda</label>
                        <input type="text" class="form-control form-control-article" name="author" placeholder="Nama anda" value="{{ old('author') }}">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" id="form-button" class="btn btn-form-contact btn-lg btn-block">Kirim</button>
                    </div>
                </form>
            </div>
        </div>

@endsection