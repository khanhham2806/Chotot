<?php
global $link;
function logDebug($mess){
	error_log( date('d.m.Y h:i:s') . " $mess \n", 3, "log.log");
}
function connect(){
	global $link;	
	$link = mysqli_connect('localhost', 'root', '','baitaplon');
	if (!$link) {
	    die('<br/>Khong ket noi duoc: ');
	}	
	// mysqli_select_db( $link,'baitaplon') or die('Could not select database.');
	mysqli_query( $link,"SET NAMES 'utf8'");
}

function close(){
	global $link;
	mysqli_close($link);
}
function select_one($sql){
	$data = exec_select($sql);
	if (!$data) return null;
	return $data[0];
}
function exec_select($sql){
	global $link;
	logDebug("sql=[$sql]");//de fix bug
	connect();
	$ret = array();
	$res = mysqli_query($link,$sql) ;
	$row = array();
	//Lay loi sau khi thuc hien truy van
	$err = mysqli_error($link);
	//kiem tra
	if ($err){
		print("Khong the select duoc");
		logDebug("Khong the select duoc,ERROR=[" . $err . "]" );
		logDebug(  "COUNT=[0]" );
		return null;
	}
	//Khong co loi
	if ($res ){
		$i = 1;
		//lay tung dong ket qua
		while( $row = mysqli_fetch_array($res,MYSQLI_ASSOC) )
		{				
			$ret[]= $row ;
		}
		mysqli_free_result($res);
	}	
	close();
	return $ret;
}
function exec_update($sql){
	global $link;
	logDebug( "<!-- sql=[$sql] -->");//de fix bug
	connect();
	$res = mysqli_query($link,$sql) ;
	$row = array();
	//Lay loi sau khi thuc hien truy van
	$err = mysqli_error($link);
	//kiem tra
	if ($err){
		print("Khong the select duoc,ERROR=[" . $err . "]" );
		print(  "COUNT=[0]" );
		return -1;
	}
	$ret = mysqli_affected_rows($link);
	close();
	return $ret;
}
function sql_str($val){
	global $link;
	if($val === 0)  return '0' ;
	if($val === null) {
		return 'NULL';
	}
	if(!$link ) connect();
	// if (get_magic_quotes_gpc()) return "" . mysqli_escape_string(stripslashes($val)) . "" ;
	return "" . mysqli_real_escape_string($link,$val)  . "" ;
}

function data_to_sql_insert($tbl,$data){
	if (!$tbl || !$data) return "";
	$fields = array();
	$vals = array();
	foreach ($data as $k=>$v){
		$fields[] = $k;
		$vals[] = "n'" . sql_str($v) . "'";
	}
	$fields = implode(",",$fields);
	$vals = implode(",",$vals);
	return "insert into {$tbl} ({$fields}) values ({$vals})";
}
function data_to_sql_update($tbl,$data,$cond){
	if (!$tbl || !$data) return "";
	$fields = array();
	$vals = array();
	foreach ($data as $k=>$v){
		$vals[] = "{$k}=n'" . sql_str($v) . "'";
	}
	$vals = implode(",",$vals);
	if ($cond) $cond = " where {$cond}";
	return "update {$tbl} set {$vals} {$cond}";
}

function default_statuses(){
	$ret[] = array("id"=>1,"name"=>"Online");
	$ret[] = array("id"=>2,"name"=>"Offline");
	return $ret;
}
function upload_file_by_name($name, $target_dir=""){
	//print("upload_file_by_name->name=[{$name}]");
	if (!isset($_FILES[$name])){
		//print("upload_file_by_name->name=[{$name}], khong co file");
		return "";
	}
	if (!$target_dir){		
		$target_dir = "uploads/";
	}
	//print("upload_file_by_name->target_dir=[{$target_dir}]");
	$fdata = $_FILES[$name];
	//print_r($fdata);
	$ext = strtolower(pathinfo($fdata["name"],PATHINFO_EXTENSION));
	$target_file = $target_dir . basename($fdata["name"],".{$ext}") . date('-Ymd-his') . ".{$ext}";
	
	//print("upload_file_by_name->target_file=[{$target_file}]");
	//print("upload_file_by_name->ext=[{$ext}]");
	if (!is_dir($target_dir)){
		mkdir($target_dir);
	}
	if (move_uploaded_file($fdata["tmp_name"], $target_file)) {
		return $target_file;
	}
	return "";
}
?>