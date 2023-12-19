@extends('layout.admin')

@if ($ownProfile)
  @section('title', 'Mi perfil')
@else
  @section('title', 'Perfil de usuario')
@endif

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  <section
    class="user-profile relative flex flex-col w-full min-w-0 mb-6 break-words border bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable">
    <div class="px-6 pt-8 flex-auto min-h-[70px] pb-0 bg-transparent">
      <div class="flex flex-wrap mb-6 xl:flex-nowrap">
        <div class="mb-5 mr-5">
          <div class="relative inline-block shrink-0 rounded-2xl">
            <img class="inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px]"
              src="@if ($user->picture) {{ asset('storage/' . $user->picture) }}@else{{ asset('/images/user.png') }} @endif"
              alt="Perfil de {{ $user->name == '-' ? $user->email : $user->name }}" />
          </div>
        </div>
        <div class="grow">
          <div class="flex flex-wrap items-start justify-between mb-2">
            <div class="flex flex-col">
              <div class="flex items-center mb-2">
                <h1
                  class="text-secondary-inverse hover:text-primary transition-colors duration-200 ease-in-out font-semibold text-[1.5rem] mr-1">
                  Perfil de {{ $user->name == '-' ? explode('@', $user->email)[0] : $user->name }}</h1>
              </div>
              <div class="flex flex-wrap pr-2 mb-4 font-medium">
                <a class="flex items-center mb-2 mr-5 text-secondary-dark hover:text-primary"
                  href="mailto:{{ $user->email }}">
                  <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                      <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                      <path
                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                    </svg>
                  </span>
                  {{ $user->email }}
                </a>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap justify-between">
            <div class="flex flex-wrap items-center">
              <span
                class="mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal capitalize @if ($user->role == 'administrador') badge-admin @else badge-user @endif">{{ $user->role }}</span>
            </div>
          </div>
          @if ($ownProfile)
            <div class="flex flex-wrap justify-between mt-3">
              <div class="flex flex-wrap items-center">
                <a href="{{ route('users.edit', ['id' => $user->id]) }}"
                  class="mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-md transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal bg-green-600 text-white"
                  title="Editar perfil">Editar perfil</a>
              </div>
            </div>
          @endif
        </div>
      </div>
      <hr class="w-full h-px border-neutral-200">
      <h2 class="text-2xl my-3">Servicios contratados</h2>
      <div class="hired-services-container my-5">
        @if (count($purchases) > 0)
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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
                    Cantidad
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($purchases as $data)
                  <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      <img src="{{ asset('storage/' . $data->service->image) }}"
                        alt="{{ $data->service->destiny->name }}" />
                    </th>
                    <td class="px-6 py-4">
                      {{ $data->service->destiny->name }}
                    </td>
                    <td class="px-6 py-4">
                      @money($data->price)
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->quantity }}
                    </td>
                    <td class="px-6 py-4">
                      <div class="flex gap-3 items-center">
                        <a href="{{ route('services.service', ['id' => $data->service->id]) }}"
                          class="font-medium text-blue-600 hover:underline">Ver</a>
                        @if ($ownProfile)
                          <button data-id="{{ $data->id }}" data-name="{{ $data->service->destiny->name }}"
                            type="submit" class="font-medium text-red-600 hover:underline">Cancelar</button>
                        @endif
                      <div>
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
    </div>
  </section>
  <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
      <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <div
          class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
          <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div
                class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
              </div>
              <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                <p class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Cancelar compra</p>
                <div class="mt-2">
                  <p class="text-sm text-gray-500 modal-message">¿Estas seguro de cancelar -? La cancelación sera
                    permanente.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
            <form class="cancel-form" action="#" method="POST">
              @csrf
              <button type="submit"
                class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Confirmar</button>
            </form>
            <button type="button"
              class="modal-cancel mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.querySelectorAll("[data-id]")?.forEach(item => {
      item?.addEventListener('click', (e) => {
        const modal = document.querySelector("[aria-modal='true']");
        const id = e.target.getAttribute("data-id");
        const name = e.target.getAttribute("data-name");
        const modalMessage = document.querySelector(".modal-message");
        modalMessage.textContent =
          `¿Estás seguro de cancelar la compra de "${name}"? La cancelación será permanente.`;
        const form = document.querySelector('.cancel-form');
        form.action = `{{ url('/compras/${id}/eliminar') }}`;
        modal.classList.remove("hidden");
        document.querySelector(".modal-cancel")?.addEventListener('click', (e) => {
          modal?.classList.add("hidden");
        });
      });
    });
  </script>
@endsection
