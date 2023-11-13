@extends('layout.index')

@section('title', 'Travel Odyssey')

@section('meta')
  <meta name="title" content="Viaje a {{$service->destiny->name}}" />
  <meta name="description" content="{{$service->description}}" />
  <meta property="og:title" content="Viaje a {{$service->destiny->name}}" />
  <meta property="og:description" content="{{$service->description}}" />
  <meta property="og:image" content="@if($service->image){{ asset('storage/' . $service->image) }} @else {{asset('/images/banner.jpg')}} @endif" />
  <meta property="twitter:title" content="Viaje a {{$service->destiny->name}}" />
  <meta property="twitter:description" content="{{$service->description}}" />
  <meta property="twitter:image" content="@if($service->image){{ asset('storage/' . $service->image) }} @else {{asset('/images/banner.jpg')}} @endif" />
@endsection

@section('content')
  <section class="py-8 sm:py-12"> 
    <article>
      <div class="flex justify-between sm:gap-5 flex-col sm:flex-row">
        <div class="lg:flex justify-center w-full sm:w-[50%]">
          <div class="lg:order-2 lg:ml-5">
            <div class="max-w-xl overflow-hidden rounded-lg mb-3">
              <img class="h-full w-auto sm:w-full mx-auto object-contain" src="@if($service->image){{ asset('storage/' . $service->image) }} @else {{asset('/images/banner.jpg')}} @endif" alt="{{$service->destiny->name}}" />
            </div>
          </div>
        </div>
        <div class="w-full sm:w-[50%]">
          <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">{{$service->destiny->name}}</h1>
          <div class="mt-5 flex items-center">
            <div class="flex items-center">
              <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
              </svg>
              <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
              </svg>
              <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
              </svg>
              <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
              </svg>
              <svg class="block h-4 w-4 align-middle text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" class=""></path>
              </svg>
            </div>
            <p class="ml-2 text-sm font-medium text-gray-500">13 opiniones</p>
          </div>
          
          <div class="my-5">
            <div class="accordion bg-gray-50 py-1 px-2 rounded-md border-t-2 border-b-2 border-solid border-white">
              <button class="py-3 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400">
                Duración
                <svg class="block w-4 h-4 svg-minus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                <svg class="hidden w-4 h-4 svg-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
              </button>
              <div class="content hidden w-full overflow-hidden transition-[height] duration-300">
                <p class="text-gray-800 dark:text-gray-200 mt-1 mb-3">
                  La duración del viaje (ida y vuelta) es de {{$service->duration * 2}} días
                </p>
              </div>
            </div>
            <div class="accordion bg-gray-50 py-1 px-2 rounded-md border-t-2 border-b-2 border-solid border-white">
              <button class="py-3 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400">
                Estadía
                <svg class="block w-4 h-4 svg-minus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                <svg class="hidden w-4 h-4 svg-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
              </button>
              <div class="content hidden w-full overflow-hidden transition-[height] duration-300">
                <p class="text-gray-800 dark:text-gray-200 mt-1 mb-3">
                  La estadía es de {{$service->lodging}} días
                </p>
              </div>
            </div>

            <div class="accordion bg-gray-50 py-1 px-2 rounded-md border-t-2 border-b-2 border-solid border-white">
              <button class="py-3 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400">
                Fecha de salida
                <svg class="block w-4 h-4 svg-minus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                <svg class="hidden w-4 h-4 svg-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
              </button>
              <div class="content hidden w-full overflow-hidden transition-[height] duration-300">
                <p class="text-gray-800 dark:text-gray-200 mt-1 mb-3">
                  La fecha de salida es el {{ Carbon\Carbon::parse($service->date_of_departure)->locale('es_ES')->isoFormat('D [de] MMMM [de] YYYY') }}
                </p>
              </div>
            </div>
          </div>

          <div class="flex flex-col items-center justify-between gap-5 space-y-4 border-t border-b py-4 sm:flex-row sm:space-y-0">
            <div class="flex items-end">
              <span class="text-3xl font-bold">@money($service->price)</span>
            </div>

            @auth
              <form action="{{route('services.purchase.post')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->id()}}" />
                <input type="hidden" name="service_id" value="{{$service->id}}" />
                <input type="hidden" name="price" value="{{$service->price}}" />
                <input type="hidden" name="quantity" value="1" />
                <button type="submit" class="inline-flex items-center justify-center rounded-md border-2 border-transparent bg-yellow-500 bg-none px-12 py-3 text-center text-base font-bold text-white transition-all duration-200 ease-in-out focus:shadow hover:bg-yellow-600">Contratar</button>
              </form>
            @endauth
            @if(!Auth::user())
            <a href="{{route('auth.register.form')}}" class="admin-btn create-btn">Registrarse para contratar</a>
            @endif
          </div>
        </div>
      </div>
      <div class="w-full">
        <div class="border-b border-gray-300">
          <nav class="flex gap-4">
            <span class="border-b-2 border-yellow-500 py-4 text-sm font-medium text-gray-900 hover:border-gray-400 hover:text-gray-800">Descripción</span>
          </nav>
        </div>

        <div class="mt-4 flow-root">
          <p>
            {{$service->description}}
          </p>
        </div>
      </div>
    </article>
  </section>
  <script>
    const accordions = document.querySelectorAll(".accordion");
    accordions.forEach((accordion) => {
      const button = accordion.querySelector("button");
      const svgMinus = button.querySelector(".svg-minus");
      const svgPlus = button.querySelector(".svg-plus");
      const content = accordion.querySelector(".content");
      button.addEventListener('click', () => {
          content.classList.toggle("hidden");
          if (content.classList.contains("hidden")) {
              svgMinus.classList.remove("hidden");
              svgPlus.classList.add("hidden");
          } else {
              svgMinus.classList.add("hidden");
              svgPlus.classList.remove("hidden");
          }
      });
    });
  </script>
@endsection