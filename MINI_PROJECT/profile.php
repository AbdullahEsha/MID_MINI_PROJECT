<form>
	<br/>
	<table width="50%" align="center" border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td colspan="2" align="center">Profile</td>
		</tr>		
		<tr>
            <td> ID
            </td>
            <td>
                <?=$_COOKIE['userId']?>
            </td>
        </tr>

		<tr>
            <td> Name
            </td>
            <td>
                <?=$_COOKIE['name']?>
            </td>
        </tr>

        <tr>
            <td> Email
            </td>
            <td>
                <?=$_COOKIE['email']?>
            </td>
        </tr>
        <tr>
            <td> userType
            </td>
            <td>
                <?=$_COOKIE['userType']?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <?php
                if($_COOKIE['userType']=="Admin"){
                ?>
                <a href="AdminPage.php" align="center">GO Home</a>
                <?php
                }
                else if ($_COOKIE['userType']=="User"){
                ?>
                <a href="UserPage.php" align="center">GO Home</a>
                <?php
                }
                ?>
            </td>
        </tr>
	</table>		
</form>