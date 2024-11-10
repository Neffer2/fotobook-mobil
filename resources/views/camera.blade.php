<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/menus.css') }}">
    <title>Camara</title>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <div class="camara-container" id="camara-container">
        <div class="video-wrapper">
            <video id="video" autoplay></video>
            <img id="overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%;">
        </div>
        <button id="capture">Capture</button>
        <canvas id="canvas" width="756" height="1344" style="display: none;"></canvas>
        <img id="captured-image" style="display: none; margin-top: 20px;">
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/camara.js') }}"></script>
</body>
</html> 
