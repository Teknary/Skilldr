<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: https://skilldr.vercel.app/api/login.php");
    exit();
}
?>
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
