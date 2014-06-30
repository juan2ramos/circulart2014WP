<?php
/*
Template Name: equipo
*/
?>


<?php get_header(); ?>
<main role="main">
    <section id="convocatoria">
        <h2 class="register">Dirección</h2>
        <ul class="equipo">
            <?php $home = new WP_Query(array(
                'cat' => '14'
            ));

            while ( $home->have_posts() ) : $home->the_post();
                ?>
                <li>
                    <figure>
                        <img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                        ?>" alt=""/>
                        <figcaption>
                            <?php the_content(); ?>
                        </figcaption>
                    </figure>
                </li>
            <?php endwhile; ?>


        </ul>
        <h2 class="register">Administración</h2>
        <ul class="equipo">
            <?php $home = new WP_Query(array(
                'cat' => '15'
            ));

            while ( $home->have_posts() ) : $home->the_post();
                ?>
                <li>
                    <figure>
                        <img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                        ?>" alt=""/>
                        <figcaption>
                            <?php the_content(); ?>
                        </figcaption>
                    </figure>
                </li>
            <?php endwhile; ?>


        </ul>
        <h2 class="register">Comunicaciones, plataforma y mercadeo</h2>
        <ul class="equipo">
            <?php $home = new WP_Query(array(
                'cat' => '16'
            ));

            while ( $home->have_posts() ) : $home->the_post();
                ?>
                <li>
                    <figure>
                        <img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                        ?>" alt=""/>
                        <figcaption>
                            <?php the_content(); ?>
                        </figcaption>
                    </figure>
                </li>
            <?php endwhile; ?>


        </ul>
        <h2 class="register">Mercado y Rueda de Negocios</h2>
        <ul class="equipo">
            <?php $home = new WP_Query(array(
                'cat' => '17'
            ));

            while ( $home->have_posts() ) : $home->the_post();
                ?>
                <li>
                    <figure>
                        <img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                        ?>" alt=""/>
                        <figcaption>
                            <?php the_content(); ?>
                        </figcaption>
                    </figure>
                </li>
            <?php endwhile; ?>


        </ul>
        <h2 class="register">Producción y Logística</h2>
        <ul class="equipo">
            <?php $home = new WP_Query(array(
                'cat' => '18'
            ));

            while ( $home->have_posts() ) : $home->the_post();
                ?>
                <li>
                    <figure>
                        <img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                        ?>" alt=""/>
                        <figcaption>
                            <?php the_content(); ?>
                        </figcaption>
                    </figure>
                </li>
            <?php endwhile; ?>


        </ul>
        <canvas id="myCanvas"></canvas>
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