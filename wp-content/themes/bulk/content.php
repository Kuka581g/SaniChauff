<article>
	<div <?php post_class(); ?>>                    
		<?php if ( has_post_thumbnail() ) : ?>                               
			<a class="featured-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> 
				<?php the_post_thumbnail( 'bulk-single' ); ?>
			</a>								               
		<?php endif; ?>	
		<div class="main-content text-center">
			<h2 class="page-header h1">                                
				<span style="color: #323232;">
					Qui sommes-nous ? 
				</span>                            
			</h2><!-- .single-entry-summary -->
			<div class="content-inner">                                                      
				<div class="single-entry-summary">
					<p>
					Implantée à Helesmes entre Valenciennes et Lille dans le département du Nord, 2D SaniChauff est une entreprise de plombier-chauffagiste et électricité dans le Nord de la France.<br>
					2D SaniChauff est une entreprise artisanale pour qui la satisfaction du client est une priorité.<br>
					Nous avons acquis une expérience de plus de 25 ans dans le domaine […]
					</p>
				</div><!-- .single-entry-summary -->
			</div>                                                             
		</div>                   
	</div>
</article>
