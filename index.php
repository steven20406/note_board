<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Index</title>
</head>
<body>
<?php
    include_once("DBControl/dbtool.inc.php");
    $link=create_connection();
    $query="select * from note_board";
    $result = execute_query($link,"test", $query);
    
    echo "<table border=1>";
    echo "<tr><td>User Name";
    echo  "<td>User Note";
    echo  "<td>Delete";

    while($row=mysqli_fetch_row($result)){
            echo "<tr>";
            echo "<td>$row[0]";
            echo "<td>$row[1]";
            echo "<td><a href='DBControl/delete_note.php?text=".$row[1]."'> Delete</a>";
            echo "</tr>";
    }
    
    echo "</table>";
    
//    mysql_close($link);
?>

<div id="text_area"></div>

<form method="post" action="DBControl/insert_note.php">
<input name="user_name" type="text" placeholder="user name">
<input name="user_note" type="text" placeholder="note here">
<button type="submit" id="note_submit">Submit</button>
</form>

<script>
//    $("#note_submit").click(function (){
//        var user_name=$("#user_name").val();
//        var user_note=$("#user_note").val();
//        $.ajax({
//            url:"DBControl/insert_note.php",
//            type:"post",
//            datatype:"json",
//            data:{
//                user_name : user_name,
//                user_note : user_note
//            },
//            success : function(resp){
//            }
//        });
//    });
</script>

</body>
</html>
