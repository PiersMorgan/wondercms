<?php
if(defined('VERSION'))
	define('version', VERSION);
	defined('version') OR die('Direct access is not allowed.');

	 wCMS::addListener('js', 'loadAdditionContentsJS');
	 wCMS::addListener('css', 'loadAdditionContentsCSS');
	 wCMS::addListener('page', '');
/*
function loadAdditionContentsJS($args) {
	$script = <<<'EOT'

<script src=""></script>
EOT;
	if(version<'2.0.0')
		array_push($args[0], $script);
	else
		$args[0].=$script;
	return $args;
}
*/
function loadAdditionContentsCSS($args) {
	$script = <<<'EOT'
<link rel="stylesheet" href="plugins/social_bar/bar.min.css" type="text/css" media="screen" charset="utf-8">
EOT;
	if(version<'2.0.0')
		array_push($args[0], $script);
	else
		$args[0].=$script;
	return $args;
}
 
 
 
 // code here


?>
