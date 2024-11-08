<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/menus.css') }}">
    <title>Camara</title>
</head>
<body>
    <div style="padding: 2rem;">
        <div id="qrcode"></div>
    </div>

    <a id="download" download href="">Descargar</a>

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
