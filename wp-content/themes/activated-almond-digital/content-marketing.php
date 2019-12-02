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
      <section class="banner smm">
        <!--banner image-->
        <div class="image">
          <a id="content-svg">
            <?php
              $post = 373;
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
              post_content(245);
            ?>
          </div>
        </div>
      </section>
      <!--content-->
      <section class="content">
        <!--social media heading-->
        <div class="sub-heading">
          <h3>Our Plan</h3>
        </div>
        <!--social media marketing content-->
        <div class="what-is-content">
          <?php
            post_content(249);
          ?>
        </div>
      </section>
      <section class="case-studies">
        <!--method 1-->
        <div class="method-1">
          <div class="image"> 
            <div class="wrap">
              <?php 

              $image = get_field('image_1');

              if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
            </div>
          </div>
          <div class="text">
            <div class="wrap">
              <h1>
                <?php
                  $a = get_field_object('field_5db19197d3d51'); 
                  echo $a['label']; 
                ?>
              </h1>
              <p>
                <?php 
                  $a = get_field_object('field_5db19197d3d51'); 
                  echo $a['value']; 
                ?>
              </p>
            </div>
          </div>
        </div>
        <!--method 2-->
        <div class="method-2">
          <div class="text">
            <div class="wrap">
              <h1>
                <?php
                  $a = get_field_object('field_5db194e195030'); 
                  echo $a['label']; 
                ?>
              </h1>
              <p>
                <?php 
                  $a = get_field_object('field_5db194e195030'); 
                  echo $a['value']; 
                ?>
              </p>
            </div>
          </div>
          <div class="image"> 
            <div class="wrap">
              <?php 

              $image = get_field('image_2');

              if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
            </div>
          </div>
        </div>
        <!--method 3-->
        <div class="method-3">
          <div class="image"> 
            <div class="wrap">
              <?php 

              $image = get_field('image_3');

              if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
            </div>
          </div>
          <div class="text">
            <div class="wrap">
              <h1>
                <?php
                  $a = get_field_object('field_5db194eb01351'); 
                  echo $a['label']; 
                ?>
              </h1>
              <p>
                <?php 
                  $a = get_field_object('field_5db194eb01351'); 
                  echo $a['value']; 
                ?>
              </p>
            </div>
          </div>
        </div>
        <!--method 4-->
        <div class="method-4">
          <div class="text">
            <div class="wrap">
              <h1>
                <?php
                  $a = get_field_object('field_5db194fb1fa6e'); 
                  echo $a['label']; 
                ?>
              </h1>
              <p>
                <?php 
                  $a = get_field_object('field_5db194fb1fa6e'); 
                  echo $a['value']; 
                ?>
              </p>
              <button>
                <span class="label">
                  <span class="button-text">Find out more</span>
                  <span class="icon">
                    <i class="fas fa-caret-right"></i>
                  </span>
                </span>
              </button>
            </div>
          </div>
          <div class="image"> 
            <div class="wrap">
              <?php 

              $image = get_field('image_4');

              if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
            </div>
          </div>
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
                  <span class="button-text">Enquire now</span>
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
