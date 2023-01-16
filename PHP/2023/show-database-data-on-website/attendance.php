<!-- practice data show from database -->
<?php
include_once 'includes/dbh.php';
// $sql = "select * from log";
$sql = "SELECT DISTINCT card_no FROM log";
// $sql = "SELECT * FROM log_data WHERE card_number='0013159803' AND (time BETWEEN '2023-01-10 00:00:01' and '2023-01-10 23:59:59') AND id ORDER BY ID ASC LIMIT 1";
// $sql = 'SELECT * FROM log_data WHERE card_number=0013159803';
// $sql = "SELECT * FROM log WHERE card_no='0013159803' AND (time BETWEEN '2023-01-01 00:00:01' and '2023-01-14 23:59:59') AND id ORDER BY ID ASC";
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
            <?php 
                for($i=1;$i<31; $i++){
            ?> 
            <td>Day<?php echo $i?></td>
            <?php } ?>      
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td></td>
                <td><?php echo $data['card_no'] ?></td>
                <?php
                    // $sql1 = "SELECT * FROM log WHERE card_no= '".$data['card_no']." '  AND (time BETWEEN '2023-01-01 00:00:01' and '2023-01-14 23:59:59') AND id ORDER BY ID ASC";
                    $sql1 = "SELECT * FROM log WHERE card_no= '".$data['card_no']."' AND (DATE(time) BETWEEN '2023-01-01' and '2023-01-31') GROUP BY DATE(time) ORDER BY ID ASC";
                    $result1 = mysqli_query($conn, $sql1);
                    while ($data1 = mysqli_fetch_assoc($result1)) {
                ?>
                <td><?php echo $data1['time']?></td>
                <?php } ?>  
                
            </tr>
        <?php } ?>
    </table>
</body>
</html>