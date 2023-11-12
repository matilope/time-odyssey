@extends('layout.index')

@section('title', 'Iniciar Sesión')

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  @if (\Session::has('status.login.message'))
    <div class="@if (\Session::has('status.error')) bg-red-100 border border-red-400 text-red-700 @else bg-green-100 border border-green-400 text-green-700 @endif px-3 py-3 rounded relative my-5 form-user" role="alert">
      <span class="block sm:inline" id="error-synopsis">{!! \Session::get('status.login.message') !!}</span>
      <span class="absolute top-0 bottom-0 right-0 flex items-center mr-2">
        @if(\Session::has('status.success'))
          <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><title>Éxito</title>
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg>
        @else   
          <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Error</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
          </svg>
        @endif 
      </span>
    </div>
  @endif
  <h2 class="text-4xl mb-6 form-user">Iniciar sesión</h2>
  <form class="form-custom form-user" action="{{route('auth.login.post') }}" method="post">
    @csrf
    <div class="form-div">
      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo electrónico</label>
      <input 
        type="email" 
        class="border border-gray-900/25" 
        name="email" 
        id="email"
        value="{{ old('email') }}"
        @error('email')
        aria-describedby="error-email"
        aria-invalid="true"
        @enderror 
        required
      />
      @error('email')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
        <span class="block sm:inline" id="error-email"><b>Error:</b> {{ $message }}</span>
        <span class="absolute top-0 bottom-0 right-0 flex items-center mr-2">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
        </div>
      @enderror
    </div>
    <div class="form-div">
      <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
      <input 
        type="password" 
        class="border border-gray-900/25" 
        name="password" 
        id="password"
        @error('password')
        aria-describedby="error-password"
        aria-invalid="true"
        @enderror
        required
      />
      @error('password')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
        <span class="block sm:inline" id="error-password"><b>Error:</b> {{ $message }}</span>
        <span class="absolute top-0 bottom-0 right-0 flex items-center mr-2">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
        </div>
      @enderror
    </div>
    <button type="submit" class="admin-btn create-btn">Ingresar</button>
  </form>
@endsection