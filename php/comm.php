<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2016/5/8
 * Time: 11:59
 */

session_start();
if(!isset($_SESSION["userid"]))
{
    echo -2;

    exit();
}