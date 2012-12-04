<?
function __autoload($aClassName) {
	include($aClassName.".php");
}

include_once($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/utils.php");
include_once($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/dblib.php");
?>
