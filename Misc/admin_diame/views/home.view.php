<?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Home" ?>
<?php include "includes/head.view.php" ?>
<body>
    <?php include "includes/nav.view.php" ?>
    <h3 style="text-align: left;">Dashboard</h3>
</body>
</html>
<?php }else{header('location:/admin');} ?>