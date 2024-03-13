<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    <title>Maison Ernesto : mobilier, luminaire, décoration - Senlis</title>
    <meta name="description" content="Votre magasin Maison Ernesto, à Senlis, vous accompagne dans la sélection de meubles, luminaires,
     objets de décoration… pour aménager vos intérieurs et jardins">
    <link rel="canonical" href="https://maisonernesto.fr/">

    @vite('resources/css/app.css')

    <link rel="icon" type="image/x-icon" href="{{ URL('images/logoSiteWeb/logo1.png') }}" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="{{ URL('images/logoSiteWeb/logo1.png') }}" sizes="192x192">

    <script>
        window.axeptioSettings = {
            clientId: "65cceb7b27a5c743c57817db",
            cookiesVersion: "maisonernesto-fr-EU",
        };

        (function(d, s) {
            var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
            e.async = true; e.src = "//static.axept.io/sdk.js";
            t.parentNode.insertBefore(e, t);
        })(document, "script");
    </script>
</head>
<body class="">

<!-- Préchargeur -->
<div id="preloader">
    <div class="flex flex-col justify-center items-center">
        <img src="{{ URL('images/logoSiteWeb/logo1.svg') }}" alt="Logo du site" class="h-36 w-auto justify-enter
         items-center">
        <svg class="mr-3 h-10 w-10 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
    </div>
</div>

<div id="myModal3" class="fixed inset-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>

    <div class="modal-container bg-white w-11/12 sm:w-9/12 lg:w-7/12 h-auto sm:h-auto  mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Contenu de la fenêtre modale -->
        <div class="relative modal-content text-left overflow-y-hidden overflow-x-hidden overflow-hidden">
            <img src="{{ URL('images/promotions/fermob.webp') }}" alt="" class="object-cover">
            <div class="absolute top-0 right-0 flex justify-center items-center">
                <button id="closeModal3" class="modal-close p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

@include('layouts/Header')

<div class="relative flex items-center justify-center w-full h-[100svh] sm:h-[50vh]">
    <div class="absolute w-full h-full bg-fixed bg-cover bg-bottom blur-sm overflow-hidden" style="background-image: url('{{ URL('images/showroom/magasinMaisonErnestoDevanture.webp') }}');">

    </div>
    <div class="absolute w-full h-full flex justify-center items-center">
        <h1 class=" uppercase text-4xl sm:text-6xl md:text-7xl 2xl:text-9xl text-white tracking-widest font-medium mix-blend-difference">Maison ernesto</h1>
    </div>
    <div class="sm:hidden absolute bottom-6 p-2">
        <div class="w-10 h-10 justify-center items-center">
            <a href="" title="Bouton de défilement" id="scrollToSection2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>
    </div>
</div>

