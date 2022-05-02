<?php 

$args=array(
	'title1' 		  => '',
	'title2' 		  => '',
	'content'			  => '',
	'link'			  => '',
);
$content = wpb_js_remove_wpautop($content, true);
$atts=vc_map_get_attributes($this->getShortcode(),$atts);
extract($atts);

?>

<!-- Choice -->
<section class="choice">
	<div class="wrapper">
		<div class="choice__wrap">
			<h2 class="choice__title secondary-title"><span><?php echo esc_attr($title1); ?></span><br><?php echo esc_attr($title2); ?></h2>
			<div class="choice__descr">
				<p>JC - это юридическая фирма с полным спектром услуг, специализирующаяся на стартапах, фрилансерах и малом бизнесе.</p>
				<p>Мы придерживаемся принципа, что первоклассный юрисконсульт должен быть доступен для компаний всех размеров, у нас инновационный подход к традиционной культуре юридической фирмы.</p>
				<p>Будь то новое бизнес-предприятие, инвестиционный раунд, стратегическое партнерство или сложный корпоративный спор, <span>мы здесь, чтобы помочь вам построить и поддержать свою мечту.</span></p>
				<!-- <?php //echo esc_attr($content); ?> -->
			</div>
			<a href="<?php echo esc_attr($link); ?>" class="choice__btn noise">
				Читать больше о компании
				<svg width="18" height="20">
					<use xlink:href="#nav-right"/>
				</svg>
			</a>
		</div>
	</div>
</section><!-- End choice -->
