<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/header.css')
</head>
<body class="">
<header class="fixed z-10 w-full px-6 h-20 flex mix-blend-difference">
    <div class="w-full h-full flex justify-start items-center">
        <a href="{{ route('Home') }}" class="w-auto ">
            <img src="{{ URL('images/logoSiteWeb/logo1.svg') }}" alt="" class="h-14 w-auto justify-enter items-center">
        </a>
    </div>
    <ul class="w-full h-full flex justify-end items-center gap-4">
        <a href="{{ route('Home') }}" data-text="home" class="text-white font-normal text-xl md:text-2xl {{ Request::is('/') ? 'active' : '' }}">Accueil</a>
        <a href="{{ route('Brand') }}" data-text="brands" class=" text-white font-normal text-xl md:text-2xl pl-1 {{ Request::is('Gallery') ? 'active' : '' }}">Marques</a>
        <a href="{{ route('Showroom') }}" data-text="showroom" class=" text-white font-normal text-xl md:text-2xl pl-1 {{ Request::is('Reservation') ? 'active' : '' }}">Showroom</a>
    </ul>
</header>



</body>
</html>
