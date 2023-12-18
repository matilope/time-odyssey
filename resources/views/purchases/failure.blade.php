@extends('layout.index')

@section('title', 'Pedido fallado')

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  <div class="order-failure py-8 sm:py-12 rounded-md">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg>
    <h1 class="text-3xl mb-2">¡No hemos recibido tu pedido!</h1>
    <p class="text-xl">La compra del viaje a <a href="{{ route('services.service', ['id' => $service_id]) }}"
        title="{{ $service_name }}">{{ $service_name }}</a> no se ha podido realizar debido a algún problema con el pago</p>
  </div>
@endsection