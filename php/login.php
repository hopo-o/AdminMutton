<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2016/5/5
 * Time: 20:59
 */

session_start();

if (!isset($_POST['userid'])) {
    exit('Illegal access !');
}
$userid = htmlspecialchars($_POST['userid']);
$password = $_POST['password'];
$usertype = $_POST['usertype'];

include "conn.php";

$sql = "SELECT userid FROM user WHERE userid = '{$userid}' AND password = md5('{$password}') AND usertype = '{$usertype}'";
$rs_sql = $mysqli -> query($sql);
if ($rs = mysqli_fetch_array($rs_sql))
{
    $_SESSION['userid'] = $rs[0];
    echo 0;
}
else
{
    echo "Error";
}