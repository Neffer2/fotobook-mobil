<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/camera.css') }}">
    <script src="https://kit.fontawesome.com/15bc5276a1.js" crossorigin="anonymous"></script>
    <title>Camara</title>
</head>
<body>
    <div class="camara-container" id="camara-container">
        <div class="video-wrapper">
            <video id="video" autoplay></video>
            <img id="overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%;">
        </div>
        <canvas id="canvas" width="756" height="1344" style="display: none;"></canvas>
        <img id="captured-image" style="display: none; margin-top: 20px;">
        <button id="capture" class="button-captura">
            <i class="fa-solid fa-camera fa-2xl"></i>
        </button>
        <a href="{{ route('home') }}" class="button">
            <i class="fa-solid fa-house fa-2xl"></i>
        </a>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/camara.js') }}"></script>
</body>
</html>
