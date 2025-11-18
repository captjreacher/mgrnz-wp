<?php
add_shortcode( 'CEA_PORTFOLIOS', 'CEA_Portfolio_Display' );
function CEA_Portfolio_Display() {
	global $post;
	ob_start();
	$args = array(
		 'post_type' => 'cea_portfolio',
		 'posts_per_page' => -1,
	);
	$portfolio_query = new WP_Query( $args );
	if ( $portfolio_query->have_posts() ) { ?>
		<div class="portfolio-lists cea-grid cea-post-lists">
	 		<?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post() ; ?>
	 			<div class="portfolio-item">
	 				<?php if ( has_post_thumbnail() ) {?>
	 					<a href="<?php the_permalink();?>">
						    <div class="portfolio-img">
						    	<?php the_post_thumbnail(); ?>
						   </div>
						</a>
					<?php }
					$terms = get_the_terms( $post->ID, 'cea_portfolio_category' );
					if($terms){
						echo '<ul class="cea-portfolio-categories">';
					    foreach($terms as $term) {
					      echo '<li>'. esc_html($term->name) .'</li>';
					    }
					echo '</ul>';
					}
					?>
		 			<h4 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
		 			<p class="post-content"><?php the_excerpt();?></p>
		 		</div>
	 		<?php endwhile;
	 	echo '</div>';
	}
	return ob_get_clean();
}


add_shortcode( 'CEA_TESTIMONIALS', 'CEA_Testimonial_Display' );
function CEA_Testimonial_Display() {
	global $post;
	ob_start();
	$args = array(
		 'post_type' => 'cea_testimonial',
		 'posts_per_page' => -1,
	);
	$testimonial_query = new WP_Query( $args );
	if ( $testimonial_query->have_posts() ) { ?>
		<div class="testimonial-lists cea-list cea-post-lists">
	 		<?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post() ; ?>
	 			<div class="testimonial-item">
					<?php if ( has_post_thumbnail() ) {?>
	 					<a href="<?php the_permalink();?>">
						    <div class="testimonial-img">
						    	<?php the_post_thumbnail(); ?>
						   </div>
						</a>
					<?php }
					$terms = get_the_terms( $post->ID, 'cea_testimonial_category' );
					if($terms){
						echo '<ul class="testimonial-categories">';
					    foreach($terms as $term) {
					      echo '<li>'. esc_html($term->name) .'</li>';
					    }
					echo '</ul>';
					}
					$reviewer_position = get_post_meta( get_the_ID(), 'cea_testimonial_position', true );
					$reviewer_company = get_post_meta( get_the_ID(), 'cea_testimonial_company', true );

					if ( ! empty( $reviewer_position ) ) {
						echo '<span class="reviewer-position">'. esc_html($reviewer_position).',</span>';
					}
					if ( ! empty( $reviewer_company ) ) {
						echo '<span class="reviewer-company">'. esc_html($reviewer_company).',</span>';
					}
					?>
		 			<h4 class="post-title"><?php the_title();?></h4>
		 			<p class="post-content"><?php the_excerpt();?></p>
		 		</div>
	 		<?php endwhile;
	 	echo '</div>';
	}
	return ob_get_clean();
}

