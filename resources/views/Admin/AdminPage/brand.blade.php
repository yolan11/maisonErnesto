@extends('Admin.dashboard')

@section('content')
    <section id="content" class=" flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <div class="relative w-full h-full flex flex-col ">

            <!-- Bouton affichage modal création de marque -->
            <div class="w-full flex justify-start items-center">
                <button id="newBrandButton" class="p-4 bg-black text-white flex justify-center items-center">Créer une marque</button>
            </div>

            <!-- Affichage message -->
            <div class=" flex justify-center items-center">
                <div class="w-full h-full flex flex-col">
                    @if (session('successAddBrand'))
                        <div class="w-full bg-yellow-400 alert alert-success flex justify-center items-center">
                            {{ session('successAddBrand') }}
                        </div>
                    @endif
                    @if (session('successDeleteBrand'))
                        <div class="w-full bg-yellow-400 alert alert-success flex justify-center items-center">
                            {{ session('successDeleteBrand') }}
                        </div>
                    @endif
                    @if (session('successUpdateBrand'))
                        <div class="w-full bg-yellow-400 alert alert-success flex justify-center items-center">
                            {{ session('successUpdateBrand') }}
                        </div>
                    @endif

                </div>
            </div>

            <!-- Tableau pour afficher les marques -->
            <div class="w-full h-full overflow-y-scroll flex flex-col gap-4">
                <table class="table-auto border-collapse border border-slate-400">
                    <thead class=" bg-gray-200">
                    <tr class="">
                        <th class="border border-slate-300 p-4 max-w-xs">Marque</th>
                        <th class="border border-slate-300 p-4 max-w-xs">Categorie</th>
                        <th class="border border-slate-300 p-4 max-w-xs">Logo de la marque</th>
                        <th class="border border-slate-300 p-4 max-w-xs">Modifier</th>
                        <th class="border border-slate-300 p-4 max-w-xs">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach ($brands as $brand)
                        <tr class="py-4">
                            <td class="border border-slate-300 p-4 truncate max-w-xs">{{ $brand->marque }}</td>
                            <td class="border border-slate-300 p-4 truncate max-w-xs">{{ $brand->categorie }}</td>
                            <td class="border border-slate-300 p-4 truncate max-w-xs">{{ $brand->image }}</td>
                            <td class="border border-slate-300 max-w-xs">
                                <button id="edit-btn" class="w-full p-4 h-full bg-blue-300" value="{{ $brand->id }}">
                                    Modifier
                                </button>
                            </td>
                            <td class="border border-slate-300 max-w-xs">
                                <form action="{{ route('Brand.destroy', $brand->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full p-4 h-full bg-red-300">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal pour modifier une marque -->
            <div id="myModal" class="absolute bg-black w-full h-full bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white w-[500px] flex justify-center items-center">
                    <div class=" w-full h-full flex flex-col justify-center items-center">
                        <form id="updateForm" action="{{ route('Brand.update', $brand->id) }}" method="POST" class="w-full flex flex-col justify-center align-center">
                            @method('PUT')
                            @csrf
                            <label for="editMarque" class="m-4">Nom de la marque</label>
                            <input name="editMarque" id="editMarque" type="text" placeholder="Nom de la marque" class="m-4" required>
                            <label for="editLogo" class="m-4">Lien du logo</label>
                            <input name="editLogo" id="editLogo" type="text" placeholder="Logo website" class="m-4" required>
                            <label for="editCategorie" class="m-4">Catégorie de la marque</label>
                            <select name="editCategorie" id="editCategorie" class="m-4" required>
                                <option value="entreprise">Entreprise</option>
                                <option value="particulier">Particulier</option>
                            </select>
                            <button id="saveChanges" type="submit" class="bg-black m-4 py-2 text-white">Mettre à jour la marque</button>
                        </form>
                        <div class="w-full p-4 flex">
                            <button id="close" class="w-full bg-black py-2 text-white">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal pour créer une marque -->
            <div id="brandCreateModal" class="absolute bg-black w-full h-full bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white w-[500px] flex justify-center items-center">
                    <div class=" w-full h-full flex flex-col justify-center items-center">
                        <form action="{{ route('Brand.store') }}" method="POST" class="w-full h-full flex flex-col justify-center align-center">
                            @csrf
                            <label for="marque" class="m-4">Nom de la marque</label>
                            <input name="marque" id="marque" type="text" class="m-4" required>
                            <label for="logo" class="m-4">Lien du logo</label>
                            <input type="text" name="logo" id="logo" class="m-4" required>
                            <label for="categorie" class="m-4">Catégorie de la marque</label>
                            <select name="categorie" id="categorie" class="m-4" required>
                                <option value="entreprise">Entreprise</option>
                                <option value="particulier">Particulier</option>
                            </select>
                            <button type="submit" class="bg-black m-4 py-2 text-white">importer</button>
                        </form>
                        <div class="w-full p-4 flex">
                            <button id="closeBrandCreateModal" class="w-full bg-black py-2 text-white">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Script pour afficher la modal d'update -->
    <script>
        // Récupérer tous les boutons "Modifier"
        var editButtons = document.querySelectorAll('#edit-btn');

        // Boucler sur chaque bouton "Modifier"
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var row = this.parentNode.parentNode; // Récupérer la ligne parente du bouton
                var cells = row.querySelectorAll('td'); // Récupérer toutes les cellules de la ligne

                // Récupérer les données de chaque cellule
                var marque = cells[0].innerText.trim();
                var lienSiteWeb = cells[1].innerText.trim();
                var image = cells[2].innerText.trim();

                // Récupérer l'ID de la ligne à modifier depuis la valeur du bouton
                var id = this.value;

                // Pré-remplir les champs de la modal avec les données récupérées
                document.getElementById('editMarque').value = marque;
                document.getElementById('editLogo').value = image;

                // Mettre à jour l'attribut "action" du formulaire de mise à jour avec l'ID de la ligne
                var updateForm = document.getElementById('updateForm');
                updateForm.action = "{{ route('Brand.update', ':id') }}".replace(':id', id);

                // Afficher la modal
                document.getElementById('myModal').style.display = 'flex';
            });
        });

        // Gérer la fermeture de la modal
        document.querySelector('#close').addEventListener('click', function() {
            document.getElementById('myModal').style.display = 'none';
        });
    </script>

    <!-- Script pour afficher la modal de création -->
    <script>
        // Récupérer tous les boutons "Modifier"
        var editButtons = document.querySelectorAll('#newBrandButton');

        // Boucler sur chaque bouton "Modifier"
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                console.log('1')
                document.getElementById('brandCreateModal').style.display = 'flex';
            });
        });

        // Gérer la fermeture de la modal
        document.querySelector('#closeBrandCreateModal').addEventListener('click', function() {
            document.getElementById('brandCreateModal').style.display = 'none';
        });
    </script>

@endsection
