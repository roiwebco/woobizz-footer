<?php
//-------------------------------------------------------------
//WOOBIZZ CUSTOM FOOTER FUNCTIONS
//-------------------------------------------------------------
//TRASFORM HEX TO RGB
function woobizz_customfooter_hextorgb($hex) {
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
function woobizz_customfooter_sidebar_css(){
//--------------------------------------------------------------------------------------
// START 1.1 FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//Background
$woobizz_customfooter_backgroundimage= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_backgroundimage');
$woobizz_customfooter_backgroundcolor= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_backgroundcolor');
$woobizz_customfooter_backgroundsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_backgroundsize');
if ($woobizz_customfooter_backgroundsize==0){
		$woobizz_customfooter_backgroundsize="contain";
	} elseif($woobizz_customfooter_backgroundsize==1) {
		$woobizz_customfooter_backgroundsize="cover";
	} elseif($woobizz_customfooter_backgroundsize==2) {
		$woobizz_customfooter_backgroundsize="inherit";
	} elseif($woobizz_customfooter_backgroundsize==3) {
		$woobizz_customfooter_backgroundsize="initial";
	} else {
		$woobizz_customfooter_backgroundsize="initial";
} 
$woobizz_customfooter_backgroundrepeat= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_backgroundrepeat');
if ($woobizz_customfooter_backgroundrepeat==0){
		$woobizz_customfooter_backgroundrepeat="no-repeat";
	} elseif($woobizz_customfooter_backgroundrepeat==1) {
		$woobizz_customfooter_backgroundrepeat="repeat";
	} elseif($woobizz_customfooter_backgroundrepeat==2) {
		$woobizz_customfooter_backgroundrepeat="repeat-x";
	} elseif($woobizz_customfooter_backgroundrepeat==3) {
		$woobizz_customfooter_backgroundrepeat="repeat-y";
	} elseif($woobizz_customfooter_backgroundrepeat==4) {
		$woobizz_customfooter_backgroundrepeat="round";
	} elseif($woobizz_customfooter_backgroundrepeat==5) {
		$woobizz_customfooter_backgroundrepeat="space";
	} elseif($woobizz_customfooter_backgroundrepeat==6) {
		$woobizz_customfooter_backgroundrepeat="inherit";	
	} elseif($woobizz_customfooter_backgroundrepeat==5) {
		$woobizz_customfooter_backgroundrepeat="initial";		
	} else {
		$woobizz_customfooter_backgroundrepeat="initial";
} 
$woobizz_customfooter_backgroundposition= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_backgroundposition');
if ($woobizz_customfooter_backgroundposition==0){
		$woobizz_customfooter_backgroundposition="left top";
	} elseif($woobizz_customfooter_backgroundposition==1) {
		$woobizz_customfooter_backgroundposition="left center";
	} elseif($woobizz_customfooter_backgroundposition==2) {
		$woobizz_customfooter_backgroundposition="left bottom";
	} elseif($woobizz_customfooter_backgroundposition==3) {
		$woobizz_customfooter_backgroundposition="right top";
	} elseif($woobizz_customfooter_backgroundposition==4) {
		$woobizz_customfooter_backgroundposition="right center";
	} elseif($woobizz_customfooter_backgroundposition==5) {
		$woobizz_customfooter_backgroundposition="right bottom";
	} elseif($woobizz_customfooter_backgroundposition==6) {
		$woobizz_customfooter_backgroundposition="center top";	
	} elseif($woobizz_customfooter_backgroundposition==7) {
		$woobizz_customfooter_backgroundposition="center center";	
	} elseif($woobizz_customfooter_backgroundposition==8) {
		$woobizz_customfooter_backgroundposition="center bottom";	
	} elseif($woobizz_customfooter_backgroundposition==9) {
		$woobizz_customfooter_backgroundposition="initial";	
	} elseif($woobizz_customfooter_backgroundposition==10) {
		$woobizz_customfooter_backgroundposition="initial";		
	} else {
		$woobizz_customfooter_backgroundposition="initial";
} 
//Gradients
$woobizz_customfooter_backgroundgradient1= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_backgroundgradient1');
$woobizz_customfooter_backgroundgradient1opacity= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_backgroundgradient1opacity');
$trasnform_woobizz_customfooter_backgroundgradient1=woobizz_customfooter_hextorgb($woobizz_customfooter_backgroundgradient1);
$woobizz_customfooter_backgroundfullgradient1=$trasnform_woobizz_customfooter_backgroundgradient1.",".$woobizz_customfooter_backgroundgradient1opacity;
$woobizz_customfooter_backgroundgradient2= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_backgroundgradient2');
$woobizz_customfooter_backgroundgradient2opacity= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_backgroundgradient2opacity');
$trasnform_woobizz_customfooter_backgroundgradient2=woobizz_customfooter_hextorgb($woobizz_customfooter_backgroundgradient2);
$woobizz_customfooter_backgroundfullgradient2=$trasnform_woobizz_customfooter_backgroundgradient2.",".$woobizz_customfooter_backgroundgradient2opacity;
//--------------------------------------------------------------------------------------
// END 1.1 FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.2 FOOTER MARGINS
//--------------------------------------------------------------------------------------
//Margin Top
$woobizz_customfooter_margintopsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_margintopsize');
$woobizz_customfooter_marginunittop= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_marginunittop');
if ($woobizz_customfooter_marginunittop==0){
	$woobizz_customfooter_marginunittop="px";
} elseif($woobizz_customfooter_marginunittop==1) {
	$woobizz_customfooter_marginunittop="%";
} elseif($woobizz_customfooter_marginunittop==2) {
	$woobizz_customfooter_marginunittop="em";
} elseif($woobizz_customfooter_marginunittop==3) {
	$woobizz_customfooter_marginunittop="pt";
} else {
	$woobizz_customfooter_marginunittop="initial";
} 
//Margin Right
$woobizz_customfooter_marginrightsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_marginrightsize');
$woobizz_customfooter_marginunitright= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_marginunitright');
if ($woobizz_customfooter_marginunitright==0){
	$woobizz_customfooter_marginunitright="px";
} elseif($woobizz_customfooter_marginunitright==1) {
	$woobizz_customfooter_marginunitright="%";
} elseif($woobizz_customfooter_marginunitright==2) {
	$woobizz_customfooter_marginunitright="em";
} elseif($woobizz_customfooter_marginunitright==3) {
	$woobizz_customfooter_marginunitright="pt";
} else {
	$woobizz_customfooter_marginunitright="initial";
}	
//Margin Bottom
$woobizz_customfooter_marginbottomsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_marginbottomsize');
$woobizz_customfooter_marginunitbottom= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_marginunitbottom');
if ($woobizz_customfooter_marginunitbottom==0){
	$woobizz_customfooter_marginunitbottom="px";
} elseif($woobizz_customfooter_marginunitbottom==1) {
	$woobizz_customfooter_marginunitbottom="%";
} elseif($woobizz_customfooter_marginunitbottom==2) {
	$woobizz_customfooter_marginunitbottom="em";
} elseif($woobizz_customfooter_marginunitbottom==3) {
	$woobizz_customfooter_marginunitbottom="pt";
} else {
	$woobizz_customfooter_marginunitbottom="initial";
}	
//Margin Left
$woobizz_customfooter_marginleftsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_marginleftsize');
$woobizz_customfooter_marginunitleft= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_marginunitleft');
if ($woobizz_customfooter_marginunitleft==0){
	$woobizz_customfooter_marginunitleft="px";
} elseif($woobizz_customfooter_marginunitleft==1) {
	$woobizz_customfooter_marginunitleft="%";
} elseif($woobizz_customfooter_marginunitleft==2) {
	$woobizz_customfooter_marginunitleft="em";
} elseif($woobizz_customfooter_marginunitleft==3) {
	$woobizz_customfooter_marginunitleft="pt";
} else {
	$woobizz_customfooter_marginunitleft="initial";
}
//Full Margin
$woobizz_customfooter_marginfull =  $woobizz_customfooter_margintopsize.$woobizz_customfooter_marginunittop." "
							  .$woobizz_customfooter_marginrightsize.$woobizz_customfooter_marginunitright." "
							  .$woobizz_customfooter_marginbottomsize.$woobizz_customfooter_marginunitbottom." "
							  .$woobizz_customfooter_marginleftsize.$woobizz_customfooter_marginunitleft;		
//--------------------------------------------------------------------------------------
// END 1.2 FOOTER MARGINS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.3 FOOTER PADDINGS
//--------------------------------------------------------------------------------------
//Padding Top
$woobizz_customfooter_paddingtopsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_paddingtopsize');
$woobizz_customfooter_paddingunittop= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_paddingunittop');
if ($woobizz_customfooter_paddingunittop==0){
	$woobizz_customfooter_paddingunittop="px";
} elseif($woobizz_customfooter_paddingunittop==1) {
	$woobizz_customfooter_paddingunittop="%";
} elseif($woobizz_customfooter_paddingunittop==2) {
	$woobizz_customfooter_paddingunittop="em";
} elseif($woobizz_customfooter_paddingunittop==3) {
	$woobizz_customfooter_paddingunittop="pt";
} else {
	$woobizz_customfooter_paddingunittop="initial";
} 
//Padding Right
$woobizz_customfooter_paddingrightsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_paddingrightsize');
$woobizz_customfooter_paddingunitright= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_paddingunitright');
if ($woobizz_customfooter_paddingunitright==0){
	$woobizz_customfooter_paddingunitright="px";
} elseif($woobizz_customfooter_paddingunitright==1) {
	$woobizz_customfooter_paddingunitright="%";
} elseif($woobizz_customfooter_paddingunitright==2) {
	$woobizz_customfooter_paddingunitright="em";
} elseif($woobizz_customfooter_paddingunitright==3) {
	$woobizz_customfooter_paddingunitright="pt";
} else {
	$woobizz_customfooter_paddingunitright="initial";
}	
//Padding Bottom
$woobizz_customfooter_paddingbottomsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_paddingbottomsize');
$woobizz_customfooter_paddingunitbottom= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_paddingunitbottom');
if ($woobizz_customfooter_paddingunitbottom==0){
	$woobizz_customfooter_paddingunitbottom="px";
} elseif($woobizz_customfooter_paddingunitbottom==1) {
	$woobizz_customfooter_paddingunitbottom="%";
} elseif($woobizz_customfooter_paddingunitbottom==2) {
	$woobizz_customfooter_paddingunitbottom="em";
} elseif($woobizz_customfooter_paddingunitbottom==3) {
	$woobizz_customfooter_paddingunitbottom="pt";
} else {
	$woobizz_customfooter_paddingunitbottom="initial";
}	
//Padding Left
$woobizz_customfooter_paddingleftsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_paddingleftsize');
$woobizz_customfooter_paddingunitleft= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_paddingunitleft');
if ($woobizz_customfooter_paddingunitleft==0){
	$woobizz_customfooter_paddingunitleft="px";
} elseif($woobizz_customfooter_paddingunitleft==1) {
	$woobizz_customfooter_paddingunitleft="%";
} elseif($woobizz_customfooter_paddingunitleft==2) {
	$woobizz_customfooter_paddingunitleft="em";
} elseif($woobizz_customfooter_paddingunitleft==3) {
	$woobizz_customfooter_paddingunitleft="pt";
} else {
	$woobizz_customfooter_paddingunitleft="initial";
}
//Full Paddings
$woobizz_customfooter_paddingfull =  $woobizz_customfooter_paddingtopsize.$woobizz_customfooter_paddingunittop." "
							  .$woobizz_customfooter_paddingrightsize.$woobizz_customfooter_paddingunitright." "
							  .$woobizz_customfooter_paddingbottomsize.$woobizz_customfooter_paddingunitbottom." "
							  .$woobizz_customfooter_paddingleftsize.$woobizz_customfooter_paddingunitleft;	
//--------------------------------------------------------------------------------------
// END 1.3 FOOTER PADDINGS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.4 FOOTER BORDERS
//--------------------------------------------------------------------------------------
//Border Top
$woobizz_customfooter_bordertopsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_bordertopsize');
$woobizz_customfooter_bordertopcolor= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_bordertopcolor');
$woobizz_customfooter_bordertopstyle= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_bordertopstyle');
if ($woobizz_customfooter_bordertopstyle==0){
		$woobizz_customfooter_bordertopstyle="dotted";
	} elseif($woobizz_customfooter_bordertopstyle==1) {
		$woobizz_customfooter_bordertopstyle="dashed";
	} elseif($woobizz_customfooter_bordertopstyle==2) {
		$woobizz_customfooter_bordertopstyle="solid";
	} elseif($woobizz_customfooter_bordertopstyle==3) {
		$woobizz_customfooter_bordertopstyle="none";
	} else {$woobizz_customfooter_bordertopstyle="none";
} 
$woobizz_customfooter_bordertopfull=$woobizz_customfooter_bordertopsize."px "
									.$woobizz_customfooter_bordertopstyle." "
									.$woobizz_customfooter_bordertopcolor." ";
//Border Right
$woobizz_customfooter_borderrightsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_borderrightsize');
$woobizz_customfooter_borderrightcolor= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_borderrightcolor');
$woobizz_customfooter_borderrightstyle= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_borderrightstyle');
if ($woobizz_customfooter_borderrightstyle==0){
		$woobizz_customfooter_borderrightstyle="dotted";
	} elseif($woobizz_customfooter_borderrightstyle==1) {
		$woobizz_customfooter_borderrightstyle="dashed";
	} elseif($woobizz_customfooter_borderrightstyle==2) {
		$woobizz_customfooter_borderrightstyle="solid";
	} elseif($woobizz_customfooter_borderrightstyle==3) {
		$woobizz_customfooter_borderrightstyle="none";
	} else {$woobizz_customfooter_borderrightstyle="none";
} 
$woobizz_customfooter_borderrightfull=$woobizz_customfooter_borderrightsize."px "
									.$woobizz_customfooter_borderrightstyle." "
									.$woobizz_customfooter_borderrightcolor." ";
//Border Bottom
$woobizz_customfooter_borderbottomsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_borderbottomsize');
$woobizz_customfooter_borderbottomcolor= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_borderbottomcolor');
$woobizz_customfooter_borderbottomstyle= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_borderbottomstyle');
if ($woobizz_customfooter_borderbottomstyle==0){
		$woobizz_customfooter_borderbottomstyle="dotted";
	} elseif($woobizz_customfooter_borderbottomstyle==1) {
		$woobizz_customfooter_borderbottomstyle="dashed";
	} elseif($woobizz_customfooter_borderbottomstyle==2) {
		$woobizz_customfooter_borderbottomstyle="solid";
	} elseif($woobizz_customfooter_borderbottomstyle==3) {
		$woobizz_customfooter_borderbottomstyle="none";
	} else {$woobizz_customfooter_borderbottomstyle="none";
} 
$woobizz_customfooter_borderbottomfull=$woobizz_customfooter_borderbottomsize."px "
									.$woobizz_customfooter_borderbottomstyle." "
									.$woobizz_customfooter_borderbottomcolor." ";	
//Border Left
$woobizz_customfooter_borderleftsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_borderleftsize');
$woobizz_customfooter_borderleftcolor= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_borderleftcolor');
$woobizz_customfooter_borderleftstyle= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_borderleftstyle');
if ($woobizz_customfooter_borderleftstyle==0){
		$woobizz_customfooter_borderleftstyle="dotted";
	} elseif($woobizz_customfooter_borderleftstyle==1) {
		$woobizz_customfooter_borderleftstyle="dashed";
	} elseif($woobizz_customfooter_borderleftstyle==2) {
		$woobizz_customfooter_borderleftstyle="solid";
	} elseif($woobizz_customfooter_borderleftstyle==3) {
		$woobizz_customfooter_borderleftstyle="none";
	} else {$woobizz_customfooter_borderleftstyle="none";
} 
$woobizz_customfooter_borderleftfull=$woobizz_customfooter_borderleftsize."px "
									.$woobizz_customfooter_borderleftstyle." "
									.$woobizz_customfooter_borderleftcolor." ";	
//--------------------------------------------------------------------------------------
// END 1.4 FOOTER BORDERS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// END 1.5 FOOTER SHADOWS
//--------------------------------------------------------------------------------------
$woobizz_customfooter_shadowcolor= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_shadowcolor');
$woobizz_customfooter_shadowrightdistance= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_shadowrightdistance');
$woobizz_customfooter_shadowbottomdistance= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_shadowbottomdistance');
$woobizz_customfooter_shadowspread= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_shadowspread');
$woobizz_customfooter_shadowsize= get_option(WOOBIZZFOOTER.'_woobizz_customfooter_shadowsize');
$woobizz_customfooter_shadowfull=$woobizz_customfooter_shadowrightdistance."px "
						  .$woobizz_customfooter_shadowbottomdistance."px "
						  .$woobizz_customfooter_shadowspread."px "
						  .$woobizz_customfooter_shadowsize."px "
						  .$woobizz_customfooter_shadowcolor;
//END CART WIDGET COLOR----------------------------------------------------------------------------------------------
//START SHOWING CSS OPTIONS------------------------------------------------------------------------------------------
if (is_active_sidebar( 'woobizzcustomfooterwidget' ) ) {
	echo "
<style>
.wb-customfooter-sidebar-div{
			background:linear-gradient(rgba(".$woobizz_customfooter_backgroundfullgradient1."),
									   rgba(".$woobizz_customfooter_backgroundfullgradient2.")),
									   url(".$woobizz_customfooter_backgroundimage.")!important;
			background-color:".$woobizz_customfooter_backgroundcolor."!important;
			background-size:".$woobizz_customfooter_backgroundsize."!important;
			background-repeat:".$woobizz_customfooter_backgroundrepeat."!important;
			background-position:".$woobizz_customfooter_backgroundposition."!important;
			margin:".$woobizz_customfooter_marginfull."!important;
			padding:".$woobizz_customfooter_paddingfull."!important;
			box-shadow:".$woobizz_customfooter_shadowfull.";
			border-top:".$woobizz_customfooter_bordertopfull.";
			border-right:".$woobizz_customfooter_borderrightfull.";
			border-bottom:".$woobizz_customfooter_borderbottomfull.";
			border-left:".$woobizz_customfooter_borderleftfull.";
}
.wb-customfooter-sidebar-content{
	display:table;
	width:100%;
}
	
</style>";
}else{
	echo "
<style>
	.wb-customfooter-sidebar-div{
			display:none!important;
	}
</style>";
}
}
add_action('wp_head', 'woobizz_customfooter_sidebar_css', 100);