<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Marques - Maison Ernesto</title>
    <meta name="description" content="A 10 minutes de l'autoroute A1, à Senlis. Venez découvrir notre showroom
     de 800 m², 80 avenue du poteau, pour y découvrir nos univers.">
    <link rel="canonical" href="https://maisonernesto.fr/Brands">

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
<body class="bg-white">

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

@include('layouts.Header')

@yield('content')

@include('layouts.Footer')

<script>
    function search() {
        const searchInput = document.getElementById('searchbar').value.toLowerCase();
        const brandDivs = document.querySelectorAll('#brandsContainer > #brand');

        brandDivs.forEach(brandDiv => {
            const brandName = brandDiv.getAttribute('name').toLowerCase();
            if (brandName.includes(searchInput)) {
                brandDiv.style.display = 'flex';
            } else {
                brandDiv.style.display = 'none';
            }
        });
    }

    function sortBrandsAlphabetically() {
        const brandsContainer = document.getElementById('brandsContainer');
        const brandDivs = Array.from(brandsContainer.querySelectorAll('#brand'));

        // Triez les divs de marque en fonction de leur nom (l'attribut 'name').
        brandDivs.sort((a, b) => {
            const brandNameA = a.getAttribute('name').toLowerCase();
            const brandNameB = b.getAttribute('name').toLowerCase();
            return brandNameA.localeCompare(brandNameB);
        });

        // Supprimez toutes les divs de marque du conteneur.
        brandDivs.forEach(brandDiv => {
            brandsContainer.removeChild(brandDiv);
        });

        // Réinsérez les divs de marque triées dans le conteneur.
        brandDivs.forEach(brandDiv => {
            brandsContainer.appendChild(brandDiv);
        });
    }

    // Appelez la fonction pour trier les marques par ordre alphabétique.
    sortBrandsAlphabetically();
</script>

<script>
    // Récupérer les éléments du DOM
    const openModalButton = document.getElementById('openModal');
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    const modal = document.getElementById('modal');

    // Fonction pour ouvrir la modal
    function openModal() {
        modal.classList.remove('hidden');
    }

    // Fonction pour fermer la modal
    function closeModal() {
        modal.classList.add('hidden');
    }

    // Fermer la modal si l'utilisateur clique en dehors de la modal
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    // Écouter le clic sur le bouton d'ouverture de la modal
    openModalButton.addEventListener('click', openModal);
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
