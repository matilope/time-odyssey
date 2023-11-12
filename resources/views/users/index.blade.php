@extends('layout.admin')

@section('title', 'Listado de usuarios')

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  <section>
    <h2 class="text-4xl mb-8">Listado de usuarios</h2>
      @if(count($users) > 0)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="user-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Imagen
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Nombre de usuario
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Correo electrónico
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $key => $user)
                  <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      <img src="@if($user->picture){{ asset('storage/' . $user->picture) }}@else{{asset('/images/user.png')}}@endif" alt="{{$user->username}}" />
                    </th>
                    <td class="px-6 py-4">
                      {{$user->username}}
                      @if(Auth::user()->id === $user->id)
                        <span class="font-medium text-red-600">(Tú)</span>
                      @endif
                    </td>
                    <td class="px-6 py-4">
                      {{$user->email}}
                    </td>
                    <td class="px-6 py-4">
                      @if(Auth::user()->id === $user->id)
                        <a href="{{route('users.profile')}}" class="font-medium text-red-600 dark:red -blue-500 hover:underline">Ver perfil</a>
                      @else
                        <a href="{{route('users.user', ['id' => $user->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      @else
      <p>No hay usuarios registrados</p>
      @endif
  </section>
@endsection