<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Event_Listing
 */

if (!function_exists('event_listing_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function event_listing_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf($time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );
        $posted_on = 
        '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
        
        echo '<span class="posted-on"><i class="fa fa-calendar"></i> ' . $posted_on . '</span>'; // WPCS: XSS OK.

    }
endif;

if (!function_exists('event_listing_posted_by')) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function event_listing_posted_by()
    {

        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x( ' %s', 'post author', 'event-listing-water-sports' ),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
        );

         echo '<span class="post_by"> <i class="fa fa-user"></i> ' . $byline . '</span>'; // WPCS: XSS OK.

    }
endif;


if (!function_exists('event_listing_category_list')) :
    /**
     * Prints HTML with meta information for the categories
     */
    function event_listing_category_list()
    {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(esc_html__(', ', 'event-listing-water-sports'));

            if ( $categories_list ) {
            echo '<span class="cat-links"> <i class="fa fa-folder-open" aria-hidden="true"></i>' . $categories_list . '</span>';
        }


        }


    }
endif;


if (!function_exists('event_listing_comment_count')) :
    /**
     * Prints HTML with meta information for the comments.
     */
    function event_listing_comment_count()
    {


        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-link"><i class="fa fa-comment-o"></i> ';
            comments_popup_link(
                sprintf(
                    wp_kses(
                    /* translators: %s: post title */
                        __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'event-listing-water-sports'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                )
            );
            echo '</span>';
        }


    }
endif;


if (!function_exists('event_listing_entry_footer')) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function event_listing_entry_footer()
    {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {


            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'event-listing-water-sports'));
            if ($tags_list) {
                /* translators: 1: list of tags. */
                printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'event-listing-water-sports') . '</span>', $tags_list); // WPCS: XSS OK.
            }
        }

        edit_post_link(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Edit <span class="screen-reader-text">%s</span>', 'event-listing-water-sports'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ),
            '<span class="edit-link">',
            '</span>'
        );
    }
endif;

if (!function_exists('event_listing_post_thumbnail')) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function event_listing_post_thumbnail()
    {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
            ?>

            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->

        <?php else : ?>
            <div class="post-thumbnail">
                <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                    <?php
                    the_post_thumbnail('post-thumbnail', array(
                        'alt' => the_title_attribute(array(
                            'echo' => false,
                        )),
                    ));
                    ?>
                </a>
            </div><!-- .post-thumbnail -->

        <?php
        endif; // End is_singular().
    }
endif;

if (!function_exists('wp_body_open')) :
    /**
     * For sites older than 5.2.
     *
     * @link https://core.trac.wordpress.org/ticket/12563
     */
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
endif;
