<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{config('app.name')}} - {{$title}} </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>

  {{-- datatable --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">

  
  @vite(['resources/css/dashboard.css','resources/js/app.js'])
</head>
<body>
<!-- partial:index.partial.html -->
    <x-dashboard.aside></x-dashboard.aside>

<section id="wrapper">
    <x-dashboard.navbar></x-dashboard.navbar>

  <div class="p-4">
        {{$slot}}
  </div>
</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  
  
{{-- datatable --}}
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script> --}}
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>

  <script>
      $('#tabla').DataTable({
          language: {
              url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json',
          },
          responsive: {
              details: {
                  renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                      tableClass: 'ui table'
                  })
              }
          }

      });
  </script>

</body>
</html>
