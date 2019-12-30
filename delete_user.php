<?php 
include "lib\\connection.php";
include "lib\\functions.php";

if($_GET['mode']=="update"){
	$query="update users set username='".$_POST['frm_username']."', password='".$_POST['frm_password']."', first_name='".$_POST['frm_first_name']."', last_name='".$_POST['frm_last_name']."', email='".$_POST['frm_email']."' where user_id='".$_GET['user_id']."' ";
}else{
	$query="insert into users (username, password, first_name, last_name, email) values('".$_POST['frm_username']."', '".$_POST['frm_password']."', '".$_POST['frm_first_name']."', '".$_POST['frm_last_name']."', '".$_POST['frm_email']."'  )";
}
$result=mysqli_query($conn, $query);
if($result){
	if($_GET['mode']=="update"){
		echo "User Updated successfully.<br>";
	}else{	
		echo "User Added successfully.<br>";
	}
	echo "Click <a href='display.php'>here</a> to go back.";
}else{
	echo "Failed to add user. Try again.";
}
?>