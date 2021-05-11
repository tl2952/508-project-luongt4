<?php echo file_get_contents("html/header.html"); ?>
<form method='post' action='login.php'>
<table style='border: solid 1px black;'>
<tbody>
<tr>
<td>Email Address</td>
<td><input name='email' type='email' size='25'></td>
</tr>
<tr><td>Password</td><td><input name='password' type='password' size='25'></td>
</tr><tr><td></td><td>
<input type='submit' value='Submit'></td></tr></tbody></table></form>

<p><a href="index.php">Back</a></p>
