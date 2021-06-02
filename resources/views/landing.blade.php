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
    <div class="container" id="front"></div>
    <div class="container" id="sejarah">
        <h1>Cimahi</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dignissimos accusamus facilis eum a repudiandae culpa omnis aut, est quibusdam voluptate error? Rerum inventore voluptatem impedit numquam aut, excepturi distinctio.</p>
    </div>
    @stack('scripts')
</body>
</html>