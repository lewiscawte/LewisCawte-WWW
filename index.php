<?php
require_once( "config/settings.php" );
require_once( "pageoutput.php" );
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