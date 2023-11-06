@extends('layout.index')

@section('title', 'Travel Odyssey')

@section('meta')
  <meta name="title" content="Servicios | Travel Odyssey" />
  <meta name="description" content="Embárcate en una aventura espacial única con Travel Odyssey. Te llevamos a explorar destinos asombrosos más allá de la Tierra, desde la superficie abrasadora de Venus hasta los misterios de Marte y los confines del sistema solar. Nuestros viajes ofrecen experiencias inolvidables, desde cenas gourmet hasta alojamiento de lujo en el espacio exterior." />
  <meta property="og:title" content="Servicios | Travel Odyssey" />
  <meta property="og:description" content="Embárcate en una aventura espacial única con Travel Odyssey. Te llevamos a explorar destinos asombrosos más allá de la Tierra, desde la superficie abrasadora de Venus hasta los misterios de Marte y los confines del sistema solar. Nuestros viajes ofrecen experiencias inolvidables, desde cenas gourmet hasta alojamiento de lujo en el espacio exterior." />
  <meta property="og:image" content="{{asset('/images/banner.jpg')}}" />
  <meta property="twitter:title" content="Servicios | Travel Odyssey" />
  <meta property="twitter:description" content="Embárcate en una aventura espacial única con Travel Odyssey. Te llevamos a explorar destinos asombrosos más allá de la Tierra, desde la superficie abrasadora de Venus hasta los misterios de Marte y los confines del sistema solar. Nuestros viajes ofrecen experiencias inolvidables, desde cenas gourmet hasta alojamiento de lujo en el espacio exterior." />
  <meta property="twitter:image" content="{{asset('/images/banner.jpg')}}" />
@endsection

@section('content')
  <section>
    <h2 class="text-4xl mb-3">Planetas y satélites a visitar</h2>
    <p class="mb-6">Embárcate en una aventura espacial única con Travel Odyssey. Te llevamos a explorar destinos asombrosos más allá de la Tierra, desde la superficie abrasadora de Venus hasta los misterios de Marte y los confines del sistema solar. Nuestros viajes ofrecen experiencias inolvidables, desde cenas gourmet hasta alojamiento de lujo en el espacio exterior. ¿Estás listo para descubrir lo desconocido?</p>
    <div class="services">
      @foreach($services as $key => $service)
        <article>
          <div>
            <img loading="eager" src="@if($service->image){{ asset('storage/' . $service->image) }}@else {{ asset('/images/default.png') }} @endif" alt="{{$service->title}}" />
          </div>
          <div>
            <h3 title="{{$service->destiny->name}}" class="text-2xl my-3">{{$service->destiny->name}}</h3>
            <span class="price my-2">$ {{$service->price}}</span>
            <p>{{$service->description}}</p>
            <ul class="my-3">
              <li><span>Duración del viaje (ida y vuelta):</span> {{$service->duration * 2}} días</li>
              <li><span>Estadía:</span> {{$service->lodging}} días</li>
              <li><span>Fecha salida:</span> {{ Carbon\Carbon::parse($service->date_of_departure)->locale('es_ES')->isoFormat('D [de] MMMM [de] YYYY') }}</li>
            </ul>
            <button class="btn btn-see-more">Ver más</button>
          </div>
        </article>
      @endforeach
    </div>
  </section>
  <script>
    const servicesBtn = document.querySelectorAll(".services button");
    servicesBtn.forEach(item => {
      item.addEventListener('click', (e) => {
        const div = document.createElement("div");
        const backBackground = document.createElement("div");
        backBackground.classList.add("bg-modal");
        div.classList.add("services", "unique-service");
        const HTML = e.target.parentElement.parentElement.innerHTML;
        div.innerHTML = HTML;
        const close = document.createElement("div");
        close.innerHTML = `<svg class="close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>`;
        document.body.append(backBackground, div, close);
        [close, backBackground]?.forEach(item => {
          item.addEventListener('click', () => {
          document.querySelector(".unique-service")?.remove();
          backBackground?.remove();
          close?.remove();
         });
        });
        document?.addEventListener('keyup', (e) => {
          if(e.key === "Escape") {
            document.querySelector(".unique-service")?.remove();
            backBackground?.remove();
            close?.remove();
          }
         });
      });
    });
  </script>
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