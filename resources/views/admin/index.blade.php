@extends('layout.admin')

@section('title', 'Panel de administración')

@section('content')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <section>
    <h1 class="text-4xl mb-4">Bienvenidos al panel de administración</h1>
    <p class="text-2xl mb-8">
      Aqui vas a poder crear, editar y eliminar blogs
    </p>
    <div class="admin">
      <h2 class="text-3xl mb-4">Datos generales</h2>
      <div class="stats">
        <div>
          <h3 class="text-2xl mb-3">Blogs publicados</h3>
          <span>{{ count($blogs) }}</span>
        </div>
        <div>
          <h3 class="text-2xl mb-3">Viaje más contratado</h3>
          <span>{{ $mostContractedService->service_name }}</span>
        </div>
        <div>
          <h3 class="text-2xl mb-3">Viajes contratados</h3>
          <span>{{ $totalQuantity }}</span>
        </div>
        <div>
          <h3 class="text-2xl mb-3">Usuarios registrados</h3>
          <span>{{ count($users) }}</span>
        </div>
      </div>
    </div>
    <div class="my-8">
      <h2 class="text-3xl mb-6">Viajes contratados</h2>
      <canvas id="most-hired-services"></canvas>
    </div>
    <div class="my-8">
      <h2 class="text-3xl mb-6">Ganancias de los viajes vendidos</h2>
      <canvas id="most-higher-revenue"></canvas>
    </div>
    <script>
      const ctx = document.getElementById('most-hired-services')?.getContext('2d');
      const ctxSecondary = document.getElementById('most-higher-revenue')?.getContext('2d');

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [
            @foreach ($purchases as $purchase)
              "{{ $purchase->service_name }}",
            @endforeach
          ],
          datasets: [{
            label: 'Viajes contratados',
            data: [
              @foreach ($purchases as $purchase)
                "{{ $purchase->total_quantity }}",
              @endforeach
            ],
            backgroundColor: [
              'rgba(255, 99, 132, 0.5)',
              'rgba(54, 162, 235, 0.5)',
              'rgba(255, 206, 86, 0.5)',
              'rgba(75, 192, 192, 0.5)',
              'rgba(153, 102, 255, 0.5)',
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
        }
      });

      new Chart(ctxSecondary, {
        type: 'polarArea',
        data: {
          labels: [
            @foreach ($purchases as $purchase)
              "{{ $purchase->service_name }} ({{ $purchase->total_quantity }})",
            @endforeach
          ],
          datasets: [{
            label: 'Ganancias de los viajes',
            data: [
              @foreach ($purchases as $purchase)
                "{{ $purchase->total_quantity * $purchase->price }}",
              @endforeach
            ],
            backgroundColor: [
              'rgba(255, 99, 132, 0.5)',
              'rgba(54, 162, 235, 0.5)',
              'rgba(255, 206, 86, 0.5)',
              'rgba(75, 192, 192, 0.5)',
              'rgba(153, 102, 255, 0.5)',
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
        }
      });
    </script>
  </section>
@endsection
