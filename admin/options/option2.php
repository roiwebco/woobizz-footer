<?php
//--------------------------------------------------------------------------------------
// START 2.1 FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//Section
$options[] = array("type" => "divider");	
$options[] = array( "name" => __('2.- Main Footer','woobizz-footer'),
					"type" => "section");	
$options[] = array("type" => "divider");
$options[] = array( "name" => __('2.1 Main Footer Background','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");			
//Bakground Image
$options[] = array( "name" => __("Background Image","woobizz-footer"),
			"desc" => __("Note: Image will always override color", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundimage",
			"class" => "medium first",
			"std" => null,
			"type" => "upload");
//Background Color
$options[] = array( "name" => __("Background Color","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundcolor",
			"class" => "medium last",
			"std" => '',
			"type" => "color");	
//Gradient 1
$options[] = array( "name" => __("Background Color Gradient 1","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundgradient1",
			"class" => "medium first",
			"std" => '',
			"type" => "color");
//Gradient1 Opacity
$options[] = array( "name" => __("Gradient 1 Opacity","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundgradient1opacity",
			"class" => "medium last",
			"std" => 0,
			"min" => 0,
			"max" => 1,
			"suffix" => "",
			"increment" => 0.01,
			"type" => "number");
//Gradient 2
$options[] = array( "name" => __("Background Color Gradient 2","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundgradient2",
			"class" => "medium first",
			"std" => '',
			"type" => "color");	
//Gradient 2 Opacity			
$options[] = array( "name" => __("Gradient 2 Opacity","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundgradient2opacity",
			"class" => "medium last",
			"std" => 0,
			"min" => 0,
			"max" => 1,
			"suffix" => "",
			"increment" => 0.01,
			"type" => "number");
//Background Size
$options[] = array( "name" => __("Background Size","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundsize",
			"class" => "short first",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Contain",
				1 => "Cover",
				2 => "Inherit",
				3 => "Initial",
				));
//Backgroud Repeat
$options[] = array( "name" => __("Background Repeat","woobizz-footer"),
			"desc" => __("X = Horizontal Y= Vertical", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundrepeat",
			"class" => "short",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "No-Repeat",
				1 => "Repeat X & Y",
				2 => "Repeat X Only",
				3 => "Repeat Y Only",
				4 => "Repeat Round",
				5 => "Repeat Space",
				4 => "Inherit",
				5 => "Initial",
			));	
//Background position			
$options[] = array( "name" => __("Background Position","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundposition",
			"class" => "short last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Left Top",
				1 => "Left Center",
				2 => "Left Bottom",
				3 => "Right Top",
				4 => "Right Center",
				5 => "Right Bottom",
				6 => "Center Top",
				7 => "Center Center",
				8 => "Center Bottom",
				9 => "Inherit",
				10=> "Initial",
			));	
//--------------------------------------------------------------------------------------
// END 2.1 FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 2.2 FOOTER MARGINS
//--------------------------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => __('2.2 Main Footer Margins','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");
//Margin Top
$options[] = array( "name" => __("Margin Top ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_margintopsize",
			"class" => "tiny first",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Units Top			
$options[] = array( "name" => __("Units Top","woobizz-footer"), 
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_marginunittop",
			"class" => "tiny",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",
			));	
//Margin Right			
$options[] = array( "name" => __("Margin Right ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_marginrightsize",
			"class" => "tiny",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Units Right			
$options[] = array( "name" => __("Units Right","woobizz-footer"), 
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_marginunitright",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));	
//Margin Bottom				
$options[] = array( "name" => __("Margin Bottom ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_marginbottomsize",
			"class" => "tiny first",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Units Bottom			
$options[] = array( "name" => __("Units Bottom","woobizz-footer"), 
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_marginunitbottom",
			"class" => "tiny",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));	
//Margin Left				
$options[] = array( "name" => __("Margin Left ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_marginleftsize",
			"class" => "tiny",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Units Left			
$options[] = array( "name" => __("Units Left","woobizz-footer"), 
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_marginunitleft",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));
//--------------------------------------------------------------------				
// END 2.2 FOOTER MARGINS
//--------------------------------------------------------------------	
//--------------------------------------------------------------------				
// START 2.3 FOOTER PADDINGS
//--------------------------------------------------------------------	
$options[] = array("type" => "divider");
$options[] = array( "name" => __('2.3 Main Footer Paddings','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");	
//Padding Top
$options[] = array( "name" => __("Padding Top ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_paddingtopsize",
			"class" => "tiny first",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Padding Units Top			
$options[] = array( "name" => __("Units Top","woobizz-footer"), 
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_paddingunittop",
			"class" => "tiny",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",
			));	
//Padding Right			
$options[] = array( "name" => __("Padding Right ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_paddingrightsize",
			"class" => "tiny",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Padding Units Right			
$options[] = array( "name" => __("Units Right","woobizz-footer"), 
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_paddingunitright",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));	
//Padding Bottom				
$options[] = array( "name" => __("Padding Bottom ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_paddingbottomsize",
			"class" => "tiny first",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Padding Untis Bottom			
$options[] = array( "name" => __("Units Bottom","woobizz-footer"), 
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_paddingunitbottom",
			"class" => "tiny",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));	
//Padding Left				
$options[] = array( "name" => __("Padding Left ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_paddingleftsize",
			"class" => "tiny",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Padding Units Left			
$options[] = array( "name" => __("Units Left","woobizz-footer"), 
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_paddingunitleft",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));		
//--------------------------------------------------------------------				
// END 2.3 FOOTER PADDINGS
//--------------------------------------------------------------------					
//--------------------------------------------------------------------				
// START 2.4 FOOTER BORDERS
//--------------------------------------------------------------------
//Border Top
$options[] = array("type" => "divider");
$options[] = array( "name" => __('2.4 Main Footer Borders','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");	
$options[] = array( "name" => __("Border Top Color","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_bordertopcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Top Size","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_bordertopsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Top Style","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_bordertopstyle",
			"class" => "short lastt",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "dotted",
				1 => "dashed",
				2 => "solid",
				3 => "none",
				));	
//Border Right				
$options[] = array( "name" => __("Border Right Color","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_borderrightcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Right Size","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_borderrightsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Right Style","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_backgroundborderrightstyle",
			"class" => "short lastt",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "dotted",
				1 => "dashed",
				2 => "solid",
				3 => "none",
				));		
//Border Bottom				
$options[] = array( "name" => __("Border Bottom Color","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_borderbottomcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Bottom Size","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_borderbottomsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Bottom Style","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_borderbottomstyle",
			"class" => "short lastt",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "dotted",
				1 => "dashed",
				2 => "solid",
				3 => "none",
				));		
//Border Left				
$options[] = array( "name" => __("Border Left Color","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_borderleftcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Left Size","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_borderleftsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Left Style","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_borderleftstyle",
			"class" => "short lastt",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "dotted",
				1 => "dashed",
				2 => "solid",
				3 => "none",
				));	
//--------------------------------------------------------------------				
// END 2.4 FOOTER BORDERS
//--------------------------------------------------------------------				
//--------------------------------------------------------------------				
// START 2.5 FOOTER SHADOWS
//--------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => __('2.5 Main Footer Shadows','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");			
$options[] = array( "name" => __("Shadow Color","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_shadowcolor",
			"class" => "medium first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Right Distance","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_customfooter_shadowrightdistance",
			"class" => "medium last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Bottom Distance","woobizz-footer"),
				"desc" => __("", "woobizz-footer"),
				"id" => WOOBIZZFOOTER."_woobizz_customfooter_shadowbottomdistance",
				"class" => "short first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
$options[] = array( "name" => __("Spread","woobizz-footer"),
				"desc" => __("", "woobizz-footer"),
				"id" => WOOBIZZFOOTER."_woobizz_customfooter_shadowspread",
				"class" => "short",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
$options[] = array( "name" => __("Size","woobizz-footer"),
				"desc" => __("", "woobizz-footer"),
				"id" => WOOBIZZFOOTER."_woobizz_customfooter_shadowsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
//--------------------------------------------------------------------				
// END 2.5 FOOTER SHADOWS
//--------------------------------------------------------------------