<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>

    <link rel="stylesheet"href="{{ asset('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}" >
  </head>
  <body class="bg-light">

    <main class="container">
        @include('komponen.pesan')

        @yield('konten')
    </main>

    <script src="{{ asset('assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.js') }}"></script>
  </body>
</html> 
