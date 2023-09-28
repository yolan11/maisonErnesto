<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/app.css')
    <title>Maison Ernesto - Marques</title>
    <link rel="icon" type="image/x-icon" href="/public/images/logoSiteWeb/logo2.png">

</head>
<body class="bg-gray-100">
@include('layouts/Header')


<div class="mt-20">
    <div class="w-full h-20 flex items-center justify-center p-5">
        <input id="searchbar" onkeyup="search()" class=" center-text w-1/2 rounded-md h-full p-4" type="search" placeholder="Rechercher une marque" name="search">
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 m-16" id="brandsContainer">
        <div id="brand" name="fermob" class="flex items-center justify-center m-4">
            <a href="https://www.fermob.com/fr/?utm_source=google&utm_medium=cpc&utm_campaign=branding&gad=1&gclid=Cj0KCQjw9MCnBhCYARIsAB1WQVXGwsNEdNE10NRPim2gJQHQ5t2pEqkR_S0JBJ5YYB2U84MbC7aO7xAaAt66EALw_wcB"
               class="flex justify-center align-center" target="_blank">
                <img src="{{ URL('images/marques/fermob.svg') }}" class="w-2/5">
            </a>
        </div>
        <div id="brand" name="ethnicraft" class="flex items-center justify-center m-4">
            <a href="https://ethnicraft.com/fr/fr/"
               class="flex justify-center align-center" target="_blank">
                <img src="{{ URL('images/marques/ethnicraft.svg') }}" class="w-3/5">
            </a>
        </div>
        <div id="brand" name="forgeadour" class="flex items-center justify-center m-4">
            <a href="https://boutique.forgeadour.com/"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/forgeAdour.png') }}" class="w-3/5">
            </a>
        </div>
        <div id="brand" name="cookut" class="flex items-center justify-center m-4">
            <a href="https://www.cookut.com/fr/"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/cookut.jpg') }}" class="items-center justify-center">
            </a>
        </div>
        <div id="brand" name="emilehenry" class="flex items-center justify-center m-4">
            <a href="https://www.emilehenry.com/fr"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/emileHenry.svg') }}" class="w-3/5">
            </a>
        </div>
        <div id="brand" name="microplane" class="flex items-center justify-center m-4">
            <a href="https://www.microplaneintl.com/fr"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/microplane.png') }}">
            </a>
        </div>
        <div id="brand" name="opinel" class="flex items-center justify-center m-4">
            <a href="https://www.opinel.com/?gclid=Cj0KCQjw9MCnBhCYARIsAB1WQVV3d2DyOrTslwsQmXoqjhUOv0-_ETx8WOaVXB4eXdcIZTcWXUrlP1caAnCmEALw_wcB"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/opinel.png') }}" class="w-3/5 items-center justify-center">
            </a>
        </div>
        <div id="brand" name="baobab" class="flex items-center justify-center m-4">
            <a href="https://eu.baobabcollection.com/fr/collections/scented-candles?gclid=Cj0KCQjw9MCnBhCYARIsAB1WQVXVarSDpC4lrnwNpoioUD18b71fnJli4Zm9otJogPDK2y55_bR1XvAaAimTEALw_wcB"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/baobab.webp') }}">
            </a>
        </div>
        <div id="brand" name="fatboy" class="flex items-center justify-center m-4">
            <a href="https://www.fatboy.com/fr-fr?gclid=Cj0KCQjw9MCnBhCYARIsAB1WQVVMaXcP5oiK4Bz5mLeLwbQinoj47nqwX-dhljOA52fjJTeZz8AV2VUaAhy9EALw_wcB"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/fatboy.svg') }}" class="w-3/5">
            </a>
        </div>
        <div id="brand" name="emu" class="flex items-center justify-center m-4">
            <a href="https://www.emu.it/fr/"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/emu.png') }}">
            </a>
        </div>
        <div id="brand" name="glatz" class="flex items-center justify-center m-4">
            <a href="https://www.glatz.com/fr"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/glatz.svg') }}">
            </a>
        </div>
        <div id="brand" name="kartell" class="flex items-center justify-center m-4">
            <a href="https://www.kartell.com/fr/fr/ktfr?gclid=Cj0KCQjw9MCnBhCYARIsAB1WQVUd-anP33XPu89GJgu3FryxhxD1LsTSCDEGvGAh1_aEBk7mpxH6PDEaAgKsEALw_wcB"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/kartell.svg') }}" class="w-2/5">
            </a>
        </div>
        <div id="brand" name="rogerpradier" class="flex items-center justify-center m-4">
            <a href="https://roger-pradier.com/ target="_blank""
               class="flex items-center justify-center">
                <img src="{{ URL('images/marques/rogerPradier.svg') }}" class="w-3/5">
            </a>
        </div>
        <div id="brand" name="treku" class="flex items-center justify-center m-4">
            <a href="https://www.treku.com/fr/" target="_blank">
                <img src="{{ URL('images/marques/treku.svg') }}">
            </a>
        </div>
        <div id="brand" name="cvl" class="flex items-center justify-center m-4">
            <a href="https://www.cvl-luminaires.fr/"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/cvl.svg') }}" class="w-1/6">
            </a>
        </div>
        <div id="brand" name="girardsudron" class="flex items-center justify-center m-4">
            <a href="https://www.girard-sudron.fr/?utm_campaign=20148629256&adgroupid=149446312739&utm_content=658904484661&utm_term=gerard%20sudron&gad=1&gclid=Cj0KCQjw9MCnBhCYARIsAB1WQVU_XZVli-JDQ1T5_Vwi8LXPGSHRYvYTI14UDuAzI1_Qkoy4q_GPT4AaAjfLEALw_wcB"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/girardSudron.svg') }}" class="w-1/3">
            </a>
        </div>
        <div id="brand" name="gervasoni" class="flex items-center justify-center m-4">
            <a href="https://gervasoni1882.com/fr"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/gervasoni.svg') }}" class="w-1/3">
            </a>
        </div>
        <div id="brand" name="lema" class="flex items-center justify-center m-4">
            <a href="https://www.lemamobili.com/fr/"
               class="flex items-center justify-center" target="_blank">
                <img src="{{ URL('images/marques/lema.svg') }}" class="w-1/3">
            </a>
        </div>
    </div>

</div>
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
