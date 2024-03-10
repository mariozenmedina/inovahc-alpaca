<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Slide de Fotos</title>
    
</head>
<body>
    <div class="splide">
        <div class="splide__track">
            <div class="splide__list">
                <div class="splide__slide"><img src="https://via.placeholder.com/800x600.png?text=Imagem+1" alt=""></div>
                <div class="splide__slide"><img src="https://via.placeholder.com/800x600.png?text=Imagem+2" alt=""></div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@splidejs/splide@3.0.9/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '.splide' ).mount();
        } );
    </script>
</body>
</html>

