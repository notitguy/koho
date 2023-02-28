<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */

$home = $pages->get('/'); // homepage

?><!DOCTYPE html>
<html lang="<?php echo _x('cs', 'HTML language code'); ?>">
	<?php include("./inc/sections/_head.php"); ?>
	<body>
		<?php include("./inc/sections/header.php"); ?>
		<?php include("./inc/sections/hero.php"); ?>
		<?php include("./inc/sections/about.php"); ?>
		<?php include("./inc/sections/cockerel.php"); ?>
		<?php include("./inc/sections/footer.php"); ?>
	</body>
</html>
