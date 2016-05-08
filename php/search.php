<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2016/5/5
 * Time: 22:31
 */

include "comm.php";
include "conn.php";


$err = "Error";
$err_json = json_encode($err);
if(!isset($_POST['para'])){
    exit($err_json);
}

$key = $_POST['key'];
$para = $_POST['para'];



switch ($para){
    case 'farm':
        $sql = "SELECT * FROM farm WHERE id = '{$key}'";
        break;
    case 'butcher':
        $sql = "SELECT * FROM butcher WHERE id = '{$key}' ";
        break;
    case 'market':
        $sql = "SELECT * FROM market WHERE id = '{$key}' ";
        break;
    default:
        exit($err_json);
        break;
}

$rs_sql = $mysqli -> query($sql);
if ($rs = mysqli_fetch_array($rs_sql)){
    $rs['echo'] = 0;
    echo json_encode($rs);
}
else{
    exit($err_json);
}
