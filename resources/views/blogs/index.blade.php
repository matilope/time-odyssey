@extends('layout/index')

@section('title', 'Blog')

@section('main-heading', 'Blogs')

@section('content')
<section>
    <h2 class="text-4xl mb-8">Destacados</h2>
    <div class="blogs">
      <div class="destacados">
        @foreach($blogs as $key => $blog)
          <article>
            <img src="{{$blog->image}}" alt="{{$blog->title}}" />
            <div>
              <span>Categoria</span>
              <h3 title="{{$blog->title}}" class="text-3xl">{{$blog->title}}</h3>
              <p>{{$blog->description}}</p>
              <a href="{{url('/blog/' . $blog->id)}}">Leer blog</a>
            </div>
          </article>
        @endforeach
      </div>
      <aside>
        <h2 class="text-4xl mb-8">Usuario activos</h2>
        <article>
          <h3>matilogm</h3>
          <span>Usuario activo hace 2 horas</span>
        </article>
      </aside>
    </div>
  </section>
@endsection