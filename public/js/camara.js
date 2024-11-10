document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const overlaySrc = urlParams.get('overlay');
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const captureButton = document.getElementById('capture');
    const overlay = document.getElementById('overlay');
    const capturedImage = document.getElementById('captured-image');

    if (overlaySrc) {
        overlay.src = `assets/${overlaySrc}`;
    }

    function startCamera() {
        navigator.mediaDevices.getUserMedia({ video: { width: 756, height: 1345 } })
            .then(stream => {
                video.srcObject = stream;

                video.play(); 

                
                // Ajustar el tamaño del canvas al tamaño del video
                video.addEventListener('loadedmetadata', () => {
                    canvas.width = 756;
                    canvas.height = 1345;
                });
            })
            .catch(err => {
                console.error("Error accessing the camera: ", err);
            });
    }

    captureButton.addEventListener('click', () => {
        setTimeout(() => {
            const context = canvas.getContext('2d');
            // Dibujar el video en el canvas
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            // Dibujar la imagen superpuesta en el canvas
            const overlayWidth = canvas.width;
            const overlayHeight = canvas.height;
            const overlayX = 0;
            const overlayY = 0;

            context.drawImage(overlay, overlayX, overlayY, overlayWidth, overlayHeight);

            // Obtener la imagen capturada como data URL
            const dataURL = canvas.toDataURL('image/png');
            capturedImage.src = dataURL;
            capturedImage.style.display = 'block';

            axios.post('/storePhoto', {
                image: dataURL
            })
            .then(response => {
                let data = response.data;
                if (data.code == 200){
                    window.location.href = '/qr?image=' + data.image;
                }
            })
            .catch(error => {
                console.error("Error saving the image: ", error);
            });
        }, 1000);
    });


    startCamera();
});

// Cristian cajica
// Jack Miller
// Brad Binder
// Max
// Nana
