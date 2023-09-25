@extends('layout/index')

@section('title', 'Blog')

@section('main-heading', 'Blogs')

@section('content')
  <section class="grid grid-cols-3 gap-4">
    @foreach($blogs as $key => $blog)
      <article @if($key % 3 === 0)class="col-span-2"@endif>
        <img src="{{$blog->image}}" alt="{{$blog->title}}" />
        <div>
          <h2 class="text-3xl">{{$blog->title}}</h2>
          <p>{{$blog->description}}</p>
          <a href="{{url('/blog/' . $blog->id)}}">Leer blog</a>
        </div>
      </article>
    @endforeach
  </section>
@endsection