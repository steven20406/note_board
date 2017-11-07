<?php
/**
 * Created by PhpStorm.
 * User: Steven 臧
 * Date: 2017/11/7
 * Time: 下午 09:21
 */
include_once ("dbtool.inc.php");

$link=create_connection();

$name = $_POST["user_name"];
$note = $_POST["user_note"];

$query="insert into note_board values ('$name', '$note')";
$result = execute_query($link,"test", $query);