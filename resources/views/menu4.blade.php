<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/menus.css') }}">
    <script src="https://kit.fontawesome.com/15bc5276a1.js" crossorigin="anonymous"></script>
    <title>Mobil</title>
</head>
<body>
    <div class="menu-container">
        <div class="menu">
            <a href="/camera?overlay=brad_1.png" class="menu-item" id="tatan1">
                <img src="{{ asset('assets/sub_menu/filtro/brad_menu.png') }}" alt="Logo" class="logo">
            </a>
        </div>
        <a href="{{ route('home') }}" class="button">
            <i class="fa-solid fa-house fa-2xl"></i>
        </a>
    </div>
</body>
</html>
