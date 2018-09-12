<?php
//-------------------------------------------------------------------------
//WOOBIZZ AFTER FOOTER 
//-------------------------------------------------------------------------
add_action( 'widgets_init', 'woobizz_after_footer_widget',6);
function woobizz_after_footer_widget() {
	$args = array(
				'id'            => 'woobizzafterfooterwidget',
				'name'          => __( 'Woobizz After Footer', 'storefront' ),
				'description'   => 'Add content after footer here',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
	);
	register_sidebar( $args );
	add_action( 'storefront_after_footer', 'woobizz_display_after_footer_widget',6);
	function woobizz_display_after_footer_widget(){
		?>
		<div class="wb-afterfooter-sidebar-div">
			<div class="wb-afterfooter-sidebar-content">
				<?php dynamic_sidebar( 'Woobizz After Footer' ); ?>
			</div>
		</div>
		<?php
	}
}