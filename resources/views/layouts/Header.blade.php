<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/header.css')
</head>
<body class="">
<header class="fixed h-48 top-0 left-0 w-full px-6 z-50 header bg-pink-200 flex items-center justify-center ">
    <div class="flex items-center justify-center">
        <nav class="hidden md:flex space-x-20">
            <a href="{{ route('Accueil') }}" class="flex w-48 items-center justify-center">
                <img src="{{ URL('images/logoSiteWeb/logo2.png') }}" alt="Logo2" class="logo2 h-12 w-auto justify-enter items-center">
                <img src="{{ URL('images/logoSiteWeb/logo1.png') }}" alt="Logo1" class="logo1 h-12 w-auto justify-enter items-center">
            </a>
            <a href="{{ route('Accueil') }}" class="text-black text-2xl font-medium hover:underline  {{ Request::is('/') ? 'active' : '' }}">Accueil</a>
            <a href="{{ route('Brands') }}" class="text-black text-2xl font-medium hover:underline {{ Request::is('brands') ? 'active' : '' }}">Marques</a>
            <a href="{{ route('Showroom') }}" class="text-black text-2xl font-medium hover:underline {{ Request::is('showroom') ? 'active' : '' }}">Showroom</a>
        </nav>
    </div>
</header>

<script>

    const logos = [
        "{{ URL('images/logoSiteWeb/logo1.png') }}",
        "{{ URL('images/logoSiteWeb/logo2.png') }}"
    ];

    const logo1 = document.querySelector('.logo1');
    const logo2 = document.querySelector('.logo2');

    let currentLogoIndex = 0;

    function changeLogo() {
        if (currentLogoIndex === 0) {
            logo1.style.display = 'none';
            logo2.style.display = 'block';
            currentLogoIndex = 1;
        } else {
            logo1.style.display = 'block';
            logo2.style.display = 'none';
            currentLogoIndex = 0;
        }
    }

    // Appeler la fonction pour la première fois
    changeLogo();

    // Utiliser setInterval pour changer de logo toutes les 3 secondes
    setInterval(changeLogo, 4000);

    window.addEventListener("scroll", function() {
        const header = document.querySelector(".header");
        if (window.scrollY > 80) {
            header.classList.remove("h-48");
            header.classList.add("h-20");
        } else {
            header.classList.remove("h-20");
            header.classList.add("h-48");
        }
    });


</script>

</body>
</html>
