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
        <display class="bg-yellow-200 w-full h-full flex ">
            <div class="w-1/2 h-full p-4">
                <div class="w-full h-full bg-white rounded-xl">
                    <h1>Liste des Utilisateurs</h1>

                    <ul>
                        @foreach ($users as $user)
                            <li>{{ $user->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="w-1/2 h-full p-4">
                <div class="w-full h-full bg-white rounded-xl"></div>
            </div>
        </display>
    </div>

</div>
</body>
</html>
