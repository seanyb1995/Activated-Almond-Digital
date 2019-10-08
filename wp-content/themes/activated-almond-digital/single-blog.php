<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--single blog-->
          <?php
          while ( have_posts() ) :
            the_post();
            ?>
            <section class="blogs">
              <!--posts-->
              <div id="posts">
                <div class="post">
                   <div class="image">
                   <?php the_post_thumbnail( array(1000,600) ); ?>
                   </div>
                   <div class="text">
                     <h1><mark><?php echo the_title(); ?></mark></h1>
                     <div class="tag">
                       <div class="thumbnail">
                         <img src="/wp-content/themes/activated-almond-digital/images/logo_colour.png" alt="activated-almond-logo">
                       </div>
                       <h3>Activated Almond Digital</h3>
                       <h3><?php echo get_the_date(); ?></h3>
                     </div>
                      <?php
                        the_content();
                      ?>
                   </div>
                   <div class="follow-us">
                     <p>Want to keep up to date? Follow us on <a>Twitter</a> and <a>Facebook</a></a></p>
                   </div>
                </div>
              </div>
            </section>
            <?php
          endwhile; // End of the loop.
          ?>
        <!--content-->
        <section class="content">
          <?php
            contactautomation();
          ?>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
