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
    <div class=" w-full h-screen flex flex-col">
        <header class="w-full h-20 bg-blue-400 flex justify-between items-center px-4">
            <img src="{{ URL('images/logoSiteWeb/logo2.png') }}" alt="Logo2" class="logo2 h-8 w-auto justify-enter items-center">
            <h1 class="text-2xl">Dashboard</h1>
            <form action="{{ route('Logout') }}" method="POST">
                @csrf
                <button type="submit" class="rounded bg-white px-2 py-1">Déconnexion</button>
            </form>
        </header>
        <display class="w-full h-full ">
            <div class="w-full h-full p-4">
                <div class="w-full h-full bg-gray-400 rounded-xl">
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
                <div class="w-full h-full bg-gray-400 rounded-xl"></div>
            </div>
        </display>
    </div>
</div>
</body>
</html>
