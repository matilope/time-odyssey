@extends('layout.index')

@section('title', 'Iniciar Sesión')

@section('content')
<h1 class="mb-4">Ingresar a tu Cuenta</h1>

<form action="{{route('auth.processLogin') }}" method="post" class="bg-white p-6 shadow-md rounded-md">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
        <input type="email" id="email" name="email" class="form-control w-full p-2 border border-gray-300 rounded-md" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label" class="block text-gray-700 text-sm font-semibold mb-2">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control w-full p-2 border border-gray-300 rounded-md">
    </div>
    <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:text-blue-800">Ingresar</button>
</form>
@endsection