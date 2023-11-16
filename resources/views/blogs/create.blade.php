@extends('layout.admin')

@section('title', 'Crear artículo de blog')

@section('content')
  <h1 class="text-4xl mb-6">Crear artículo de blog</h1>
  <form class="form-custom" action="{{ route('blogs.create.post') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="double-column">
      <div class="form-div">
        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Título</label>
        <input type="text" class="border border-gray-900/25" name="title" id="title" value="{{ old('title') }}"
          @error('title')
            aria-describedby="error-title"
            aria-invalid="true"
          @enderror />
        @error('title')
          <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
            <span class="block sm:inline" id="error-title"><b>Error:</b> {{ $message }}</span>
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
        <label for="category_id" class="block text-sm font-medium leading-6 text-gray-900">Categoría</label>
        <select class="border border-gray-900/25" id="category_id" name="category_id"
          @error('category_id') aria-describedby="error-category" aria-invalid="true" @enderror>
          <option selected disabled value="">Seleccionar categoría</option>
          @foreach ($categories as $category)
            <option @selected(old('category_id') == $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
        @error('category_id')
          <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
            <span class="block sm:inline" id="error-category"><b>Error:</b> {{ $message }}</span>
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
    <div class="form-div">
      <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Descripción</label>
      <textarea class="border border-gray-900/25" name="description" id="description" rows="3"
        @error('description')
          aria-describedby="error-description"
          aria-invalid="true"
        @enderror>{{ old('description') }}</textarea>
      @error('description')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
          <span class="block sm:inline" id="error-description"><b>Error:</b> {{ $message }}</span>
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
    <div class="double-column-img">
      <div class="col-span-full">
        <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Imagen</label>
        <div class="div-input-img mt-2 flex justify-center rounded-lg border border-gray-900/25 px-6 py-10">
          <div class="text-center">
            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                clip-rule="evenodd" />
            </svg>
            <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
              <label
                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                <span>Subir imagen</span>
                <input name="image" id="image" type="file" class="sr-only">
              </label>
            </div>
            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF, JPEG</p>
          </div>
        </div>
      </div>
    </div>
    <div class="form-div">
      <label for="image_description" class="block text-sm font-medium leading-6 text-gray-900">Descripción de la
        imagen</label>
      <textarea class="border border-gray-900/25" rows="3" name="image_description" id="image_description"
        @error('image_description')
          aria-describedby="error-image_description"
          aria-invalid="true"
        @enderror>{{ old('image_description') }}</textarea>
      @error('image_description')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
          <span class="block sm:inline" id="error-image_description"><b>Error:</b> {{ $message }}</span>
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
      <label for="synopsis" class="block text-sm font-medium leading-6 text-gray-900">Sinopsis</label>
      <textarea class="border border-gray-900/25" rows="8" name="synopsis" id="synopsis"
        @error('synopsis')
          aria-describedby="error-synopsis"
          aria-invalid="true"
        @enderror>{{ old('synopsis') }}</textarea>
      @error('synopsis')
        <div class="bg-red-100 border border-red-400 text-red-700 mt-3 px-2 py-2 rounded relative" role="alert">
          <span class="block sm:inline" id="error-synopsis"><b>Error:</b> {{ $message }}</span>
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
    <button type="submit" class="admin-btn create-btn">Crear artículo</button>
  </form>
  <script>
    const inputFile = document.getElementById('image');
    const imageInputContainer = document.querySelector('.double-column-img');
    inputFile?.addEventListener('change', (e) => {
      const image = document.createElement("img");
      imageInputContainer.appendChild(image);
      if (inputFile.files && inputFile.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
          image.src = e.target.result;
          image.alt = "";
        };
        reader.readAsDataURL(inputFile.files[0]);
      }
    });
  </script>
@endsection
