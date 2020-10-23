<!doctype html>
<html lang="en">
<?php $title = "Edit User" ?>
<?php include "includes/head.view.php" ?>
<body>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <?php foreach ($users as $userInfo) {
            } ?>
            <h2>Edit Contact #<?= $userInfo->getId(); ?></h2>
            <form action="/admineditusers" method="post">
                <div class="form-group">
                    <label for="name">Gebruikersnaam:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="gebruikersnaam"
                           value="<?= isset($_POST["gebruikersnaam"]) ? $_POST["gebruikersnaam"] : $userInfo->getUsername() ?>"
                           id="gebruikersnaam">
                </div>
                <div class="form-group">
                    <label for="password">Wachtwoord:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="wachtwoord"
                           value="<?= isset($_POST["wachtwoord"]) ? $_POST["wachtwoord"] : $userInfo->getPassword() ?>"
                           id="wachtwoord">
                </div>
                <div class="form-group">
                    <input class="form-control-sm" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>