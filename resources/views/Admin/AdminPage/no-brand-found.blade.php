@extends('Admin.dashboard')

@section('content')
    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <div class="relative w-full h-full flex flex-col ">
            <div id="pictureCreateModal" class="absolute bg-black w-full h-full bg-opacity-50 flex justify-center items-center">
                <div class="bg-white w-[500px] flex justify-center items-center">
                    <div class=" w-full h-full flex flex-col justify-center items-center">
                        <form action="{{ route('Brand.store') }}" method="POST" class="w-full h-full flex flex-col justify-center align-center">
                            @csrf
                            <input name="marque" id="marque" type="text" placeholder="Nom de la marque" class="m-4" required>
                            <input type="text" name="logo" id="logo" placeholder="logo website" class="m-4" required>
                            <select name="categorie" id="categorie" class="m-4" required>
                                <option value="entreprise">Entreprise</option>
                                <option value="particulier">Particulier</option>
                            </select>
                            <button type="submit" class="bg-black m-4 py-2 text-white">importer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
