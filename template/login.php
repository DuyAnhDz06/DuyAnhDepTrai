<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Logo.png">
    <link rel="stylesheet" type="text/css" href="http://localhost/Super-Code/PHP/FirstpagePHP/main/main.css" />
    <script src="https://kit.fontawesome.com/c002b551d9.js" crossorigin="anonymous"></script>
    <title>Admin Log In</title>
</head>

<body class="adminlogin">
    <form class="login" method="POST">
        <legend>Log in</legend>
        <table>
            <tr>
                <td><i class="fa-solid fa-user"></i>UserName</td>
                <td><input type="text" name="un" size="30"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-lock"></i>Password</td>
                <td><input type="password" name="pw" size="30"></td>
            </tr>
            <tr>
                <td colspan="2"> <input name="btn_submit" type="submit" value="Login"></td>
            </tr>
        </table>
    </form>

    <?php
    include_once('db.php');
    $acc = query("select * from account");
    if (isset($_POST['un']) && isset($_POST['pw'])) {
        $un = $_POST['un'];
        $pw = $_POST['pw'];
        for ($i = 0; $i < count($acc); $i++) {
            if ($un == $acc[$i][1] && $pw == $acc[$i][2]) {
                header("location: http://localhost/Super-Code/PHP/FirstpagePHP/main/main.php");
            }
        }
        if ($i >= count($acc))?>
        <style>
            .color
            {
                color: white;
            }
        </style>
            <p style="text-align: center" class="color">Incorrect Username Or Password, please input full your information !</p>
            <?php
    }
    ?>

</body>

</html>