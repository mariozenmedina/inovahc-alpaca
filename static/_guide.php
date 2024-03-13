<!-- Pega o Header -->
<?php $current_page = 'search'; get_header(); ?>

    
    <main>
        <section>
            <div class="banner">
                <div class="container-banner">
                    <figure id="scene">
                        <img data-depth-x="0.3" src="./assets/img/banner/banner1.png" alt="" class="principal">
                        <img data-depth-x="0.9" src="./assets/img/banner/esquerda1.svg" alt="" class="esquerda">
                        <img data-depth-x=".25" src="./assets/img/banner/direita1.svg" alt="" class="direita">
                    </figure>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var scene = document.getElementById("scene");
            var parallaxInstance = new Parallax(scene, {
                relativeInput: true,
            });
        });
    </script>

</body>
</html>
