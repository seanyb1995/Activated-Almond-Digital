<?php
/**
 * Template Name: Case Studies
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
          <a id="case-svg">
            <?php
              $post = 11;
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
              post_content(144);
            ?>
          </div>
        </div>
      </section>
      <!--services-->
      <section class="case-studies">
        <div class="sub-heading">
<!--           <h3>Our Clients</h3> -->
        </div>
        <!--filter-->
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="form">
          <?php
            if( $terms = get_terms( array( 'taxonomy' => 'filter', 'orderby' => 'name' ) ) ) : 
              
                echo '<input type="checkbox" value="" name="filter" class="" id="all"/>';
                echo '<label for="all">All</label>';
              
              foreach ( $terms as $term ) :
              
                echo '<input type="checkbox" value="' . $term->term_id .'" name="filter" class="" id="' . $term->name .'"/>';
                echo '<label for="' . $term->name .'">' . $term->name .'</label>';
              
              endforeach;
              echo '</select>';
            endif;
          ?>
          <input type="hidden" name="action" value="csfilter">
          </form>
        <!--posts-->
        <div class="case-post">
          <div id="posts"></div>
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
                <span class="text">Read more</span>
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
