<?php

@session_start();
error_reporting(0);
$varAdminFolder = "admin";
//$varAgencyFolder = "agency";

define("DS", DIRECTORY_SEPARATOR);
define("PATH_ROOT", dirname(__FILE__));
define("PATH_LIB", PATH_ROOT . DS );

$g_hostname='localhost';
$g_username='root';
$g_userpassword='';
$g_databasename='karwaan';


/* Server Code */
/*$g_hostname='localhost:3306';
$g_username='asteduca_admin';
$g_userpassword='WstPS!11May';
$g_databasename='asteduca_db';

*/


/*if(!isset($_SESSION['language']) ||  ($_SESSION['language']== '')){
    $_SESSION['language']='en';
}
include_once(PATH_ROOT.DS.'language'.DS.$_SESSION['language'].'_lang.php');
*/

//define RegX expressions
define("REGX_MAIL", "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/");
define("REGX_URL", "/^(http(s)?\:\/\/(?:www\.)?[a-zA-Z0-9]+(?:(?:\-|_)[a-zA-Z0-9]+)*(?:\.[a-zA-Z0-9]+(?:(?:\-|_)[a-zA-Z0-9]+)*)*\.[a-zA-Z]{2,4}(?:\/)?)$/i");
define("REGX_PHONE", "/^[0-9\+][0-9\-\(\)\s]+[0-9]$/");

require_once(PATH_LIB . "class.database.php");

$db=new MySqlDb($g_hostname,$g_username,$g_userpassword,$g_databasename);

require_once(PATH_LIB . "functions.php");
//require_once(PATH_LIB . "class.phpmailer.php");
//require_once(PATH_LIB . "class.mailer.php");
$alert_err = array();
$alert_msg = array();

?>
