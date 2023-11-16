@extends('layout.index')

@section('title', 'Inicio')

@section('meta')
  <meta name="title" content="Inicio | Travel Odyssey" />
  <meta name="description"
    content="En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra empresa y lo que te espera en nuestros viajes especiales." />
  <meta property="og:title" content="Inicio | Travel Odyssey" />
  <meta property="og:description"
    content="En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra empresa y lo que te espera en nuestros viajes especiales." />
  <meta property="og:image" content="{{ asset('/images/banner.jpg') }}" />
  <meta property="twitter:title" content="Inicio | Travel Odyssey" />
  <meta property="twitter:description"
    content="En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra empresa y lo que te espera en nuestros viajes especiales." />
  <meta property="twitter:image" content="{{ asset('/images/banner.jpg') }}" />
@endsection

@section('banner')
  <div class="banner"
    style="background-image: linear-gradient(rgba(60, 78, 102, 40%), rgba(60, 78, 102, 60%)), url({{ asset('/images/banner.jpg') }});">
    <h1 class="text-5xl mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-10 font-mono">Travel Odyssey</h1>
  </div>
@endsection()

@section('content')
  <article>
    <h2 class="text-4xl mb-6">¡Bienvenidos a Travel Odyssey!</h2>
    <p>En nuestro viaje, te llevamos a un mundo completamente nuevo y te ofrecemos la oportunidad de explorar los
      rincones más fascinantes del espacio exterior. Somos la opción perfecta para aquellos que buscan experiencias
      únicas y emocionantes que van más allá de los destinos terrestres tradicionales. Permítenos presentarte nuestra
      empresa y lo que te espera en nuestros viajes especiales.</p>
    <img class="my-5" src="{{ asset('/images/home.jpg') }}" alt="" />
    <ul class="mt-6">
      <li class="mb-5">
        <h3 class="text-2xl mb-2">Experiencias Inolvidables</h3>
        <p>No ofrecemos simples vacaciones; te ofrecemos experiencias inolvidables. Cada uno de nuestros viajes está
          diseñado cuidadosamente para brindarte una experiencia única en la vida. Desde pasear por la superficie
          de la Luna hasta explorar los cañones de Marte, nuestros viajes te sumergirán en paisajes y experiencias
          que solo se pueden encontrar fuera de la Tierra.</p>
      </li>
      <li class="mb-5">
        <h3 class="text-2xl mb-2">Alojamiento de Lujo</h3>
        <p>En nuestros viajes, la comodidad es primordial. Disfrutarás de alojamiento de lujo con dormitorios
          privados y todas las comodidades necesarias para garantizar una estancia cómoda en el espacio. Descansa
          y relájate mientras viajas a destinos lejanos.</p>
      </li>
      <li class="mb-5">
        <h3 class="text-2xl mb-2">Explora los Mejores Lugares</h3>
        <p>Nuestros expertos guías te llevarán a los mejores lugares de cada destino. Desde cráteres impresionantes
          hasta paisajes alienígenas, te aseguramos que cada día estará lleno de descubrimientos sorprendentes.
        </p>
      </li>
      <li class="mb-5">
        <h3 class="text-2xl mb-2">Duraciones Flexibles</h3>
        <p>Entendemos que cada viajero es único, por lo que ofrecemos duraciones de viaje flexibles para adaptarse a
          tu tiempo y preferencias. Ya sea que estés buscando una escapada corta o una aventura más larga, tenemos
          opciones para ti.</p>
      </li>
      <li class="mb-5">
        <h3 class="text-2xl mb-2">Equipos de Clase Mundial</h3>
        <p>Nuestra empresa cuenta con equipos de clase mundial de astronautas, científicos y expertos en viajes
          espaciales que están comprometidos con tu seguridad y tu experiencia en el espacio.</p>
      </li>
    </ul>
  </article>
@endsection
