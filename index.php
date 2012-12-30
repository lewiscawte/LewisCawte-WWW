<?php
require_once( "config/settings.php" );

$page = strtolower( $_REQUEST['page'] );

if ( isset ( $page ) ) {
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