<!-- practice data show from database -->
<?php
include_once 'includes/dbh.php';

$sql = 'select * from users';
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Show Data From Database</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>PASSWOARD</td>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $data['user_id'] ?></td>
                <td><?php echo $data['user_uid'] ?></td>
                <td><?php echo $data['user_pwd'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>