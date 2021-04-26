@extends('layouts.app')

@section('title')
    ngeArtikel Yuk! Homepage
@endsection

@section('content')
    <!-- section-about -->
    <div id="about">
        <div class="section-about">
            <div class="row">
                <div class="section section-about-heading col-sm-12 col-md-6 col-lg-4 text-left mt-5">
                    <h1>ngeArtikel Yuk!</h1>
                    <p>platform menulis untuk anda yang suka menulis dan <br/>share ilmu pengetahuan</p>
                     <!-- mobile button -->
                    <form class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-create-artikel my-2 my-sm-0 px-4">
                            Buat Artikel
                        </button>
                    </form>

                    <!-- dekstop button -->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-create-artikel btn-navbar-right my-2 my-sm-0 px-4">
                            Buat Artikel
                        </button>
                    </form>
                </div>

                <div class="section-about-image col-sm-none col-lg-4 text-right">
                    <img src="{{ url('frontend/images/artikel1.png') }}" alt="info gambar"/>
                </div>
            </div>
        </div>
    </div>

    <main>
            <!-- section artikel heading -->
        <section class="section-article" id="articleSection">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-article-heading">
                        <h2>Artikel - artikel</h2>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- section artikel konten -->
        <section class="section-article-content" id="articleContent">
            <div class="container">
                <div class="section-content-card row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        
                        <div class="card card-content text-center">
                            <div class="article-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                <p>By :</p>
                                 <!-- mobile button -->
                                <form class="form-inline d-sm-block d-md-none">
                                    <button action="{{ url('/detail')}}" class="btn btn-create-artikel my-2 my-sm-0 px-4">
                                        Lihat
                                    </button>
                                </form>

                                <!-- dekstop button -->
                                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                                    <button action="{{ url('/detail')}}" class="btn btn-create-artikel btn-navbar-right my-2 my-sm-0 px-4">
                                        Lihat
                                    </button>
                                </form>
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-content text-center">
                            <div class="article-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                <p>By :</p>
                                <!-- mobile button -->
                                <form class="form-inline d-sm-block d-md-none">
                                    <button action="{{ url('/detail')}}" class="btn btn-create-artikel my-2 my-sm-0 px-4">
                                        Lihat
                                    </button>
                                </form>

                                <!-- dekstop button -->
                                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                                    <button action="{{ url('/detail')}}" class="btn btn-create-artikel btn-navbar-right my-2 my-sm-0 px-4">
                                        Lihat
                                    </button>
                                </form>
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-content text-center">
                            <div class="article-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                <p>By :</p>
                                
                                <!-- mobile button -->
                                <form action="{{ url('/detail')}}" class="form-inline d-sm-block d-md-none">
                                    <button class="btn btn-create-artikel my-2 my-sm-0 px-4">
                                        Lihat
                                    </button>
                                </form>

                                <!-- dekstop button -->
                                <form action="{{ url('/detail')}}" class="form-inline my-2 my-lg-0 d-none d-md-block">
                                    <button class="btn btn-create-artikel btn-navbar-right my-2 my-sm-0 px-4">
                                        Lihat
                                    </button>
                                </form>
                            </div>
                        </div>   
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-content text-center">
                            <div class="article-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                <p>By :</p>

                                        <!-- mobile button -->
                                <form action="{{ url('/detail')}}" class="form-inline d-sm-block d-md-none">
                                    <button class="btn btn-create-artikel my-2 my-sm-0 px-4">
                                        Lihat
                                    </button>
                                </form>

                                <!-- dekstop button -->
                                <form action="{{ url('/detail')}}" class="form-inline my-2 my-lg-0 d-none d-md-block">
                                    <button class="btn btn-create-artikel btn-navbar-right my-2 my-sm-0 px-4">
                                        Lihat
                                    </button>
                                </form>

                            </div>
                        </div>
                            
                    </div>

            
                </div>
                
            </div>
        </section> 

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

        <div class="container">
            <div id="form-contact justify-content-center">
                <form action="" id="form-contact-id" class="form-contact-class" method="post">
                    <div class="form-group form-name">
                        <label for="name" class="form-label">Nama Kamu</label>
                        <input type="text" id="name" name="name" class="form-control-article" placeholder="Tulis Nama Kamu" required>
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">Judul</label><br>
                        <input type="text" id="title" name="title" class="form-control-article" placeholder="Tulis judul" required>
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">Gambar</label><br>
                        <input type="file" id="image" name="image" required>
                    </div>
        
                    <div class="form-group">
                        <label for="message" class="form-label">Artikel Kamu</label>
                        <textarea id="name" class="form-control-article form-message" name="message" rows="6" maxlength="3000" placeholder="Tulis Article Kamu disini.." required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="form-button" class="btn btn-form-contact btn-lg btn-block">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- section team heading -->
        <section class="section-team" id="teamSection">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-team-heading">
                        <h2>Team</h2>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- section artikel konten -->
        <section class="section-team-content" id="teamContent">
            <div class="container">
                <div class="section-team-card row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                
                                
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                
                                
                            </div>
                        </div>   
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/123.jpg')}}" alt="gambar_article">

                                <h4>Judul</h4>
                                
                            </div>
                        </div>
                            
                    </div>

            
                </div>
                
            </div>
        </section>
    </main>
@endsection