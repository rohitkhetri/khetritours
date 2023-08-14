<?php
session_start();

if (!isset($_SESSION['customer_name'])) {
    header("Location: mainPage.html");
    exit();
}

$username = $_SESSION['customer_name'];

?>

<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
