<?php


get_header();
?>

<main class="main" id="main">
<div class="container">
	<div class="row">
		<div class="col-12">
			<?php echo breadcrumb( ' | ' ); ?>
			<section class="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1>
					<?php the_title(); ?>
				</h1>
				<?php 
					the_content();
				 ?>
			<?php endwhile; else : ?>		
			<?php endif; ?>
			</section>
			
		</div>
	</div>
</div>

	
</main>


<?php
get_footer();
