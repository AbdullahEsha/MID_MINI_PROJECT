<?php
  $conn = mysqli_connect('localhost', 'root', '', 'webtech');
  $result = mysqli_query($conn, 'select * from miniproject');
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
					<td>ID</td>
					<td>NAME</td>
					<td>EMAIL</td>
					<td>USER TYPE</td>
				</tr>
				<?php  while($data = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['userType'] ?></td>
                </tr>
                <?php } ?>
				
				<tr>
					<td colspan="4" align="right"><a href="AdminPage.php">Go Home</a></td>
				</tr>
			</table>
		
	</form>
</body>
</html>