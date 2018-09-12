<?php
//-------------------------------------------------------------------------
//WOOBIZZ FOOTER
//-------------------------------------------------------------------------
add_action( 'widgets_init', 'woobizz_customfooter_widget',5);
function woobizz_customfooter_widget() {
	$args = array(
				'id'            => 'woobizzcustomfooterwidget',
				'name'          => __( 'Woobizz Main Footer', 'storefront' ),
				'description'   => 'Add content before Footer',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
	);
	register_sidebar( $args );
	add_action( 'storefront_before_footer', 'woobizz_display_customfooter_widget',5);
	function woobizz_display_customfooter_widget(){
		?>
		<div class="wb-customfooter-sidebar-div">
			<div class="wb-customfooter-sidebar-content">
				<?php dynamic_sidebar( 'Woobizz Main Footer' ); ?>
			</div>
		</div>
		<?php
	}
}