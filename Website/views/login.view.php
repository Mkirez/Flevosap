<!doctype html>
<html lang="en">
<?php $title = "Login" ?>
<?php include "includes/head.view.php" ?>
<body>
    <?php include "includes/nav.view.php" ?>
        <div class="row">
            <div class="col-md-6">
                <div class="wrapper">
                    <h2>Inloggen</h2>
                    <p>Vul uw gegevens in om in te loggen.</p>
                    <form action="/login" method="post">
                        <div class="error" style="color: #ff0000; font-size: 22px;">
                            <?= isset($_SESSION["login_incorrect"]) ? $_SESSION["login_incorrect"] : ''; ?>
                        </div>
                        <div class="form-group <?= isset($_SESSION["login_incorrect"]) ? 'error' : ''; ?>">
                            <label>Gebruikersnaam</label>
                            <input type="text" name="username" class="form-control form-control-sm" value="<?= isset($_POST["username"]) ? $_POST["username"] : ""?>">
                        </div>
                        <div class="form-group">
                            <label>Wachtwoord</label>
                            <input type="password" name="password" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Login">
                        </div>
                        <p>Heeft u geen account? <a href='/register'>Registreer dan nu</a>.</p>
                    </form>
                </div>
            </div>
        </div>

    <?php include "includes/footer.view.php" ?>
</body>
</html>