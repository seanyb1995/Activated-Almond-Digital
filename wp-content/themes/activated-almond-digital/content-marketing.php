<?php
/**
 * Template Name: Content Marketing
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
          <div class="box">
            <div class="spin-container">
              <div class="shape">
                <div class="bd">
                  <?php
                    $post = 117;
                    if(has_post_thumbnail($post)){
                      the_post_thumbnail();
                    }
                  ?>	
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--banner heading-->
        <div class="text">
          <?php
            post_content(245);
          ?>
        </div>
      </section>
      <!--content-->
      <section class="content">
        <!--social media heading-->
        <div class="sub-heading">
          <h3>Content</h3>
        </div>
        <!--social media marketing content-->
        <div class="what-is-content">
          <?php
            post_content(249);
          ?>
        </div>
      </section>
      <section class="case-studies">
        <div class="features">
          <?php
            post_content(253);
          ?>
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
