<!DOCTYPE html>
<html>
<body>

<form method="post">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    echo "Welcome " . $_POST["name"];
}
?>

</body>
</html>