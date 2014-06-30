<?php
/*
Template Name: contacto
*/
?>


<?php get_header(); ?>
    <main role="main">

        <section id="convocatoria">

            <form action="" id="form-contact" method="post">
                <div class="input-contend">
                    <label for="name">nombre : </label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="input-contend">
                    <label for="email">E-mail : </label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-contend">
                    <label for="phone">Telefono : </label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div class="input-contend">
                    <label for="comment">Comentario : </label>
                    <textarea name="comment" id="comment"></textarea>
                </div>
                <div class="input-contend">
                    <label for="dirigido">Dirigido a : </label>
                    <select name="dirigido" id="">
                        <option value="juanramos@redlat.org">Información</option>
                        <option value="juanramos@redlat.org">Administración</option>
                        <option value="juanramos@redlat.org">Información</option>
                    </select>
                </div>
                <input type="submit" class="submit">
            </form>
            <div class="contact-info">
                <h3>O puedes escribirle a...</h3>
                <div>
                    Información General REDLAT<br>
                    <a href="mailto:info@redlat.org">info@redlat.org</a><br>
                </div>
                <div>
                    Información General CIRCULART<br>
                    <a href="mailto:info@circulart.org">info@circulart.org</a><br>
                </div>
                <div>

                    Secretaria Ejecutiva-Tesorera<br>
                    Beatriz Elena García<br>
                    <a href="mailto:bettygarcia@redlat.org">bettygarcia@redlat.org</a><br>
                </div>
            </div>
        </section>

    </main>
    <script>


        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');
        doResize();
        window.onresize=function() { doResize(); };
        function doResize()
        {

            context.canvas.width = 1060;
            context.beginPath();
            context.moveTo(0, 10);
            context.lineTo(500, 10);
            context.lineTo(900, 80);
            context.lineTo(window.innerWidth-20, 20);

            context.stroke();
        }

    </script>


<?php get_footer(); ?>