<?php
    if(isset($_POST['submit'])){
        //declearation
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        //validation
        if($uname == ""){
            //echo "username field is empty";
            header('location: login.php?msg=null_username');
        }else if(empty($pass)){
            //echo "password field is empty";
            header('location : login.php?msg=null_password');
        }else{

            $conn = mysqli_connect('localhost', 'root', '', 'webtech');
            // $sql = "select * from users where username='" .$uname. "' and password='".$pass. "'"; // old version
            // $sql = "select * from users where username='{$uname}' and password = '{$pass}'";
            $sql = "select * from users where username = '$uname' and  password = '$pass'" ;

            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if(count($row)>0){
                // setcookie('isValid', 'true', time()+3600, '/');
                // header('location :./signup.html');
                // echo "access";
            }else{
                // header('location: ./login.php?msg=invalid_user');
                echo "null";
            }
        }
        }
        else{
            header('location: login.php');
    }

?>