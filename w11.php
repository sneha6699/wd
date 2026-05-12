<!DOCTYPE html>
<html>
<body>

<?php
$str = "Hello World";

echo "Original String: " . $str . "<br>";
echo "String Length: " . strlen($str) . "<br>";
echo "Reversed String: " . strrev($str) . "<br>";
echo "Substring: " . substr($str, 0, 5);
?>

</body>
</html>