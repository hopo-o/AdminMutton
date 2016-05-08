<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2016/5/5
 * Time: 21:56
 */

include "comm.php";

if(isset($_SESSION[session_name()])){
    setcookie(session_name(), '', time() - 60, '/');
}
session_destroy();

echo 0;
