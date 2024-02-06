<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([
        'resources/sass/app.scss', 
        'resources/js/app.js', 
        'resources/css/main.css',
        'resources/css/chat.css',
        'resources/css/lp.css',
    ]) 
    <title>Catalogo de Boda</title>
</head>
<body class="container">
    <header class="header-style d-flex justify-content-between align-items-center">

        <h1 class="col-5 col-md-2 text-sm-center text-left">
            <a href="index" class="title-font hover-action">Esposo y Esposa</a>
        </h1>
        
        <nav class="col-md-9 global_nav">
            <ul class="nav col-md-12 col-9 justify-content-around">
                <li class="nav-item me-3"><a href="{{ route('lp'); }}">productos</a></li>
                <li class="nav-item me-3"><a href="{{ route('profile'); }}">nosotros</a></li>
                <li class="nav-item me-3"><a href="{{ route('catalog'); }}">catálogo</a></li>
            </ul>
        </nav>
    
        {{-- ハンバーガーメニューは、別のエレメントに変更する --}}
        {{-- <div class="open-btn hamburger_menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    
        <nav id="g-nav" class="hamburger_menu bg-light d-flex justify-content-center align-items-start">
            <ul class="pt-5 hamburger_menu">
                <li class="nav-item me-3 p-1 mb-5"><a class="h4" href="midori">MIDORI について</a></li>
                <li class="nav-item me-3 p-1 mb-5"><a class="h4" href="profile">私たち について</a></li>
                <li class="nav-item me-3 p-1 mb-5"><a class="h4" href="catalogList">引き出物を選ぶ</a></li>
            </ul>
        </nav> --}}
    
    </header>
    {{ $slot }}
    <footer style="height:20vh;">
        <div class="h-100 p-5">
            <div class="text-center title-font text-muted fs-2">
                <p class="m-0">Happy Wedding</p>
                <p class="m-0"> ~ </p>
            </div>
        </div>
    </footer>
</body>
</html>