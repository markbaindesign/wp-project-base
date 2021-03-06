<div id="tax-front" class="section">
	<div class="container media-object-container">			
		<header>
			<h2 class="home-section-title">
				<?php _e( 'I want to learn...', '_criadoemsampa' ); ?>						
			</h2>
		</header>

		<div class="media-object-container">
			<?php 
				
				$terms = get_terms( array(
				    'taxonomy' => 'resource',
				    'hide_empty' => true,
				    'orderby' => 'slug'
				) );
				foreach ( $terms as $term ) : 
					$term_link = get_term_link( $term );
				    // If there was an error, continue to the next term.
				    if ( is_wp_error( $term_link ) ) {
				        continue;
				    }
			?>				
			<div id="post-<?php the_ID(); ?>" <?php post_class( 'media-object match-height' ); ?>>
				<a href="<?php echo esc_url( $term_link ); ?>">
					<div class="media-object-media">
						<?php /*	
							$saved_data = get_term_meta($term->term_id,'mbd_thumb_image_field_id',true);
							$attachment_id = $saved_data['id'];
							echo wp_get_attachment_image( $attachment_id, 'full' ); 
						*/ ?>
										
					</div><!-- .media-object-media -->
					<article class="media-object-content">
						<header class="entry-title"><h3>&hellip;<span><?php echo $term->name; ?></span></h3></header>
					</article><!-- .media-object-content -->
				</a>
			</div><!-- .media-object -->
			<?php endforeach; ?>

		</div><!-- .media-object-container -->		

	</div><!-- .container -->
	<div class="container">
		<a href="<?php mbdmaster_cpt_archive_url( 'content_cpt' ) ?>" class="h5 content-archive-link"><?php _e( 'See the full toolkit here.', '_criadoemsampa' ); ?>	</a>
	</div>	
</div><!-- .section --> 	