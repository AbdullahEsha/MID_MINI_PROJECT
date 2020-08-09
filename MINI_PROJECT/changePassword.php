<?php
if(isset($_POST['submit']))
{
    if($_COOKIE['pass']==$_POST['conpass'])
    {
        if($_POST['newpass']==$_POST['conpass'])
        {
            setcookie('pass', $_POST['newpass'], time()+3600, '/');
            header('location: login.php');
        }
        else
        {
            echo "Doesn't match";
        }
    }
    else
    {
        echo "please recheck your password";
    }
}
?>
<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <form>
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
