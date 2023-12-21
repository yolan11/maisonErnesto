@extends('Brand.Brands')

@section('content')
    <div class="pt-20 min-h-screen">
        <div class="w-full h-full flex items-center justify-center flex-col">
            <div class="w-full h-[250px] gap-4 flex flex-col justify-center items-center">
                <h1 class="text-4xl font-bold">Workspace sale</h1>
                <p class="">Our thoughtfully designed workspace objects are crafted in limited runs. Improve your
                    productivity
                    and organization with these sale items before we run out.
                </p>
            </div>
            <div class="w-full flex h-full flex-col">
                <div class="w-full flex h-14 border-y border-gray-300">
                    <div class="w-10/12">
                        <input id="searchbar" onkeyup="search()" class=" center-text w-full h-full border-none "
                               type="search"
                               placeholder="Rechercher une marque" name="search">
                    </div>
                    <div class="relative w-2/12 flex justify-center items-center border-l border-gray-300">
                        <button id="openModal" class="flex justify-center items-center gap-2">
                            <span>Categorie</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </button>
                        <!-- Modal -->
                        <div id="modal" class="absolute top-[60px] flex items-center justify-center hidden">
                            <div class="bg-white shadow-lg w-[150px] p-2 flex flex-col gap-1">
                                <!-- Radio boutons pour choisir le type -->
                                <div class="flex items-center justify-center w-full h-full">
                                    <a href="{{ route('brandsPageCompagny') }}"
                                       class="w-full h-full hover:bg-gray-200 px-4 py-2 font-bold text-center">Entreprise</a>
                                </div>
                                <div class="flex items-center justify-center w-full h-full">
                                    <a href="{{ route('brandsPageCustomer') }}"
                                       class="w-full h-full hover:bg-gray-200 px-4 py-2 text-center">Particulier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full flex h-14 border-b border-gray-300 bg-gray-200 justify-start items-center px-4 gap-4">
                    <p class="">Filtre</p>
                    <a href="{{ route('Brand') }}"
                       class=" flex justify-center items-center gap-2 bg-white px-4 py-1 rounded-xl">
                        <span>Entreprise</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 m-16" id="brandsContainer">
            @foreach ($brands as $brand)
                @if ($brand->categorie === 'entreprise')
                    <div id="brand" name="{{ $brand->marque }}" class="flex items-center justify-center m-4">
                        <a href="{{ $brand->lienSiteWeb }}"
                           class="flex justify-center align-center" target="_blank">
                            <img src="{{ $brand->image }}" class="w-2/5">
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
