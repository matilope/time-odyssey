@extends('layout.admin')

@section('title', 'Administrador')

@section('main-heading', 'Administrador')

@section('content')
<section>
    <h1 class="text-4xl mb-8">Bienvenidos al panel de administracion</h1>
    <div class="admin">
      <div class="featured">
        @foreach($blogs as $key => $blog)
          <article>
            <img src="@if($blog->image){{ asset('storage/' . $blog->image) }}@else {{asset('/images/default.png')}} @endif" alt="{{$blog->title}}" />
            <div>
              <span class="category">{{$blog->categoria}}</span>
              <h3 title="{{$blog->title}}" class="text-3xl">{{$blog->title}}</h3>
              <p>{{$blog->description}}</p>
              <a href="{{url('/blogs/editar/' . $blog->id)}}">Editar</a>
              <form action="{{url('/blogs/eliminar/' .  $blog->id)}}" method="POST">
                @csrf
                <input type="submit" value="Eliminar" />
              </form>
            </div>
          </article>
        @endforeach
      </div>
      <div class="stats">
        <div>
          <h2 class="text-2xl mb-3">Blogs publicados</h2>
          <span>{{count($blogs)}}</span>
        </div>
        <div>
          <h2 class="text-2xl mb-3">Blog con mas visitas</h2>
          <span>{{$blogs[0]->title}}</span>
        </div>
        <div>
          <h2 class="text-2xl mb-3">Blog con menos visitas</h2>
          <span>{{$blogs[1]->title}}</span>
        </div>
        <div>
          <h2 class="text-2xl mb-3">Usuarios registrados</h2>
          <span>{{count($users)}}</span>
        </div>
      </div>
    </div>
  </section>
@endsection