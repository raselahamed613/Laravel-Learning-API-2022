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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <table border = "1">
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>EMAIL</td>
            <td>TYPE</td>
        </tr>
<?php while($data = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['username']?></td>
        <td><?php echo $data['password']?></td>
        <td><?php echo $data['email']?></td>
        <td><?php echo $data['type']?></td>
    </tr>
<?php } ?>
</table>
     

</body>
</html>