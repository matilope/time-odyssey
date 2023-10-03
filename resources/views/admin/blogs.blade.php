@extends('layout.admin')

@section('title', 'Administrador de blogs')

@section('content')
<section>
    <h1 class="text-4xl mb-8">Administrador de blogs</h1>
    <div class="admin">
      <div class="featured">
        @foreach($blogs as $key => $blog)
          <article>
            <img src="@if($blog->image){{ asset('storage/' . $blog->image) }}@else {{asset('/images/default.png')}} @endif" alt="{{$blog->title}}" />
            <div>
              <span class="category">{{$blog->categoria}}</span>
              <h2 title="{{$blog->title}}" class="text-3xl mb-3">{{$blog->title}}</h2>
              <p>{{$blog->description}}</p>
              <a href="{{url('/blogs/editar/' . $blog->id)}}">Editar</a>
              <button data-id="{{$blog->id}}" data-title="{{$blog->title}}" class="btn" style="color:black;" type="button">Eliminar</button>
            </div>
          </article>
        @endforeach
      </div>
    </div>
  </section>
  <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
      <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
          <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
              </div>
              <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                <p class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Eliminar artículo</p>
                <div class="mt-2">
                  <p class="text-sm text-gray-500 modal-message">¿Estas seguro de eliminar -? La eliminación sera permanente.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
            <form class="delete-form" action="{{url('/blogs/eliminar/')}}" method="POST">
              @csrf
              <button type="submit" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Aceptar</button>
            </form>
            <button type="button" class="modal-cancel mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancelar</button>
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
        const title = e.target.getAttribute("data-title");
        const modalMessage = document.querySelector(".modal-message");
        modalMessage.textContent = `¿Estás seguro de eliminar "${title}"? La eliminación será permanente.`;
        const form = document.querySelector('.delete-form');
        form.action="{{url('/blogs/eliminar/')}}";
        form.action+=`/${id}`;
        modal.classList.remove("hidden");
        document.querySelector(".modal-cancel")?.addEventListener('click', (e) => {
          modal?.classList.add("hidden");
        });
      });
    });
  </script>
@endsection