add_shortcode( 'CEA_TEAMS', 'CEA_Team_Display' );
function CEA_Team_Display() {
	global $post;
	ob_start();
	$args = array(
		 'post_type' => 'cea_team',
		 'posts_per_page' => -1,
	);
	$team_query = new WP_Query( $args );
	if ( $team_query->have_posts() ) { ?>
		<div class="team-lists cea-grid cea-post-lists">
	 		<?php while ( $team_query->have_posts() ) : $team_query->the_post() ;
	 			$team_facebook = get_post_meta( get_the_ID(), 'cea_team_facebook',true);
				$team_twitter = get_post_meta( get_the_ID(), 'cea_team_twitter',true);
				$team_linkedin = get_post_meta( get_the_ID(), 'cea_team_linkedin',true);
				$team_youtube = get_post_meta( get_the_ID(), 'cea_team_youtube',true);
				$team_github = get_post_meta( get_the_ID(), 'cea_team_github',true);
				$team_instagram = get_post_meta( get_the_ID(), 'cea_team_instagram',true);
	 		 ?>
	 			<div class="team-item">
	 				<?php if ( has_post_thumbnail() ) {?>
	 					<a href="<?php the_permalink();?>">
						    <div class="team-img">
						    	<?php the_post_thumbnail(); ?>
						   </div>
						</a>
					<?php }
					$terms = get_the_terms( $post->ID, 'cea_team_category' );
					if($terms){
						echo '<ul class="team-categories">';
					    foreach($terms as $term) {
					      echo '<li>'. esc_html($term->name) .'</li>';
					    }
					echo '</ul>';
					}
					$team_position = get_post_meta( get_the_ID(), 'cea_team_position', true );
					$team_company = get_post_meta( get_the_ID(), 'cea_team_company', true );

					if ( ! empty( $team_position ) ) {
						echo '<span class="team-position">'. esc_html($team_position).',</span>';
					}
					if ( ! empty( $team_company ) ) {
						echo '<span class="team-company">'. esc_html($team_company).',</span>';
					}
					?>
					<ul class="cea-team-social-media">
						<?php 
							if(!empty($team_facebook)){?>
								<li><a class="cea-team-facebook" href="<?php echo esc_url($team_facebook);?>"><label><?php echo __('Facebook','cozy-essential-addons')?></label></a></li>
							<?php }
							if(!empty($team_twitter)){?>
								<li><a class="cea-team-twitter" href="<?php echo esc_url($team_twitter);?>"><label><?php echo __('Twitter','cozy-essential-addons')?></label></a></li>
							<?php }
							if(!empty($team_linkedin)){?>
								<li><a class="cea-team-linkedin" href="<?php echo esc_url($team_linkedin);?>"><label><?php echo __('Linkedin','cozy-essential-addons')?></label></a></li>
							<?php }
							if(!empty($team_youtube)){?>
								<li><a class="cea-team-youtube" href="<?php echo esc_url($team_youtube);?>"><label><?php echo __('Youtube','cozy-essential-addons')?></label></a></li>
							<?php }
							if(!empty($team_github)){?>
								<li><a class="cea-team-github" href="<?php echo esc_url($team_github);?>"><label><?php echo __('Github','cozy-essential-addons')?></label></a></li>
							<?php }
							if(!empty($team_instagram)){?>
								<li><a class="cea-team-instagram" href="<?php echo esc_url($team_instagram);?>"><label><?php echo __('Instagram','cozy-essential-addons')?></label></a></li>
							<?php }
						?>
					</ul>
		 			<h4 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
		 			<p class="post-content"><?php the_excerpt();?></p>
		 		</div>
	 		<?php endwhile;
	 	echo '</div>';
	}
	return ob_get_clean();
}
add_shortcode( 'CEA_SERVICES', 'CEA_Service_Display' );
function CEA_Service_Display() {
	global $post;
	ob_start();
	$args = array(
		 'post_type' => 'cea_service',
		 'posts_per_page' => -1,
	);
	$team_query = new WP_Query( $args );
	if ( $team_query->have_posts() ) { ?>
		<div class="service-lists cea-grid cea-post-lists">
	 		<?php while ( $team_query->have_posts() ) : $team_query->the_post() ; ?>
	 			<div class="service-item">
	 				<?php if ( has_post_thumbnail() ) {?>
	 					<a href="<?php the_permalink();?>">
						    <div class="service-img">
						    	<?php the_post_thumbnail(); ?>
						   </div>
						</a>
					<?php }
					$terms = get_the_terms( $post->ID, 'cea_service_category' );
					if($terms){
						echo '<ul class="service-categories">';
					    foreach($terms as $term) {
					      echo '<li>'. esc_html($term->name) .'</li>';
					    }
					echo '</ul>';
					}
					?>
		 			<h4 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
		 			<p class="post-content"><?php the_excerpt();?></p>
		 		</div>
	 		<?php endwhile;
	 	echo '</div>';
	}
	return ob_get_clean();
}

add_shortcode( 'CEA_FAQS', 'CEA_Faqs_Display' );
function CEA_Faqs_Display() {
	global $post;
	ob_start();
	$args = array(
		 'post_type' => 'cea_faq',
		 'posts_per_page' => -1,
	);
	$team_query = new WP_Query( $args );
	if ( $team_query->have_posts() ) { ?>
		<div class="faq-lists cea-grid cea-post-lists">
	 		<?php while ( $team_query->have_posts() ) : $team_query->the_post() ; ?>
	 			<div class="faq-item">
	 				<?php if ( has_post_thumbnail() ) {?>
	 					<a href="<?php the_permalink();?>">
						    <div class="faq-img">
						    	<?php the_post_thumbnail(); ?>
						   </div>
						</a>
					<?php }
					$terms = get_the_terms( $post->ID, 'cea_faq_category' );
					if($terms){
						echo '<ul class="faq-categories">';
					    foreach($terms as $term) {
					      echo '<li>'. esc_html($term->name) .'</li>';
					    }
					echo '</ul>';
					}
					?>
		 			<h4 class="post-title"><?php the_title();?></h4>
		 			<p class="post-content"><?php the_excerpt();?></p>
		 		</div>
	 		<?php endwhile;
	 	echo '</div>';
	}
	return ob_get_clean();
}
add_shortcode( 'CEA_PROMOTIONS', 'CEA_Promotions_Display' );
function CEA_Promotions_Display() {
	global $post;
	ob_start();
	$args = array(
		 'post_type' => 'cea_promotion',
		 'posts_per_page' => -1,
	);
	$team_query = new WP_Query( $args );
	if ( $team_query->have_posts() ) { ?>
		<div class="promotion-lists cea-grid cea-post-lists">
	 		<?php while ( $team_query->have_posts() ) : $team_query->the_post() ; ?>
	 			<div class="promotion-item">
	 				<?php if ( has_post_thumbnail() ) {?>
	 					<a href="<?php the_permalink();?>">
						    <div class="promotion-img">
						    	<?php the_post_thumbnail(); ?>
						   </div>
						</a>
					<?php }
					$terms = get_the_terms( $post->ID, 'cea_promotion_category' );
					if($terms){
						echo '<ul class="promotion-categories">';
					    foreach($terms as $term) {
					      echo '<li>'. esc_html($term->name) .'</li>';
					    }
					echo '</ul>';
					}
					?>
		 			<h4 class="post-title"><?php the_title();?></h4>
		 			<p class="post-content"><?php the_excerpt();?></p>
		 		</div>
	 		<?php endwhile;?>
	 	</div>
	<?php }
	return ob_get_clean();
}