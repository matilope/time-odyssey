@extends('layout.index')

@section('title', 'Blogs')

@section('content')
<section>
    <h2 class="text-3xl mb-8">Blogs publicados</h2>
    <div class="blogs">
      <div class="featured">
        @foreach($blogs as $key => $blog)
          <article>
            <img loading="lazy" src="@if($blog->image){{ asset('storage/' . $blog->image) }}@else {{asset('/images/default.png')}} @endif" alt="{{$blog->title}}" />
            <div>
              <span class="category">
                {{$blog->category->name}}
              </span>
              <h3 title="{{$blog->title}}" class="text-2xl">{{$blog->title}}</h3>
              <p>{{$blog->description}}</p>
              <a class="btn read-btn" href="{{url('/blogs/' . $blog->id)}}">Leer blog</a>
            </div>
          </article>
        @endforeach
      </div>
      <aside>
        <h2 class="text-3xl mb-6">Usuarios</h2>
        @if(count($users)>0)
          <div class="active-users">
            @for($i = 0; $i < count($users); $i++)
              <article>
                <p><a href="{{url('/perfil/'. $users[$i]->id)}}">{{$users[$i]->username}}</a></p>
              </article>
              @if($i>1)
                @break
              @endif
            @endfor
          </div>
        @else
          <p>No hay usuarios activos</p>
        @endif
      </aside>
    </div>
  </section>
@endsection