<?php
//-------------------------------------------------------------
//WOOBIZZ BEFORE FOOTER FUNCTIONS
//-------------------------------------------------------------
//TRASFORM HEX TO RGB
function woobizz_beforefooter_hextorgb($hex) {
$hex = str_replace("#", "", $hex);
if(strlen($hex) == 3) {
  $r = hexdec(substr($hex,0,1).substr($hex,0,1));
  $g = hexdec(substr($hex,1,1).substr($hex,1,1));
  $b = hexdec(substr($hex,2,1).substr($hex,2,1));
} else {
  $r = hexdec(substr($hex,0,2));
  $g = hexdec(substr($hex,2,2));
  $b = hexdec(substr($hex,4,2));
}
$rgb = array($r, $g, $b);
return implode(",", $rgb); // returns the rgb values separated by commas
//return $rgb; // returns an array with the rgb values
}
//ALL CSS OPTIONS--------------------------------------------------------------------------
function woobizz_beforefooter_sidebar_css(){
//--------------------------------------------------------------------------------------
// START 1.1 FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//Background
$woobizz_beforefooter_backgroundimage= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_backgroundimage');
$woobizz_beforefooter_backgroundcolor= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_backgroundcolor');
$woobizz_beforefooter_backgroundsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_backgroundsize');
if ($woobizz_beforefooter_backgroundsize==0){
		$woobizz_beforefooter_backgroundsize="contain";
	} elseif($woobizz_beforefooter_backgroundsize==1) {
		$woobizz_beforefooter_backgroundsize="cover";
	} elseif($woobizz_beforefooter_backgroundsize==2) {
		$woobizz_beforefooter_backgroundsize="inherit";
	} elseif($woobizz_beforefooter_backgroundsize==3) {
		$woobizz_beforefooter_backgroundsize="initial";
	} else {
		$woobizz_beforefooter_backgroundsize="initial";
} 
$woobizz_beforefooter_backgroundrepeat= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_backgroundrepeat');
if ($woobizz_beforefooter_backgroundrepeat==0){
		$woobizz_beforefooter_backgroundrepeat="no-repeat";
	} elseif($woobizz_beforefooter_backgroundrepeat==1) {
		$woobizz_beforefooter_backgroundrepeat="repeat";
	} elseif($woobizz_beforefooter_backgroundrepeat==2) {
		$woobizz_beforefooter_backgroundrepeat="repeat-x";
	} elseif($woobizz_beforefooter_backgroundrepeat==3) {
		$woobizz_beforefooter_backgroundrepeat="repeat-y";
	} elseif($woobizz_beforefooter_backgroundrepeat==4) {
		$woobizz_beforefooter_backgroundrepeat="round";
	} elseif($woobizz_beforefooter_backgroundrepeat==5) {
		$woobizz_beforefooter_backgroundrepeat="space";
	} elseif($woobizz_beforefooter_backgroundrepeat==6) {
		$woobizz_beforefooter_backgroundrepeat="inherit";	
	} elseif($woobizz_beforefooter_backgroundrepeat==5) {
		$woobizz_beforefooter_backgroundrepeat="initial";		
	} else {
		$woobizz_beforefooter_backgroundrepeat="initial";
} 
$woobizz_beforefooter_backgroundposition= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_backgroundposition');
if ($woobizz_beforefooter_backgroundposition==0){
		$woobizz_beforefooter_backgroundposition="left top";
	} elseif($woobizz_beforefooter_backgroundposition==1) {
		$woobizz_beforefooter_backgroundposition="left center";
	} elseif($woobizz_beforefooter_backgroundposition==2) {
		$woobizz_beforefooter_backgroundposition="left bottom";
	} elseif($woobizz_beforefooter_backgroundposition==3) {
		$woobizz_beforefooter_backgroundposition="right top";
	} elseif($woobizz_beforefooter_backgroundposition==4) {
		$woobizz_beforefooter_backgroundposition="right center";
	} elseif($woobizz_beforefooter_backgroundposition==5) {
		$woobizz_beforefooter_backgroundposition="right bottom";
	} elseif($woobizz_beforefooter_backgroundposition==6) {
		$woobizz_beforefooter_backgroundposition="center top";	
	} elseif($woobizz_beforefooter_backgroundposition==7) {
		$woobizz_beforefooter_backgroundposition="center center";	
	} elseif($woobizz_beforefooter_backgroundposition==8) {
		$woobizz_beforefooter_backgroundposition="center bottom";	
	} elseif($woobizz_beforefooter_backgroundposition==9) {
		$woobizz_beforefooter_backgroundposition="initial";	
	} elseif($woobizz_beforefooter_backgroundposition==10) {
		$woobizz_beforefooter_backgroundposition="initial";		
	} else {
		$woobizz_beforefooter_backgroundposition="initial";
} 
//Gradients
$woobizz_beforefooter_backgroundgradient1= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_backgroundgradient1');
$woobizz_beforefooter_backgroundgradient1opacity= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_backgroundgradient1opacity');
$trasnform_woobizz_beforefooter_backgroundgradient1=woobizz_beforefooter_hextorgb($woobizz_beforefooter_backgroundgradient1);
$woobizz_beforefooter_backgroundfullgradient1=$trasnform_woobizz_beforefooter_backgroundgradient1.",".$woobizz_beforefooter_backgroundgradient1opacity;
$woobizz_beforefooter_backgroundgradient2= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_backgroundgradient2');
$woobizz_beforefooter_backgroundgradient2opacity= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_backgroundgradient2opacity');
$trasnform_woobizz_beforefooter_backgroundgradient2=woobizz_beforefooter_hextorgb($woobizz_beforefooter_backgroundgradient2);
$woobizz_beforefooter_backgroundfullgradient2=$trasnform_woobizz_beforefooter_backgroundgradient2.",".$woobizz_beforefooter_backgroundgradient2opacity;
//--------------------------------------------------------------------------------------
// END 1.1 FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.2 FOOTER MARGINS
//--------------------------------------------------------------------------------------
//Margin Top
$woobizz_beforefooter_margintopsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_margintopsize');
$woobizz_beforefooter_marginunittop= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_marginunittop');
if ($woobizz_beforefooter_marginunittop==0){
	$woobizz_beforefooter_marginunittop="px";
} elseif($woobizz_beforefooter_marginunittop==1) {
	$woobizz_beforefooter_marginunittop="%";
} elseif($woobizz_beforefooter_marginunittop==2) {
	$woobizz_beforefooter_marginunittop="em";
} elseif($woobizz_beforefooter_marginunittop==3) {
	$woobizz_beforefooter_marginunittop="pt";
} else {
	$woobizz_beforefooter_marginunittop="initial";
} 
//Margin Right
$woobizz_beforefooter_marginrightsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_marginrightsize');
$woobizz_beforefooter_marginunitright= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_marginunitright');
if ($woobizz_beforefooter_marginunitright==0){
	$woobizz_beforefooter_marginunitright="px";
} elseif($woobizz_beforefooter_marginunitright==1) {
	$woobizz_beforefooter_marginunitright="%";
} elseif($woobizz_beforefooter_marginunitright==2) {
	$woobizz_beforefooter_marginunitright="em";
} elseif($woobizz_beforefooter_marginunitright==3) {
	$woobizz_beforefooter_marginunitright="pt";
} else {
	$woobizz_beforefooter_marginunitright="initial";
}	
//Margin Bottom
$woobizz_beforefooter_marginbottomsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_marginbottomsize');
$woobizz_beforefooter_marginunitbottom= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_marginunitbottom');
if ($woobizz_beforefooter_marginunitbottom==0){
	$woobizz_beforefooter_marginunitbottom="px";
} elseif($woobizz_beforefooter_marginunitbottom==1) {
	$woobizz_beforefooter_marginunitbottom="%";
} elseif($woobizz_beforefooter_marginunitbottom==2) {
	$woobizz_beforefooter_marginunitbottom="em";
} elseif($woobizz_beforefooter_marginunitbottom==3) {
	$woobizz_beforefooter_marginunitbottom="pt";
} else {
	$woobizz_beforefooter_marginunitbottom="initial";
}	
//Margin Left
$woobizz_beforefooter_marginleftsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_marginleftsize');
$woobizz_beforefooter_marginunitleft= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_marginunitleft');
if ($woobizz_beforefooter_marginunitleft==0){
	$woobizz_beforefooter_marginunitleft="px";
} elseif($woobizz_beforefooter_marginunitleft==1) {
	$woobizz_beforefooter_marginunitleft="%";
} elseif($woobizz_beforefooter_marginunitleft==2) {
	$woobizz_beforefooter_marginunitleft="em";
} elseif($woobizz_beforefooter_marginunitleft==3) {
	$woobizz_beforefooter_marginunitleft="pt";
} else {
	$woobizz_beforefooter_marginunitleft="initial";
}
//Full Margin
$woobizz_beforefooter_marginfull =  $woobizz_beforefooter_margintopsize.$woobizz_beforefooter_marginunittop." "
							  .$woobizz_beforefooter_marginrightsize.$woobizz_beforefooter_marginunitright." "
							  .$woobizz_beforefooter_marginbottomsize.$woobizz_beforefooter_marginunitbottom." "
							  .$woobizz_beforefooter_marginleftsize.$woobizz_beforefooter_marginunitleft;		
//--------------------------------------------------------------------------------------
// END 1.2 FOOTER MARGINS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.3 FOOTER PADDINGS
//--------------------------------------------------------------------------------------
//Padding Top
$woobizz_beforefooter_paddingtopsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_paddingtopsize');
$woobizz_beforefooter_paddingunittop= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_paddingunittop');
if ($woobizz_beforefooter_paddingunittop==0){
	$woobizz_beforefooter_paddingunittop="px";
} elseif($woobizz_beforefooter_paddingunittop==1) {
	$woobizz_beforefooter_paddingunittop="%";
} elseif($woobizz_beforefooter_paddingunittop==2) {
	$woobizz_beforefooter_paddingunittop="em";
} elseif($woobizz_beforefooter_paddingunittop==3) {
	$woobizz_beforefooter_paddingunittop="pt";
} else {
	$woobizz_beforefooter_paddingunittop="initial";
} 
//Padding Right
$woobizz_beforefooter_paddingrightsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_paddingrightsize');
$woobizz_beforefooter_paddingunitright= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_paddingunitright');
if ($woobizz_beforefooter_paddingunitright==0){
	$woobizz_beforefooter_paddingunitright="px";
} elseif($woobizz_beforefooter_paddingunitright==1) {
	$woobizz_beforefooter_paddingunitright="%";
} elseif($woobizz_beforefooter_paddingunitright==2) {
	$woobizz_beforefooter_paddingunitright="em";
} elseif($woobizz_beforefooter_paddingunitright==3) {
	$woobizz_beforefooter_paddingunitright="pt";
} else {
	$woobizz_beforefooter_paddingunitright="initial";
}	
//Padding Bottom
$woobizz_beforefooter_paddingbottomsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_paddingbottomsize');
$woobizz_beforefooter_paddingunitbottom= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_paddingunitbottom');
if ($woobizz_beforefooter_paddingunitbottom==0){
	$woobizz_beforefooter_paddingunitbottom="px";
} elseif($woobizz_beforefooter_paddingunitbottom==1) {
	$woobizz_beforefooter_paddingunitbottom="%";
} elseif($woobizz_beforefooter_paddingunitbottom==2) {
	$woobizz_beforefooter_paddingunitbottom="em";
} elseif($woobizz_beforefooter_paddingunitbottom==3) {
	$woobizz_beforefooter_paddingunitbottom="pt";
} else {
	$woobizz_beforefooter_paddingunitbottom="initial";
}	
//Padding Left
$woobizz_beforefooter_paddingleftsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_paddingleftsize');
$woobizz_beforefooter_paddingunitleft= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_paddingunitleft');
if ($woobizz_beforefooter_paddingunitleft==0){
	$woobizz_beforefooter_paddingunitleft="px";
} elseif($woobizz_beforefooter_paddingunitleft==1) {
	$woobizz_beforefooter_paddingunitleft="%";
} elseif($woobizz_beforefooter_paddingunitleft==2) {
	$woobizz_beforefooter_paddingunitleft="em";
} elseif($woobizz_beforefooter_paddingunitleft==3) {
	$woobizz_beforefooter_paddingunitleft="pt";
} else {
	$woobizz_beforefooter_paddingunitleft="initial";
}
//Full Paddings
$woobizz_beforefooter_paddingfull =  $woobizz_beforefooter_paddingtopsize.$woobizz_beforefooter_paddingunittop." "
							  .$woobizz_beforefooter_paddingrightsize.$woobizz_beforefooter_paddingunitright." "
							  .$woobizz_beforefooter_paddingbottomsize.$woobizz_beforefooter_paddingunitbottom." "
							  .$woobizz_beforefooter_paddingleftsize.$woobizz_beforefooter_paddingunitleft;	
//--------------------------------------------------------------------------------------
// END 1.3 FOOTER PADDINGS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.4 FOOTER BORDERS
//--------------------------------------------------------------------------------------
//Border Top
$woobizz_beforefooter_bordertopsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_bordertopsize');
$woobizz_beforefooter_bordertopcolor= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_bordertopcolor');
$woobizz_beforefooter_bordertopstyle= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_bordertopstyle');
if ($woobizz_beforefooter_bordertopstyle==0){
		$woobizz_beforefooter_bordertopstyle="dotted";
	} elseif($woobizz_beforefooter_bordertopstyle==1) {
		$woobizz_beforefooter_bordertopstyle="dashed";
	} elseif($woobizz_beforefooter_bordertopstyle==2) {
		$woobizz_beforefooter_bordertopstyle="solid";
	} elseif($woobizz_beforefooter_bordertopstyle==3) {
		$woobizz_beforefooter_bordertopstyle="none";
	} else {$woobizz_beforefooter_bordertopstyle="none";
} 
$woobizz_beforefooter_bordertopfull=$woobizz_beforefooter_bordertopsize."px "
									.$woobizz_beforefooter_bordertopstyle." "
									.$woobizz_beforefooter_bordertopcolor." ";
//Border Right
$woobizz_beforefooter_borderrightsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_borderrightsize');
$woobizz_beforefooter_borderrightcolor= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_borderrightcolor');
$woobizz_beforefooter_borderrightstyle= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_borderrightstyle');
if ($woobizz_beforefooter_borderrightstyle==0){
		$woobizz_beforefooter_borderrightstyle="dotted";
	} elseif($woobizz_beforefooter_borderrightstyle==1) {
		$woobizz_beforefooter_borderrightstyle="dashed";
	} elseif($woobizz_beforefooter_borderrightstyle==2) {
		$woobizz_beforefooter_borderrightstyle="solid";
	} elseif($woobizz_beforefooter_borderrightstyle==3) {
		$woobizz_beforefooter_borderrightstyle="none";
	} else {$woobizz_beforefooter_borderrightstyle="none";
} 
$woobizz_beforefooter_borderrightfull=$woobizz_beforefooter_borderrightsize."px "
									.$woobizz_beforefooter_borderrightstyle." "
									.$woobizz_beforefooter_borderrightcolor." ";
//Border Bottom
$woobizz_beforefooter_borderbottomsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_borderbottomsize');
$woobizz_beforefooter_borderbottomcolor= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_borderbottomcolor');
$woobizz_beforefooter_borderbottomstyle= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_borderbottomstyle');
if ($woobizz_beforefooter_borderbottomstyle==0){
		$woobizz_beforefooter_borderbottomstyle="dotted";
	} elseif($woobizz_beforefooter_borderbottomstyle==1) {
		$woobizz_beforefooter_borderbottomstyle="dashed";
	} elseif($woobizz_beforefooter_borderbottomstyle==2) {
		$woobizz_beforefooter_borderbottomstyle="solid";
	} elseif($woobizz_beforefooter_borderbottomstyle==3) {
		$woobizz_beforefooter_borderbottomstyle="none";
	} else {$woobizz_beforefooter_borderbottomstyle="none";
} 
$woobizz_beforefooter_borderbottomfull=$woobizz_beforefooter_borderbottomsize."px "
									.$woobizz_beforefooter_borderbottomstyle." "
									.$woobizz_beforefooter_borderbottomcolor." ";	
//Border Left
$woobizz_beforefooter_borderleftsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_borderleftsize');
$woobizz_beforefooter_borderleftcolor= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_borderleftcolor');
$woobizz_beforefooter_borderleftstyle= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_borderleftstyle');
if ($woobizz_beforefooter_borderleftstyle==0){
		$woobizz_beforefooter_borderleftstyle="dotted";
	} elseif($woobizz_beforefooter_borderleftstyle==1) {
		$woobizz_beforefooter_borderleftstyle="dashed";
	} elseif($woobizz_beforefooter_borderleftstyle==2) {
		$woobizz_beforefooter_borderleftstyle="solid";
	} elseif($woobizz_beforefooter_borderleftstyle==3) {
		$woobizz_beforefooter_borderleftstyle="none";
	} else {$woobizz_beforefooter_borderleftstyle="none";
} 
$woobizz_beforefooter_borderleftfull=$woobizz_beforefooter_borderleftsize."px "
									.$woobizz_beforefooter_borderleftstyle." "
									.$woobizz_beforefooter_borderleftcolor." ";	
//--------------------------------------------------------------------------------------
// END 1.4 FOOTER BORDERS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// END 1.5 FOOTER SHADOWS
//--------------------------------------------------------------------------------------
$woobizz_beforefooter_shadowcolor= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_shadowcolor');
$woobizz_beforefooter_shadowrightdistance= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_shadowrightdistance');
$woobizz_beforefooter_shadowbottomdistance= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_shadowbottomdistance');
$woobizz_beforefooter_shadowspread= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_shadowspread');
$woobizz_beforefooter_shadowsize= get_option(WOOBIZZFOOTER.'_woobizz_beforefooter_shadowsize');
$woobizz_beforefooter_shadowfull=$woobizz_beforefooter_shadowrightdistance."px "
						  .$woobizz_beforefooter_shadowbottomdistance."px "
						  .$woobizz_beforefooter_shadowspread."px "
						  .$woobizz_beforefooter_shadowsize."px "
						  .$woobizz_beforefooter_shadowcolor;
//END CART WIDGET COLOR----------------------------------------------------------------------------------------------
//START SHOWING CSS OPTIONS------------------------------------------------------------------------------------------
if (is_active_sidebar( 'woobizzbeforefooterwidget' ) ) {
	echo "
<style>
	.wb-beforefooter-sidebar-div{
				background:linear-gradient(rgba(".$woobizz_beforefooter_backgroundfullgradient1."),
										rgba(".$woobizz_beforefooter_backgroundfullgradient2.")),
										url(".$woobizz_beforefooter_backgroundimage.");
				background-color:".$woobizz_beforefooter_backgroundcolor."!important;
				background-size:".$woobizz_beforefooter_backgroundsize."!important;
				background-repeat:".$woobizz_beforefooter_backgroundrepeat."!important;
				background-position:".$woobizz_beforefooter_backgroundposition."!important;
				margin:".$woobizz_beforefooter_marginfull."!important;
				padding:".$woobizz_beforefooter_paddingfull."!important;
				box-shadow:".$woobizz_beforefooter_shadowfull."!important;
				border-top:".$woobizz_beforefooter_bordertopfull."!important;
				border-right:".$woobizz_beforefooter_borderrightfull."!important;
				border-bottom:".$woobizz_beforefooter_borderbottomfull."!important;
				border-left:".$woobizz_beforefooter_borderleftfull."!important;
				list-style: none!important;
	}
	.wb-beforefooter-sidebar-content{
		display:table!important;
		width:100%!important;
	}
	.wb-beforefooter-sidebar-content h3.widget-title {
		border: none;
		background: none;
		text-align: left;
		margin-left: 35px;
		font-weight: 400;
		margin-bottom: 15px;
		font-size: 19px;
	}
	.wb-beforefooter-sidebar-div .textwidget {
		padding: 10px 15px!important;
	}
	.wb-beforefooter-sidebar-div .panel-grid-cell {
		margin: 0!important;
	}
	.wb-beforefooter-sidebar-div .widget{
		margin-bottom:0!important;
	}	
	.site-footer {
		display: none!important;
	}
	
</style>";
}else{
	echo "
<style>
	.wb-beforefooter-sidebar-div{
			display:none!important;
	}
</style>";
}
}
add_action('wp_head', 'woobizz_beforefooter_sidebar_css', 100);