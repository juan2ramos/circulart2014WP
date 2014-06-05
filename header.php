<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?><?php wp_title(' | '); ?></title>
    <!-- Meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js" media="all"></script><![endif]-->

    <!-- Meta Facebook -->
    <meta property="og:url" content="http://circulart.com.co/">
    <meta property="og:title" content="circulart"/>
    <meta property="og:description"
          content="Circulart2014 Mercado Cultural de Medellín dedicado a la industria musical Latinoamericana http://circulart.org/ Encuentro anual, dedicado a la industria musical independiente de Latinoamérica, show cases, conferencias, talleres, networking, sesiones de negocios y una oportunidad única de descubrir la diversidad musical Iberoamericana.."/>
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/header/circulart2014.png"/>


    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header>
    <div id="slide">
        <figure id="header-buttom">
            <a href="http://circulart.org"> <img src="<?php bloginfo('template_directory'); ?>/images/header/circulart2014.png"></a>
        </figure>
    </div>
</header>
<nav>
    <?php
        $class = "";
        $v = array ( "curaduria", "artistas", "profesionales" );
        if(!in_array($post->post_name,$v, TRUE)){
            $class = "class = 'active' ";
        }

    ?>
    <ul>
        <li>
            <a href="http://circulart.org"  <?php echo($class)?>>convocatoria</a>
            <ul class="submenu">
                <li><a href="http://circulart.org/mercado" target="_blank">REGISTRARSE</a></li>
                <li class="a-submenu"><a href="#">CONDICIONES</a>
                    <ul class="nivel-2">
                        <li><a href="http://circulart.org/quienes">Quiénes pueden participar</a></li>
                        <li><a href="http://circulart.org/requisitos">Requisitos</a></li>
                        <li><a href="http://circulart.org/derechos-y-obligaciones">Derechos y obligaciones</a></li>
                    </ul>
                </li>
                <li><a href="http://circulart.org/cronograma">CRONOGRAMA</a></li>
                <li><a href="http://circulart.org/evaluacion">EVALUACIÓN</a></li>
            </ul>
        </li>
        <li>
            <a href="http://circulart.org/curaduria" class="a-next <?php if($post->post_name == 'curaduria'){echo('active');}?>">
                curaduría
                <p class="next">Próximamente publicaremos la información sobre curadores...</p>
            </a>

        </li>
        <li>
            <a href="http://circulart.org/artistas" class="a-next <?php if($post->post_name == 'artistas'){echo('active');}?>">artistas
                <p class="next">Próximamente publicaremos la información sobre artistas...</p>
            </a>
        </li>
        <li><a href="http://circulart.org/profesionales" class="a-next <?php if($post->post_name == 'profesionales'){echo('active');}?>">profesionales
                <p class="next">Próximamente publicaremos la información sobre profesionales...</p>
            </a>
        </li>
     </ul>
    <div id="network">
        <ul>
            <li id="twitter"><a href="https://twitter.com/Circulart_"><span class="icon-twitter"></span></a></li>
            <li id="facebook"><a href="https://www.facebook.com/Circulart"><span class="icon-facebook"></span></a></li>
            <li id="youtube"><a href="https://www.youtube.com/channel/UCp1LtBBVxj68-drbIhJg71Q"><span class="icon-uniE603"></span></a></li>
            <li id="instagram"><a href="http://instagram.com/circulartmc"><span class="icon-instagram"></span></a></li>
        </ul>
    </div>


</nav>

