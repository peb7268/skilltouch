<?php
#Set some paths
define('TEMPLATE_DIR', get_template_directory_uri());
define('IMAGE_DIR', get_template_directory_uri().'/img');

#Remove some default WP crap
remove_filter('the_content',  'wpautop');

function st_site(){
    echo st_get_site();
}

function st_get_site(){
    $allPages = st_get_pages();
    $pages    = ['Home', 'Get to know us', 'What we do', 'Get in touch'];
    $site_content = [];

    foreach($allPages as $page):
        if(in_array($page->post_title, $pages)) $site_content[] = $page->post_content;
    endforeach;

    $site_content = implode(' ', $site_content);

    return $site_content;
}

function st_get_pages(){
    return get_pages();
}

//Debugging
function dd($mixed){
    echo '<pre>';
        print_r($mixed);
    echo '</pre>';
    die;
}