<?php
get_header();


while (have_posts()) {
    the_post(); ?>
    <p class="">this is a post</p>
    <h2 class=""><?php the_title() ?></h2>
    <?php the_content(); ?>

    <?php
}


get_footer();

?>