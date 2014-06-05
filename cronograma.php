<?php
/*
Template Name: curadores
*/
?>


<?php get_header(); ?>
    <main role="main">
        <section id="convocatoria">

            <?php $home = new WP_Query(array(
                'cat' => '7'
            ));

            while ( $home->have_posts() ) : $home->the_post();
                ?>
                <h2 class="convocatoria"><?php the_title(); ?></h2>
                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                    <?php the_content(); ?>
                </article>
                <figure class="inline"><img src="<?php
                    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                    echo $src[0];
                    ?>" alt=""/></figure>
            <?php endwhile; ?>

            <h2 class="register"><a href="http://circulart.org/mercado" target="_blank">registrarse</a></h2>
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