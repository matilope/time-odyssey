@extends('layout.admin')

@section('title', 'Listado de usuarios')

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  <section>
    <h2 class="text-4xl mb-3">Listado de usuarios</h2>
    @forelse($users as $key => $user)
    <article>
      <div>
        <h3 title="{{$user->username}}" class="text-2xl my-3">{{$user->username}}</h3>
      </div>
    </article>
    @empty
      <p>No hay usuarios registrados</p>
    @endforelse
  </section>
@endsection