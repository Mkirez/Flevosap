<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Users" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Toevoegen Gebruiker</h1>
    </div>
</section>
<div class="container">
    <div id="weergaveProducts" class="form-group">
        <div class="wrapper">
            <h2 class="card-header">Add user</h2>
            <form action="/users" method="post" class="card-body border">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="gebruikersnaam" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="wachtwoord" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<!-- <?php } else {
    header('location:/admin');
} ?> -->