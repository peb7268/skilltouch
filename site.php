<?php /* Template Name: Site */
get_header();
    st_site();
    if(have_posts()): while(have_posts()): the_post();
        the_content();
    endwhile; endif;
get_footer();