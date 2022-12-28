<?php
/**
 * Template Name: About Us Template
 * Template Post Type: post, page
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>

<?php
    /*
    * Content section for full width layout
    * Every section on this page will managed from Page Builder Plugins
    */
    the_content(); 
?>


<section class="page-header-wrapper">
    <div class="container">
        <header class="page-header">
            <h1 class="entry-title">About us</h1>
        </header>
    </div>
</section>

<?php
get_footer();