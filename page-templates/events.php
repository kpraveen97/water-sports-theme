<?php
/**
 * Template Name: Events Template
 * Template Post Type: post, page
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>
<section class="page-header-wrapper">
    <div class="container">
        <header class="page-header">
            <h1 class="entry-title">Events</h1>
        </header>
    </div>
</section>

<section>
    <div class="container">
        <?php
            /*Event Listing*/
            Echo do_shortcode ("[events]");
            
        ?>
    </div>
</section>







<?php
get_footer();
