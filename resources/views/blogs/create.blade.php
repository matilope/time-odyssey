@extends('layout.admin')

@section('title', 'Crear artículo de blog')

@section('content')
  <h1 class="text-4xl mb-6">Crear artículo de blog</h1>
  <form class="form_blogs" action="{{url('/blogs/crear')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="double-column">
      <div>
        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Título</label>
        <input 
          type="text" 
          class="border border-gray-900/25" 
          name="title" 
          id="title"
          value="{{ old('title') }}"
          @error('title')
          aria-describedby="error-title"
          aria-invalid="true"
          @enderror 
         />
      </div>
      <div>
        <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Categoría</label>
        <select class="border border-gray-900/25" name="category">
          <option selected disabled value="">Seleccionar categoría</option>
          <option value="Noticia">Noticia</option>
        </select>
      </div>
    </div>
    <div>
      <label for="descripcion" class="block text-sm font-medium leading-6 text-gray-900">Descripción</label>
      <textarea 
        class="border border-gray-900/25"
        name="description"
        rows="3"
        @error('description')
        aria-describedby="error-description"
        aria-invalid="true"
        @enderror 
      >{{ old('description') }}
      </textarea>
    </div>
    <div class="double-column-img">
      <div class="col-span-full">
        <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Imagen</label>
        <div class="mt-2 flex justify-center rounded-lg border border-gray-900/25 px-6 py-10">
          <div class="text-center">
            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
            </svg>
            <div class="mt-4 flex text-sm leading-6 text-gray-600">
              <label class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                <span>Upload a file</span>
                <input name="image" id="image" type="file" class="sr-only">
              </label>
            </div>
            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF, JPEG</p>
          </div>
        </div>
      </div>
      <img id="img-preview" class="hidden" src="" alt="" />
    </div>
    <div>
      <label for="sinopsis" class="block text-sm font-medium leading-6 text-gray-900">Sinopsis</label>
      <textarea 
        class="border border-gray-900/25" 
        rows="8" 
        name="synopsis" 
        id="sinopsis"
        @error('synopsis')
        aria-describedby="error-synopsis"
        aria-invalid="true"
        @enderror 
      >{{ old('synopsis') }}
      </textarea>
    </div>
    <button type="submit" class="admin-btn create-btn">Crear artículo</button>
  </form>
  <script>
    const inputFile = document.getElementById('image');
    const imagePreview = document.getElementById('img-preview');
    inputFile?.addEventListener('change', () => {
        if (inputFile.files && inputFile.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove("hidden");
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    });
  </script>
@endsection