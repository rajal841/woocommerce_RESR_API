<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . '/woocommerce_rest_api/vendor/autoload.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/woocommerce_rest_api/inc/functions.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/woocommerce_rest_api/inc/form.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/woocommerce_rest_api/inc/database.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/woocommerce_rest_api/inc/user.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/woocommerce_rest_api/inc/woocommerce.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/woocommerce_rest_api/inc/actions.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/woocommerce_rest_api/inc/notices.php' );

iconic_process_actions();
