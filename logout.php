<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['sid']);
unset($_SESSION['admin']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: TheFirstPage.php');

?>
