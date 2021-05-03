@extends('layouts.article')

@section('title')
    ngeArtikel Detail
@endsection

@section('content')
    
<div class="container">
    <div class="content-article">
        <h2 class="text-center">{{ $item->title }}</h2>
        <div class="content-image text-center">
            <img src="{{ Storage::url($item->image)}}" width="500px" height="900px">
        </div>
        <div class="container">
        {!! $item->material !!}
        </div>
    </div>
    <p>Dipublikasikan oleh : {{ $item->author }}</p>
</div>
@endsection