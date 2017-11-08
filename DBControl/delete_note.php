<?php

include_once ("dbtool.inc.php");
$link=create_connection();
$delete_note = $_POST["delete"];
$query="delete from user_note where user_note = $delete_note";
$result=execute_query($link,"note_board",$query);
