<?php
/**
 * Default Blog Template
 *
 */
get_header(); ?>
<div class="home_content flex_box_main">
    <div class="index-content flex_item_content" role="main">
        <div class="content-wrap">
            <h1 class="post_page_header">Recent Work</h1>
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                <div class="post_container flex_box_preview">
                    <div class="flex_item_img_preview">
                        <?php
                            the_post_thumbnail('thumbnail');
                        ?>
                    </div>
                    <div class="flex_item_text_preview">
                        <?php
                            get_template_part( 'parts/post', 'index' );
                        ?>
                    </div>
                </div>
                <?php
                endwhile;
                get_template_part( 'parts/post', 'nav' );
            endif;
            ?>
            
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<!-- end content -->
<?php get_footer(); ?>