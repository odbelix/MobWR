<?php
include($_SERVER['DOCUMENT_ROOT']."MobWR"."/lib/config.php");


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
		theme : "simple"
	});

</script>
<script type="text/javascript">
function addEditNew(){
	tinyMCE.triggerSave();	
	var form = $('#newsform');
	$.ajax({
                url:form.attr('action'),
                type:'post',
				data: form.serialize(),
                success:function(output){
                		alert(output);
						$("#newsresult").html(output);
						listNews();
                }
        });
}
function getNewsForEdit(id){
	$.ajax({
                url:'<?=get?>',
                type:'post',
				data: 'id='+id,
				dataType:'json',
                success:function(output){
						//$("#newsresult").html(output);
						$.each(output,function(i,e) {
							var id = document.createElement('input');
							id.setAttribute('name','id');
							id.setAttribute('type','hidden');
							id.setAttribute('value',e.id);
							$("#newsform").append(id);
						
							$("#titulo").val(e.titulo);
							$("textarea #cuerpo").html(e.cuerpo);
							tinyMCE.activeEditor.setContent(e.cuerpo);
							$($('#tipo  option').get(e.tipo-1)).attr('selected', 'selected');
							//$('#tipo option:eq('++')').attr('selected', 'selected');

						});
                }
    });
}
function deleteNews(id){
	if(confirm("Esta seguro que desea eliminar esta noticia?")){
		$.ajax({
        	        url:'<?=delete?>',
            	    type:'post',
					data: 'id='+id,
                	success:function(output){
                		$("#newsresult").html(output);
                		listNews();
					}
		})
	}
}
function listNews(){
		$.ajax({
        	        url:'<?=all?>',
            	    type:'post',
                	success:function(output){
                		$("#list-news").html(output);
					}
		})
}
listNews();
$("#newsform").hide();
function showaction(){
	$("#newsform").show();	
}
</script>
<div id="add-edit-new">
	<!-- Display response of action -->
	<div onclick="showaction();">Agregar noticia</div>
	<div id="newsresult"></div>
	<!-- Form to Add or Edit -->
	<form id="newsform" action="<?=addedit?>">
	<h1>Noticias</h1>
	<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
	<input id="titulo" name="titulo" placeholder="Titulo" type="text" value="">
	<select name="tipo" id="tipo">
		<option value="1">Alumnos</option>
		<option value="2">Empresas</option>
		<option value="3">Todos</option>
	</select>
	<textarea id="cuerpo" name="cuerpo" rows="15" cols="80" style="width: 80%">
	</textarea>
	<input onClick="addEditNew();" type="button" value="Guardar">
	</form>
</div>
<div id="list-news">

</div>