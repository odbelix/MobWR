<?php
include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/dblib.php");
include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/utils.php");


if(isset($_POST['user']) && isset($_POST['pass'])){
		$pass = md5($_POST['pass']);
		if ( checkRecord("user","mail ='".$_POST['user']."' and password = '".$pass."'") == 1){
			$result = getRecords("id,mail","user","mail ='".$_POST['user']."' and password = '".$pass."'");
			foreach ($result as $user) {
				createSession();
				addSessionValue("id",$user['id']);
				addSessionValue("mail",$user['mail']);
			}
			echo "1";
		}
		else {
			echo "No existe usuario registrado";
		}
}