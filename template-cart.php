<?php
/**
 * template name: Cart & Checkout Template
 */

get_header();
?>

<!-- Service -->
<section class="single cart pay">
	<div class="wrapper">
		<?php while ( have_posts() ) : the_post(); the_content(); endwhile; // End of the loop. ?>
	</div>
</section>


<?php
get_footer();
