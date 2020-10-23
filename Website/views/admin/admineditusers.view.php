<!doctype html>
<html lang="en">
<?php $title = "Edit User" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <?php foreach ($users as $userInfo) {
            } ?>
            <form action="/admineditusers" method="POST">
                <h2>Edit Contact #<?= $userInfo->getId(); ?></h2>
                <div class="hide">
                    <input class="hidden" type="hidden" name="id"
                           id="id" value="<?= isset($_POST["id"]) ? $_POST["id"] : $userInfo->getId(); ?>">
                </div>
                <div class="form-group">
                    <label for="gebruikersnaam">Gebruikersnaam:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="gebruikersnaam"
                           id="gebruikersnaam" value="<?= isset($_POST["gebruikersnaam"]) ? $_POST["gebruikersnaam"] : "" ?>">
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
</section>
</body>
</html>