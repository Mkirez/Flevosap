</html>
<?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
    <!doctype html>
    <html lang="en">
    <?php $title = "Home" ?>
    <?php include "includes/head.view.php" ?>

<?php include "includes/nav.view.php" ?>

<?php foreach($UserInfoData as $UserInfoItem){ ?>
<div id="UserId">
    <div>
        <h1> <?php $UserInfoItem["id"] ?> </h1>
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
</body>
</html>
<?php }else{header('location:/admin');} ?>