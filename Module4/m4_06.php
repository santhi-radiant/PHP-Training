<?php
//accessing session
session_start();

echo 'The session variables are <br>';
print_r($_SESSION);
session_unset();
session_destroy();
?>