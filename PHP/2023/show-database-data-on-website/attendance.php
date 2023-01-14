<!-- practice data show from database -->
<?php
include_once 'includes/dbh.php';

// $sql = 'SELECT * FROM log_data WHERE card_number=0013159803 AND (time BETWEEN 2023-01-10 00:00:01 and 2023-01-10 23:59:59) AND id ORDER BY ID ASC LIMIT 1';
$sql = 'SELECT * FROM log_data WHERE card_number=0013159803';
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Attendance System</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Employee Name</td>
            <td>Card Number</td>
            <td>Day1</td>
            <td>Day2</td>
            <td>Day3</td>
            <td>Day4</td>
            <td>Day5</td>        
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $data['card_number'] ?></td>
                <td><?php echo $data['in_out'] ?></td>
              
            </tr>
        <?php } ?>
    </table>
</body>

</html>