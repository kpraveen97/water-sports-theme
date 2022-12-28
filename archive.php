<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Event_Listing
 */

get_header();
?>
<?php if (have_posts()) : ?>
    <section class="page-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="column column-12">
                    <header class="page-header">
                        <?php
                        the_archive_title('<h1 class="page-title">', '</h1>');
                        the_archive_description('<div class="archive-description">', '</div>');
                        ?>
                    </header>
                </div> 
            </div> 
        </div> 

    </section>

    <section class="main-contain-wrapper">
        <div class="container">
            <div class="row">
                <div class="<?php echo event_listing_primary_column_class(); ?>">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="blog-list">

                                <?php
                                while (have_posts()) :
                                    the_post();
                                    get_template_part('template-parts/content', get_post_type());

                                endwhile;


                                ?>
                            </div> 
                            <?php
                            the_posts_navigation();
                            ?>

                        </main>
                    </div>
                </div> 
                <?php do_action('event_listing_sidebar'); ?>
            </div> 
        </div> 
    </section>
<?php
endif;
get_footer();
