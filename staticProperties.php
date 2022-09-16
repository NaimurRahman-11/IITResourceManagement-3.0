<?php

session_start();

$_SESSION['name']='mou';
?>
<?php

echo $_SESSION['name'];
?>