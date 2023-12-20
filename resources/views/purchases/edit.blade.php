@extends('layout.index')

@section('title', 'Actualización del viaje adquirido')

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  <h1 class="text-4xl mb-4">Actualización del viaje a {{ $purchase->service->destiny->name }}</h1>
  <p class="text-xl mb-4">La fecha de partida de este viaje es
    {{ Carbon\Carbon::parse($purchase->service->date_of_departure)->locale('es_ES')->isoFormat('D [de] MMMM [de] YYYY') }}.
  </p>
  <span class="price-update">El precio pasa de @money($purchase->service->price) a @money($purchase->service->price)</span>
  <form class="form-custom" action="{{ route('purchase.edit.post', ['id' => $purchase->id]) }}" method="POST">
    @csrf
    <div class="form-div">
      <label for="service_id" class="block text-sm font-medium leading-6 text-gray-900">Destino <span class="text-red-500">*</span></label>
      <select class="border border-gray-900/25" id="service_id" name="service_id"
        @error('service_id') aria-describedby="error-destiny" aria-invalid="true" @enderror required>
        @foreach ($services as $service)
          <option @if($purchase->service->id == $service->id) disabled @endif value="{{ $service->id }}" data-price="{{ $service->price }}">{{ $service->destiny->name }} @if($purchase->service->id == $service->id)(Destino actual)@endif</option>
        @endforeach
      </select>
      @error('service_id')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
          <span class="block sm:inline" id="error-destiny"><b>Error:</b> {{ $message }}</span>
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
    <button type="submit" class="admin-btn">Actualizar viaje</button>
  </form>
  <script>
    const priceUpdateElement = document.querySelector(".price-update");
    const selectElement = document.querySelector("select");

    const formatMoney = (amount) => {
      const formatter = new Intl.NumberFormat('es-AR', {
        style: 'currency',
        currency: 'ARS',
      });
      return formatter.format(amount);
    }

    selectElement.addEventListener("change", (e) => {
      const selectedOption = selectElement.options[selectElement.selectedIndex];
      const newPrice = selectedOption.getAttribute("data-price");
      priceUpdateElement.textContent = `El precio pasa de @money($purchase->service->price) a ${formatMoney(newPrice)}`;
    });
  </script>
@endsection
