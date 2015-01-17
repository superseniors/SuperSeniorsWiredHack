<?php
require 'saltgen.php';
$password="password";

$length = 60;
$result = genKey($length);

$hash = SHA1($result.$password);
echo $result;
//echo $hash;
?>
<html>
<body>
<br/>
<br/>

</body>
</html>
<?php


echo $hash;


?>