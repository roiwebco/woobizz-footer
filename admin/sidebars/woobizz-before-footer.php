<?php
//-------------------------------------------------------------------------
//WOOBIZZ BEFORE FOOTER 
//-------------------------------------------------------------------------
add_action( 'widgets_init', 'woobizz_before_footer_widget',4);
function woobizz_before_footer_widget() {
	$args = array(
				'id'            => 'woobizzbeforefooterwidget',
				'name'          => __( 'Woobizz Before Footer', 'storefront' ),
				'description'   => 'Add content before footer here',
				'before_title'  => '<h2 class="widgettitle">',
				'before_title'   => '</h2>',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'before_widget'  => '</li>',
	);
	register_sidebar( $args );
	add_action( 'storefront_before_footer', 'woobizz_display_before_footer_widget',4);
	function woobizz_display_before_footer_widget(){
		?>
		<div class="wb-beforefooter-sidebar-div">
			<div class="wb-beforefooter-sidebar-content">
				<?php dynamic_sidebar( 'Woobizz Before Footer' ); ?>
			</div>
		</div>
		<?php
	}
}