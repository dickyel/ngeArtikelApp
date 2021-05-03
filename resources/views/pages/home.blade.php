@extends('layouts.app')

@section('title')
    ngeArtikel Yuk! Homepage
@endsection

@section('content')
    <!-- section-about -->
    <div id="about">
        <div class="section-about" id="about">
            <div class="row">
                <div class="section section-about-heading col-sm-12 col-md-6 col-lg-4 text-left mt-5">
                    <h1>ngeArtikel Yuk!</h1>
                    <p>platform menulis untuk anda yang suka menulis dan <br/>share ilmu pengetahuan</p>
                    
                    @guest
                            <!-- mobile button -->
                        <form class="form-inline d-sm-block d-md-none">
                            <a href="{{ route('article-package.create')}}" class="btn btn-create-artikel my-2 my-sm-0 px-4">
                                Buat Artikel
                            </a>
                        </form>

                        <!-- dekstop button -->
                        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                            <a href="{{ route('article-package.create')}}" class="btn btn-create-artikel btn-navbar-right my-2 my-sm-0 px-4">
                                Buat Artikel
                            </a>
                        </form>
                        
                    @endguest

                    @auth
                            <!-- mobile button -->
                        <form class="form-inline d-sm-block d-md-none">
                            <a href="{{ route('article-package.create')}}" class="btn btn-create-artikel my-2 my-sm-0 px-4">
                                Buat Artikel
                            </a>
                        </form>

                        <!-- dekstop button -->
                        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                            <a href="{{ route('article-package.create')}}" class="btn btn-create-artikel btn-navbar-right my-2 my-sm-0 px-4">
                                Buat Artikel
                            </a>
                        </form>
                        
                    @endauth                     
                </div>

                <div class="section-about-image col-sm-none col-lg-4 text-right">
                    <img src="{{ url('frontend/images/artikel1.png') }}" alt="info gambar"/>
                </div>
            </div>
        </div>
    </div>

    <main>
            <!-- section artikel heading -->
        <section class="section-article" id="artikel">
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

                        @foreach($items as $item)
                            <div class="col-sm-6 col-md-6 col-lg-3">
                            
                                <div class="card card-content text-center">
                                    <div class="article-content">
                                        <img src={{ Storage::url($item->image)}} alt="gambar_article">

                                        <h4>{{ $item->title }}</h4>
                                        <p>By : {{ $item->author }}</p>
                                    <!-- mobile button -->
                                        
                                            <a href="{{ route('article', $item->slug)}}" class="btn btn-create-artikel my-2 my-sm-0 px-4">
                                            Lihat
                                            </a>
                                        

                                    
                                    </div>
                                </div>
                                
                            </div>
                        @endforeach
                    


            
                </div>
                
            </div>
        </section> 

        <!-- section team heading -->
        <section class="section-team" id="team">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-team-heading">
                        <h2>Team</h2>
                        <p>Anggota team siartikel</p>
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
                                <img src="{{ url('frontend/images/man.png')}}" alt="gambar_article">

                                <h4>Muhamad Dikky Purwanto</h4>
                                <p>As Product Owner , Frontend Web and Database Administrator </p>
                                
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/boy.png')}}" alt="gambar_article">

                                <h4>Difa Andika</h4>
                                <p>As UI Designer</p>
                                
                                
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/boy (1).png')}}" alt="gambar_article">

                                <h4>Zhafran Naufaldi</h4>
                                <p>As Frontend Web and Test Engineer</p>
                                
                                
                            </div>
                        </div>   
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/chinese.png')}}" alt="gambar_article">

                                <h4>Kurotul Aeni</h4>
                                <p>As Technical Writer and Frontend Web</p>
                                
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/woman.png')}}" alt="gambar_article">

                                <h4>Audry Raihan</h4>
                                <p>As Bussiness Analyst</p>
                                
                            </div>
                        </div>
                            
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-team text-center">
                            <div class="team-content">
                                <img src="{{ url('frontend/images/teacher.png')}}" alt="gambar_article">

                                <h4>Parid</h4>
                                <p>As UX Designer</p>
                                
                            </div>
                        </div>
                            
                    </div>

            
                </div>
                
            </div>
        </section>
    </main>
@endsection