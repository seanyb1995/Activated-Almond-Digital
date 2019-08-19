<?php
/**
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!-- contact -->
      <section class="contact">
        <div class="how-can-we-help">
          <?php
            post_content(147);
          ?>
        </div>
        <?php contactform_box(); ?>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
