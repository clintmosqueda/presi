<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<?php import_part('mv')?>
<?php import_part('news')?>
<?php import_part('about')?>
<?php import_part('service')?>
<?php import_part('company')?>
<?php import_part('media-info')?>
<?php import_part('magazines')?>
<?php import_part('books')?>
<!--?php import_part('interview')?-->
<?php
get_footer();

