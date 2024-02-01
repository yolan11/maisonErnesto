<header class="fixed z-10 w-full px-6 h-20 flex mix-blend-difference">
    <div class="w-full h-full flex justify-start items-center">
        <a href="{{ route('Home') }}" title="Redirection vers la page d'accueil" class="w-auto ">
            <img src="{{ URL('images/logoSiteWeb/logo1.svg') }}" alt="Logo du site" class="h-14 w-auto justify-enter items-center">
        </a>
    </div>
    <div class="w-full h-full flex justify-end items-center gap-2 sm:gap-4">
        <a href="{{ route('Home') }}" title="Redirection vers la page d'accueil" data-text="home" class="text-white font-normal text-xl md:text-2xl {{ Request::is('/') ? 'active' : '' }}">Accueil</a>
        <a href="{{ route('Brand') }}" title="Redirection vers la page marque" data-text="brands" class=" text-white font-normal text-xl md:text-2xl pl-1 {{ Request::is('/brands') ? 'active' : '' }}">Marques</a>
        <a href="{{ route('Showroom') }}" title="Redirection vers la page showroom" data-text="showroom" class=" text-white font-normal text-xl md:text-2xl pl-1 {{ Request::is('/showroom') ? 'active' : '' }}">Showroom</a>
    </div>
</header>
