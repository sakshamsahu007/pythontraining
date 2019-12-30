<?php
function getSubjectsByUserId($user_id){
	global $conn;
	$result=mysqli_query($conn, "select * from user_subjects where user_id='".$user_id."'");
	$arrSubjects=array();
	while($row = mysqli_fetch_assoc($result)){
		$arrSubjects[] = $row['subject_name'];
	}
	return implode(", ", $arrSubjects);
}

function getUserByUserId($user_id){
	global $conn;
	$result=mysqli_query($conn, "select * from users where user_id='".$user_id."'");
	return mysqli_fetch_assoc($result);
}
?>