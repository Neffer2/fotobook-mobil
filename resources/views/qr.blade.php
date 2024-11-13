<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/qr.css') }}">
    <script src="https://kit.fontawesome.com/15bc5276a1.js" crossorigin="anonymous"></script>
    <title>Camara</title>
</head>
<body>
    <div class="qr-container">
        <h1 class="title">Escanea el c&oacute;digo QR y descubre tu foto</h1>
        <div id="qrcode"></div>
        <a id="download" download href="">
            <h1>&Oacute; descarga tu foto aqu&iacute;</h1>
        </a>
        <a href="{{ route('home') }}" class="button">
            <i class="fa-solid fa-house fa-2xl"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>
    <script>
        // Generar un código QR con un enlace
        function generateQRCode(url) {
            var qrcodeContainer = document.getElementById('qrcode');
            qrcodeContainer.innerHTML = ""; // Limpiar cualquier código QR previo
            new QRCode(qrcodeContainer, {
                text: url,
                width: 500,
                height: 500
            });
        }

        let download = document.getElementById('download');
        const urlParams = new URLSearchParams(window.location.search);
        const path = urlParams.get('image');
        generateQRCode('https://mobil.planvisionarios.com/storage/photos/' + path);
        download.href = 'https://mobil.planvisionarios.com/storage/photos/' + path;
    </script>
</body>
</html>
