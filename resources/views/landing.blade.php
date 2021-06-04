<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.layout')
    @stack('styles')
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </nav>
    <div class="container" id="front">
        <div id="tagline">discoverCimahi</Wilujeng></div>
    </div>
    <div class="container rellax" data-rellax-speed="5" id="sejarah">
    <span id="h1">Wilujeng Sumping di Kota Cimahi !</span>
        <div id="img"><img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622743045/Discover%20Cimahi/asdasd_avbpr4.jpg" alt=""></div>
        <div class="text">    
            <p>Cimahi adalah kota kecil yang berada di wilayah aglomerasi Bandung Raya, sebelumnya bagian dari Kota Bandung hingga menjadi ditetapkan menjadi Kota Otonom pada 21 Juni 2001</p>
        </div>
    </div>
    @stack('scripts')
</body>
</html>