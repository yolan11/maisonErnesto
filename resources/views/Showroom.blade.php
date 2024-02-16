<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    <title>Showroom - Maison Ernesto</title>
    <meta name="description" content="A 10 minutes de l'autoroute A1, à Senlis. Venez découvrir notre showroom
     de 800 m², 80 avenue du poteau, pour y découvrir nos univers.">
    <link rel="canonical" href="https://maisonernesto.fr/Showroom">

    <link rel="icon" type="image/x-icon" href="{{ URL('images/logoSiteWeb/logo1.png') }}" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="{{ URL('images/logoSiteWeb/logo1.png') }}" sizes="192x192">

    @vite('resources/css/app.css')

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

@include('layouts/Header')


<div class="relative flex items-center justify-center w-full h-[50vh]">
    <div class="absolute w-full h-full bg-fixed bg-cover bg-bottom overflow-hidden" style="background-image: url('{{ URL('images/showroom/magasinMaisonErnestoDevanture.webp') }}');">

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
<script>
    // Attendre que la page soit complètement chargée
    window.addEventListener('load', function () {
        // Cacher le préchargeur en ajoutant la classe 'hidden' après une courte période
        setTimeout(function () {
            document.getElementById('preloader').classList.add('hidden');
        }, 500); // 500 millisecondes, ajustez selon vos préférences
    });
</script>
</body>
</html>
