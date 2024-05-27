<?php
session_start();
session_destroy();
header("Location: ldab.php");
exit();
?>
