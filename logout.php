<?php				// kill current session the return to index.php
session_start();
session_destroy();
header('Location: index.php');
?>