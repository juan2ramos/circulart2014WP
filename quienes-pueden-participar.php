<?php
/*
Template Name: quienes-pueden-participar
*/
?>

<?php get_header(); ?>
    <main role="main">
        <section >
            <div class="download">
                <span>¿Qué es una rueda de negocios?</span>
                <span class="orange">Jornadas preparatorias</span>
            </div>
            <div class="download download-contend">
                <figure><img src="<?php bloginfo('template_directory'); ?>/images/human-circulart.png" alt=""/></figure>
                <p class="p-download">DESCARGA</p>
                <p class="p">la convocatoria completa</p>
            </div>
        </section>
        <section id="convocatoria">

            <?php $home = new WP_Query(array(
                'cat' => '4'
            ));

            while ( $home->have_posts() ) : $home->the_post();
                ?>
                <h2 class="convocatoria"><?php the_title(); ?></h2>
                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                    <?php the_content(); ?>
                </article>

            <?php endwhile; ?>

            <h2 class="register"><a href="http://circulart.org/mercado" target="_blank">registrarse</a></h2>
            <canvas id="myCanvas"></canvas>
        </section>

    </main>


<?php get_footer(); ?>