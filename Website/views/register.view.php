<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Registreren</h2>
    <p>Vul a.u.b. dit formulier in om u te registreren.</p>
    <div class="error" style="color: red; font-size: 22px;">
        <?= isset($_SESSION["register_incorrect"]) ? $_SESSION["register_incorrect"] : ''; ?>
    </div>
    <form action="/register" method="post">
        <div class="form-group">
            <label>Gebruikersnaam</label>
            <input type="text" name="gebruikersnaam" class="form-control" value="<?= isset($_POST["gebruikersnaam"]) ? $_POST["gebruikersnaam"] : ""?>">
        </div>
        <div class="form-group">
            <label>Wachtwoord</label>
            <input type="password" name="wachtwoord" class="form-control">
        </div>
        <div class="form-group ">
            <label>Bevestig wachtwoord</label>
            <input type="password" name="bevestig_wachtwoord" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Invoeren">
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p>Heeft u al een account? <a href="login.view.php">Log dan hier in</a>.</p>
    </form>
</div>
</body>
</html>