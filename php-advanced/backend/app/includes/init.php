<?php
include SITE_PATH . '/includes/Bootstrap.php';
include SITE_PATH . '/includes/Db.php';
include SITE_PATH . '/includes/Template.php';

Bootstrap::router();

$urlInfos = array( 'page'=>Bootstrap::$page, 'action'=>Bootstrap::$action,
	'router'=>Bootstrap::$router );
Template::page( $urlInfos );