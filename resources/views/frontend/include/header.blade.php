<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&family=Eczar&family=Joan&family=Mukta:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-0-1/vendor/font-awesome/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css"> -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>R K Netralaya</title>
</head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- Navbar-->
  <header class="header">

<nav class="navbar navbar-expand-lg fixed-top py-3" id="header">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">
            <img src="{{asset('rk_logo.png')}}" alt="" width="50" height="30" class="mx-2 d-inline-block align-text-top"><span style="font-size:25px;"> RK Netralaya</span></a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto  mx-2">
                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link text-uppercase font-weight-bold">About</a></li>
                <li class="nav-item"><a href="{{route('doctors')}}" class="nav-link text-uppercase font-weight-bold">Doctors</a></li>
                <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link text-uppercase font-weight-bold">Blogs</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                <li class="nav-item"><a href="{{route('service')}}" class="nav-link text-uppercase font-weight-bold">Service</a></li>

            </ul>
        </div>
    </div>
</nav>
</header>
