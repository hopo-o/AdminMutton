<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2016/5/5
 * Time: 20:50
 */

include "comm.php";
include "conn.php";


$userid = $_SESSION['userid'];

$sql = "SELECT fullname, usertype FROM user WHERE userid = '{$userid}'";
$rs_sql = $mysqli -> query($sql);
if ($rs = mysqli_fetch_array($rs_sql))
{
    echo json_encode($rs);
}
else
{
    echo "Error";
}