<?php
    $uid = $_POST['userId'];
    $password = $_POST['password'];

if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

        if(empty($uid) || empty($password)){
            echo "Invalid";
        }
        else{
            

            $query = "SELECT * FROM miniproject WHERE id = '$uid' AND password = '$password'";
            $result = mysqli_query($conn, $query);

            while($row = mysqli_fetch_assoc($result) ){
                
                $Cname     = $row['name'];
                $Cemail    = $row['email'];
                $Cuserid   = $row['id'];
                $Cpassword = $row['password'];
                $CuserType = $row['userType'];

                if(($uid == $Cuserid) && ($password == $Cpassword)){
                    if($CuserType == 'Admin'){

                    	$user = ['name'=> $Cname,'userId'=> $Cuserid,'userType'=> $CuserType,'password'=> $Cpassword];

			         if(isset($_POST['remember']))
                     {
                        setcookie('name', $Cname, time()+3600, '/');
                        setcookie('userId', $Cuserid, time()+3600, '/');
                        setcookie('email', $Cemail, time()+3600, '/');
                        setcookie('password', $Cpassword, time()+3600, '/');
                        setcookie('userType', $CuserType, time()+3600, '/');
                        setcookie('status', "OK", time()+3600, '/');

                        header('location: AdminPage.php');

                     }
                     else
                     {

			            $_SESSION['name']        = $Cname;
			            $_SESSION['userId']      = $Cuserid;
			            $_SESSION['userType'] 	 = $CuserType;
                        $_SESSION['email']       = $Cemail;
			            $_SESSION['password'] 	 = $Cpassword;
			            $_SESSION['user'] 		 = $user;
                        $_SESSION['status']  = "Ok";

			
			           header('location:AdminPage.php');
                   }
			            

                        
                    }
                    else if($CuserType == 'User'){
                        $user = ['name'=> $Cname,'userId'=> $Cuserid,'userType'=> $CuserType,'password'=> $Cpassword];

                     if(isset($_POST['remember']))
                     {
                        setcookie('name', $Cname, time()+3600, '/');
                        setcookie('userId', $Cuserid, time()+3600, '/');
                        setcookie('email', $Cemail, time()+3600, '/');
                        setcookie('password', $Cpassword, time()+3600, '/');
                        setcookie('userType', $CuserType, time()+3600, '/');
                        setcookie('status', "OK", time()+3600, '/');

                        header('location: UserPage.php');

                     }
                     else
                     {

                        $_SESSION['name']        = $Cname;
                        $_SESSION['userId']      = $Cuserid;
                        $_SESSION['userType']    = $CuserType;
                        $_SESSION['email']       = $Cemail;
                        $_SESSION['password']    = $Cpassword;
                        $_SESSION['user']        = $user;
                        $_SESSION['status']  = "Ok";

            
                       header('location:UserPage.php');
                   }
                        
                    }
                }
            } 
        }
    }  
else
{
    echo "sorry!!";
}
?>
