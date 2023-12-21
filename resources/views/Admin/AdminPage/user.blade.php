@extends('Admin.dashboard')

@section('content')
    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <div class="relative w-full h-full flex flex-col">
            <div class="w-full flex justify-start items-center">
                <button id="newUserButton" class="p-4 bg-black text-white flex justify-center items-center">Créer un utilisateur</button>
            </div>
            <div class="w-full h-full overflow-y-scroll flex flex-col gap-4">
                <table class="table-auto  border-collapse border border-slate-400">
                    <thead class=" bg-gray-200">
                    <tr class="">
                        <th class="border border-slate-300 p-4">Nom</th>
                        <th class="border border-slate-300 p-4">Email</th>
                        <th class="border border-slate-300 p-4">Mot de passe</th>
                        <th class="border border-slate-300 p-4">Modifier</th>
                        <th class="border border-slate-300 p-4">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach ($users as $user)
                        <tr class="py-4">
                            <td class="border border-slate-300 p-4">{{ $user->name }}</td>
                            <td class="border border-slate-300 p-4">{{ $user->email }}</td>
                            <td class="border border-slate-300 p-4">{{ $user->password }}</td>
                            <td class="border border-slate-300"><button class="w-full p-4 h-full bg-blue-300">Modifier</button></td>
                            <td class="border border-slate-300">
                                <form action="{{ route('User.destroy', $user->id) }}" method="POST">
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

            <!-- modal pour créer un nouvel utilisateur -->
            <div id="userCreateModal" class="absolute bg-black w-full h-full bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white w-[500px] flex justify-center items-center">
                    <div class=" w-full h-full flex flex-col justify-center items-center">
                        <form action="{{ route('Register.store') }}" method="POST" class="w-full flex flex-col justify-center align-center">
                            @csrf
                            <input name="name" id="name" type="text" placeholder="Nom" class="m-4 " required>
                            <input name="email" id="email" type="email" placeholder="Email" class="m-4" required>
                            <input name="password" id="password" type="password" placeholder="Mot de passe" class="m-4" required>
                            <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirmation de mot de passe" class="m-4" required>
                            <button type="submit" class="bg-black m-4 py-2 text-white">Créer un nouvel utilisateur</button>
                        </form>
                        <div class="w-full p-4 flex">
                            <button id="close" class="w-full bg-black py-2 text-white">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal pour modifier un nouvel utilisateur -->

        </div>
    </section>

    <script>
        // Récupérer tous les boutons "Modifier"
        var editButtons = document.querySelectorAll('#newUserButton');

        // Boucler sur chaque bouton "Modifier"
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                console.log('1')
                document.getElementById('userCreateModal').style.display = 'flex';
            });
        });

        // Gérer la fermeture de la modal
        document.querySelector('#close').addEventListener('click', function() {
            document.getElementById('userCreateModal').style.display = 'none';
        });
    </script>
@endsection
