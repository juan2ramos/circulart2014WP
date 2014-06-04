
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
        'cat' => '2'
    ));

    while ( $home->have_posts() ) : $home->the_post();
        ?>
        <h2 class="convocatoria"><?php the_title(); ?></h2>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <?php the_content(); ?>
        </article>

    <?php endwhile; ?>

    <h2 class="register">registrarse</h2>
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

        context.canvas.width = window.innerWidth-110;
        context.beginPath();
        context.moveTo(0, 10);
        context.lineTo(500, 10);
        context.lineTo(1020, 80);
        context.lineTo(window.innerWidth-20, 20);

        context.stroke();
    }

</script>

<?php get_footer(); ?>