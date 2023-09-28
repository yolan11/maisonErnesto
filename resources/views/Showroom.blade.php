<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/app.css')
    <title>Maison Ernesto - Showroom</title>
    <link rel="icon" type="image/x-icon" href="/public/images/logoSiteWeb/logo2.png">
    <style>
        .header {
            transition: background-color 0.3s;
        }
    </style>
</head>
<body class="bg-gray-100">
@include('layouts/Header')

    <div class=" container mx-auto">
        <div class="flex flex-col lg:flex-row w-full lg:w-8/12 md:w-10/12 flex bg-white rounded-xl lg:mx-auto md:mx-auto shadow-lg overflow-hidden">
            <div class=" w-full lg:w-1/2 flex flex-col items-center p-12 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ URL('images/showroom/magasinMaisonErnestoDevanture.png') }}')">

            </div>
            <div class="w-full lg:w-1/2 py-16 px-12">
                <h2 class="text-2xl mb(4">Réservation</h2>
                <p class="mb-4">
                    Create your reservatio so that i can tech you
                </p><!-- Nom de la Ville -->
                <h2>SENLIS</h2>

                <!-- Description du Magasin -->
                <p>
                    Bienvenue à Maison Ernesto, votre destination de choix pour des produits de qualité. Notre magasin est situé au cœur de la ville, offrant une expérience unique de shopping. Découvrez une large gamme de produits soigneusement sélectionnés pour répondre à vos besoins.
                </p>

                <!-- Horaires d'Ouverture -->
                <h3>Horaires d'Ouverture</h3>
                <ul class="horaires">
                    <li>Lundi - Vendredi : 9h00 - 18h00</li>
                    <li>Samedi : 10h00 - 16h00</li>
                    <li>Dimanche : Fermé</li>
                </ul>


            </div>
        </div>
    </div>
</body>
</html>
