<?php
/* See file COPYING for permissions and conditions to use the file. */
?>
<?php
$sitename = 'spamdforum';
$protocol = 'http';
$server = $_SERVER['HTTP_HOST'];
/* $server = 'hostname.com'; */
$secure = false;
if ($protocol == 'https' || isset($_SERVER['HTTPS'])) {
	$secure = true;
}
session_set_cookie_params(['lifetime' => time() + 2592000, 'path' => '/', 'domain' => '', 'secure' => $secure, 'httponly' => true]);
session_start();
if(!isset($need_db))
	$need_db = true;
if($need_db)
	require_once("{$_SERVER['DOCUMENT_ROOT']}/extra/dbconnect.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/extra/variables.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/extra/functions.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/extra/config_access.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/extra/words.php");
?>
