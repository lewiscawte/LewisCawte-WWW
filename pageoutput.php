<?php

// Output the page Title.
$outputTitle = "<title>Lewis Cawte :: Home | " . ucfirst( strtolower( $pageout ) ) . "</title>";

// Output the page content.
if ( isset( $pagecontentPath ) ) {
	// If page contents file path is set, carry on.
	// Construct file path using directory information.
	$contentsfile = $pagecontentPath . '/' . $pageout . '.txt';
	// Check that the file exists.
	if ( file_exists( $contentsfile ) ) {
		$pagecontents = file_get_contents( $contentsfile );
		$outputContent = $pagecontents;
	}
	else {
		// Else throw an error saying file does not exist.
		echo( '<div class="fatal-error-message">Error: Contents file does not exist for this page.</div>' );
	}
}
else {
	// If directory for page contents is not set, return an error.
	echo( '<div class="fatal-error-message">Error: Content directory not set. Please contact the administrator referring $pagecontentPath</div>' );
}