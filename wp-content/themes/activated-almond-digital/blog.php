<?php
/**
 * Template Name: Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--blog-->
      <section class="blogs">
        <!--blog heading-->
        <div class="sub-heading">
          <h3>Our Stories</h3>
        </div>
        <!--filter-->
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" class="custom-select" id="filter">
          <?php
            if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) : 

              echo '<select id="category" name="category"><option value="">All</option>';
              foreach ( $terms as $term ) :
                echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
              endforeach;
              echo '</select>';
            endif;
          ?>
          <input type="hidden" name="action" value="myfilter">
          </form>
        <!--posts-->
        <div id="posts"></div>
      </section>
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
