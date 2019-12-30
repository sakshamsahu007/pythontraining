<?php

include "lib\\connection.php";
include "lib\\functions.php";

$result=mysqli_query($conn, "select * from users");
$usersAarray=array(); 
?>

<a href="add_user.php?mode=insert">Add User ...</a>
<br><br><br>
<table border=1>
<tr>
	<td>Id</td>
	<td>Username</td>
	<td>Name</td>
	<td>Subjects</td>
	<td></td>
</tr>
<?php
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	 
	?>
	<tr>
		<td><?php echo $row['user_id']?></td>
		<td><?php echo $row['username']?></td>
		<td><?php echo $row['first_name']." ". $row['last_name']?></td>
		<td><?php echo getSubjectsByUserId($row['user_id'])?></td>
		<td><a href="edit_user.php?mode=update&user_id=<?php echo $row['user_id']?>">Edit</a> | <a href="save.php?mode=delete&user_id=<?php echo $row['user_id']?>">Delete</a> </td>
	</tr>
	<?php
	
	
	 
	
}
 
?>
</table>