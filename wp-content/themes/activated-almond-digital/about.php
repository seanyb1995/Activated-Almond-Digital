<?php
/**
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--banner-->
      <section class="banner">
        <!--banner image-->
        <div class="image">
          <a href="#">
            <?php
              $post = 121;
              if(has_post_thumbnail($post)){
                the_post_thumbnail();
              }
            ?>
          </a>
        </div>
        <!--banner heading-->
        <div class="text">
          <?php
            post_content(121);
          ?>
        </div>
      </section>
      <!--content-->
      <section class="content">
        <!--about us heading-->
        <div class="sub-heading">
          <h3>About us</h3>
        </div>
        <!--about content-->
        <div class="about">
          <?php
            post_content(126);
          ?>
        </div>
      </section>
      <!-- content-->
      <section class="communication">
        <div class="find-us">
          <h1>The Team.</h1>
          <div class="square">
            <?php
              $post = 83;
              if(has_post_thumbnail($post)){
                the_post_thumbnail();
              }
            ?>	
          </div>
          <div class="tag">
            <h3>Jason Hugh</h3>
            <p>Founder</p>
          </div>
        </div>
        <?php contactform_box(); ?>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
