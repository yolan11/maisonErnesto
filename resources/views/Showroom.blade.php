<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/app.css')
    <title>Showroom - Maison Ernesto</title>
    <link rel="icon" type="image/x-icon" href="/public/images/logoSiteWeb/logo2.png">
    <style>
        .header {
            transition: background-color 0.3s;
        }
    </style>
</head>
<body class="">
@include('layouts/Header')

    <div class="w-full h-full flex flex-col ">
        <div class="w-full h-full flex flex-col justify-center">
            <div class="w-full h-screen flex flex-col">
                <div class="pt-48 w-full flex h-[900px] xl:px-[150px] 2xl:px-[200px] overflow-hidden">
                    <div class="w-full h-full overflow-hidden">
                        <img src="{{ URL('images/showroom/magasinMaisonErnestoDevanture.png') }}" alt="ShowroomImage" class="object-cover w-full h-full hover:transform hover:scale-105 hover:transition-transform hover:duration-300 hover:ease-in-out">
                    </div>
                </div>
                <div class="w-full h-full flex flex-col items-center justify-center md:px-[50px] lg:px-[100px] xl:px-[150px] 2xl:px-[200px]">
                    <h1 class=" text-4xl p-5 border-b border-[#6e4836] ">Maison Ernesto</h1>
                    <p class="text-center p-5">
                        Bienvenue à la Maison Ernesto, votre magasin de meubles & décorations. Nous sommes situé dans la périphérie de la ville de Senlis, offrant une expérience unique de shopping. Découvrez notre large gamme de produits soigneusement sélectionnés pour répondre à vos besoins.
                    </p>
                </div>
                </div>
            <div class="w-full flex py-10 grid grid-cols-1 sm:grid-cols-2 xl:px-[150px] 2xl:px-[200px]">
                <div class="col-span-1">
                    <div class="w-full h-full flex flex-col border-y xl:border border-[#6e4836]">
                        <ul class="w-full h-full flex flex-col items-center justify-center p-6">
                            <div class="w-80 border-b border-[#6e4836] flex justify-center">
                                <h3 class="p-2 text-xl text-center">Horaire</h3>
                            </div>
                            <div class="w-80 border-b border-[#6e4836] flex justify-center">
                                <li class="p-2 text-xl text-center">Mardi - Vendredi : 10h00 - 13h00 / 14h30- 19h</li>
                            </div>
                            <div class="w-80 border-b border-[#6e4836] flex justify-center">
                                <li class="p-2 text-xl text-center">Samedi : 10h00 - 19h00</li>
                            </div>
                            <div class="w-80 flex justify-center">
                                <li class="p-2 text-xl text-center">Dimanche : Fermé</li>
                            </div>


                        </ul>
                    </div>
                </div>
                <div class="col-span-1 p-4 sm:p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.952491510998!2d2.5909532768874564!3d49.22042807516005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e63126f05fadcf%3A0x99b16b731c0c7df5!2sMaison%20Ernesto!5e0!3m2!1sfr!2sfr!4v1695896727988!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
@include('layouts/Footer')
</body>
</html>
