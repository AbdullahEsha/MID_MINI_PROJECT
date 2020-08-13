<?php
  $conn = mysqli_connect('localhost', 'root', '', 'mini_project');
  $result = mysqli_query($conn, 'select * from userinfo');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		
			<table border="1" cellspacing="0" cellpadding="5" align="center">
				<tr>
					<td align="center" colspan="4"><h3>Users</h3></td>
				</tr>
				<tr>
					<td width="120px">ID</td>
					<td width="80px">NAME</td>
					<td width="180px">EMAIL</td>
					<td>USER TYPE</td>
				</tr>
				<?php  while($data = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $data['UserId'] ?></td>
                    <td><?php echo $data['Name'] ?></td>
                    <td><?php echo $data['Email'] ?></td>
                    <td><?php echo $data['UserType'] ?></td>
                </tr>
                <?php } ?>
				
				<tr>
					<td colspan="4" align="right"><a href="AdminPage.php">Go Home</a></td>
				</tr>
			</table>
		
	</form>
</body>
</html>