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
          <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20">
            <title>Error</title>
            <path
              d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
          </svg>
        </span>
      </div>
    @endif
  @endif
  <h1 class="text-4xl mb-6 form-user">Registrarse</h1>
  <form class="form-custom form-user" action="{{ route('auth.register.post') }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <div class="form-div">
      <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
      <input type="text" class="border border-gray-900/25" name="name" id="name" value="{{ old('name') }}"
        @error('name')
        aria-describedby="error-name"
        aria-invalid="true"
        @enderror />
      @error('name')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
          <span class="block sm:inline" id="error-name"><b>Error:</b> {{ $message }}</span>
          <span class="absolute top-0 bottom-0 right-0 flex items-center mr-2">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20">
              <title>Close</title>
              <path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
          </span>
        </div>
      @enderror
    </div>
    <div class="form-div">
      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo electrónico</label>
      <input type="email" class="border border-gray-900/25" name="email" id="email" value="{{ old('email') }}"
        @error('email')
        aria-describedby="error-email"
        aria-invalid="true"
        @enderror required />
      @error('email')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
          <span class="block sm:inline" id="error-email"><b>Error:</b> {{ $message }}</span>
          <span class="absolute top-0 bottom-0 right-0 flex items-center mr-2">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20">
              <title>Close</title>
              <path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
          </span>
        </div>
      @enderror
    </div>
    <div class="form-div">
      <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
      <div class="relative">
        <input type="password" class="pl-10 pr-4 py-2 border border-gray-900/25 w-full" name="password" id="password"
          @error('password') aria-describedby="error-password" aria-invalid="true" @enderror required />
        <svg id="hidePassword" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-eye-slash absolute top-1/2 right-3 transform -translate-y-1/2 cursor-pointer h-full hidden"
          viewBox="0 0 16 16">
          <path
            d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486z" />
          <path
            d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829" />
          <path
            d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708" />
        </svg>
        <svg id="showPassword" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-eye absolute top-1/2 right-3 transform -translate-y-1/2 cursor-pointer h-full" viewBox="0 0 16 16"
          id="togglePassword">
          <path
            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
        </svg>
      </div>
      @error('password')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
          <span class="block sm:inline" id="error-password"><b>Error:</b> {{ $message }}</span>
          <span class="absolute top-0 bottom-0 right-0 flex items-center mr-2">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20">
              <title>Close</title>
              <path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
          </span>
        </div>
      @enderror
    </div>
    <button type="submit" class="admin-btn create-btn">Confirmar</button>
  </form>
  <script>
    const showPasswordIcon = document.querySelector("#showPassword");
    const hidePasswordIcon = document.querySelector("#hidePassword");
    const passwordInput = document.querySelector("#password");

    showPasswordIcon.addEventListener('click', () => {
      passwordInput.type = "text";
      showPasswordIcon.classList.add("hidden");
      hidePasswordIcon.classList.remove("hidden");
    });

    hidePasswordIcon.addEventListener('click', () => {
      passwordInput.type = "password";
      hidePasswordIcon.classList.add("hidden");
      showPasswordIcon.classList.remove("hidden");
    });
  </script>
@endsection
