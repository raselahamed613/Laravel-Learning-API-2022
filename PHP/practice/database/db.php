<?php
$conn = mysqli_connect('localhost', 'root', '', 'webtech'); //ip-username-pass-databasename
$sql ='select * from users';
$result = mysqli_query($conn, $sql);

// $data = mysqli_fetch_assoc($result);
// $data1 = mysqli_fetch_assoc($result);

// print_r($data);
// print_r($data1);

mysqli_close($conn);

?>