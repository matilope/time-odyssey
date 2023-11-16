@extends('layout.admin')

@section('title', 'Panel de administración')

@section('content')
  <section>
    <h1 class="text-4xl mb-4">Bienvenidos al panel de administración</h1>
    <p class="text-2xl mb-8">
      @if (Auth::user()->role === 'administrador')
        Aqui vas a poder crear, editar y eliminar blogs
      @else
        Aqui vas a poder crear blogs
      @endif
    </p>
    <div class="admin">
      <div class="stats">
        <div>
          <h2 class="text-2xl mb-3">Blogs publicados</h2>
          <span>{{ count($blogs) }}</span>
        </div>
        <div>
          <h2 class="text-2xl mb-3">Blog con más visitas</h2>
          <span>{{ $blogs[5]->title }}</span>
        </div>
        <div>
          <h2 class="text-2xl mb-3">Blog con menos visitas</h2>
          <span>{{ $blogs[1]->title }}</span>
        </div>
        <div>
          <h2 class="text-2xl mb-3">Usuarios registrados</h2>
          <span>{{ count($users) }}</span>
        </div>
      </div>
    </div>
  </section>
@endsection
