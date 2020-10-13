<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<?php foreach($UserInfoData as $UserInfoItem){ ?>
<div id="UserId">
    <div>
        <h1> <?php// $UserInfoItem ?> </h1>
    </div>
</div>
<div id="UserInfoBox">
    <div id="Gebruikersnaam">
        <h2> <?php $UserInfoItem["gebruikersnaam"] ?> </h2>
    </div>
    <div id="Wachtwoord">
        <h2> <?php $UserInfoItem["wachtwoord"] ?> </h2>
    </div>
    <div id="Created_at">
        <p><?php $UserInfoItem["created_at"] ?></p>
    </div>
    <div id="Updated_at">
        <p><?php $UserInfoItem["updated_at"] ?></p>
    </div>
</div>
<?php } ?>
<?php include "includes/footer.view.php" ?>
</body>
</html>