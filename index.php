<?php
require_once( "config/settings.php" );

$requestedPage = $_REQUEST['page'];
if ( isset ( $requestedPage ) && !empty( $requestedPage ) ) {
	$page = strtolower( $requestedPage );
	if ( in_array( $page, $enabledPages ) ) {
		$pageout = $page;
	}
	else {
		$pageout = "error";
	}
}
else {
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