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
        <div id="tagline"><span style="color:#193534;font-weight:500">Wilujeng Sumping di</span><h1>KOTA CIMAHI</h1></div>
    </div>
    <div class="container" id="sejarah">
        <h1>Cimahi</h1>
        <p>Kota kecil yang di wilayah aglomerasi Bandung Raya, baru saja lahir </p>
    </div>
    @stack('scripts')
</body>
</html>