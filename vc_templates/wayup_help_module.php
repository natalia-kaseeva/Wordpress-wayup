<?php 

$args=array(
	'title1' 		  => '',
	'title2' 		  => '',
	'desc'			  => '',
	'link'			  => '',
	'block1title'	  => '',
	'block1desc'	  => '',
	'block2title'	  => '',
	'block2desc'	  => '',
	'block3title'	  => '',
	'block3desc'	  => '',
);

$atts=vc_map_get_attributes($this->getShortcode(),$atts);
extract($atts);

?>
<!-- Help -->
<section class="help">
	<div class="wrapper">
		<div class="help__block">
			<h2 class="help__title secondary-title"><span><?php echo esc_attr($title1); ?></span> <?php echo esc_attr($title2); ?></h2>
			<p class="help__descr"><?php echo esc_attr($desc); ?></p>
			<a href="<?php echo esc_attr($link); ?>" class="help__btn btn popup-link">Получить консультацию</a>
		</div>
		<ul class="help__list">
			<li class="help__item">
				<div class="help__icon help__icon_rocket"></div>
				<h4 class="help__heading"><?php echo esc_attr($block1title); ?></h4>
				<p class="help__par"><?php echo esc_attr($block1desc); ?></p>
			</li>
			<li class="help__item">
				<div class="help__icon help__icon_monitor"></div>
				<h4 class="help__heading"><?php echo esc_attr($block2title); ?></h4>
				<p class="help__par"><?php echo esc_attr($block2desc); ?></p>
			</li>
			<li class="help__item">
				<div class="help__icon help__icon_brain"></div>
				<h4 class="help__heading"><?php echo esc_attr($block3title); ?></h4>
				<p class="help__par"><?php echo esc_attr($block3desc); ?></p>
			</li>
		</ul>
	</div>
</section><!-- End help -->
