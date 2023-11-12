<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
  <link rel="icon" type="image/png" href="{{asset('/images/logo.png')}}" />
  <link rel="shortcut icon" href="{{asset('/images/logo.png')}}" />
  <meta name="copyright" content="Travel Odyssey" />
  <meta name="keywords" content="viajes, espacio exterior, aventuras, conocer, planetas, estrellas, satelites" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="og:type" content="website" />
  @yield('meta')
</head>
<body class="font-sans">
  <nav class="custom-bg-primary">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

          <button type="button" class="custom-menu relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Abrir menu principal</span>

            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <img class="h-8 w-auto" src="{{asset('/images/logo.png')}}" alt="Travel odyssey" />
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <ul class="flex space-x-4 items-center">
              <li><a href="{{route('home')}}" class="hover:bg-gray-700 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Inicio</a></li>
              <li><a href="{{route('services.index')}}" class="text-white hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Servicios</a></li>
              <li><a href="{{route('blogs.index')}}" class="text-white hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Blogs</a></li>
              @guest
                <li>
                  <a href="{{route('auth.login.form')}}" class="text-white hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium btn-icon">
                    Iniciar sesión
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"></path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="{{route('auth.register.form')}}" class="text-white hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                    Registrarse
                  </a>
                </li>
              @endguest
            </ul>
          </div>
        </div>
        
        @auth
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <div class="relative ml-3">
              <div>
                <button type="button" class="custom-profile-menu relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Abrir menú</span>
                  <img class="h-8 w-8 rounded-full" src="{{asset('/images/user.png')}}" alt="Imagen del usuario" />
                </button>
              </div>
              <div class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="{{route('admin.index')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Admin</a>
                <div>
                  <form action="{{route('auth.logout.post')}}" method="post">
                    @csrf
                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700">
                      Cerrar sesión
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        @endauth

      </div>
    </div>
  
    <div class="hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <a href="{{route('home')}}" class="hover:bg-gray-700 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Inicio</a>
        <a href="{{route('services.index')}}" class="text-white hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Servicios</a>
        <a href="{{route('blogs.index')}}" class="text-white hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Blogs</a>
        @guest
          <a href="{{route('auth.login.form')}}" class="text-white hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium btn-icon">
            Iniciar sesión
            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"></path>
            </svg>
          </a>
          <a href="{{route('auth.register.form')}}" class="text-white hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">
            Registrarse
          </a>
        @endguest
      </div>
    </div>
  </nav>
  
  <div class="banner" style="background-image: linear-gradient(rgba(60, 78, 102, 40%), rgba(60, 78, 102, 60%)), url({{asset('/images/banner.jpg')}});">
    <h1 class="text-5xl mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-10 font-mono">Travel Odyssey</h1>
  </div>

  <main class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-10">
    @if (\Session::has('status.message'))
      <div class="@if(\Session::has('status.success')) bg-green-100  border-green-400 text-green-700 @else bg-red-100 border-red-400 text-red-700 @endif border px-3 py-3 rounded relative my-5" role="alert">
        <p class="block sm:inline" id="error-synopsis">{!! \Session::get('status.message') !!}</p>
        <span class="absolute top-0 bottom-0 right-0 flex items-center mr-2">
          @if (\Session::has('status.success'))
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><title>Éxito</title>
              <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
            </svg>    
          @else
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Error</title>
              <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
          @endif     
        </span>
      </div>
    @endif
    @yield("content")
  </main>

  <footer class="custom-bg-primary sm:py-6 py-8 text-white">
    <div class="flex justify-between items-center mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <p>
        © {{date('Y')}} Travel Odyssey. Todos los derechos reservados
      </p>
      <ul class="flex gap-5">
        <li>
          <a href="https://facebook.com" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
          </a>
        </li>
        <li>
          <a href="https://instagram.com" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
          </a>
        </li>
        <li>
          <a href="https://linkedin.com" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </footer>

  <script>
    const profile = document.querySelector(".custom-profile-menu");
    profile?.addEventListener('click', () => {
      profile.parentElement?.nextElementSibling?.classList.toggle("hidden");
    });

    const menu = document.querySelector(".custom-menu");
    menu?.addEventListener('click', () => {
      document.querySelector("#mobile-menu")?.classList.toggle("hidden");
    });

    const alert = document.querySelector("[role='alert'] svg");
    alert?.addEventListener('click', () => {
      document.querySelector("[role='alert']")?.remove();
    });
  </script>
</body>
</html>