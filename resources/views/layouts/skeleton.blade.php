<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Rawrshop')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('base/css/app.css') }}">
  <link rel="shortcut icon" href="{{ asset('base/assets/rawrshop/ico.svg') }}" type="image/svg">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      background-color: #f4f6f8;
      /* color: black; */
    }

    /* a {
      color: #ffbb3d;
      text-decoration: none;
    } */

    /* .sidebar-wrapper .menu .sidebar-link:hover {
      background-color: #c1c1c1;
    }

    .sidebar-wrapper {
      background-color: #343a40;
      color: #f3f3f3;
    }

    .sidebar-wrapper .menu .sidebar-link {
      color: #eeeeee;
      }

    .sidebar-wrapper .menu .submenu .submenu-item a {
      color: #d0d0d0;
    } */

    /* .sidebar-wrapper {
      width: 200px;
    }
    #main {
      margin-left: 200px;
      padding: 1.2rem;
    } */

    .card-header {
      padding-right: 1rem;
      padding-left: 1rem;
    }
  </style>
  @stack('stylesheet')
</head>
<body class="text-sm">
  <div id="app">
    @yield('app')
  </div>
  @stack('extra')
  <script src="{{ asset('base/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('base/js/manifest.js') }}"></script>
  <script src="{{ asset('base/js/vendor.js') }}"></script>
  <script src="{{ asset('base/js/app.js') }}"></script>
  @stack('javascript')
  @include('components._toast')
  <script src="{{ asset('base/vendors/mazer/js/main.js') }}"></script>
</body>
</html>
