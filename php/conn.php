<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2016/5/8
 * Time: 11:44
 */


//连接数据库验证
$mysqli = new mysqli("localhost", "root", "123", "admin_mutton");
$mysqli->query("set names 'utf8'");