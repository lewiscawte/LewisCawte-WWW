<?php

class pageOutput {

	public function prepareContent() {
		global $enabledPages;
		
		foreach ( $enabledPages as $page ) {
			$outputTitle = "<title>Lewis Cawte :: Home | " . ucfirst( strtolower( $page ) ) . "</title>";
		}
	}
}