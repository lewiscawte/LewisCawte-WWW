<?php
require_once( "config/settings.php" );

$requestedPage = $_REQUEST['page'];
if ( isset ( $requestedPage ) && !empty( $requestedPage ) ) {
	$page = strtolower( $requestedPage );
	if ( in_array( $page, $enabledPages ) ) {
		// If requested page is in set configuration array, then return it.
		$pageout = $page;
	}
	else {
		// If requested page is not set in configuration array, return "error" page.
		$pageout = "error";
	}
}
else {
	// If no page requested, return the index.
	$pageout = "index";
}
require_once( "pageoutput.php" );
?>
<!DOCTYPE>
<html>
        <head>
			<?php echo( $outputTitle ) ?>
			<link href="<?php echo( $assetsPath ) ?>/styles/index.css" type="text/css" rel="stylesheet" />
        </head>
        <body>
        	<?php echo( $outputContent ) ?>
        </body>
</html>