<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>
<!--   <div class="home-background">
    <img src="/wp-content/themes/activated-almond-digital/images/shapes/home-background.svg" alt="background">
  </div> -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--banner-->
      <section class="banner">
        <div class="image">
          <a href="#">
            <?php
              $post = 29;
              if(has_post_thumbnail($post)){
                the_post_thumbnail();
              }
            ?>
          </a>
        </div>
        <!--banner heading-->
        <div class="text">
          <?php
            post_content(29);
          ?>
        </div>
      </section>
      <!--content-->
      <section class="content">
        <!--our passion heading-->
        <div class="sub-heading">
          <h3>Our passion</h3>
        </div>
        <!--our passion content-->
        <div class="our-passion">
          <?php
            post_content(57);
          ?>
        </div>
        <!--our process content-->
        <div class="process">
          <?php
            post_content(64);
          ?>
        </div>
      </section>
      <!--services content-->
      <section class="our-services">
        <!--our services heading-->
        <div class="sub-heading">
          <h3>Our Services</h3>
        </div>
       <!--our services-->
        <div class="service">
          <div class="container">
            <?php services(); ?>
          </div>
          <a href="#">Get to know us</a>
        </div>
      </section>
      <!--contact-->
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
