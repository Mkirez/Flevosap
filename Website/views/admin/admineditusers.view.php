<!doctype html>
<html lang="en">
<?php $title = "Edit User" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Edit User #<?= $user->getId(); ?></h1>
    </div>
</section>
<div class="container">
    <div class="col-md-6">
        <div class="wrapper">
            <form action="/admineditusers" method="POST">
                <div class="hide">
                    <input class="hidden" type="hidden" name="id"
                           id="id" value="<?= $user->getId(); ?>">
                </div>
                <div class="form-group">
                    <label for="gebruikersnaam">Gebruikersnaam:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="gebruikersnaam"
                           id="gebruikersnaam"
                           value="<?= $user->getUsername(); ?>">
                </div>
                <div class="form-group">
                    <label for="wachtwoord">Wachtwoord:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="wachtwoord"
                           id="wachtwoord">
                </div>
                <div class="form-group">
                    <input class="form-control-sm" type="submit" value="UPDATE">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>