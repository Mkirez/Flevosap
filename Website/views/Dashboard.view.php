<?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
    <?php include "includes/dashboardnav.view.php" ?>
    <h3 style="text-align: left;">Dashboard</h3>
    <?php 
    ?>
</body>
</html>
<!-- <?php }else{header('location:/admin');} ?> -->
