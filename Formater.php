<?php

/*
Plugin Name: Formater Plugin
Plugin URI: http://formater.dk/
Description: Formaters helt egen plugin til Wordpress!
Version: 0.1.0
Author: Julian
Author URI: http://formater.dk/
License: GPLv2 or later
*/

/* get published date  */
function shortcode_post_published_date(){
 return get_the_date();
}
add_shortcode( 'post_published', 'shortcode_post_published_date' );

/* get author name  */
function author_name_shortcode(){
    global $post;
    $post_id = $post->ID;
    $author = get_the_author($post_id);
    return $author;
}
add_shortcode('post_author','author_name_shortcode');

/* get category name  */
function category_name_shortcode(){
    global $post;
    $post_id = $post->ID;
    $catName = "";
    foreach((get_the_category($post_id)) as $category){
        $catName .= $category->name . " ,";
    }
    return $catName;
}
add_shortcode('post_category','category_name_shortcode');

/* title to get the post title  */
function myshortcode_title( ){
    return get_the_title();
}
add_shortcode( 'page_title', 'myshortcode_title' );


add_shortcode( 'output_post_excerpt', 'get_the_excerpt' );