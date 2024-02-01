<section id="sidebar" class="border-r border-gray-600 fixed bottom-0 left-0 w-[280px] h-calc-100-minus-50 bg-white
     z-1000 overflow-x-hidden custom-scrollbar flex flex-col justify-between">
    <div class="flex flex-col gap-2 p-4">
        <div class="w-full ">
            <a href="{{ route('Dashboard') }}" class="w-full px-4 py-2 flex items-center hover:bg-gray-200 gap-2 {{ Request::is('dashboard') ? 'sidebarActive' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
                <h1 id="menuTitle">Dashboard</h1>
            </a>
        </div>
        <div class="w-full ">
            <a href="{{ route('DashboardUser') }}" class="w-full px-4 py-2 flex items-center hover:bg-gray-200 gap-2 {{ Request::is('dashboard/user') ? 'sidebarActive' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor " class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
                <h1 id="menuTitle">Utilisateurs</h1>
            </a>
        </div>
        <div class="w-full">
            <a href="{{ route('DashboardBrand') }}" class="w-full px-4 py-2 flex items-center hover:bg-gray-200 gap-2 {{ Request::is('dashboard/brand') ? 'sidebarActive' : '' }}">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                </svg>
                <h1 id="menuTitle">Marques</h1>
            </a>
        </div>
    </div>
    <div class="border-t border-gray-600 h-auto p-4">
        <div class="w-full flex justify-end">
            <button id="menuAppearance">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    // Sélection du bouton et des balises h1 avec l'ID nameTitle
    const menuButton = document.getElementById('menuAppearance');
    const nameTitles = document.querySelectorAll('h1#menuTitle');
    const menuWidthSize = document.querySelector('section#sidebar')

    // Ajout d'un gestionnaire d'événement au clic sur le bouton
    menuButton.addEventListener('click', function() {
        // Parcours de toutes les balises h1 avec l'ID nameTitle
        nameTitles.forEach(function(title) {
            // Ajout de la classe CSS souhaitée
            title.classList.toggle('hidden');
        });
    });

    menuButton.addEventListener('click', function() {
        if (menuWidthSize.classList.contains('collapsed')) {
            // Si la sidebar est déjà réduite, revenir à la largeur initiale (280px)
            menuWidthSize.style.width = '280px';
            menuWidthSize.classList.remove('collapsed');
        } else {
            // Réduire la sidebar à 40px lors du clic
            menuWidthSize.style.width = '60px';
            menuWidthSize.classList.add('collapsed');
        }
    });


</script>

