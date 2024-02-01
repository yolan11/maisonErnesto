<section id="navbar" class="border-b border-gray-600 fixed top-0 w-full h-[60px] bg-white z-1000 overflow-x-hidden">
    <div class="w-full h-full flex justify-between items-center px-4">
        <div class="w-auto h-full flex justify-center items-center gap-4">
            <img src="{{ URL('images/logoSiteWeb/logo1.png') }}" alt="" class="w-auto h-10">
            <h1 class="font-bold text-2xl">Administration</h1>
        </div>
        <div class="w-auto h-full flex justify-center items-center">
            <form action="{{ route('Logout') }}" method="POST">
                @csrf
                <button type="submit" class=" bg-black text-white px-2 py-1">Déconnexion</button>
            </form>
        </div>
    </div>
</section>




