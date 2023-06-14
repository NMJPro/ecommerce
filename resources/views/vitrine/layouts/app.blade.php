<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title> @yield('title') </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link href="/vitrine/dist/img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

        @yield('css')
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="/vitrine/dist/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="/vitrine/dist/css/style.css" rel="stylesheet">
    </head>

    <body>
        
        @include('vitrine.partials.layout.header')
        @yield('content')
        @include('vitrine.partials.layout.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top">Up <i class="fa fa-angle-double-up"></i></a>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="/vitrine/dist/lib/easing/easing.min.js"></script>
        <!-- Contact Javascript File -->
        <script src="/vitrine/dist/mail/jqBootstrapValidation.min.js"></script>
        <!-- Template Javascript -->
        <script src="/vitrine/dist/js/main.js"></script>
        @yield('js')
    </body>

</html>