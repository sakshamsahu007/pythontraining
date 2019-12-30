<?php
include "lib\\connection.php";
include "lib\\functions.php";

$user=getUserByUserId($_GET['user_id']);
?>

<form method="POST" action="save.php?mode=update&user_id=<?php echo $_GET['user_id']?>">
<table>
	<tr><td>Username</td><td><input type="text" value="<?php echo $user['username']?>" name="frm_username" id="frm_username"></td></tr>
	<tr><td>Password</td><td><input type="text" value="<?php echo $user['password']?>" name="frm_password" id="frm_password"></td></tr>
	<tr><td>First Name</td><td><input type="text" value="<?php echo $user['first_name']?>" name="frm_first_name" id="frm_first_name"></td></tr>
	<tr><td>Last Name</td><td><input type="text" value="<?php echo $user['last_name']?>" name="frm_last_name" id="frm_last_name"></td></tr>
	<tr><td>Email</td><td><input type="text" value="<?php echo $user['email']?>" name="frm_email" id="frm_email"></td></tr>
	<tr><td> </td><td><input type="submit" value="Submit" name="frm_submit" id="frm_submit"></td></tr>
</table>
</form>