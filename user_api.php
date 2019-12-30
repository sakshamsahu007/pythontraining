<?php

include "lib\\connection.php";
include "lib\\functions.php";

$result=mysqli_query($conn, "select * from users");
$usersAarray=array(); 
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$row['subjects']=getSubjectsByUserId($row['user_id']);
	$usersAarray[]=$row;
	
}
header("Content-Type: application/json");
echo json_encode($usersAarray);
?>