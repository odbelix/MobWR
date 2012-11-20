<?php
include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");
include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/utils.php");

$db = new DBmanager();

define("all","lib/news/all.php");
define("addedit","lib/news/add-edit.php");
define("get","lib/news/getNews.php");
define("delete","lib/news/delete.php");


$tiny_mce = "../../js/tiny_mce/tiny_mce.js";
$jquery = "../../js/jquery-1.8.2.min.js";
 
?>
<script type="text/javascript" src="<?=$tiny_mce?>"></script>
<script type="text/javascript" src="<?=$jquery?>"></script>
<script type="text/javascript">
	tinyMCE.init({
                mode : "textareas",
                theme : "advanced",
				plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist,autosave",
		theme_advanced_buttons1 : "pasteword,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|",   
		theme_advanced_resizing : true,
        });
</script>
<script type="text/javascript">
function editMessage(id){
	var data = 'id='+id;
	$.ajax({
		url:'getMessage.php',
		type:'post',
		dataType:'json',
		data:data,
		success:function(output){
			$.each(output,function(i,e) {
							var id = document.createElement('input');
							id.setAttribute('name','id');
							id.setAttribute('type','hidden');
							id.setAttribute('value',e.id);
							$("#messageform").append(id);	
						
							$("#nombre").html(e.nombre);
							$("textarea #descripcion").html(e.descripcion);
							tinyMCE.activeEditor.setContent(e.descripcion);
							$("#messageform").show();
			});	
		}
	});
}
function saveMessage(){
	var form = $("#messageform");
	tinyMCE.triggerSave();	
	$.ajax({
                url:'update_message.php',
                type:'post',
				data: form.serialize(),
                success:function(output){
                		alert(output);
						location.reload();
                }
        });
}
function allMessages(){
	$.ajax({
                url:'all_messages.php',
                type:'post',
                success:function(output){
                		$("#list_messages").html(output);
                }
        });
}

$(document).ready(function() {
	$("#messageform").hide();
	allMessages();	
});
</script>
<form id="messageform">
	<h1>Mensaje</h1>
	<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
	<div id="nombre"></div>
	<textarea id="descripcion" name="descripcion" rows="15" cols="80" style="width: 80%">
	</textarea>
	<input type="button" onclick="saveMessage()" value="Actualizar">
</form>
<div id="list_messages">
</div>