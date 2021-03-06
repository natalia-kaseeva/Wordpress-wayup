<?php 

$args=array(
	'title1' 		  => '',
	'title2' 		  => '',
	'desc1'			  => '',
	'desc2'			  => '',
	'desc3'			  => '',
	'featured_image'  => '',
	'author' 		  => '',
	'signature' 	  => '',
	'quote' 		  => '',
	'author_name'     => '',
	'author_position' => '',
);

$atts=vc_map_get_attributes($this->getShortcode(),$atts);
extract($atts);

$featured_image_url='';
if (is_numeric($featured_image)) {
	$featured_image_url=wp_get_attachment_url($featured_image);
}

$author_url='';
if (is_numeric($author)) {
	$author_url=wp_get_attachment_url($author);
}

$signature_url='';
if (is_numeric($signature)) {
	$signature_url=wp_get_attachment_url($signature);
}

?>

<!-- Choice -->
<section class="choice">
	<div class="wrapper">
		<div class="choice__block">
			<div class="choice__image">
				<div class="choice__pic blue-noise">
					<img src="<?php echo $featured_image_url; ?>" alt="JC">
				</div>
				<div class="director">
					<?php if(!empty($author_url)) { ?>
					<div class="director__img">
						<img src="<?php echo $author_url; ?>" alt="<?php echo esc_attr($author_name); ?>">
					</div>
					<?php } ?>
					<div class="director__text">
						<?php if(!empty($author_name)) { ?>
						<p class="director__quote"><?php echo esc_attr($quote); ?></p>
						<?php } ?>
						<div class="director__pers">
							<?php if(!empty($author_name)) { ?><span><?php echo esc_attr($author_name); ?></span><?php } ?>
							<?php if(!empty($author_position)) { ?><?php echo esc_attr($author_position); ?><?php } ?>
						</div>
					</div>
					<div class="director__sign">
						<img src="<?php echo $signature_url; ?>" alt="Подпись">
					</div>
				</div>
			</div>
			<div class="choice__wrap">
				<h2 class="choice__title secondary-title"><span><?php echo esc_attr($title1); ?></span><br><?php echo esc_attr($title2); ?></h2>
				<!-- <?php //if(!empty($desc)) { ?> -->
				<div class="choice__descr">
					<p><?php echo esc_attr($desc1);?></p>
					<p><?php echo esc_attr($desc2);?></p>
					<p><?php echo esc_attr($desc3);?></p>
				</div>
				<!-- <?php //} ?> -->
			</div>
		</div>
	</div>
</section><!-- End choice -->


