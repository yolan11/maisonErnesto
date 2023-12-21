<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/app.css')
    <title>Marques - Maison Ernesto</title>
    <link rel="icon" type="image/x-icon" href="/public/images/logoSiteWeb/logo2.png">

</head>
<body class="bg-white">
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
</script>

</body>
</html>
