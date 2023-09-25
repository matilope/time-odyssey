@extends('layout/index')

@section('title', 'Articulo')

@section('main-heading', 'Articulo')

@section('content')
  <article>
    <h2 class="text-3xl">{{$blog->title}}</h2>
    <p>{{$blog->description}}</p>
  </article>
@endsection