<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/app.css')
    <title>Showroom - Maison Ernesto</title>
    <link rel="icon" type="image/x-icon" href="/public/images/logoSiteWeb/logo1.png">
    <style>
        .header {
            transition: background-color 0.3s;
        }
    </style>
</head>
<body class="">
@include('layouts/Header')

<div class="w-full flex h-[50vh] overflow-hidden">
    <div class="w-full h-full overflow-hidden">
        <img src="{{ URL('images/showroom/magasinMaisonErnestoDevanture.png') }}" alt="ShowroomImage" class="object-cover w-full h-full hover:transform hover:scale-105 hover:transition-transform hover:duration-300 hover:ease-in-out">
    </div>
</div>

<div class="w-full h-[50vh] flex flex-col bg-white">
    <div class="w-full h-full flex flex-col items-center justify-center md:px-[50px] lg:px-[100px] xl:px-[150px] 2xl:px-[200px]">
        <h1 class=" text-4xl p-5 border-b border-[#6e4836] ">Maison Ernesto</h1>
        <p class="text-center p-5">
            Bienvenue à la Maison Ernesto, votre magasin de meubles & décorations. Nous sommes situé dans la périphérie de la ville de Senlis, offrant une expérience unique de shopping. Découvrez notre large gamme de produits soigneusement sélectionnés pour répondre à vos besoins.
        </p>
    </div>
</div>
<div class="bg-white w-full h-full flex grid grid-cols-1 sm:grid-cols-2">
    <div class="col-span-1 h-[50vh]">
        <div class="w-full h-full flex flex-col justify-center items-center">
            <ul class="w-full sm:w-4/5 h-full flex flex-col items-center justify-center p-6">
                <li class="w-full flex justify-start">
                    <h1 class="p-2 text-4xl">Horaires</h1>
                </li>
                <li class="w-full flex justify-start">
                    <p class="p-2 text-xl">Mardi : 10h00 - 13h00 / 14h30- 19h</p>
                </li>
                <li class="w-full flex justify-start">
                    <p class="p-2 text-xl">Mercredi : 10h00 - 13h00 / 14h30- 19h</p>
                </li>
                <li class="w-full flex justify-start">
                    <p class="p-2 text-xl">Jeudi : 10h00 - 13h00 / 14h30- 19h</p>
                </li>
                <li class="w-full flex justify-start">
                    <p class="p-2 text-xl">Vendredi : 10h00 - 13h00 / 14h30- 19h</p>
                </li>
                <li class="w-full flex justify-start">
                    <p class="p-2 text-xl">Samedi : 10h00 - 19h00</p>
                </li>
                <li class="w-full flex justify-start">
                    <p class="p-2 text-xl">Dimanche : Fermé</p>
                </li>
                <li class="flex w-full flex-col justify-center items-center">
                    <h1 id="open" class="bg-green-300 text-2xl uppercase py-2 px-4 text-center text-white rounded-xl shadow-2xl">Ouvert</h1>
                    <h1 id="close" class="bg-red-600 text-2xl uppercase py-2 px-4 text-center text-white rounded-xl shadow-2xl">Fermé</h1>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-span-1 p-6 sm:p-0 h-[50vh]">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.952491510998!2d2.5909532768874564!3d49
        .22042807516005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e63126f05fadcf%3A0x99b16b731c0c7df5!2s
        Maison%20Ernesto!5e0!3m2!1sfr!2sfr!4v1695896727988!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

        </iframe>
    </div>
</div>
@include('layouts/Footer')

<script>
    function getParisTime() {
        const parisTimezone = 'Europe/Paris';
        const parisTime = new Date().toLocaleString('en-US', { timeZone: parisTimezone });
        return new Date(parisTime);
    }

    function isStoreOpen() {
        const parisTime = getParisTime();
        const dayOfWeek = parisTime.getDay();
        const currentHour = parisTime.getHours();
        const isLunchBreak = (currentHour >= 13 && currentHour < 14) || (currentHour === 14 && parisTime.getMinutes() < 30);

        // Check if the store is open based on the day of the week and time
        if (dayOfWeek >= 1 && dayOfWeek <= 5) { // Monday to Friday
            return !isLunchBreak && (currentHour >= 10 && currentHour < 13 || currentHour >= 14 && currentHour < 19);
        } else if (dayOfWeek === 6) { // Saturday
            return currentHour >= 10 && currentHour < 19;
        } else { // Sunday
            return false; // Closed on Sundays
        }
    }

    function updateStoreStatus() {
        const isOpen = isStoreOpen();
        const openH1 = document.getElementById('open');
        const closeH1 = document.getElementById('close');

        if (isOpen) {
            openH1.style.display = 'block';
            closeH1.style.display = 'none';
        } else {
            openH1.style.display = 'none';
            closeH1.style.display = 'block';
        }
    }

    updateStoreStatus();
    setInterval(updateStoreStatus, 60000);

</script>
</body>
</html>
