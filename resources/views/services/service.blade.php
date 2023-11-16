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
              <button data-id="{{$service->id}}" data-name="{{$service->destiny->name}}" type="button" class="inline-flex items-center justify-center rounded-md border-2 border-transparent bg-yellow-500 bg-none px-12 py-3 text-center text-base font-bold text-white transition-all duration-200 ease-in-out focus:shadow hover:bg-yellow-600">Contratar</button>
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
  @auth
    <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    
      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                  </svg>                                     
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                  <p class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Contratar</p>
                  <div class="mt-2">
                    <p class="text-sm text-gray-500 modal-message">¿Estas seguro de contratar -?</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <form class="purchase-form" action="#" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->id()}}" />
                <input type="hidden" name="quantity" value="1" />
                <button type="submit" class="inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 sm:ml-3 sm:w-auto">Aceptar</button>
              </form>
              <button type="button" class="modal-cancel mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.querySelectorAll("[data-id]")?.forEach(item => {
        item?.addEventListener('click', (e) => {
          const modal = document.querySelector("[aria-modal='true']");
          const id = e.target.getAttribute("data-id");
          const name = e.target.getAttribute("data-name");
          const modalMessage = document.querySelector(".modal-message");
          modalMessage.textContent = `¿Estás seguro de comprar "${name}"?`;
          const form = document.querySelector('.purchase-form');
          form.action=`{{url('/servicios/${id}/comprar')}}`;
          modal.classList.remove("hidden");
          document.querySelector(".modal-cancel")?.addEventListener('click', (e) => {
            modal?.classList.add("hidden");
          });
        });
      });
    </script>
  @endauth
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