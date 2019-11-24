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
        <!--banner image-->
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
          <div class="container">
            <?php
              post_content(29);
            ?>
            <!--contact-->
            <form>
              <input type="text" name="" placeholder="Enter your email to find our more."/>
              <button>
                <span class="label">
                  <span class="text">Contact</span>
                  <span class="icon">
                    <i class="fas fa-caret-right"></i>
                  </span>
                </span>
              </button>
            </form>
          </div>
        </div>
      </section>
      <!--content-->
      <section class="content">
        <!--mouse scroll down prompt-->
        <div class="prompt">
          <div id="mouse" class="mouse"></div>
        </div>
        <!--our passion heading-->
        <div name="scroll" class="sub-heading">
          <h3>Our passion</h3>
        </div>
        <!--our passion content-->
        <div class="our-passion">
          <div class="container">
            <?php
              post_content(57);
            ?>
          </div>
        </div>
        <!--our process content-->
        <!--our process image-->
        <div class="process-image-left">
            <?php
              $post = 64;
              if(has_post_thumbnail($post)){
                the_post_thumbnail();
              }
            ?>
        </div>
        <div class="process-image-right">
          <?php
            $post = 482;
            if(has_post_thumbnail($post)){
              the_post_thumbnail();
            }
          ?>
        </div>
        <!--our process text-->
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
          <h3>How may we <br>serve you today?</h3>
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
      <!--contact-->
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
            <h1>Talk to our experts <br>about your requirements</h1>
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
