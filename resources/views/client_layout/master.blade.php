<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="frontend/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="frontend/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="frontend/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="frontend/css/custom.css">

 

</head>

<body>
   {{-- header --}}
   @include('client_layout.header')
{{-- Endheader --}}

{{-- content --}}

@yield('content')
{{-- Endcontent --}}

{{-- footer --}}
@include('client_layout.footer')
{{-- Endfooter --}}
    
   
</body>

</html>