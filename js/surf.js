/*Menu horizontal*/
$(document).ready(function(){
	$("#horizontal-menu li").click(function(){
		if(this.id == "1"){
			location.reload();
		}
		if(this.id == "2"){
			$("#wrapper-content").load("static/tipo.php");
		}
		if(this.id == "3"){
			$("#wrapper-content").load("static/colaboradores.php");
		}
		if(this.id == "4"){
			$("#wrapper-content").load("static/inscribete.php");
		}
		if(this.id == "5"){
			$("#wrapper-content").load("static/contacto.html");
		}
		$('#horizontal-menu li').each(function(index) {
   			 $(this).attr('class','');			 
		});
		$(this).attr('class','');
		$(this).addClass('selected'); 
	});
});

/*surf to sub*/
function navegar(id){
	var menu = $("#"+id);
	if (menu.hasClass('lgreen')){
		menu.removeClass('lgreen');
		menu.addClass('selected');	
	}
	else {
		menu.removeClass('selected');
		menu.addClass('lgreen');	
	}
	if(menu.attr('id') == 'title-one'){
		$("#title-two").removeClass('selected');
		$("#title-two").addClass('lgreen');
	}
	else {
		$("#title-one").removeClass('selected');
		$("#title-one").addClass('lgreen');
	}
}

function gotoStudent(id){
	var datas = ['lista-obrera','lista-pro','auto','inscribir','postular'];
	
	/*Surf simulation*/
	$.each(datas, function(index, value) { 
  		if (value != id) {
  			$("#"+value).removeClass("dgreen");
  			$("#"+value).addClass("lgreen");
  		} 
  		else {
  			$("#"+value).addClass("dgreen");
  		}
	});
	
	var menu = $("#"+id);
	menu.addClass('selected');
	$("#title").html(id);
}
function gotoEnterprise(id){
	var datas = ['pub-obrera','pub-pro','auto','seleccionar','suspender','evaluar','registrar'];
	
	/*Surf simulation*/
	$.each(datas, function(index, value) { 
  		if (value != id) {
  			$("#"+value).removeClass("dgreen");
  			$("#"+value).addClass("lgreen");
  		} 
  		else {
  			$("#"+value).addClass("dgreen");
  		}
	});
}