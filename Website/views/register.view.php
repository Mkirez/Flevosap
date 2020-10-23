<!doctype html>
<html lang="en">
<?php $title = "Registreer" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<script>
    function inputCheckLogin(){
        var name = document.getElementById("name").value;
        var password = document.getElementById("password").value;
        var empty = ""

        if(name == empty || password == empty){
            alert("Vul een gebruikersnaam of wachtwoord in");
            event.preventDefault();
        }else{
            return true;
        }
    }
</script>

<!-- <div class="main-content">
    <section class="body">
        <div class="col-md-6">
            <div class="wrapper">
                <h2>particulier Registreren</h2>
                <p>Vul a.u.b. dit formulier in om u te registreren.</p>
                <div class="error" style="color: red; font-size: 22px;">
                    <?= isset($_SESSION["register_incorrect"]) ? $_SESSION["register_incorrect"] : ''; ?>
                </div>
                <form action="/register" method="post">
                    <div class="form-group" >
                        <label>Gebruikersnaam</label>
                        <input type="text" name="gebruikersnaam" class="form-control form-control-sm"
                               value="<?= isset($_POST["gebruikersnaam"]) ? $_POST["gebruikersnaam"] : "" ?>">
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord</label>
                        <input type="password" name="wachtwoord" class="form-control form-control-sm">
                    </div>
                    <div class="form-group ">
                        <label>Bevestig wachtwoord</label>
                        <input type="password" name="bevestig_wachtwoord" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Invoeren">
                        <input type="reset" class="btn btn-default" value="Reset">
                    </div>
                    <p>Heeft u al een account? <a href="/login">Log dan hier in</a>.</p>
                </form>
            </div>
    </section>
</div> -->




<div class="main-content">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="/register">Particulier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ZakelijkeRegister">Zakelijk</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="wrapper">
                <h2>particulier Registreren</h2>
                <p>Vul a.u.b. dit formulier in om u te registreren.</p>
                
                <form action="/register" method="post" onsubmit="inputCheckLogin()">
                    <div class="form-group">
                        <label>Gebruikersnaam</label>
                        <input type="text" name="gebruikersnaam" class="form-control form-control-sm"
                               value="<?= isset($_POST["gebruikersnaam"]) ? $_POST["gebruikersnaam"] : "" ?>">
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord</label>
                        <input type="password" name="wachtwoord" class="form-control form-control-sm">
                    </div>
                    <div class="form-group ">
                        <label>Bevestig wachtwoord</label>
                        <input type="password" name="bevestig_wachtwoord" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Invoeren">
                        <input type="reset" class="btn btn-default" value="Reset">
                    </div>
                    <p>Heeft u al een account? <a href="/login">Log dan hier in</a>.</p>
                </form>
            </div>

           <!--  <form action="/register" method="post" onsubmit="inputCheckLogin()">
              
                  
                    <div class="form-group">
                        <label>Gebruikersnaam</label>
                        <input type="text" name="username" class="form-control form-control-sm"
                               value="<?= isset($_POST["username"]) ? $_POST["username"] : "" ?>" id="name">
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Onthoud mijn gebruikernaam</label>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Login">
                        </div>
                        <p>Heeft u geen account? <a href='/register'>Registreer dan nu</a></p>
              
                </div>
            </form> -->
        </div>
    </div>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>