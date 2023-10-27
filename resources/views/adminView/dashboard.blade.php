<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/header.css')

</head>
<body>
<div class="flex">
    <div class=" w-full h-full flex flex-col">
        <header class="w-full h-20 flex justify-between items-center px-4">
            <img src="{{ URL('images/logoSiteWeb/logo2.png') }}" alt="Logo2" class="logo2 h-8 w-auto justify-enter items-center">
            <h1 class="text-2xl">Dashboard</h1>
            <form action="{{ route('Logout') }}" method="POST">
                @csrf
                <button type="submit" class="rounded bg-black text-white px-2 py-1">Déconnexion</button>
            </form>
        </header>
        <display class="w-full h-full ">
            <div class="w-full h-full p-4">
                <div class="w-full h-full bg-gray-200 rounded-xl p-4">
                    <div class="w-full flex justify-center">
                        <h1 class="">Liste des utilisateurs admin</h1>
                    </div>
                    <table class="w-full flex flex-col">
                        <thead class="w-full">
                            <tr class="w-full flex">
                                <td class="w-1/3">Nom utilisateur</td>
                                <td class="w-1/3">Email</td>
                                <td class="w-1/3">Mot de passe crypté</td>
                            </tr>
                        </thead>
                        <tbody class="w-full">
                        @foreach ($users as $user)
                            <tr class="w-full flex">
                                <td class="w-1/3 truncate">{{ $user->name }}</td>
                                <td class="w-1/3 truncate">{{ $user->email }}</td>
                                <td class="w-1/3 truncate">{{ $user->password }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-full h-full p-4">
                <div class="w-full h-full bg-gray-200 rounded-xl flex">
                    <div class="w-full h-full flex">
                        <div class="w-3/4 h-full">
                            <div class="w-full h-full p-4">
                                <div class="w-full flex justify-center">
                                    <h1 class="">Liste des Marques</h1>
                                </div>
                                <table class="w-full flex flex-col">
                                    <thead class="w-full">
                                    <tr class="w-full flex">
                                        <td class="w-full">Marques</td>
                                        <td class="w-full">Site de la marque</td>
                                        <td class="w-full">Image</td>
                                        <td class="">Supprimer</td>
                                        <td class="">Modifier</td>
                                    </tr>
                                    </thead>
                                    <tbody class="w-full h-[200px] overflow-auto">
                                    @foreach ($brands as $brand)
                                        <tr class="w-full flex">
                                            <td class="w-full truncate">{{ $brand->marque }}</td>
                                            <td class="w-full truncate">{{ $brand->lienSiteWeb }}</td>
                                            <td class="w-full truncate">{{ $brand->image }}</td>
                                            <td class="">
                                                <form action="{{ route('Brands.destroy', $brand->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600">Supprimer</button>
                                                </form>
                                            </td>
                                            <td class="">
                                                <a href="#" class="text-blue-600 editLink">Modifier</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="w-1/4 h-full flex justify-center items-center">
                            <div class="w-full h-full flex flex-col">
                                @if (session('successAddBrand'))
                                    <div class="w-full bg-yellow-400 alert alert-success flex justify-center items-center">
                                        {{ session('successAddBrand') }}
                                    </div>
                                @endif
                            <form action="{{ route('Brands.store') }}" method="POST" class="w-full h-full flex flex-col justify-center align-center">
                                @csrf
                                <input name="marque" id="marque" type="text" placeholder="Nom de la marque" class="m-4" required>
                                <input name="lienSiteWeb" id="lienSiteWeb" type="text" placeholder="Lien du site web" class="m-4" required>
                                <input name="image" id="image" type="text" placeholder="Logo de la marque" class="m-4" required>
                                <button type="submit" class="bg-black m-4 py-2 text-white">Importer la marque</button>
                            </form>
                        </div>
                    </div>
                    </div>
            </div>
            </div>
        </display>
    </div>
</div>

<div id="editModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="modal-container bg-white w-1/2 p-6 rounded-lg shadow-lg">
        <div class="modal-close absolute top-0 right-0 cursor-pointer p-4">
            <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 111.414 1.414L11.414 10l2.293 2.293a1 1 0 11-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z" />
            </svg>
        </div>
        <h2 class="text-xl font-semibold mb-4">Modifier la marque {{ $brand->marque }} </h2>

        @if (session('errorEditBrand'))
            <div class="text-red-600 mb-4">{{ session('errorEditBrand') }}</div>
        @endif

        <form action="{{ route('Brands.update', $brand->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="marque" class="block text-sm font-medium text-gray-700">Nom de la marque:</label>
                <input type="text" name="marque" id="marque" value="{{ $brand->marque }}" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="lienSiteWeb" class="block text-sm font-medium text-gray-700">Lien du site web:</label>
                <input type="text" name="lienSiteWeb" id="lienSiteWeb" value="{{ $brand->lienSiteWeb }}" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Logo de la marque:</label>
                <input type="text" name="image" id="image" value="{{ $brand->image }}" class="form-input mt-1 block w-full" required>
            </div>

            <div class="flex justify-end mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Enregistrer les modifications</button>
            </div>
        </form>
    </div>
</div>

<script>
    // dashboard.js

    // Obtenez la fenêtre modale
    var modal = document.getElementById('editModal');

    // Obtenez le lien pour ouvrir la fenêtre modale
    var editLinks = document.querySelectorAll('.editLink');

    // Obtenez le bouton de fermeture
    var closeBtn = document.querySelector('.modal-close');

    // Ouvrez la fenêtre modale lorsque l'utilisateur clique sur un lien "Modifier"
    editLinks.forEach(function(editLink) {
        editLink.addEventListener('click', function(e) {
            e.preventDefault();
            modal.classList.remove('hidden');
        });
    });

    // Fermez la fenêtre modale lorsque l'utilisateur clique sur le bouton de fermeture
    closeBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
    });

    // Fermez la fenêtre modale lorsque l'utilisateur clique en dehors de celle-ci
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>

</body>
</html>
