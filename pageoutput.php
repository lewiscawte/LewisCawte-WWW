<?php

// Output the page Title.
$outputTitle = "<title>Lewis Cawte :: Home | " . ucfirst( strtolower( $pageout ) ) . "</title>";

// Output the page content.
if ( isset( $pagecontentPath ) ) {
	$contentsfile = $pagecontentPath . '/' . $pageout . '.txt';
	if ( file_exists( $contentsfile ) ) {
		$pagecontents = file_get_contents( $contentsfile );
		$outputContent = $pagecontents;
	}
	else {
		echo( '<div class="fatal-error-message">Error: Contents file does not exist for this page.</div>' );
	}
}
else {
	echo( '<div class="fatal-error-message">Error: Content directory not set. Please contact the administrator referring $pagecontentPath</div>' );
}