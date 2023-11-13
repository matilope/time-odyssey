@extends('layout.index')

@section('title', 'Travel Odyssey')

@section('meta')
  <meta name="title" content="Viajes | Travel Odyssey" />
  <meta name="description" content="Embárcate en una aventura espacial única con Travel Odyssey. Te llevamos a explorar destinos asombrosos más allá de la Tierra, desde la superficie abrasadora de Venus hasta los misterios de Marte y los confines del sistema solar. Nuestros viajes ofrecen experiencias inolvidables, desde cenas gourmet hasta alojamiento de lujo en el espacio exterior." />
  <meta property="og:title" content="Viajes | Travel Odyssey" />
  <meta property="og:description" content="Embárcate en una aventura espacial única con Travel Odyssey. Te llevamos a explorar destinos asombrosos más allá de la Tierra, desde la superficie abrasadora de Venus hasta los misterios de Marte y los confines del sistema solar. Nuestros viajes ofrecen experiencias inolvidables, desde cenas gourmet hasta alojamiento de lujo en el espacio exterior." />
  <meta property="og:image" content="{{asset('/images/banner.jpg')}}" />
  <meta property="twitter:title" content="Viajes | Travel Odyssey" />
  <meta property="twitter:description" content="Embárcate en una aventura espacial única con Travel Odyssey. Te llevamos a explorar destinos asombrosos más allá de la Tierra, desde la superficie abrasadora de Venus hasta los misterios de Marte y los confines del sistema solar. Nuestros viajes ofrecen experiencias inolvidables, desde cenas gourmet hasta alojamiento de lujo en el espacio exterior." />
  <meta property="twitter:image" content="{{asset('/images/banner.jpg')}}" />
@endsection

@section('content')
  <section>
    <h1 class="text-4xl mb-3">Planetas y satélites a visitar</h1>
    <p class="mb-6">Embárcate en una aventura espacial única con Travel Odyssey. Te llevamos a explorar destinos asombrosos más allá de la Tierra, desde la superficie abrasadora de Venus hasta los misterios de Marte y los confines del sistema solar. Nuestros viajes ofrecen experiencias inolvidables, desde cenas gourmet hasta alojamiento de lujo en el espacio exterior. ¿Estás listo para descubrir lo desconocido?</p>
    <div class="services">
      @forelse($services as $key => $service)
        <article class="relative flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
          <div class="relative m-3 flex h-60 overflow-hidden rounded-xl">
            <img class="object-contain w-full" loading="eager" src="@if($service->image){{ asset('storage/' . $service->image) }}@else {{ asset('/images/default.png') }} @endif" alt="{{$service->title}}" />
            <span class="absolute top-0 left-0 rounded-full bg-yellow-300 px-4 py-1 text-center text-sm font-medium text-black">Viajes</span>
          </div>
          <div class="mt-5 px-5 pb-5">
            <h2 title="{{$service->destiny->name}}" class="text-3xl tracking-tight text-slate-900">{{$service->destiny->name}}</h2>
            <div class="mt-2 mb-3 flex items-center justify-between">
              <p>
                <span class="text-xl font-bold text-slate-900">@money($service->price)</span>
                <span class="text-sm text-slate-900 line-through">@money($service->price * 1.2)</span>
              </p>
            </div>
            <div class="flex items-center my-3">
              <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <span class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
            </div>
            <div>
              <p>{{$service->description}}</p>
            </div>
            <div class="flex justify-between flex-col md:flex-row mt-4 gap-3 md:gap-0">
              <a href="{{route('services.service', ['id' => $service->id])}}" class="btn btn-see-more text-center">Ver más</a>
              @auth
                <form action="{{route('services.purchase.post')}}" method="POST">
                  @csrf
                  <input type="hidden" name="user_id" value="{{auth()->id()}}" />
                  <input type="hidden" name="service_id" value="{{$service->id}}" />
                  <input type="hidden" name="price" value="{{$service->price}}" />
                  <input type="hidden" name="quantity" value="1" />
                  <button type="submit" class="btn btn-see-more w-full">Contratar</button>
                </form>
               @endauth
            </div>
          </div>
        </article>
        @empty
        <p>No hay servicios disponibles actualmente</p>
      @endforelse
    </div>
  </section>
  <script>
    const servicesContainer = document.querySelector(".services");
    let isDragging = false;
    let startX;
    let scrollLeft;

    servicesContainer.addEventListener("mousedown", (e) => {
      isDragging = true;
      servicesContainer.classList.add("active");
      startX = e.pageX - servicesContainer.offsetLeft;
      scrollLeft = servicesContainer.scrollLeft;
    });

    document.addEventListener("mousemove", (e) => {
      if (!isDragging) return;
      e.preventDefault();
      
      servicesContainer.classList.add("active");
      const x = e.pageX - servicesContainer.offsetLeft;
      const walk = (x - startX) * 2;
      servicesContainer.scrollLeft = scrollLeft - walk;
    });

    document.addEventListener("mouseup", () => {
      isDragging = false;
      servicesContainer.classList.remove("active");
    });

    servicesContainer.addEventListener("mouseleave", () => {
      isDragging = false;
      servicesContainer.classList.remove("active");
    });
  </script>
@endsection