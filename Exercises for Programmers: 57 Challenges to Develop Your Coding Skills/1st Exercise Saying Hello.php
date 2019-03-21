<!--Exercise 1 Saying Hello-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    <label for="name">Name</label>
    <input type="text" name="name">
</form>
</body>
</html>

<?php

$name = $_GET['name'];
$greetings = "Hello".' '.$name .', '.'Have a nice day!';
echo $greetings;
?>