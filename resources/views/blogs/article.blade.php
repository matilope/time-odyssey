@extends('layout.index')

@section('title', $blog->title)

@section('meta')
  <meta name="title" content="{{$blog->title}} | Travel Odyssey" />
  <meta name="description" content="{{$blog->description}}" />
  <meta property="og:title" content="{{$blog->title}} | Travel Odyssey" />
  <meta property="og:description" content="{{$blog->description}}" />
  <meta property="og:image" content="{{asset('/images/banner.jpg')}}" />
  <meta property="twitter:title" content="{{$blog->title}} | Travel Odyssey" />
  <meta property="twitter:description" content="{{$blog->description}}" />
  <meta property="twitter:image" content="{{asset('/images/banner.jpg')}}" />
@endsection

@section('content')
  <article class="blog-unique">
    <span class="category">{{$blog->category->name}}</span>
    <h1 title="{{$blog->title}}" class="text-4xl mb-6">{{$blog->title}}</h1>
    <p>{!! nl2br(e($blog->description)) !!}</p>
    <span class="created_at">{{ Carbon\Carbon::parse($blog->created_at)->locale('es_ES')->isoFormat('D [de] MMMM [de] YYYY [a las] HH:mm[hs]') }}</span>
    <img loading="lazy" src="@if($blog->image){{ asset('storage/' . $blog->image) }}@else {{asset('/images/default.png')}} @endif" alt="@if($blog->image_description){{$blog->image_description}}@else{{$blog->title}}@endif" />
    @if($blog->synopsis)
      <p>{!! nl2br(e($blog->synopsis)) !!}</p>
    @endif
  </article>
  <a class="btn" href="{{route('blogs.index')}}">Volver</a>
@endsection