<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <?php include "includes/head.view.php" ?>
</head>
<body>
<?php include "includes/nav.view.php" ?>
<div class="main-content">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Particulier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/Zakelijkelogin">Zakelijk</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Login bij Mijn Flevosap</h5>
            <form action="/Zakelijkelogin" method="post">
                <div class="error" style="color: #ff0000; font-size: 22px;">
                    <?= isset($_SESSION["login_incorrect"]) ? $_SESSION["login_incorrect"] : ''; ?>
                    <div class="form-group <?= isset($_SESSION["login_incorrect"]) ? 'error' : ''; ?>">
                        <label>Gebruikersnaam</label>
                        <input type="text" name="username" class="form-control form-control-sm" value="<?= isset($_POST["username"]) ? $_POST["username"] : ""?>">
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord</label>
                        <input type="password" name="password" class="form-control form-control-sm">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Onthoud mijn gebruikernaam</label>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Login">
                        </div>
                        <p>Heeft u geen account? <a href='/zakelijkeregister'>Registreer dan nu</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>