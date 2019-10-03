<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Activated_Almond_Digital
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
    <!--heading-->
    <div class="heading">
      <?php
        post_content(76);
      ?>
    </div>
    <!--office, general and business-->
    <div class="office">
      <!--office-->
      <span>
        <?php
          post_content(78);
        ?>
      </span>
    </div>
    <!--quick links-->
    <div class="quick-links">
      <span>
        <?php
          post_content(284);
        ?>
        <!--main navigation links-->
        <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        ) );
        ?>
      </span>
    </div>
    <!--social media-->
    <div class="social">
      <span>
        <h3>Follow Us.</h3>
          <?php
            post_content(81);
          ?> 
      </span>
    </div>
    <div class="business">
      <!--business-->
      <span>
        <?php
          post_content(83);
        ?>
      </span>
      <span>
        <div class="circle">
          <?php
						$post = 83;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
        </div>
      </span>
    </div>
    <!--rights reserved-->
    <div class="rights">
      <p>Copyright © 2019 Actiavted Almond Digital, Inc. All Rights Reserved.</p>
    </div>
    <!--quick links-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
