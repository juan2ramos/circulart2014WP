
<?php get_header(); ?>
<main role="main">
<section >
    <div class="download">
        <a href="http://circulart.org/que-es-una-rueda-de-negocios"><span>¿Qué es una rueda de negocios?</span></a>
        <a href="http://circulart.org/jornadas-preparatorias"><span class="orange">Jornadas preparatorias</span></a>
    </div>
    <a href="http://circulart.org/wp-content/themes/templateCirculart/images/ConvocatoriaArtistas.pdf" target="_blank" id="a-download">

    <div class="download download-contend">
         <figure><img src="<?php bloginfo('template_directory'); ?>/images/human-circulart.png" alt=""/></figure>
            <p class="p-download">DESCARGA</p>
            <p class="p">la convocatoria completa</p>

    </div>
    </a>
</section>
<section id="convocatoria">

    <?php $home = new WP_Query(array(
        'cat' => '2'
    ));

    while ( $home->have_posts() ) : $home->the_post();
        ?>
        <h2 class="convocatoria"><?php the_title(); ?></h2>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <?php the_content(); ?>
        </article>
        <iframe class="inline" width="430" height="315" src="//www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'link', true); ?>" frameborder="0" allowfullscreen></iframe>

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