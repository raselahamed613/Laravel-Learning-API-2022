<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/addstudent.css">

</head>

<body>

    <?php
    require('../php/add.php');
    ?>
    <div class="main">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validate()" method="POST">
            <div class="regform">
                <h1><b>Attendance System</h1>
            </div>

            <table class="center">
                <tr>
                    <td>First Name: </td>
                    <td> <input type="text" name="firstname" id="studentname" placeholder="First Name">

                    </td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td> <input type="text" name="lastname" id="fathername" placeholder="Last Name">
                    </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="email" id="email" placeholder="Email">

                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td> <input type="password" name="password" id="religion" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="input" type="submit" name="submit" value="submit">
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
            <label id="message"></label><br /><br />
            <a href="teacher.html">Home page</a>
        </form>
    </div>
    <script src="../js/addstudent.js"></script>
</body>

</html>