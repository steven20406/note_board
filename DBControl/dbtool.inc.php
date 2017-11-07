<?php
/**
 * Created by PhpStorm.
 * User: Steven 臧
 * Date: 2017/11/4
 * Time: 下午 11:02
 */
function create_connection(){
    $error_message="cannot connect";
    $db_host="localhost";
    $db_user="root";
    $db_password="04060406";
    $db_name="test";
    //@$mysqli = new mysqli($db_host,$db_user,$db_password,$db_name);
    $link = mysqli_connect($db_host,$db_user,$db_password) or die($error_message.mysqli_connect_error());
    mysqli_query($link,"set names uft8");
    return $link;
}

function execute_query($link,$db_name,$query){
    mysqli_select_db($link,$db_name)
        or die ("No db exist".mysqli_error($link));
    $result=mysqli_query($link,$query);
    return $result;
}
?>