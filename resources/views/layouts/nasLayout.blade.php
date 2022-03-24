<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
    .navbar {
      transition: all 0.4s;
    }

    .navbar .nav-link {
      color: #fff;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link:focus {
      color: #fff;
      text-decoration: none;
    }

    .navbar .navbar-brand {
      color: #fff;
    }


    /* Change navbar styling on scroll */
    .navbar.active {
      background: #fff;
      box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar.active .nav-link {
      color: #555;
    }

    .navbar.active .nav-link:hover,
    .navbar.active .nav-link:focus {
      color: #555;
      text-decoration: none;
    }

    .navbar.active .navbar-brand {
      color: #555;
    }


    /* Change navbar styling on small viewports */
    @media (max-width: 991.98px) {
      .navbar {
        background: #fff;
      }

      .navbar .navbar-brand,
      .navbar .nav-link {
        color: #555;
      }
    }



    /*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
    .text-small {
      font-size: 0.9rem !important;
    }


    body {
      min-height: 110vh;
      background-color: #4ca1af;
      background-image: linear-gradient(135deg, #4ca1af 0%, #c4e0e5 100%);
    }
  </style>

  <title>
    @yield('title')
  </title>

  @stack('skripte')
</head>

<body>
  @include('layouts.zaglavlje')

  @yield('sadrzaj')
</body>

</html>