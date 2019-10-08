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
          <?php
						$post = 29;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
        </div>
        <!--banner heading-->
        <div class="text">
          <?php
            post_content(144);
          ?>
        </div>
      </section>
      <!--services-->
      <section class="case-studies">
        <div class="sub-heading">
          <h3>Our Clients</h3>
        </div>
        <!--filter-->
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="form">
          <?php
            if( $terms = get_terms( array( 'taxonomy' => 'filter', 'orderby' => 'name' ) ) ) : 
              
                echo '<input type="checkbox" value="" name="filter" class="" id="all"/>';
                echo '<label for="all">All</label>';
              
              foreach ( $terms as $term ) :
              
                echo '<input type="checkbox" value="' . $term->term_id .'" name="filter" class="" id="' . $term->term_id .'"/>';
                echo '<label for="' . $term->name .'">' . $term->name .'</label>';
              
              endforeach;
              echo '</select>';
            endif;
          ?>
          <input type="hidden" name="action" value="csfilter">
          </form>
        <!--posts-->
        <div id="posts"></div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
