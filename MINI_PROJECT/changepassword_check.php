
<?php
 
        $currpassword =  $_POST['pass'];
        $newpassword =  $_POST['newpass'];
        $cpassword =  $_POST['conpass'];

        if(isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', '', 'webtech');
        $query = "UPDATE miniproject SET password ='$cpassword' WHERE password ='$currpassword'";

        if(empty($currpassword) || empty( $newpassword ) || empty($cpassword ) )
        {
            echo "Invalid";
        }
        else
        {
            if($newpassword == $cpassword)
            {
                 $result = mysqli_query($conn, $query);
                 header('location: login.php');
            }
           else
           {
            echo "Invalid";
           }
        }
       
    }
    else
    {
        echo "sorry!!";
    }
?>