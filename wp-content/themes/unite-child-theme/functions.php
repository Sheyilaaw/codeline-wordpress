<?php 
	 add_action( 'wp_enqueue_scripts', 'unite_child_theme_enqueue_styles' );
	 function unite_child_theme_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
     } 

	 function my_recent_post() {
		  global $post;

		  $html = "";

		  $my_query = new WP_Query( array(
			   'post_type' => 'films',
			   'posts_per_page' => 5
		  ));

		  if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();

			   $html .= "<h2>" . get_the_title() . " </h2>";
			   $html .= "<p>" . substr(get_the_excerpt(), 0, 50) . "...</p>";
			   $html .= "<a href=\"" . get_permalink() . "\" class=\"button\">Read more</a>";

		  endwhile;
			wp_reset_postdata();
		 endif;

		  return $html;
 }
 add_shortcode( 'recent', 'my_recent_post' );
 ?>