<?php
include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <!-- <h1>Hi</h1> -->
    <?php
    // $sql = "SELECT * FROM users;";
    $sql = "SELECT * FROM users WHERE user_first = 'Rasel';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // echo "<table>";
            // echo "<tr>";
            // echo "<td>USER NAME</td>";
            // echo "<td>PASSWOARD</td>";
            // echo "</tr>";
            // echo "<tr>";
            // echo "<td> rasel </td>";
            // // echo "<td>$row['user_pwd']</td>";
            // echo "<td>123</td>";
            // echo "</tr>";
            // echo "</table>";
            // echo "<br>";
            echo $row['user_uid'] . $row['user_pwd'] . "<br>";
        }
    }

    ?>
</body>

</html>