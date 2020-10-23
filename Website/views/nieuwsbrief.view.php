<!doctype html>
<html lang="en">
<?php $title = "nieuwsbrief" ?>
<?php include "includes/head.view.php" ?>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    form {
        border: 3px solid #f1f1f1;
        font-family: Arial;
    }

    .container {
        padding: 20px;
        background-color: #f1f1f1;
    }

    input[type=text], input[type=submit] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    input[type=checkbox] {
        margin-top: 16px;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        border: none;
    }

    input[type=submit]:hover {
        opacity: 0.8;
    }
</style>

<body>
<?php include "includes/nav.view.php" ?>

<script>
    function inputCheckLogin(){
        var name = document.getElementById("name").value;
        var mail = document.getElementById("mail").value;
        var empty = ""

        if(name == empty || mail == empty){
            alert("Vul een gebruikersnaam of wachtwoord in");
            event.preventDefault();
        }else{
            return true;
        }
    }
</script>

<div class="container">
    <div class="container max-container">
        <form action="/nieuwsbrief" method="post" onsubmit="inputCheckLogin()">
            <h2>Abonneer op onze nieuwsbrief</h2>
            <p>Lorem ipsum text about why you should subscribe to our newsletter blabla. Lorem ipsum text about why you should subscribe to our newsletter blabla.</p>
            <div class="container" style="background-color:white">
                <input type="text" placeholder="Name" name="name" required>
                <input type="text" placeholder="Email address" name="mail" required>
                <label>
                    <input type="checkbox" name="subscribe"> Weekelijkse Nieuwsbrief
                </label>
            </div>
            <div class="container">
                <input type="submit" value="Subscribe">
            </div>
        </form>
    </div>
</div>

<?php include "includes/footer.view.php" ?>

</body>
</html>