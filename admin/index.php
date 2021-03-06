<?php
require_once '../load.php';
confirm_logged_in(); // Ensures only logged in users can access dashboard page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Admin Panel</title>
</head>
<body>
    <h2>Welcome to the Dashboard Page, <?php echo $_SESSION['user_name'];?>!</h2>
    <h4>Your last login: <?php echo $_SESSION['user_date']; ?>.</h4>

    <a href="admin_logout.php">Log Out</a>

    <div class="widget">
    <h2>Users</h2>
    <div class="inner">
        <h4>You have logged in <?php echo $_SESSION['user_login']; ?> times!</h4>
    </div>
    </div>

</body>
</html>