<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height: 180px;
        width: 530px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }

    .login input {
        padding: 5px;
        margin: 5px
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>Register</h2>
        <input type="text" name="username" size="30" placeholder="username"/>
        <input type="password" name="password" size="30" placeholder="password"/>
        <input type="submit" value="Register"/>
    </div>
</form>
</body>
</html>
<?php
include "function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pass = $_POST["password"];
    $path = "newFile.json";

    $user = [
        "username" => $username,
        "password" => $pass
    ];

    $arr = getFile($path);

    saveData($arr, $user, $path);
}
?>

<?php
$register_List = getFile($path);
?>
<h2>Registration list</h2>
<table class="login">
    <tr>
        <th>Name</th>
        <th>Password</th>
    </tr>
</table>
