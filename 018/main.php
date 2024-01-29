
<?php
include('connect.php');
session_start();

?>

<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <center>
        <h2>LOGIN PAGE</h2>
        <form action="check.php" method="POST">
            Username: <input type="text" name="username"><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
        </center>
    </body>
</html>

<?php
    if($_GET){
        $msg=$_GET['msg'];
        echo "<center>";
        echo "<br><br>".$msg."<br>";
        echo "</center>";
    }
?>