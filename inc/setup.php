<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . '/example-woo-api-app-master/vendor/autoload.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/example-woo-api-app-master/inc/functions.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/example-woo-api-app-master/inc/form.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/example-woo-api-app-master/inc/database.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/example-woo-api-app-master/inc/user.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/example-woo-api-app-master/inc/woocommerce.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/example-woo-api-app-master/inc/actions.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/example-woo-api-app-master/inc/notices.php' );

iconic_process_actions();