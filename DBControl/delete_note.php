<?php
$text=$_GET["text"];
include_once ("dbtool.inc.php");
$link=create_connection();
$query="delete from note_board where user_note = '$text'";
$result=execute_query($link,"test",$query);
header("Location: http://localhost/note_board/index.php"); /* Redirect browser */
exit();
