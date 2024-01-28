<?php
session_start();
print_r($_SESSION);

?>
<!DOCTYPE html>
<html>
<body>
<?php

if(isset($_SESSION["kalyan"])){
echo"my name is ".$_SESSION["kalyan"];
};

?>
</body>
</html>