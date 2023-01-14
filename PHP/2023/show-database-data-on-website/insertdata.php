<?php
include_once 'includes/dbh.php';
for($i=0; $i<10; $i++ ){
    $sql = "INSERT INTO attendance (name, card_number) VALUES ('Alamin','869326')";
    $result = mysqli_query($conn, $sql);
}
