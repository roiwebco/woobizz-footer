<?php
//-------------------------------------------------------------
//WOOBIZZ AFTER FOOTER FUNCTIONS
//-------------------------------------------------------------
//TRASFORM HEX TO RGB
function woobizz_afterfooter_hextorgb($hex) {
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
function woobizz_afterfooter_sidebar_css(){
//--------------------------------------------------------------------------------------
// START 1.1 AFTER FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//Background
$woobizz_afterfooter_backgroundimage= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_backgroundimage');
$woobizz_afterfooter_backgroundcolor= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_backgroundcolor');
$woobizz_afterfooter_backgroundsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_backgroundsize');
if ($woobizz_afterfooter_backgroundsize==0){
		$woobizz_afterfooter_backgroundsize="contain";
	} elseif($woobizz_afterfooter_backgroundsize==1) {
		$woobizz_afterfooter_backgroundsize="cover";
	} elseif($woobizz_afterfooter_backgroundsize==2) {
		$woobizz_afterfooter_backgroundsize="inherit";
	} elseif($woobizz_afterfooter_backgroundsize==3) {
		$woobizz_afterfooter_backgroundsize="initial";
	} else {
		$woobizz_afterfooter_backgroundsize="initial";
} 
$woobizz_afterfooter_backgroundrepeat= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_backgroundrepeat');
if ($woobizz_afterfooter_backgroundrepeat==0){
		$woobizz_afterfooter_backgroundrepeat="no-repeat";
	} elseif($woobizz_afterfooter_backgroundrepeat==1) {
		$woobizz_afterfooter_backgroundrepeat="repeat";
	} elseif($woobizz_afterfooter_backgroundrepeat==2) {
		$woobizz_afterfooter_backgroundrepeat="repeat-x";
	} elseif($woobizz_afterfooter_backgroundrepeat==3) {
		$woobizz_afterfooter_backgroundrepeat="repeat-y";
	} elseif($woobizz_afterfooter_backgroundrepeat==4) {
		$woobizz_afterfooter_backgroundrepeat="round";
	} elseif($woobizz_afterfooter_backgroundrepeat==5) {
		$woobizz_afterfooter_backgroundrepeat="space";
	} elseif($woobizz_afterfooter_backgroundrepeat==6) {
		$woobizz_afterfooter_backgroundrepeat="inherit";	
	} elseif($woobizz_afterfooter_backgroundrepeat==5) {
		$woobizz_afterfooter_backgroundrepeat="initial";		
	} else {
		$woobizz_afterfooter_backgroundrepeat="initial";
} 
$woobizz_afterfooter_backgroundposition= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_backgroundposition');
if ($woobizz_afterfooter_backgroundposition==0){
		$woobizz_afterfooter_backgroundposition="left top";
	} elseif($woobizz_afterfooter_backgroundposition==1) {
		$woobizz_afterfooter_backgroundposition="left center";
	} elseif($woobizz_afterfooter_backgroundposition==2) {
		$woobizz_afterfooter_backgroundposition="left bottom";
	} elseif($woobizz_afterfooter_backgroundposition==3) {
		$woobizz_afterfooter_backgroundposition="right top";
	} elseif($woobizz_afterfooter_backgroundposition==4) {
		$woobizz_afterfooter_backgroundposition="right center";
	} elseif($woobizz_afterfooter_backgroundposition==5) {
		$woobizz_afterfooter_backgroundposition="right bottom";
	} elseif($woobizz_afterfooter_backgroundposition==6) {
		$woobizz_afterfooter_backgroundposition="center top";	
	} elseif($woobizz_afterfooter_backgroundposition==7) {
		$woobizz_afterfooter_backgroundposition="center center";	
	} elseif($woobizz_afterfooter_backgroundposition==8) {
		$woobizz_afterfooter_backgroundposition="center bottom";	
	} elseif($woobizz_afterfooter_backgroundposition==9) {
		$woobizz_afterfooter_backgroundposition="initial";	
	} elseif($woobizz_afterfooter_backgroundposition==10) {
		$woobizz_afterfooter_backgroundposition="initial";		
	} else {
		$woobizz_afterfooter_backgroundposition="initial";
} 
//Gradients
$woobizz_afterfooter_backgroundgradient1= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_backgroundgradient1');
$woobizz_afterfooter_backgroundgradient1opacity= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_backgroundgradient1opacity');
$trasnform_woobizz_afterfooter_backgroundgradient1=woobizz_afterfooter_hextorgb($woobizz_afterfooter_backgroundgradient1);
$woobizz_afterfooter_backgroundfullgradient1=$trasnform_woobizz_afterfooter_backgroundgradient1.",".$woobizz_afterfooter_backgroundgradient1opacity;
$woobizz_afterfooter_backgroundgradient2= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_backgroundgradient2');
$woobizz_afterfooter_backgroundgradient2opacity= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_backgroundgradient2opacity');
$trasnform_woobizz_afterfooter_backgroundgradient2=woobizz_afterfooter_hextorgb($woobizz_afterfooter_backgroundgradient2);
$woobizz_afterfooter_backgroundfullgradient2=$trasnform_woobizz_afterfooter_backgroundgradient2.",".$woobizz_afterfooter_backgroundgradient2opacity;
//--------------------------------------------------------------------------------------
// END 1.1 AFTER FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.2 AFTER FOOTER MARGINS
//--------------------------------------------------------------------------------------
//Margin Top
$woobizz_afterfooter_margintopsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_margintopsize');
$woobizz_afterfooter_marginunittop= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_marginunittop');
if ($woobizz_afterfooter_marginunittop==0){
	$woobizz_afterfooter_marginunittop="px";
} elseif($woobizz_afterfooter_marginunittop==1) {
	$woobizz_afterfooter_marginunittop="%";
} elseif($woobizz_afterfooter_marginunittop==2) {
	$woobizz_afterfooter_marginunittop="em";
} elseif($woobizz_afterfooter_marginunittop==3) {
	$woobizz_afterfooter_marginunittop="pt";
} else {
	$woobizz_afterfooter_marginunittop="initial";
} 
//Margin Right
$woobizz_afterfooter_marginrightsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_marginrightsize');
$woobizz_afterfooter_marginunitright= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_marginunitright');
if ($woobizz_afterfooter_marginunitright==0){
	$woobizz_afterfooter_marginunitright="px";
} elseif($woobizz_afterfooter_marginunitright==1) {
	$woobizz_afterfooter_marginunitright="%";
} elseif($woobizz_afterfooter_marginunitright==2) {
	$woobizz_afterfooter_marginunitright="em";
} elseif($woobizz_afterfooter_marginunitright==3) {
	$woobizz_afterfooter_marginunitright="pt";
} else {
	$woobizz_afterfooter_marginunitright="initial";
}	
//Margin Bottom
$woobizz_afterfooter_marginbottomsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_marginbottomsize');
$woobizz_afterfooter_marginunitbottom= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_marginunitbottom');
if ($woobizz_afterfooter_marginunitbottom==0){
	$woobizz_afterfooter_marginunitbottom="px";
} elseif($woobizz_afterfooter_marginunitbottom==1) {
	$woobizz_afterfooter_marginunitbottom="%";
} elseif($woobizz_afterfooter_marginunitbottom==2) {
	$woobizz_afterfooter_marginunitbottom="em";
} elseif($woobizz_afterfooter_marginunitbottom==3) {
	$woobizz_afterfooter_marginunitbottom="pt";
} else {
	$woobizz_afterfooter_marginunitbottom="initial";
}	
//Margin Left
$woobizz_afterfooter_marginleftsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_marginleftsize');
$woobizz_afterfooter_marginunitleft= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_marginunitleft');
if ($woobizz_afterfooter_marginunitleft==0){
	$woobizz_afterfooter_marginunitleft="px";
} elseif($woobizz_afterfooter_marginunitleft==1) {
	$woobizz_afterfooter_marginunitleft="%";
} elseif($woobizz_afterfooter_marginunitleft==2) {
	$woobizz_afterfooter_marginunitleft="em";
} elseif($woobizz_afterfooter_marginunitleft==3) {
	$woobizz_afterfooter_marginunitleft="pt";
} else {
	$woobizz_afterfooter_marginunitleft="initial";
}
//Full Margin
$woobizz_afterfooter_marginfull =  $woobizz_afterfooter_margintopsize.$woobizz_afterfooter_marginunittop." "
							  .$woobizz_afterfooter_marginrightsize.$woobizz_afterfooter_marginunitright." "
							  .$woobizz_afterfooter_marginbottomsize.$woobizz_afterfooter_marginunitbottom." "
							  .$woobizz_afterfooter_marginleftsize.$woobizz_afterfooter_marginunitleft;		
//--------------------------------------------------------------------------------------
// END 1.2 AFTER FOOTER MARGINS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.3 AFTER FOOTER PADDINGS
//--------------------------------------------------------------------------------------
//Padding Top
$woobizz_afterfooter_paddingtopsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_paddingtopsize');
$woobizz_afterfooter_paddingunittop= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_paddingunittop');
if ($woobizz_afterfooter_paddingunittop==0){
	$woobizz_afterfooter_paddingunittop="px";
} elseif($woobizz_afterfooter_paddingunittop==1) {
	$woobizz_afterfooter_paddingunittop="%";
} elseif($woobizz_afterfooter_paddingunittop==2) {
	$woobizz_afterfooter_paddingunittop="em";
} elseif($woobizz_afterfooter_paddingunittop==3) {
	$woobizz_afterfooter_paddingunittop="pt";
} else {
	$woobizz_afterfooter_paddingunittop="initial";
} 
//Padding Right
$woobizz_afterfooter_paddingrightsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_paddingrightsize');
$woobizz_afterfooter_paddingunitright= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_paddingunitright');
if ($woobizz_afterfooter_paddingunitright==0){
	$woobizz_afterfooter_paddingunitright="px";
} elseif($woobizz_afterfooter_paddingunitright==1) {
	$woobizz_afterfooter_paddingunitright="%";
} elseif($woobizz_afterfooter_paddingunitright==2) {
	$woobizz_afterfooter_paddingunitright="em";
} elseif($woobizz_afterfooter_paddingunitright==3) {
	$woobizz_afterfooter_paddingunitright="pt";
} else {
	$woobizz_afterfooter_paddingunitright="initial";
}	
//Padding Bottom
$woobizz_afterfooter_paddingbottomsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_paddingbottomsize');
$woobizz_afterfooter_paddingunitbottom= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_paddingunitbottom');
if ($woobizz_afterfooter_paddingunitbottom==0){
	$woobizz_afterfooter_paddingunitbottom="px";
} elseif($woobizz_afterfooter_paddingunitbottom==1) {
	$woobizz_afterfooter_paddingunitbottom="%";
} elseif($woobizz_afterfooter_paddingunitbottom==2) {
	$woobizz_afterfooter_paddingunitbottom="em";
} elseif($woobizz_afterfooter_paddingunitbottom==3) {
	$woobizz_afterfooter_paddingunitbottom="pt";
} else {
	$woobizz_afterfooter_paddingunitbottom="initial";
}	
//Padding Left
$woobizz_afterfooter_paddingleftsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_paddingleftsize');
$woobizz_afterfooter_paddingunitleft= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_paddingunitleft');
if ($woobizz_afterfooter_paddingunitleft==0){
	$woobizz_afterfooter_paddingunitleft="px";
} elseif($woobizz_afterfooter_paddingunitleft==1) {
	$woobizz_afterfooter_paddingunitleft="%";
} elseif($woobizz_afterfooter_paddingunitleft==2) {
	$woobizz_afterfooter_paddingunitleft="em";
} elseif($woobizz_afterfooter_paddingunitleft==3) {
	$woobizz_afterfooter_paddingunitleft="pt";
} else {
	$woobizz_afterfooter_paddingunitleft="initial";
}
//Full Paddings
$woobizz_afterfooter_paddingfull =  $woobizz_afterfooter_paddingtopsize.$woobizz_afterfooter_paddingunittop." "
							  .$woobizz_afterfooter_paddingrightsize.$woobizz_afterfooter_paddingunitright." "
							  .$woobizz_afterfooter_paddingbottomsize.$woobizz_afterfooter_paddingunitbottom." "
							  .$woobizz_afterfooter_paddingleftsize.$woobizz_afterfooter_paddingunitleft;	
//--------------------------------------------------------------------------------------
// END 1.3 AFTER FOOTER PADDINGS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.4 AFTER FOOTER BORDERS
//--------------------------------------------------------------------------------------
//Border Top
$woobizz_afterfooter_bordertopsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_bordertopsize');
$woobizz_afterfooter_bordertopcolor= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_bordertopcolor');
$woobizz_afterfooter_bordertopstyle= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_bordertopstyle');
if ($woobizz_afterfooter_bordertopstyle==0){
		$woobizz_afterfooter_bordertopstyle="dotted";
	} elseif($woobizz_afterfooter_bordertopstyle==1) {
		$woobizz_afterfooter_bordertopstyle="dashed";
	} elseif($woobizz_afterfooter_bordertopstyle==2) {
		$woobizz_afterfooter_bordertopstyle="solid";
	} elseif($woobizz_afterfooter_bordertopstyle==3) {
		$woobizz_afterfooter_bordertopstyle="none";
	} else {$woobizz_afterfooter_bordertopstyle="none";
} 
$woobizz_afterfooter_bordertopfull=$woobizz_afterfooter_bordertopsize."px "
									.$woobizz_afterfooter_bordertopstyle." "
									.$woobizz_afterfooter_bordertopcolor." ";
//Border Right
$woobizz_afterfooter_borderrightsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_borderrightsize');
$woobizz_afterfooter_borderrightcolor= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_borderrightcolor');
$woobizz_afterfooter_borderrightstyle= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_borderrightstyle');
if ($woobizz_afterfooter_borderrightstyle==0){
		$woobizz_afterfooter_borderrightstyle="dotted";
	} elseif($woobizz_afterfooter_borderrightstyle==1) {
		$woobizz_afterfooter_borderrightstyle="dashed";
	} elseif($woobizz_afterfooter_borderrightstyle==2) {
		$woobizz_afterfooter_borderrightstyle="solid";
	} elseif($woobizz_afterfooter_borderrightstyle==3) {
		$woobizz_afterfooter_borderrightstyle="none";
	} else {$woobizz_afterfooter_borderrightstyle="none";
} 
$woobizz_afterfooter_borderrightfull=$woobizz_afterfooter_borderrightsize."px "
									.$woobizz_afterfooter_borderrightstyle." "
									.$woobizz_afterfooter_borderrightcolor." ";
//Border Bottom
$woobizz_afterfooter_borderbottomsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_borderbottomsize');
$woobizz_afterfooter_borderbottomcolor= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_borderbottomcolor');
$woobizz_afterfooter_borderbottomstyle= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_borderbottomstyle');
if ($woobizz_afterfooter_borderbottomstyle==0){
		$woobizz_afterfooter_borderbottomstyle="dotted";
	} elseif($woobizz_afterfooter_borderbottomstyle==1) {
		$woobizz_afterfooter_borderbottomstyle="dashed";
	} elseif($woobizz_afterfooter_borderbottomstyle==2) {
		$woobizz_afterfooter_borderbottomstyle="solid";
	} elseif($woobizz_afterfooter_borderbottomstyle==3) {
		$woobizz_afterfooter_borderbottomstyle="none";
	} else {$woobizz_afterfooter_borderbottomstyle="none";
} 
$woobizz_afterfooter_borderbottomfull=$woobizz_afterfooter_borderbottomsize."px "
									.$woobizz_afterfooter_borderbottomstyle." "
									.$woobizz_afterfooter_borderbottomcolor." ";	
//Border Left
$woobizz_afterfooter_borderleftsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_borderleftsize');
$woobizz_afterfooter_borderleftcolor= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_borderleftcolor');
$woobizz_afterfooter_borderleftstyle= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_borderleftstyle');
if ($woobizz_afterfooter_borderleftstyle==0){
		$woobizz_afterfooter_borderleftstyle="dotted";
	} elseif($woobizz_afterfooter_borderleftstyle==1) {
		$woobizz_afterfooter_borderleftstyle="dashed";
	} elseif($woobizz_afterfooter_borderleftstyle==2) {
		$woobizz_afterfooter_borderleftstyle="solid";
	} elseif($woobizz_afterfooter_borderleftstyle==3) {
		$woobizz_afterfooter_borderleftstyle="none";
	} else {$woobizz_afterfooter_borderleftstyle="none";
} 
$woobizz_afterfooter_borderleftfull=$woobizz_afterfooter_borderleftsize."px "
									.$woobizz_afterfooter_borderleftstyle." "
									.$woobizz_afterfooter_borderleftcolor." ";	
//--------------------------------------------------------------------------------------
// END 1.4 AFTER FOOTER BORDERS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// END 1.5 AFTER FOOTER SHADOWS
//--------------------------------------------------------------------------------------
$woobizz_afterfooter_shadowcolor= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_shadowcolor');
$woobizz_afterfooter_shadowrightdistance= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_shadowrightdistance');
$woobizz_afterfooter_shadowbottomdistance= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_shadowbottomdistance');
$woobizz_afterfooter_shadowspread= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_shadowspread');
$woobizz_afterfooter_shadowsize= get_option(WOOBIZZFOOTER.'_woobizz_afterfooter_shadowsize');
$woobizz_afterfooter_shadowfull=$woobizz_afterfooter_shadowrightdistance."px "
						  .$woobizz_afterfooter_shadowbottomdistance."px "
						  .$woobizz_afterfooter_shadowspread."px "
						  .$woobizz_afterfooter_shadowsize."px "
						  .$woobizz_afterfooter_shadowcolor;
//END CART WIDGET COLOR----------------------------------------------------------------------------------------------
//START SHOWING CSS OPTIONS------------------------------------------------------------------------------------------
if (is_active_sidebar( 'woobizzafterfooterwidget' ) ) {
	echo "
<style>
.wb-afterfooter-sidebar-div{
			background:linear-gradient(rgba(".$woobizz_afterfooter_backgroundfullgradient1."),
									   rgba(".$woobizz_afterfooter_backgroundfullgradient2.")),
									   url(".$woobizz_afterfooter_backgroundimage.")!important;
			background-color:".$woobizz_afterfooter_backgroundcolor."!important;
			background-size:".$woobizz_afterfooter_backgroundsize."!important;
			background-repeat:".$woobizz_afterfooter_backgroundrepeat."!important;
			background-position:".$woobizz_afterfooter_backgroundposition."!important;
			margin:".$woobizz_afterfooter_marginfull."!important;
			padding:".$woobizz_afterfooter_paddingfull."!important;
			box-shadow:".$woobizz_afterfooter_shadowfull."!important;
			border-top:".$woobizz_afterfooter_bordertopfull."!important;
			border-right:".$woobizz_afterfooter_borderrightfull."!important;
			border-bottom:".$woobizz_afterfooter_borderbottomfull."!important;
			border-left:".$woobizz_afterfooter_borderleftfull."!important;
	}
	.wb-afterfooter-sidebar-content{
		display:table;
		width:100%;
	}
	.wb-afterfooter-sidebar-content h3.widget-title {
	border: none;
	background: none;
	text-align: left;
	margin-left: 35px;
	font-weight: 400;
	margin-bottom: 15px;
	font-size: 19px;
}
</style>";
}else{
	echo "
<style>
	.wb-afterfooter-sidebar-div{
			display:none!important;
	}
</style>";
}
}
add_action('wp_head', 'woobizz_afterfooter_sidebar_css', 100);