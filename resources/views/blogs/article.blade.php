@extends('layout/index')

@section('title', 'Articulo')

@section('main-heading', 'Articulo')

@section('content')
  <article class="blog-unique">
    <span>Categoría</span>
    <h2 class="text-3xl">{{$blog->title}}</h2>
    <p>{{$blog->description}}</p>
    <img src="{{$blog->image}}" alt="{{$blog->title}}" />
    <p>{{$blog->synopsis}}</p>
  </article>
@endsection