@extends('layout/index')

@section('title', 'Articulo')

@section('main-heading', 'Articulo')

@section('content')
  <article class="blog-unique">
    <span class="category">Categoría</span>
    <h2 title="{{$blog->title}}" class="text-5xl">{{$blog->title}}</h2>
    <p>{{$blog->description}}</p>
    <span class="created_at">{{$blog->created_at}}</span>
    <img src="{{$blog->image}}" alt="{{$blog->title}}" />
    @if($blog->synopsis)
      <p>{{$blog->synopsis}}</p>
    @endif
  </article>
@endsection