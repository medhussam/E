<?php

session_start();
unset($_SESSION['user_token']);
session_destroy();
echo "<script>localStorage.clear();  window.location = '../login.php'</script>";
header("Location: ../login.php");

?>