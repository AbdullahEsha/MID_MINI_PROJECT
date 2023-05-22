
<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <form action="changepassword_check.php" method="post">
        <table>
            <tr>
                <td><font size="3">Current Password</font></td>
                <td>:</td>
                <td><input type="password" name="pass" /></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="green">New Password</font></td>
                <td>:</td>
                <td><input type="password" name="newpass" /></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="red">Retype New Password</font></td>
                <td>:</td>
                <td><input type="password" name="conpass" /></td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" name="submit" value="Submit" />
    </form>
</fieldset>
