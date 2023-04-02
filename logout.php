<?php 

require('alert.php');

session_start();

session_destroy();

redirect('admin.php');




?>
