<?php
//comment
require_once("emailFunction.php");

$Email = "";
if(isset($_POST["email"])){
	$Email = $_POST["email"];
}


$Subject = "";
if(isset($_POST["subject"])){
	$Subject = $_POST["subject"];
}

$Body = "";
if(isset($_POST["body"])){
	$Body = $_POST["body"];
}

if($Email=='' || $Subject=='' || $Body=='' ){
	
}
else{
	sendMail($Email,$Subject,$Body);
	
}