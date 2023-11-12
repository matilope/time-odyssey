@extends('layout.admin')

@section('title', 'Listado de usuarios')

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  <section class="user">
    <h2 class="text-4xl mb-4">Bienvenidos al perfil de {{$user->username}}</h2>
    <p>Correo electronico <a href="mailto:{{$user->email}}">{{$user->email}}</a></p>
    <div class="hired-services-container my-5">
      @if(count($purchases) > 0)
        <h3 class="text-3xl mb-3">Servicios contratados</h3>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                      Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($purchases as $data)
                  <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      <img src="{{ asset('storage/' . $data->service->image) }}" alt="{{$data->service->destiny->name}}" />
                    </th>
                    <td class="px-6 py-4">
                      {{$data->service->destiny->name}}
                    </td>
                    <td class="px-6 py-4">
                      @money($data->price)
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('services.index')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>
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
  </section>
@endsection