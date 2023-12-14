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

?>

<!DOCTYPE html>
<html lang="<?php echo _x('cs', 'HTML language code'); ?>">
	<?php include($sections ."_head.php"); ?>
	<body class="<?= $page->template->name ?>" style="background-color: #940b10;">
		<?php include($sections ."header.php"); ?>
		<main pw-id="content"></main>
		<?php include($sections ."footer.php"); ?>
	</body>
</html>
