<?php

if (isset($_POST['submit'])) {
    /*
		$myfile = fopen('text.txt', 'a');
		$data = "submit\r\n";
		fwrite($myfile, $data);
		fclose($myfile);
8*/
    //declaration
 
    $user_first = $_POST['firstname'];
    $user_last  = $_POST['lastname'];
    $user_email = $_POST['email'];
    $user_pwd   = $_POST['password'];


    //session...
    // $_SESSION['id'] =$sid;
    // $_SESSION['studentname'] =$sname;
    // $_SESSION['dob'] =$dob;
    // $_SESSION['email'] =$email;
    // $_SESSION['picture'] =$image;



    //validation
    // $user_id = '';
    // $user_pwd = "";
    if (empty($user_first)) {
        //echo "Password field is empty...";
        header('location: ../view/addView.php?msg=null_firstname');
    } else if (empty($user_last)) {
        header('location: ../view/addView.php?msg=null_lastname');
    } else if (empty($user_email)) {
        header('location: ../view/addView.php?msg=null_email');
    } else if (empty($user_pwd)) {
        header('location: ../view/addView.php?msg=null_password');
    } else {
        include "../includes/dbh.php";  // database include

        $query = mysqli_query($conn, "insert into USERS values ('','$user_first','$user_last','$user_email', '','$user_pwd')");

        echo "submitting done!!";
    }
}
