<?php
require_once( "config/settings.php" );
require_once( "pageoutput.php" );

$page = $_REQUEST['page'];

if ( $page ) {
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
?>

<!DOCTYPE>
<html>
        <head>
			<?php $outputTitle ?>
			<link href="<?php echo( $assetsPath ) ?>/styles/index.css" type="text/stylesheet" rel="stylesheet" />
        </head>
        <body>
        	<?php $outputContent ?>
        </body>
</html>