<?php
	
require_once('db.php');


function insertemployer($jobinfo){
	$conn = getConnection();
	$sql = "insert into jobinfo values('', '{$jobinfo['jobtitle']}', '{$jobinfo['companyname']}', '{$jobinfo['location']}', '{$jobinfo['salary']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}

function getjobinfobyId($id){
	
	$conn = getConnection();
	$sql = "select * from employerinfo where id='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAllemployerinfo(){

	$conn = getConnection();
	$sql = "select * from jobinfo";
	$result = mysqli_query($conn, $sql);
	$products = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($jobinfo, $row);
	}
	return $employerinfo;
}

function updatejobinfo($jobinfo){
	$conn = getConnection();
	$sql = "update jobinfo set info='{ companyname='{$jobinfo['companyname']}', contactno='{$jobinfo['contactno']}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}



?>