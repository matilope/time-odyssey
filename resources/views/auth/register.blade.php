@extends('layout.index')

@section('title', 'Registrarse')

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  @if (\Session::has('status.register.message'))
    @if (\Session::has('status.error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-3 rounded relative my-5 form-user" role="alert">
      <span class="block sm:inline" id="error-synopsis">{!! \Session::get('status.register.message') !!}</span>
      <span class="absolute top-0 bottom-0 right-0 flex items-center mr-2">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Error</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
      </span>
    </div>
    @endif
  @endif
  <h2 class="text-4xl mb-6 form-user">Registrarse</h2>
  <form class="form-custom form-user" action="{{route('auth.register.post') }}" method="post">
    @csrf
    <div class="form-div">
      <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nombre de usuario</label>
      <input 
        type="username" 
        class="border border-gray-900/25" 
        name="username" 
        id="username"
        value="{{ old('username') }}"
        @error('username')
        aria-describedby="error-username"
        aria-invalid="true"
        @enderror 
        required
      />
      @error('username')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
        <span class="block sm:inline" id="error-username"><b>Error:</b> {{ $message }}</span>
        <span class="absolute top-0 bottom-0 right-0 flex items-center mr-2">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
        </div>
      @enderror
    </div>
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
    <div class="double-column-img">
      <div class="flex items-center justify-center w-full">
        <label for="picture" class="flex flex-col items-center justify-center w-full h-48 border border-gray-900/25 rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
              <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
              </svg>
              <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Subir imagen de perfil</span></p>
            </div>
        </label>
        <input id="picture" type="file" class="hidden" name="picture" />
      </div>
      <img id="img-preview" class="hidden" src="" alt="" />
    </div>
    <button type="submit" class="admin-btn create-btn">Confirmar</button>
  </form>
  <script>
    const inputFile = document.getElementById('picture');
    const imagePreview = document.getElementById('img-preview');
    inputFile?.addEventListener('change', () => {
        if (inputFile.files && inputFile.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.alt = "";
                imagePreview.classList.remove("hidden");
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    });
  </script>
@endsection