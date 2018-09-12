<?php
//--------------------------------------------------------------------------------------
// START 3.1 AFTER FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//Section
$options[] = array("type" => "divider");	
$options[] = array( "name" => __('3.- After Footer ','woobizz-footer'),
					"type" => "section");	
$options[] = array("type" => "divider");
$options[] = array( "name" => __('3.1 After Footer Background','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");			
//Bakground Image
$options[] = array( "name" => __("Background Image","woobizz-footer"),
			"desc" => __("Note: Image will always override color", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundimage",
			"class" => "medium first",
			"std" => null,
			"type" => "upload");
//Background Color
$options[] = array( "name" => __("Background Color","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundcolor",
			"class" => "medium last",
			"std" => '',
			"type" => "color");	
//Gradient 1
$options[] = array( "name" => __("Background Color Gradient 1","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundgradient1",
			"class" => "medium first",
			"std" => '',
			"type" => "color");
//Gradient1 Opacity
$options[] = array( "name" => __("Gradient 1 Opacity","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundgradient1opacity",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundgradient2",
			"class" => "medium first",
			"std" => '',
			"type" => "color");	
//Gradient 2 Opacity			
$options[] = array( "name" => __("Gradient 2 Opacity","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundgradient2opacity",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundsize",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundrepeat",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundposition",
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
// END 3.1 AFTER FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 3.2 AFTER FOOTER MARGINS
//--------------------------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => __('3.2 After Footer Margins','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");
//Margin Top
$options[] = array( "name" => __("Margin Top ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_margintopsize",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_marginunittop",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_marginrightsize",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_marginunitright",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_marginbottomsize",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_marginunitbottom",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_marginleftsize",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_marginunitleft",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));
//--------------------------------------------------------------------				
// END 3.2 AFTER FOOTER MARGINS
//--------------------------------------------------------------------	
//--------------------------------------------------------------------				
// START 3.3 AFTER FOOTER PADDINGS
//--------------------------------------------------------------------	
$options[] = array("type" => "divider");
$options[] = array( "name" => __('3.3 After Footer Paddings','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");	
//Padding Top
$options[] = array( "name" => __("Padding Top ","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_paddingtopsize",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_paddingunittop",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_paddingrightsize",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_paddingunitright",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_paddingbottomsize",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_paddingunitbottom",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_paddingleftsize",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_paddingunitleft",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));		
//--------------------------------------------------------------------				
// END 3.3 AFTER FOOTER PADDINGS
//--------------------------------------------------------------------					
//--------------------------------------------------------------------				
// START 3.4 AFTER FOOTER BORDERS
//--------------------------------------------------------------------
//Border Top
$options[] = array("type" => "divider");
$options[] = array( "name" => __('3.4 After Footer Borders','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");	
$options[] = array( "name" => __("Border Top Color","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_bordertopcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Top Size","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_bordertopsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Top Style","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_bordertopstyle",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_borderrightcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Right Size","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_borderrightsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Right Style","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_backgroundborderrightstyle",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_borderbottomcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Bottom Size","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_borderbottomsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Bottom Style","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_borderbottomstyle",
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
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_borderleftcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Left Size","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_borderleftsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Left Style","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_borderleftstyle",
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
// END 3.4 AFTER FOOTER BORDERS
//--------------------------------------------------------------------				
//--------------------------------------------------------------------				
// START 3.5 AFTER FOOTER SHADOWS
//--------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => __('3.5 After Footer Shadows','woobizz-footer'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-footer"));
$options[] = array("type" => "divider");			
$options[] = array( "name" => __("Shadow Color","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_shadowcolor",
			"class" => "medium first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Right Distance","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_woobizz_afterfooter_shadowrightdistance",
			"class" => "medium last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Bottom Distance","woobizz-footer"),
				"desc" => __("", "woobizz-footer"),
				"id" => WOOBIZZFOOTER."_woobizz_afterfooter_shadowbottomdistance",
				"class" => "short first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
$options[] = array( "name" => __("Spread","woobizz-footer"),
				"desc" => __("", "woobizz-footer"),
				"id" => WOOBIZZFOOTER."_woobizz_afterfooter_shadowspread",
				"class" => "short",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
$options[] = array( "name" => __("Size","woobizz-footer"),
				"desc" => __("", "woobizz-footer"),
				"id" => WOOBIZZFOOTER."_woobizz_afterfooter_shadowsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
//--------------------------------------------------------------------				
// END 3.5 AFTER FOOTER SHADOWS
//--------------------------------------------------------------------		
//--------------------------------------------------------------------				
// START BACKUP & RESET OPTIONS
//--------------------------------------------------------------------	
$options[] = array( "name" => __('Back-up & Reset','woobizz-footer'),
					"type" => "section");
//Backup		
$options[] = array( "name" => __('Back-up & Reset','woobizz-footer'), 
					"type" => "title",
					"class" => "",
					"desc" => __(""));
$options[] = array("type" => "divider");					
$options[] = array( "name" => __("Back-up","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"id" => WOOBIZZFOOTER."_textarea",
			"class" => "backup-icon",
			"type" => "backup");
$options[] = array("type" => "divider");			
//Reset					
$options[] = array( "name" => __("Reset","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"class" => "",
			"type" => "reset");			
$options[] = array("type" => "divider");
//Import & Export
$options[] = array( "name" => __('Import & Export','woobizz-footer'),
					"type" => "section");
$options[] = array( "name" => __('Import & Export','woobizz-footer'), 
					"type" => "title",
					"class" => "",
					"desc" => __("", "woobizz-footer"));					
$options[] = array( "name" => __("Export Options","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"class" => "",
			"type" => "export");
//Import Field					
$options[] = array( "name" => __("Import Options","woobizz-footer"),
			"desc" => __("", "woobizz-footer"),
			"class" => "first",
			"placeholder" => "Paste your code here",
			"type" => "import");