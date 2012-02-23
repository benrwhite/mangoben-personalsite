<?php
class Page extends SiteTree {

	public static $db = array(
	);

	public static $has_one = array(
	);

}
class Page_Controller extends ContentController {

	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();

		Requirements::themedCSS('layout'); 
		Requirements::themedCSS('typography'); 
		Requirements::themedCSS('form'); 
	}
}