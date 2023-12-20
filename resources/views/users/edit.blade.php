@extends('layout.admin')

@section('title', 'Editar perfil')

@section('meta')
  <meta name="robots" content="noindex, nofollow" />
@endsection

@section('content')
  <section
    class="user-profile relative flex flex-col p-6 sm:p-8 w-full min-w-0 mb-6 break-words border bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable">
    <h1 class="text-3xl mb-6">Edición de perfil</h1>
    <form action="{{ route('users.edit.post') }}" method="post"
      class="user-edit px-2 sm:px-6 pt-8 flex-auto min-h-[70px] pb-0 bg-transparent" enctype="multipart/form-data">
      @csrf
      <div class="flex flex-wrap xl:flex-nowrap justify-between">
        <div class="mb-5 mr-5 flex flex-col gap-2">
          <div class="relative inline-block shrink-0 rounded-2xl profile-picture">
            <img class="inline-block shrink-0 rounded-full p-2 w-[160px] h-[160px]"
              src="@if ($user->picture) {{ asset('storage/' . $user->picture) }}@else{{ asset('/images/user.png') }} @endif"
              alt="Perfil de {{ $user->name == "-" ? $user->email : $user->name  }}" />
            <div class="bg-fixed rounded-full"></div>
            <label class="img-upload" for="picture" tabindex="0">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-camera-fill" viewBox="0 0 16 16">
                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                <path
                  d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
              </svg>
              <span>Cambiar imagen</span>
            </label>
            <input class="hidden" id="picture" name="picture" type="file"
              @error('picture')
                aria-describedby="error-picture"
                aria-invalid="true"
              @enderror />
            @error('picture')
              <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
                <span class="block sm:inline" id="error-picture"><b>Error:</b> {{ $message }}</span>
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
        </div>
        <div class="flex flex-col w-full md:w-[70%]">
          <div class="my-3 flex flex-col gap-2">
            <label for="name">Nombre</label>
            <input class="border border-gray-900/25" type="text" name="name" id="name"
              value="{{ old('name', $user->name) }}"
              @error('name')
                aria-describedby="error-name"
                aria-invalid="true"
              @enderror
              required />
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
          <div class="my-3 flex flex-col gap-2">
            <label for="email">Correo electrónico <span class="text-red-500">*</span></label>
            <input class="border border-gray-900/25" type="email" name="email" id="email"
              value="{{ old('email', $user->email) }}"
              @error('email')
                aria-describedby="error-email"
                aria-invalid="true"
              @enderror
              required />
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
          <div class="my-3 flex flex-col gap-2">
            <label for="password">Contraseña</label>
            <input class="border border-gray-900/25" type="password" name="password" id="password"
              @error('password')
                aria-describedby="error-password"
                aria-invalid="true"
              @enderror />
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
          <div class="my-3">
            <button type="submit" class="admin-btn create-btn w-full">
              Editar
            </button>
          </div>
        </div>
    </form>
  </section>
  <script>
    const inputFile = document.getElementById('picture');
    const imageInputContainer = document.querySelector('.profile-picture').parentElement;
    inputFile?.addEventListener('change', (e) => {
      let oldSpan = document.querySelector(".profile-span");
      oldSpan?.previousElementSibling?.remove();
      oldSpan?.remove();
      const image = document.createElement("img");
      const span = document.createElement("span");
      span.classList.add("profile-span");
      image.classList.add("inline-block", "shrink-0", "rounded-full", "p-2", "w-[160px]", "h-[160px]", "mt-3");
      span.textContent = "Imagen de perfil subida"
      imageInputContainer.append(image, span);
      if (inputFile.files && inputFile.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
          image.src = e.target.result;
          image.alt = "";
        };
        reader.readAsDataURL(inputFile.files[0]);
      }
    });
    document.querySelector('[tabindex="0"]')?.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') {
        e.preventDefault();
        document.getElementById('picture').click();
      }
    });
  </script>
@endsection
