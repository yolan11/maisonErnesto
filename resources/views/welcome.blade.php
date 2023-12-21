<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/app.css')
    @vite('resources/css/slider.css')
    <title>Maison Ernesto</title>

    <link rel="icon" type="image/x-icon" href="/public/images/logoSiteWeb/logo2.png">
</head>
<body class="">
@include('layouts/Header')
<div class="w-full h-[100svh] sm:h-[50vh] bg-fixed bg-cover bg-bottom relative z-[-1]" style="background-image: url('{{ URL('images/showroom/magasinMaisonErnestoDevanture.png') }}');">
    <div class="absolute w-full h-full flex justify-center items-center">
        <h1 class="uppercase text-4xl sm:text-9xl text-white tracking-widest font-medium mix-blend-difference">Maison ernesto</h1>
    </div>
</div>

<div class="w-full h-full bg-white">
    <div class="w-full h-full">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="col-span-1 w-full h-[50vh] carousel1">
                <div class="w-full h-full relative flex" id="image1">
                    <img src="{{ URL('images/pro.jpg') }}" alt="Image 1" class="w-full h-full object-cover">
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
                     mix-blend-difference">treku
                    </h1>
                </div>
                <div class="w-full h-full hidden relative flex" id="image4">
                    <img src="{{ URL('images/Carrousel/extendo1.jpg') }}" alt="Image 4" class="w-full h-full object-cover">
                    <h1 class="m-6 w-auto h-auto text-white text-6xl absolute bottom-0 left-0 z-10
                     mix-blend-difference">Extendo
                    </h1>
                </div>
            </div>
            <div class="col-span-1 w-full h-[50vh] bg-white p-6">
                <div class="w-full h-full flex justify-center items-center">
                    <div class="flex flex-col px-6 sm:px-32 gap-10 flex justify-center items-start">
                        <h1 class=" text-[#A68069] text-3xl">Entreprise</h1>
                        <p class="leading-relaxed">Découvrez notre catalogue de marque adapté aux entreprises.
                        </p>
                        <a href="{{ route('brandsPageCompagny') }}" class="w-full flex justify-center items-center
                          hover:text-[#A68069] group ">
                            <h1 class="uppercase text-center text-xl text-[#A68069] px-6 py-2 group-hover:text-[#A68069]">nos marques
                            </h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="#A68069" class="w-6 h-6 group-hover:stoke-[#A68069]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 w-full h-[50vh] overflow-hidden carousel2">
                <div class="w-full h-full group relative flex" id="image1">
                    <img src="{{ URL('images/Carrousel/cookut1.jpg') }}" alt="Image 1" class="w-full h-full object-cover
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
            <div class="col-span-1 w-full h-[50vh] overflow-hidden carousel3">
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
            <div class="col-span-1 w-full h-[50vh] bg-white p-6">
                <div class="w-full h-full flex justify-center items-center">
                    <div class="flex flex-col px-6 sm:px-32 gap-10 flex justify-center items-start">
                        <h1 class="text-3xl text-[#A68069]">Particulier</h1>
                        <p class="leading-relaxed">Découvrez notre catalogue de marque adapté aux particuliers.
                        </p>
                        <a href="{{ route('brandsPageCustomer') }}" class="w-full flex justify-center items-center
                          hover:text-[#A68069] group ">
                            <h1 class="uppercase text-center text-xl text-[#A68069] px-6 py-2 group-hover:text-[#A68069]">nos marques
                            </h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="#A68069" class="w-6 h-6 group-hover:stoke-[#A68069]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 w-full h-[50vh] carousel4">
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
                    <img src="{{ URL('images/Carrousel/ethnicraft2.jpg') }}" alt="Image 4" class="w-full h-full object-cover">
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
                <img src="https://www.lemamobili.com/static/version1699345578/frontend/Iscanet/lema-2020/fr_FR/images/logo.svg" alt="" class="w-32">
            </div>
            <div class="slide">
                <img src="https://media.ethnicraft.com/sys-master/s3_content_medias/h32/hec/8796120580126/Logo-Ethnicraft-RGB-Black.svg" alt="" class="w-32">
            </div>
            <div class="slide">
                <img src="https://www.fatboy.com/packs/media/Base/logo-910eda5c.svg" alt="" class="w-32">
            </div>
            <div class="slide">
                <img src="https://www.pomax.com/themes/pomax/styles/images/Pomax_Logo_RGB_New_v3.svg" alt="" class="w-32">
            </div>
            <div class="slide">
                <img src="https://www.fermob.com/v-20231019080408/bundles/actifermob/tpl/img/logo2022.svg" alt="" class="w-40">
            </div>


            <!-- 5 first slides (doubled)-->

            <div class="slide">
                <img src="https://www.lemamobili.com/static/version1699345578/frontend/Iscanet/lema-2020/fr_FR/images/logo.svg" alt="" class="w-32">
            </div>
            <div class="slide">
                <img src="https://media.ethnicraft.com/sys-master/s3_content_medias/h32/hec/8796120580126/Logo-Ethnicraft-RGB-Black.svg" alt="" class="w-32">
            </div>
            <div class="slide">
                <img src="https://www.fatboy.com/packs/media/Base/logo-910eda5c.svg" alt="" class="w-32">
            </div>
            <div class="slide">
                <img src="https://www.pomax.com/themes/pomax/styles/images/Pomax_Logo_RGB_New_v3.svg" alt="" class="w-32">
            </div>
            <div class="slide">
                <img src="https://www.fermob.com/v-20231019080408/bundles/actifermob/tpl/img/logo2022.svg" alt="" class="w-40">
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
            setInterval(nextSlide, 10000);
        }

        // Utilisation avec différentes divs carrousel
        setupCarousel(document.querySelector('.carousel1'));
        setupCarousel(document.querySelector('.carousel2'));
        setupCarousel(document.querySelector('.carousel3'));
        setupCarousel(document.querySelector('.carousel4'));


        // Ajoutez autant d'appels à setupCarousel que nécessaire pour vos divs carrousel supplémentaires

    </script>

</body>
</html>


