<?php
if (isset($_POST['submit'])) {
    $filename = $_FILES['filename']['name'];
    $tmp_loc = $_FILES['filename']['tmp_name'];

    $uploc =    'images/';

    if (!empty($filename)) {
        move_uploaded_file($tmp_loc, $uploc . $filename);
    } else {
        echo 'Select a file!';
    }
    // echo $_FILES['filename']['name'];
}


?>
<!DOCTYPE html>
<html>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="filename"> <br><br>
        <input type="submit" value="Upload">
    </form>

</body>

</html>