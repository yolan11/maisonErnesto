<footer class="w-full h-full flex justify-center items-center">
    <div class="w-full h-full bg-[#A68069] h-[500px] flex justify-center items-center flex-col">
        <div class="w-full grid grid-cols-1 h-full py-10 px-6 flex justify-center items-center gap-4">
            <div class="col-span-1 flex justify-center items-center">
                <div class="w-full sm:w-3/5 flex-col flex gap-4">
                    <h1 class="flex w-auto h-auto justify-center items-center text-3xl text-white">MAISON ERNESTO</h1>
                    <p class="flex w-auto h-auto justify-center items-center text-white text-xl text-center">
                        Depuis 2006, En Partenariat avec les marques références du marché, l’Equipe Maison Ernesto vous
                        accompagne dans la sélection de meubles, luminaires, objets de décoration… pour aménager vos
                        intérieurs et jardins.
                        Rendez-vous dans notre showroom de 800 m² à Senlis, 80 avenue du poteau, pour y découvrir
                        nos univers.

                    </p>

                </div>
            </div>
        </div>
        <div class="w-full h-full">
            <div class="grid grid-cols-1 md:grid-cols-2 flex w-full h-full">
                <div class="flex col-span-1 flex-col w-full p-6 gap-4 h-[250px]">
                    <h1 class="text-white font-bold text-xl uppercase">Contact</h1>
                    <div class="w-full border-b border-white"></div>
                    <a href="mailto:contact@maisonernesto.fr" class="flex w-auto h-auto justify-start items-center group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                        </svg>
                        <p class="text-white py text-xl">Contact@maisonernesto.fr</p>
                    </a>
                    <a href="tel:+33344662081" class="flex w-auto h-auto justify-start items-center group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6 mr-2">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-white text-xl">+33 344 662 081</p>
                    </a>
                    <a href="https://maps.app.goo.gl/AnNMd2fa8MyuudYQ9" class="flex w-auto h-auto justify-start items-center group" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6 mr-2">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        <p class=" text-white py text-xl">80 Av. du Poteau, 60300 Chamant</p>
                    </a>
                </div>
                <div class="flex col-span-1 w-full p-6 flex-col gap-4 h-[250px]">
                    <h1 class="text-white text-xl font-bold uppercase">Liens utiles</h1>
                    <div class="w-full border-b border-white"></div>
                    <a href="{{ route('Home') }}" title="Redirection vers la page d'accueil" class="uppercase text-white text-xl ">Accueil</a>
                    <a href="{{ route('Brands') }}" title="Redirection vers la page marque" class="uppercase text-white text-xl ">Marques</a>
                    <a href="{{ route('Showroom') }}" title="Redirection vers la page showroom" class="uppercase text-white text-xl ">Showroom</a>

                </div>
            </div>
        </div>
        <div class="relative w-full h-32 flex justify-end items-center flex-col border-t border-white">
            <h1 class="text-white">© 2024 Maison Ernesto | Tous droits réservés</h1>
            <div class="flex gap-4">
                <button id="openModal1" class="w-full text-white py-2 hover:underline whitespace-nowrap">Confidentialité</button>
                <button id="openModal2" class="w-full text-white py-2 hover:underline whitespace-nowrap">Mentions Légales</button>
            </div>
            <div class="absolute top-0 right-0 m-4">
                <a href="https://www.instagram.com/maisonernesto/" class="flex w-auto h-auto justify-center items-center group" target="_blank">
                    <img src="{{ URL('images/footer/instagram.svg') }}" alt="" class="w-10 h-auto mr-2">
                </a>
            </div>

        </div>
    </div>

    <div id="myModal1" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>

        <div class="modal-container bg-white w-11/12 sm:w-9/12 lg:w-7/12 h-[750px] sm:h-[600px]  mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <!-- Contenu de la fenêtre modale -->
            <div class="modal-content py-4 text-left px-6">
                <div class="flex justify-between items-center pb-3">
                    <h1 class="text-2xl font-bold">Politique de Confidentialité</h1>
                    <button id="closeModal1" class="modal-close p-2 -mt-2 -mr-2 hover:text-black text-3xl">&times;</button>
                </div>
                <p class="my-2">Dernière mise à jour : 12/10/2023</p>
                <h1 class="text-2xl font-medium my-2">Introduction</h1>
                <p class=" my-2">La protection de vos données personnelles est une priorité pour La Maison Ernesto.
                    Cette politique de confidentialité a pour but de vous informer sur la manière dont nous collectons,
                    utilisons et protégeons vos informations. En utilisant nos services, vous acceptez les pratiques
                    décrites dans cette politique.
                </p>
                <h1 class="text-3xl my-4">Informations que nous collectons</h1>
                <h1 class="text-xl font-medium my-2">Données personnelles</h1>
                <p>nous ne collectons pas de données personnelles sur notre site.
                </p>
                <h1 class="text-xl font-medium my-2">Données non personnelles</h1>
                <p>Nous pouvons collecter des données non personnelles, telles que des données agrégées,
                    statistiques et informations démographiques.
                </p>
                <h1 class="text-xl font-medium my-2">Sécurité des données</h1>
                <p>Nous prenons des mesures de sécurité appropriées pour protéger vos données personnelles contre les
                    accès non autorisés, la divulgation, la modification ou la destruction. Cependant, aucun système
                    de sécurité n'est infaillible, et nous ne pouvons garantir la sécurité de vos données.
                </p>
                <h1 class="text-xl font-medium my-2">Vos droits</h1>
                <p>Vous avez certains droits concernant vos données personnelles, notamment le droit d'accès, de
                    rectification, de suppression, et de limitation du traitement. Pour exercer ces droits, veuillez
                    nous contacter à contact@maisonernesto.fr.
                </p>
                <h1 class="text-xl font-medium my-2">Modifications de la politique de confidentialité</h1>
                <p>Nous pouvons mettre à jour cette politique de confidentialité de temps à autre pour refléter les
                    changements dans nos pratiques. La date de la dernière mise à jour sera indiquée en haut de cette
                    page.
                </p>
                <h1 class="text-xl font-medium my-2">Contactez-nous</h1>
                <p>Si vous avez des questions ou des préoccupations concernant notre politique de confidentialité,
                    veuillez nous contacter à contact@maisonernesto.fr.
                </p>
            </div>
        </div>
    </div>
    <div id="myModal2" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>

        <div class="modal-container bg-white w-11/12 sm:w-9/12 lg:w-7/12 h-[750px] sm:h-[600px]  mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <!-- Contenu de la fenêtre modale -->
            <div class="modal-content py-4 text-left px-6">
                <div class="flex justify-between items-center pb-3">
                    <h1 class="text-2xl font-bold">Mentions Légales</h1>
                    <button id="closeModal2" class="modal-close p-2 -mt-2 -mr-2 hover:text-black text-3xl">&times;</button>
                </div>
                <p class="my-2">Dernière mise à jour : 12/10/2023</p>
                <h1 class="text-2xl font-medium my-2">Éditeur du site</h1>
                <p class=" my-2">
                    Nom de l'entreprise : LA MAISON D ERNESTO<br>
                    Forme juridique : SARL<br>
                    Adresse : 80 Av. du Poteau, 60300 Chamant<br>
                    Téléphone :  03 44 66 20 81<br>
                    E-mail : contact@maisonernesto.fr<br>
                    Numéro d'identification : 48892930800010<br>
                    Capital social : 60000 €<br>
                    Directeur de la publication : Emmanuel Souchon<br>
                </p>
                <h1 class="text-xl font-medium my-2">Hébergement du site</h1>
                <p>
                    Nom de l'hébergeur : O2switch<br>
                    Adresse : CHE DES PARDIAUX 63000 CLERMONT-FERRAND
                </p>
                <h1 class="text-xl font-medium my-2">Propriété intellectuelle</h1>
                <p>
                    Le contenu de ce site (textes, images, vidéos, etc.) est la propriété de LA MAISON ERNESTO
                    et est protégé par les lois sur la propriété intellectuelle. Toute reproduction ou utilisation
                    sans autorisation préalable est interdite.
                </p>
                <h1 class="text-xl font-medium my-2">Cookies</h1>
                <p>
                    Ce site n'utilise que les cookies nécessaires et obligatoire au bon fonctionnement de celui-ci.
                </p>
                <h1 class="text-xl font-medium my-2">Contactez-nous</h1>
                <p>Si vous avez des questions ou des préoccupations concernant notre politique de confidentialité,
                    veuillez nous contacter à contact@maisonernesto.fr.
                </p>
            </div>
        </div>
    </div>
</footer>

<script name="modal1">
    // JavaScript pour ouvrir et fermer la fenêtre modale
    const openModal1 = document.getElementById("openModal1");
    const closeModal1 = document.getElementById("closeModal1");
    const modal1 = document.getElementById("myModal1");

    openModal1.addEventListener("click", () => {
        modal1.classList.remove("hidden");
    });

    closeModal1.addEventListener("click", () => {
        modal1.classList.add("hidden");
    });

    modal1.addEventListener("click", (e) => {
        if (e.target === modal1) {
            modal1.classList.add("hidden");
        }
    });
</script>

<script name="modal2">
    // JavaScript pour ouvrir et fermer la fenêtre modale
    const openModal2 = document.getElementById("openModal2");
    const closeModal2 = document.getElementById("closeModal2");
    const modal2 = document.getElementById("myModal2");

    openModal2.addEventListener("click", () => {
        modal2.classList.remove("hidden");
    });

    closeModal2.addEventListener("click", () => {
        modal2.classList.add("hidden");
    });

    modal2.addEventListener("click", (e) => {
        if (e.target === modal2) {
            modal2.classList.add("hidden");
        }
    });
</script>
