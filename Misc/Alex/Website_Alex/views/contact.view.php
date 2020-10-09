<!doctype html>
<html lang="en">
<?php $title = "Contact" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>
<br>
<h3 style="text-align: left;" class="col-md-6">Neem contact op met FlevoSap:</h3>
<section class="body">
    <div class="col-md-6">
        <div class="inner" id="inner-form">
            <form action="sendmail.php" method="POST">
                <br>
                <div class="form-group name-group">
                    <input name="naam" type="text" class="form-control form-control-sm"  id="loremipsum" placeholder="naam">
                </div>
                <div class="form-group email-group">
                    <input type="text" name="onderwerp" class="form-control form-control-sm"  id="loremipsum" 	placeholder="onderwerp">
                </div>
                <div class="form-group achternaam-group">
                    <input type="text" class="form-control form-control-sm" id="loremipsum" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <textarea name="bericht" class="form-control" id="loremipsum" rows="3"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" placeholder="lorem ipsum">Submit</button>
                <p>
                    <br>
                </p>
            </form>
        </div>
    </div>
    <div class="form-group">
        <p style="text-align: left"; class="col-md-6";>
            <textarea name="myTextBox" cols="36" rows="6" style="border:3px solid #bd2130;">
Flevosap bv
Prof. Zuurlaan 22
8256 PE Biddinghuizen, Nederland
Tel: +31 (0)321 – 33 25 25
info@flevosap.nl
            </textarea>
        </p>
    </div>
</section>
<?php include "includes/footer.view.php" ?>
</body>
</html>