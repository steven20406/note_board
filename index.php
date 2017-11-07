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

<div id="text_area"></div>

<form method="post" action="DBControl/insert_note.php">
<input name="user_name" type="text" placeholder="user name">
<input name="user_note" type="text" placeholder="note here">
<button type="submit" id="note_submit">Submit</button>
</form>

<script>
    $("#note_submit").click(){

    }
</script>

</body>
</html>