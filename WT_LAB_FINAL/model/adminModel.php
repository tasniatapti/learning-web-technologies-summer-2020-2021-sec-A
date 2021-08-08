<?php
	
require_once('db.php');


function insertemployer($employerinfo){
	$conn = getConnection();
	$sql = "insert into employerinfo values('', '{$employerinfo['employername']}', '{$employerinfo['companyname']}', '{$employerinfo['contactno']}', '{$employerinfo['username']}','{$employerinfo['password']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}

function getemployerinfobyId($id){
	
	$conn = getConnection();
	$sql = "select * from employerinfo where id='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAllemployerinfo(){

	$conn = getConnection();
	$sql = "select * from employerinfo";
	$result = mysqli_query($conn, $sql);
	$products = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($employerinfo, $row);
	}
	return $employerinfo;
}

function updateemployerinfo($employerinfo){
	$conn = getConnection();
	$sql = "update employerinfo set employername='{$employerinfo['employername']}', companyname='{$employerinfo['companyname']}', contactno='{$product['contactno']}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function delete($id){
	$conn = getConnection();
	$sql = "deleteemployerinfo from employerinfo where id='{$id}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getemployeeByName($employername){
	$conn = getConnection();
	$sql = "select * from employerinfo where employername='{$employername}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

?>