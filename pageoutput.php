<?php

class pageOutput {

	public function prepareContent() {
		global $enabledPages;
		
		foreach ( $enabledPages as $pageout ) {
			$outputTitle = "<title>Lewis Cawte :: Home | " . ucfirst( strtolower( $pageout ) ) . "</title>";
		}
	}
}