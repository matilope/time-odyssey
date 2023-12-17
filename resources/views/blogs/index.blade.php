@extends('layout.index')

@section('title', 'Blogs')

@section('meta')
  <meta name="title" content="Blogs | Travel Odyssey" />
  <meta name="description"
    content="En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra empresa y lo que te espera en nuestros viajes especiales." />
  <meta property="og:title" content="Blogs | Travel Odyssey" />
  <meta property="og:description"
    content="En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra empresa y lo que te espera en nuestros viajes especiales." />
  <meta property="og:image" content="{{ asset('/images/banner.jpg') }}" />
  <meta property="twitter:title" content="Blogs | Travel Odyssey" />
  <meta property="twitter:description"
    content="En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra empresa y lo que te espera en nuestros viajes especiales." />
  <meta property="twitter:image" content="{{ asset('/images/banner.jpg') }}" />
@endsection

@section('content')
  <section>
    <h1 class="text-4xl mb-8">Blogs publicados</h1>
    <div class="blogs">
      <div class="featured">
        @forelse($blogs as $key => $blog)
          <article>
            <img loading="lazy"
              src="@if ($blog->image) {{ asset('storage/' . $blog->image) }}@else {{ asset('/images/default.png') }} @endif"
              alt="@if ($blog->image_description) {{ $blog->image_description }}@else{{ $blog->title }} @endif" />
            <div>
              <span class="category">
                {{ $blog->category->name }}
              </span>
              <h2 title="{{ $blog->title }}" class="text-2xl font-semibold">{{ $blog->title }}</h2>
              <p>{{ $blog->description }}</p>
              <a class="btn read-btn" href="{{ route('blogs.article', ['id' => $blog->id]) }}">Leer blog</a>
            </div>
          </article>
        @empty
          <p>No hay blogs publicados</p>
        @endforelse
      </div>
      {{ $blogs->links() }}
      <aside>
        <h2 class="text-3xl mb-6">Usuarios activos</h2>
        @if (count($users) > 0)
          <div class="active-users">
            @for ($i = 0; $i < count($users); $i++)
              @if($users[$i]->name != "-")
                <div>
                  <span>{{ $users[$i]->name }}</span>
                </div>
              @endif
              @if ($i > 1)
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
