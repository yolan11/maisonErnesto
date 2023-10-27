<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/header.css')

</head>
<body>
<div class="w-full h-full flex justify-center items-center px-[200px]">
    <div class="w-full h-full bg-[#6e4836] h-[500px] flex justify-center items-center flex-col">
        <div class="w-4/5 h-full py-10 border-b border-white flex">
            <div class=" w-3/5 h-full flex flex-col justify-start">
                <h1 class="text-4xl text-white py-6">Contact</h1>
                <a href="mailto:contact@maisonernesto.fr" class="flex justify-start items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-4 h-4 mr-2">
                        <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                    </svg>
                    <p class="text-xl text-white py-2 group-hover:text-gray-500 group-hover:duration-500 duration-500">Contact@maisonernesto.fr</p>
                </a>
                <a href="tel:+33344662081" class="flex justify-start items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4 mr-2">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-xl text-white py-2 group-hover:text-gray-500 group-hover:duration-500 duration-500">+33 034 466 2081</p>
                </a>
                <a href="https://maps.app.goo.gl/AnNMd2fa8MyuudYQ9" class="flex justify-start items-center group" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4 mr-2">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-xl text-white py-2 group-hover:text-gray-500 group-hover:duration-500 duration-500">80 Av. du Poteau, 60300 Chamant</p>
                </a>
            </div>
            <div class=" w-2/5 h-full flex flex-col">
                <h1 class="text-4xl text-white py-6">Suivez-nous</h1>
                <a href="https://www.instagram.com/maisonernesto/" class="flex justify-start items-center group" target="_blank">
                    <img src="{{ URL('images/socialNetwork/instagram.png') }}" alt="" class="w-5 h-5 mr-2">
                    <p class="text-white text-xl group-hover:text-gray-500 group-hover:duration-500 duration-500">Instagram</p>
                </a>
            </div>
        </div>
        <div class="w-4/5 h-20 flex justify-center items-center flex-col">
            <h1 class="text-white">© 2023 Maison Ernesto | Tous droits réservés</h1>
            <a href="#" class="hover:underline text-white">confidentialité</a>
        </div>
    </div>
</div>
</body>
</html>
