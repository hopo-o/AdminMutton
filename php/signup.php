<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2016/5/6
 * Time: 21:45
 */

if (!isset($_POST['userid'])) {
    exit('Illegal access !');
}
$userid = htmlspecialchars($_POST['userid']);
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$name = $_POST['name'];

include "conn.php";

$sql = "INSERT INTO user (userid, password, fullname, usertype) VALUES ('{$userid}', md5('{$password}'), '{$name}', '{$usertype}')";
$mysqli -> query($sql);
if (mysqli_affected_rows($mysqli) > 0){
    echo 0;
}
else
{
    echo "Error";
}