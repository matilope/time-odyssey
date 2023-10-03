@extends('layout.index')

@section('title', $blog->title)

@section('content')
  <article class="blog-unique">
    <span class="category">{{$blog->category}}</span>
    <h2 title="{{$blog->title}}" class="text-3xl mb-6">{{$blog->title}}</h2>
    <p>{!! nl2br(e($blog->description)) !!}</p>
    <span class="created_at">{{$blog->created_at}}</span>
    <img loading="lazy" src="@if($blog->image){{ asset('storage/' . $blog->image) }}@else {{asset('/images/default.png')}} @endif" alt="{{$blog->title}}" />
    @if($blog->synopsis)
      <p>{!! nl2br(e($blog->synopsis)) !!}</p>
    @endif
  </article>
  <a class="btn" href="/blogs">Volver</a>
@endsection