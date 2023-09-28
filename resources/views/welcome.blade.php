<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1=0">
    @vite('resources/css/app.css')
    <title>Maison Ernesto</title>
    <link rel="icon" type="image/x-icon" href="/public/images/logoSiteWeb/logo2.png">
</head>
<body class="bg-blue-200">
@include('layouts/Header')

<div class="relative overflow-hidden bg-gray-100" id="home">
    <div class="carousel flex transition-transform duration-300 ease-in-out">
        <div class="carousel-slide w-full h-screen flex-shrink-0 flex justify-center items-center">
            <img src="{{ URL('images/Carrousel/image11.jpg') }}" alt="Image 1" class="w-full h-auto transform transition-transform duration-300 scale-100 ">
        </div>
        <div class="carousel-slide w-full h-screen flex-shrink-0 flex justify-center items-center">
            <img src="{{ URL('images/Carrousel/image11.jpg') }}" alt="Image 2" class="w-full h-auto transform transition-transform duration-300 scale-100 ">
        </div>
        <div class="carousel-slide w-full h-screen flex-shrink-0 flex justify-center items-center">
            <img src="{{ URL('images/Carrousel/image11.jpg') }}" alt="Image 3" class="w-full h-auto transform transition-transform duration-300 scale-100 ">
        </div>
        <div class="carousel-slide w-full h-screen flex-shrink-0 flex justify-center items-center">
            <img src="{{ URL('images/Carrousel/image11.jpg') }}" alt="Image 4" class="w-full h-auto transform transition-transform duration-300 scale-100 ">
        </div>
    </div>
    <div class="carousel-dots absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <span class="dot w-2 h-2 bg-black rounded-full" data-index="0"></span>
        <span class="dot w-2 h-2 bg-gray-400 rounded-full" data-index="1"></span>
        <span class="dot w-2 h-2 bg-gray-400 rounded-full" data-index="2"></span>
        <span class="dot w-2 h-2 bg-gray-400 rounded-full" data-index="3"></span>
    </div>
</div>
    <script>
        const carousel = document.querySelector('.carousel');
        const dots = document.querySelectorAll('.dot');

        let currentIndex = 0;

        function updateCarousel() {
            const offset = currentIndex * -100;
            carousel.style.transform = `translateX(${offset}%)`;

            dots.forEach((dot, index) => {
                dot.classList.toggle('bg-black', index === currentIndex);
                dot.classList.toggle('bg-gray-400', index !== currentIndex);
            });
        }

        function selectSlide(index) {
            currentIndex = index;
            updateCarousel();
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                selectSlide(index);
            });
        });

        function nextSlide() {
            currentIndex = (currentIndex + 1) % 4;
            updateCarousel();
        }

        setInterval(nextSlide, 4000); // Change image every 4 seconds
    </script>

</body>
</html>


