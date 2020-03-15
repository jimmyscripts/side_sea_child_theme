<?php
/**
 * Default Sidebar Template
 *
 */
?>

<aside class="sidebar flex_item_sidebar" role="complementary">

    <?php
    if ( is_active_sidebar( 'sidebar1' ) ) :
        dynamic_sidebar( 'sidebar1' );
    endif;
    ?>

</aside>
