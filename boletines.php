<?php
/*
Template Name: boletines
*/
?>


<?php get_header(); ?>
    <main role="main">
        <section>
            <figure class="banner-2"><img src="<?php bloginfo('template_directory'); ?>/images/profesionales.png"
                                          alt=""/></figure>
        </section>
        <section id="convocatoria">
            <table>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Asunto</th>
                    <th>Fecha</th>
                </tr>
                </thead>
                <tbody>
                <?php $home = new WP_Query(array(
                    'cat' => '19'
                ));
                $idNumber = 1;
                while ($home->have_posts()) : $home->the_post();
                    ?>
                    <tr>
                        <td><?php echo($idNumber) ?></td>
                        <td><?php the_content(); ?></td>
                        <td><?php echo get_the_date(); ?></td>
                        <td><a href="<?php echo get_post_meta($post->ID, 'link', true); ?>">Ver</a></td>
                        ;
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>

            <h2 class="register"><a href="http://circulart.org/mercado" target="_blank">registrarse</a></h2>
            <canvas id="myCanvas"></canvas>
        </section>

    </main>
    <script>


        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');
        doResize();
        window.onresize = function () {
            doResize();
        };
        function doResize() {

            context.canvas.width = 1060;
            context.beginPath();
            context.moveTo(0, 10);
            context.lineTo(500, 10);
            context.lineTo(900, 80);
            context.lineTo(window.innerWidth - 20, 20);

            context.stroke();
        }

    </script>


<?php get_footer(); ?>