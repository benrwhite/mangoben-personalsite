<?php

global $project;
$project = 'personalsite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => '',
	"database" => 'testss',
	"path" => '',
);

MySQLDatabase::set_connection_charset('utf8');

// This line set's the current theme. More themes can be
// downloaded from http://www.silverstripe.org/themes/
SSViewer::set_theme('tutorial');

// Set the site locale
i18n::set_locale('en_GB');

// enable nested URLs for this site (e.g. page/sub-page/)
SiteTree::enable_nested_urls();