@extends('layout.admin')

@if ($ownProfile)
  @section('title', 'Mi perfil')
@else
  @section('title', 'Perfil de usuario')
@endif

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  <section
    class="user-profile relative flex flex-col w-full min-w-0 mb-6 break-words border bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable">
    <div class="px-6 pt-8 flex-auto min-h-[70px] pb-0 bg-transparent">
      <div class="flex flex-wrap mb-6 xl:flex-nowrap">
        <div class="mb-5 mr-5">
          <div class="relative inline-block shrink-0 rounded-2xl">
            <img class="inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px]"
              src="@if ($user->picture) {{ asset('storage/' . $user->picture) }}@else{{ asset('/images/user.png') }} @endif"
              alt="Perfil de {{ $user->name == "-" ? $user->email : $user->name  }}" />
          </div>
        </div>
        <div class="grow">
          <div class="flex flex-wrap items-start justify-between mb-2">
            <div class="flex flex-col">
              <div class="flex items-center mb-2">
                <h1
                  class="text-secondary-inverse hover:text-primary transition-colors duration-200 ease-in-out font-semibold text-[1.5rem] mr-1">
                  Perfil de {{ $user->name == "-" ? explode('@', $user->email)[0] : $user->name }}</h1>
              </div>
              <div class="flex flex-wrap pr-2 mb-4 font-medium">
                <a class="flex items-center mb-2 mr-5 text-secondary-dark hover:text-primary"
                  href="mailto:{{ $user->email }}">
                  <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                      <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                      <path
                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                    </svg>
                  </span>
                  {{ $user->email }}
                </a>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap justify-between">
            <div class="flex flex-wrap items-center">
              <span
                class="mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal capitalize @if ($user->role == 'administrador') badge-admin @else badge-user @endif">{{ $user->role }}</span>
            </div>
          </div>
          @if ($ownProfile)
           <div class="flex flex-wrap justify-between mt-3">
              <div class="flex flex-wrap items-center">
                <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-md transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal bg-green-600 text-white" title="Editar perfil">Editar perfil</a>
              </div>
            </div>
          @endif
        </div>
      </div>
      <hr class="w-full h-px border-neutral-200">
      <h2 class="text-2xl my-3">Servicios contratados</h2>
      <div class="hired-services-container my-5">
        @if (count($purchases) > 0)
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Imagen
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Nombre
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Precio
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Cantidad
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($purchases as $data)
                  <tr
                    class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      <img src="{{ asset('storage/' . $data->service->image) }}"
                        alt="{{ $data->service->destiny->name }}" />
                    </th>
                    <td class="px-6 py-4">
                      {{ $data->service->destiny->name }}
                    </td>
                    <td class="px-6 py-4">
                      @money($data->price)
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->quantity }}
                    </td>
                    <td class="px-6 py-4">
                      <a href="{{ route('services.service', ['id' => $data->service->id]) }}"
                        class="font-medium text-blue-600 hover:underline">Ver</a>
                      @if ($ownProfile)
                        <a href="{{ route('services.service', ['id' => $data->service->id]) }}"
                          class="font-medium text-red-600 hover:underline ml-2">Cancelar</a>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @else
          <p>El usuario no tiene servicios contratados</p>
        @endif
      </div>
    </div>
  </section>
@endsection