<div id="présentation" class="w-full h-full bg-white">
    <div class="w-full h-full">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="col-span-1 w-full h-[50vh] carousel1 overflow-hidden">
                <div class="w-full h-full relative flex" id="image1">
                    <img src="{{ URL('images/Carrousel/pro.webp') }}" alt="Image 1" class="w-full h-full object-cover">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute top-0 left-0 z-10
                     mix-blend-difference">Ethnicraft
                    </h1>
                </div>
                <div class="w-full h-full hidden flex relative" id="image2">
                    <img src="{{ URL('images/Carrousel/usm2.webp') }}" alt="Image 2" class="w-full h-full object-cover">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute top-0 right-0 z-10
                     mix-blend-difference">Usm
                    </h1>
                </div>
                <div class="w-full h-full hidden relative flex" id="image3">
                    <img src="{{ URL('images/Carrousel/treku2.webp') }}" alt="Image 3" class="w-full h-full object-cover">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute bottom-0 right-0 z-10
                     mix-blend-difference">Treku
                    </h1>
                </div>
                <div class="w-full h-full hidden relative flex" id="image4">
                    <img src="{{ URL('images/Carrousel/extendo1.webp') }}" alt="Image 4" class="w-full h-full object-cover">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute bottom-0 left-0 z-10
                     mix-blend-difference">Extendo
                    </h1>
                </div>
            </div>
            <div class="col-span-1 w-full h-[50vh] bg-white overflow-hidden">
                <div class="w-full h-full flex justify-center items-center">
                    <div class="w-full h-full flex flex-col px-6 gap-10 flex justify-center items-start">
                        <h1 class="w-full text-[#946C57] text-3xl text-center">Entreprise</h1>
                        <p class="w-full leading-relaxed text-center text-xl">Découvrez notre catalogue de marque adaptée aux entreprises.
                        </p>
                        <a href="{{ route('brandsPageCompagny') }}" class="w-full flex justify-center items-center
                          hover:text-[#A68069] group ">
                            <h1 class="uppercase text-center text-xl text-[#946C57] px-6 py-2 group-hover:text-[#A68069]">nos marques
                            </h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="#A68069" class="w-6 h-6 group-hover:stoke-[#A68069]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 w-full h-[50vh] carousel2 overflow-hidden">
                <div class="w-full h-full group relative flex" id="image1">
                    <img src="{{ URL('images/Carrousel/cookut1.webp') }}" alt="Image 1" class="w-full h-full object-cover
                    transition duration-200 group-hover:scale-105 group-hover:duration-200 group-hover:transition">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute top-0 left-0 z-10
                     mix-blend-difference">Cookut
                    </h1>

                </div>
                <div class="w-full h-full hidden group relative flex" id="image2">
                    <img src="{{ URL('images/Carrousel/zafferano1.webp') }}" alt="Image 2" class="w-full h-full
                    object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                    group-hover:transition">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute top-0 right-0 z-10
                     mix-blend-difference">Zafferano
                    </h1>

                </div>
                <div class="w-full h-full hidden group relative flex" id="image3">
                    <img src="{{ URL('images/Carrousel/qeeboo.webp') }}" alt="Image 3" class="w-full h-full
                    object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                    group-hover:transition">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute bottom-0 right-0 z-10
                     mix-blend-difference">Qeeboo
                    </h1>

                </div>
                <div class="w-full h-full hidden group relative flex" id="image4">
                    <img src="{{ URL('images/Carrousel/fatboy1.webp') }}" alt="Image 4" class="w-full h-full
                     object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                     group-hover:transition">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute bottom-0 left-0 z-10
                     mix-blend-difference">Fatboy
                    </h1>
                </div>
            </div>
            <div class="col-span-1 w-full h-[50vh] carousel3 overflow-hidden">
                <div class="relative w-full h-full group flex" id="image1">
                    <img src="{{ URL('images/Carrousel/joli1.webp') }}" alt="Image 1" class="w-full h-full
                    object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                     group-hover:transition">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute top-0 left-0 z-10
                    mix-blend-difference">Joli
                    </h1>
                </div>
                <div class="relative w-full h-full hidden group flex" id="image2">
                    <img src="{{ URL('images/Carrousel/ralphm1.webp') }}" alt="Image 2" class="w-full h-full
                    object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                     group-hover:transition">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute top-0 right-0
                    mix-blend-difference">Ralph M
                    </h1>
                </div>
                <div class="relative w-full h-full hidden group flex" id="image3">
                    <img src="{{ URL('images/Carrousel/lema1.webp') }}" alt="Image 3" class="w-full h-full
                     object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                     group-hover:transition">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute bottom-0 right-0
                    mix-blend-difference">Lema
                    </h1>
                </div>
                <div class="relative w-full h-full hidden group flex" id="image4">
                    <img src="{{ URL('images/Carrousel/muuto1.webp') }}" alt="Image 4" class="w-full h-full
                     object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                     group-hover:transition">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute bottom-0 left-0 z-10
                    mix-blend-difference">Muuto
                    </h1>
                </div>
            </div>
            <div class="col-span-1 w-full h-[50vh] bg-white overflow-hidden">
                <div class="w-full h-full flex justify-center items-center">
                    <div class="w-full h-full flex flex-col px-6 gap-10 flex justify-center items-start">
                        <h1 class="w-full text-3xl text-[#946C57] text-center">Particulier</h1>
                        <p class="w-full leading-relaxed text-center text-xl">Découvrez notre catalogue de marque adaptée aux particuliers.
                        </p>
                        <a href="{{ route('brandsPageCustomer') }}" class="w-full flex justify-center items-center
                          hover:text-[#A68069] group ">
                            <h1 class="uppercase text-center text-xl text-[#946C57] px-6 py-2 group-hover:text-[#A68069]">nos marques
                            </h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="#A68069" class="w-6 h-6 group-hover:stoke-[#A68069]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 w-full h-[50vh] carousel4 overflow-hidden">
                <div class="w-full h-full relative flex" id="image1">
                    <img src="{{ URL('images/Carrousel/vibia1.webp') }}" alt="Image 1" class="w-full h-full object-cover">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute top-0 left-0 z-10
                     mix-blend-difference">Vibia
                    </h1>
                </div>
                <div class="w-full h-full hidden flex relative" id="image2">
                    <img src="{{ URL('images/Carrousel/zanotta1.webp') }}" alt="Image 2" class="w-full h-full object-cover">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute top-0 right-0 z-10
                     mix-blend-difference">Zanotta
                    </h1>
                </div>
                <div class="w-full h-full hidden relative flex" id="image3">
                    <img src="{{ URL('images/Carrousel/magis1.webp') }}" alt="Image 3" class="w-full h-full object-cover">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute bottom-0 right-0 z-10
                     mix-blend-difference">Magis
                    </h1>
                </div>
                <div class="w-full h-full hidden relative flex" id="image4">
                    <img src="{{ URL('images/Carrousel/ethnicraft2.webp') }}" alt="Image 4" class="w-full h-full object-cover">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute bottom-0 left-0 z-10
                     mix-blend-difference">Ethnicraft
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="flex flex-col h-[50vh] bg-white">
    <div class="slider">
        <div class="slide-track">
            <!-- 5 first slides -->
            <div class="slide">
                <img src="{{ URL('images/marques/&tradition.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/gubi.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/ethnicraft.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/fermob.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/muuto.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/usm.webp') }}" alt="" class="w-full h-full object-contain">
            </div>


            <!-- 5 first slides (doubled)-->

            <div class="slide">
                <img src="{{ URL('images/marques/&tradition.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/gubi.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/ethnicraft.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/fermob.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/muuto.svg') }}" alt="" class="w-full h-full object-contain">
            </div>
            <div class="slide">
                <img src="{{ URL('images/marques/usm.webp') }}" alt="" class="w-full h-full object-contain">
            </div>
        </div>
    </div>
</div>




@include('layouts/Footer')
    <script>
        function setupCarousel(carouselContainer) {
            let currentIndex = 0;

            function nextSlide() {
                const slides = carouselContainer.children;

                // Ajouter la classe 'hidden' à la diapositive actuelle
                const currentSlide = slides[currentIndex];
                currentSlide.classList.add('hidden');

                // Calculer l'index de la prochaine diapositive
                currentIndex = (currentIndex + 1) % slides.length;

                // Supprimer la classe 'hidden' de la prochaine diapositive
                const nextSlide = slides[currentIndex];
                nextSlide.classList.remove('hidden');
            }

            // Appeler nextSlide à intervalles réguliers
            setInterval(nextSlide, 5000);
        }

        // Utilisation avec différentes divs carrousel
        setupCarousel(document.querySelector('.carousel1'));
        setupCarousel(document.querySelector('.carousel2'));
        setupCarousel(document.querySelector('.carousel3'));
        setupCarousel(document.querySelector('.carousel4'));


        // Ajoutez autant d'appels à setupCarousel que nécessaire pour vos divs carrousel supplémentaires

    </script>

<script>
    // Attendre que la page soit complètement chargée
    window.addEventListener('load', function () {
        // Cacher le préchargeur en ajoutant la classe 'hidden' après une courte période
        setTimeout(function () {
            document.getElementById('preloader').classList.add('hidden');
        }, 500); // 500 millisecondes, ajustez selon vos préférences
    });
</script>

<!--script pour faire defiler la page-->
<script>
    document.getElementById("scrollToSection2").addEventListener("click", function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien
        const section2 = document.getElementById("présentation");
        const offset = section2.offsetTop; // Position de la section2 par rapport au haut de la page
        const duration = 500; // Durée de l'animation en millisecondes

        // Fonction pour effectuer l'animation de défilement
        function smoothScroll() {
            if (window.pageYOffset < offset) {
                window.scrollBy(0, 10);
                setTimeout(smoothScroll, 10);
            }
        }

        smoothScroll();
    });
</script>

<script name="modal3">
    // Fonction pour définir un cookie avec une durée d'expiration
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Fonction pour obtenir la valeur d'un cookie par son nom
    function getCookie(name) {
        const decodedCookie = decodeURIComponent(document.cookie);
        const cookies = decodedCookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
            let cookie = cookies[i].trim();
            if (cookie.indexOf(name) === 0) {
                return cookie.substring(name.length + 1);
            }
        }
        return "";
    }

    // Attendre que la page soit complètement chargée
    window.addEventListener('load', function () {
        // Vérifier si la modale a été fermée précédemment
        const modalClosed = getCookie('modalClosed');
        if (modalClosed === 'true') {
            // Si la modale a été fermée précédemment, ne pas l'afficher
            document.getElementById('myModal3').classList.add('hidden');
        }
    });

    // Fonction pour fermer la modale et définir un cookie
    document.getElementById("closeModal3").addEventListener("click", function () {
        document.getElementById('myModal3').classList.add('hidden');
        setCookie('modalClosed', 'true', 30); // Définir le cookie pour 30 jours
    });
</script>
</body>
</html>







