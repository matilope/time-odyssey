@extends('layout.index')

@section('title', 'Travel Odyssey')

@section('content')
  <section>
    <h2 class="text-3xl mb-6">Servicios</h2>
    <div class="services">
      @foreach($services as $key => $service)
        <article>
          <img loading="lazy" src="@if($service->image){{ asset('storage/' . $service->image) }}@else {{asset('/images/default.png')}} @endif" alt="{{$service->title}}" />
          <div>
            <h3 title="{{$service->destiny->name}}" class="text-2xl my-3">{{$service->destiny->name}}</h3>
            <p>{{$service->description}}</p>
            <ul class="my-3">
              <li><span>Duración:</span> {{$service->description}} días</li>
              <li><span>Fecha salida:</span> {{$service->date_of_departure}}</li>
            </ul>
          </div>
        </article>
      @endforeach
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