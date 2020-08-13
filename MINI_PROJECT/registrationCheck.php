<?php
    

        $name     = $_POST['name'];
	    $uid    = $_POST['userId'];
	    $userType = $_POST['userType'];
	    $email    = $_POST['email'];
	    $password = $_POST['password'];
    
        if(isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', '', 'mini_project');

    
        $query = "INSERT INTO userinfo (Name, UserId, Email, Password, UserType) VALUES ('$name', '$uid', '$email', '$password', '$userType')";
       

        if(empty($name) || empty( $uid ) || empty($email ) || empty( $password) || empty($userType))
        {
            echo "Empty Value !!";
        }
        else
        {
            $result = mysqli_query($conn, $query);
            header('location: login.php');
        }

       
    }
    else
    {
    	echo "sorry!!";
    }
?>