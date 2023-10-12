@extends('layout.index')

@section('title', 'Blogs')

@section('meta')
  <meta name="title" content="Blogs | Travel Odyssey" />
  <meta name="description" content="En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra empresa y lo que te espera en nuestros viajes especiales." />
  <meta property="og:title" content="Blogs | Travel Odyssey" />
  <meta property="og:description" content="En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra empresa y lo que te espera en nuestros viajes especiales." />
  <meta property="og:image" content="{{asset('/images/banner.jpg')}}" />
  <meta property="twitter:title" content="Blogs | Travel Odyssey" />
  <meta property="twitter:description" content="En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra empresa y lo que te espera en nuestros viajes especiales." />
  <meta property="twitter:image" content="{{asset('/images/banner.jpg')}}" />
@endsection

@section('content')
<section>
    <h2 class="text-4xl mb-8">Blogs publicados</h2>
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
              <a class="btn read-btn" href="{{route('blogs.article', ['id' => $blog->id])}}">Leer blog</a>
            </div>
          </article>
        @endforeach
      </div>
      <aside>
        <h2 class="text-4xl mb-6">Usuarios</h2>
        @if(count($users)>0)
          <div class="active-users">
            @for($i = 0; $i < count($users); $i++)
              <article>
                <p><a href="#">{{$users[$i]->username}}</a></p>
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