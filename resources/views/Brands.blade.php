<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/app.css')
    <title>Marques - Maison Ernesto</title>
    <link rel="icon" type="image/x-icon" href="/public/images/logoSiteWeb/logo2.png">

</head>
<body class="bg-gray-100">
@include('layouts/Header')


<div class="mt-20 min-h-screen">
    <div class="w-full h-20 flex items-center justify-center p-5">
        <input id="searchbar" onkeyup="search()" class=" center-text w-1/2 rounded-md h-full p-4" type="search" placeholder="Rechercher une marque" name="search">
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 m-16" id="brandsContainer">
        @foreach ($brands as $brand)
        <div id="brand" name="{{ $brand->marque }}" class="flex items-center justify-center m-4">
            <a href="{{ $brand->lienSiteWeb }}"
               class="flex justify-center align-center" target="_blank">
                <img src="{{ $brand->image }}" class="w-2/5">
            </a>
        </div>
        @endforeach
    </div>
</div>

@include('layouts/Footer')

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

</body>
</html>
