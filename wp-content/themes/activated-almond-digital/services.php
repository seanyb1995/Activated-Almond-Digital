<?php
/**
 * Template Name: Services
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
          <a id="service-svg" href="#">
            <?php
              $post = 109;
              if(has_post_thumbnail($post)){
                the_post_thumbnail();
              }
            ?>	
          </a>
        </div>
        <!--banner heading-->
        <div class="text">
          <div class="container">
            <?php
              post_content(109);
            ?>
          </div>
        </div>
      </section>
      <!--services-->
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
          <button>
            <span class="label">
              <span class="text">Find out more</span>
              <span class="icon">
                <i class="fas fa-caret-right"></i>
              </span>
            </span>
          </button>
        </div>
      </section>
      <!--content-->
      <section class="content">
        <div class="contact-image">
            <?php
              $post = 411;
              if(has_post_thumbnail($post)){
                the_post_thumbnail();
              }
            ?>
        </div>
        <div class="get-in-touch">
          <div class="wrap">
            <h1>Talk to our experts about your requirements</h1>
            <p>Contact us and know more about how our experts can help your business grow.</p>
            <button>
              <span class="label">
                <span class="text">Enquire now</span>
                <span class="icon">
                  <i class="fas fa-caret-right"></i>
                </span>
              </span>
            </button>
          </div>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
