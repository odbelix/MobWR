<?php
define("user","Usuario");
define("pass","Contraseña");
define("title","Log in");
define("button","Ingresar");
header('content-type: text/html; charset: utf-8');
 
?>

<script type="text/javascript">
function checkuser(){
	var form = $("#loginform");
	alert(form.serialize());
	$.ajax({
		url:form.attr('action'),
		type:'post',
		data: form.serialize(),
        success:function(output){
			if (output != "1" ){
				$("#loginresult").html(output);	
			}
			else {
				//alert("Correct User");
				window.location = "3B-base.php";
			}
		}
	});
}
</script>
<div>
	<form action="lib/login/check-user.php" id="loginform">
	<div id="loginresult"></div>
	<table class="table-login">
		<thead>
			<tr>
				<td colspan="2"><?=title?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?=user?></td>
				<td><input name="user" type="text" value=""></td>
			</tr>
			<tr>
				<td><?=pass?></td>
				<td><input name="pass" type="password" value=""</td>
			</tr>
			<tr>
				<td colspan="2"><input onClick="checkuser()" type="button" value="<?=button?>"></td>
			</tr>
			<tr>
				<td colspan="2">¿Olvido su contraseña?</td>
			</tr>
		</tbody>
	</table>
	</form>
</div>