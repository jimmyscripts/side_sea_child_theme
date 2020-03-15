<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <nav class="nav-second-wrap" role="navigation">
        <?php h5bs_secondary_nav(); ?>
    </nav>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header" role="banner">
    <div class="jumbotron">
        <div class="tron_text_wrap">
            <div class="tron_text_container">
<!--                <p class="logo"><a href="<?php //echo home_url( '/' ); ?>"><?php //bloginfo( 'name' ); ?></a></p>-->
                <p class="logo"><a href="<?php echo home_url( '/' ); ?>"><span id="letter_1" class="letter">s</span><span id="letter_2" class="letter">i</span><span id="letter_3" class="letter">d</span><span id="letter_4" class="letter">e</span><span id="letter_5" class="letter">•</span><span id="letter_6" class="letter">s</span><span id="letter_7" class="letter">e</span><span id="letter_8" class="letter">a</span><span id="letter_9" class="letter">•</span><span id="letter_10" class="letter">t</span><span id="letter_11" class="letter">e</span><span id="letter_12" class="letter">s</span><span id="letter_13" class="letter">t</span></a></p>
            </div>
        </div>
    </div>
    <nav class="nav-main-wrap" role="navigation">
        <?php h5bs_primary_nav(); ?>
    </nav>

    <nav class="nav-mobile-wrap" role="navigation">
        <i id="nav-mobile-toggle" class="nav-mobile-toggle fa fa-bars"></i>
        <?php h5bs_mobile_nav(); ?>
    </nav>
</header>
