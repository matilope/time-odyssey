@extends('layout.index')

@section('title', 'Articulo')

@section('main-heading', 'Articulo')

@section('content')
  <article class="blog-unique">
    <span class="category">{{$blog->categoria}}</span>
    <h2 title="{{$blog->title}}" class="text-5xl">{{$blog->title}}</h2>
    <p>{{$blog->description}}</p>
    <span class="created_at">{{$blog->created_at}}</span>
    <img loading="lazy" src="@if($blog->image){{ asset('storage/' . $blog->image) }}@else {{asset('/images/default.png')}} @endif" alt="{{$blog->title}}" />
    @if($blog->synopsis)
      <p>{{$blog->synopsis}}</p>
    @endif
  </article>
  <a href="/blogs">Volver</a>
@endsection