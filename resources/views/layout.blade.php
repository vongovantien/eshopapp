<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Bán hàng - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>

<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>
<script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/popper.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/stellar.js"></script>
  <script src="/vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="/vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="/vendors/isotope/isotope-min.js"></script>
  <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="/js/jquery.ajaxchimp.min.js"></script>
  <script src="/vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="/vendors/counter-up/jquery.counterup.js"></script>
  <script src="/js/mail-script.js"></script>
  <script src="/js/theme.js"></script>
</html>
