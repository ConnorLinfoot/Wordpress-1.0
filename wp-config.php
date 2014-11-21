<?php
/** WordPress's config file **/
/** http://wordpress.org/   **/
/** Updated to work on newer versions of PHP hopefully without issues **/
/** Updated by Connor Linfoot **/
/** http://connorlinfoot.com/ **/

# Disable Errors (There can be a lot of errors in Wordpress 1.0)
error_reporting(0);
ini_set('display_errors', 0);

// ** MySQL settings ** //
define('DB_NAME', 'wp1');     // The name of the database
define('DB_USER', 'root');     // Your MySQL username
define('DB_PASSWORD', ''); // ...and password
define('DB_HOST', 'localhost');     // 99% chance you won't need to change this value

// Change the prefix if you want to have multiple blogs in a single database.

$table_prefix  = 'wp_';   // example: 'wp_' or 'b2' or 'mylogin_'

/* Stop editing */

$server = DB_HOST;
$loginsql = DB_USER;
$passsql = DB_PASSWORD;
$base = DB_NAME;

define('ABSPATH', dirname(__FILE__).'/');

// Get everything else 
require_once(ABSPATH.'wp-settings.php');
?>