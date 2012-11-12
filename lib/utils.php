<?php
define('colors','../libphp/colors');
define('path_menu','../menu/');

function tableFromtable($results,$table,$option=0){

$first = TRUE;
//table
$response = '<table>';
$response.= '<caption>'.$table.'</caption>';
$response.= '<thead>';
$response.= '<tr>';
foreach($results as $new){
	$keys = (array_keys($new));
	if ($first == TRUE) {
		foreach ($keys as $k) { $response.= '<td>'.$k.'</td>';}
		
		//Options
		if ( $option == 1 ){
			$response.= '<td>Opciones</td>';
		}
		$first = FALSE;
		$response.= '</tr>';
		$response.= '<tbody>';
	}
	$response.= '<tr>';
	foreach ($keys as $k) {
		$response.= '<td>'.$new[$k].'</td>';
	}
		if ($option == 1 ){
			$response.= '<td><input type="button" onClick="getNewsForEdit('.$new['id'].')" value="Editar"></td>';
			$response.= '<td><input type="button" onClick="deleteNews('.$new['id'].')" value="Eliminar"></td>';
		}
			
	$response.= '</tr>';
}
$response.= '</tbody>';
$response.= '</table>';
	
	return $response;
	
}
	
function sqlCreateTable($results,$table){
	$response = "CREATE TABLE ".strtolower($table)." (";		
	foreach($results as $row){
		$keys = (array_keys($row));
		foreach ($keys as $key) {
				if ($key == "Field") 
					$response.= strtolower($row[$key])." ";
				if ($key == "Type")
					$response.= strtolower($row[$key])." ";
				if ($key == "Null")
					if ($row[$key] == "YES")
						$response .= " not null";
				if ($key == "Key")
					$response.= strtolower($row[$key])." ";
				if ($key == "Default")
					$response.= strtolower($row[$key])." ";
				if ($key == "Extra")
					$response.= strtolower($row[$key])." ";
		}
		$response.=",\n";
	}
	$response.= ")";
	return $response;
}

/* Function to create pages from menu files*/
function createPages(){
        $path_menu = "../menu/";
        $path_page = "../";
        if ($handle = opendir($path_menu)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    echo "$entry\n";
                    //Create files
                    $fh = fopen($path_menu.$entry,'r');
                    while ($line = fgets($fh)) {
                        $data = mb_split(":",$line);
                        $file = fopen($path_page.$data[1],'w');
                        fclose($file);
                    }
                }
            }
            closedir($handle);
        }
}
function getParameter($id){
    if (array_key_exists($id,$_GET))
        return $_GET[$id];
    else
        return 0;
}
function postParameter($id){
    if (array_key_exists($id,$_POST))
        return $_POST[$id];
    else
        return 0;
	
}

function createSession(){
        // this starts the session
        session_start();
}
function addSessionValue($name,$value){
        // this starts the session 
        if (!isset($_SESSION[$name]))
                $_SESSION[$name] = $value;
        else
                return 0;        
}
function checkSessionValue($name){
        // this starts the session 
        if (array_key_exists($name,$_SESSION))
                return $_SESSION[$name]; 
        else
                return 0;        
}
function checkSessionRoles(){
	//Check ROLE		
	if (is_array($_SESSION['role'])){
		
		$response = '<select name"role">';
		foreach ($_SESSION['role'] as $key => $value) {
			$response .= '<option value="'.$key.'">'.$value.'</option>';
		}
		$response.= '</select>';
		return $response;
	}
	else {
		return $_SESSION['role'];
	}
}
function destroySession(){
	session_destroy();
}


//Send mail
function sendmail($user, $subject, $message, $header){
        mail($user, $subject, $message, $header);
}

//Create new password
function newpassword($id,$mail){
        $total = 4;
        $pass = "";
        for ( $i = 0 ; $i < 4 ; $i++){
                $number =rand(0,9);
                $pass.=$number;  
        }
        $db = new DICDBManager();
        echo "passnew:".$pass;
        echo $query = "UPDATE user SET password ='".md5($pass)."' WHERE id = ".$id;
        $result = $db->execute($query);
        
        //Send mail
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: example@example.com\r\n";
        $headers .= "Reply-To: example@example.com\r\n";
        $message = "You mail content goes here";
        $subject = "Subject here";
        mail($user, $subject, $message, $headers);
}
function readTypeColor(){
        $list = "<table>";
        $fh = fopen(colors,'r');
        $list.="<thead><tr><td>Type</td><td>backgroud-color</td><td>color</td></tr></thead>";
        $list.="<tbody>";
        while ($line = fgets($fh)) {
                $data = mb_split(":",$line);
                if ( $data[0] != 'type' ) {
                        $list.="<tr>";
                        $list.='<td>'.strtoupper($data[0]).'</td>';
                        /*background-color*/
                        $type[] = array($data[0],'bg');
                        $list.='<td><input id="'.$data[0].'bg'.'" class="color" value="'.readColor($data[0],"bg").'">';
                        $list.='<input type="button" value="Guardar" onclick="saveColor(';
                        $list.="'";
                        $list.=$data[0];
                        $list.="',"."'"."bg"."'".')"></td>';
                        /*color*/
                        $type[] = array($data[0],'c');
                        $list.='<td><input id="'.$data[0].'c'.'" class="color" value="'.readColor($data[0],"c").'">';
                        $list.='<input type="button" value="Guardar" onclick="saveColor(';
                        $list.="'";
                        $list.=$data[0];
                        $list.="',"."'"."c"."'".')"></td>';
                        /**/
                        $list.='</tr>';
                }
        }
        $list.="</tbody>";
        $list.="</table>";
        return $list;
}
function readColor($type,$typecolor){
        $value = "";
        $fh = fopen(colors,'r');
        while ($line = fgets($fh)) {
                $data = mb_split(":",$line);
                        if ( $data[0] == $type && $typecolor == 'bg' )
                                $value = str_replace("\n","",$data[1]);
                        if ( $data[0] == $type && $typecolor == 'c' )
                                $value = str_replace("\n","",$data[2]);
                        
        }
        return $value;
}
function updateColores($place,$color,$type){
        $fh = fopen(colors,'r');
        $output = "";
        while ($line = fgets($fh)) {
                $data = mb_split(":",$line);
                if ( count($data) == 3 )        
                        if ( $data[0] == "type" )
                                $output.=$data[0].":".$data[1].":".$data[2];
                        else {                                
                                if ( $type == "bg" ) {
                                        if ( $data[0] == $place ) {
                                                $output.=$data[0].":".$color.":".$data[2];
                                        }       
                                        else {
                                                $output.=$data[0].":".$data[1].":".$data[2];
                                        }
                                }                                        
                                else {
                                        if ( $data[0] == $place ) {
                                                $output.=$data[0].":".$data[1].":".$color."\n";
                                        }
                                        else {
                                                $output.=$data[0].":".$data[1].":".$data[2];
                                        }
                                }
                        }        
        }
        fclose($fh);
        echo $output;
        file_put_contents(colors, "");
        $fo = fopen(colors,'w');
        fwrite($fo,$output);
        fclose($fo);
}
function createTemplateColor(){
        $value = "";
        $fh = fopen(colors,'r');
        $bg = 'background-color:';
        $c = 'color:';
        $delimiter = ';';
        $newline = ""."\n";
        while ($line = fgets($fh)) {
                $data = mb_split(":",$line);
                if ( $data[0] != "type" ){
                        $value.=$data[0].'{'.$bg.$data[1].$delimiter.$c.str_replace("\n","",$data[2]).$delimiter.'}';
                        $value.=$newline;
                }       
        }
        return $value;
}

?>
