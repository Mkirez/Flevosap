</html>
<?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
    <!doctype html>
    <html lang="en">
    <?php $title = "Home" ?>
    <?php include "includes/head.view.php" ?>

<?php include "includes/nav.view.php" ?>

<?php foreach($userInfoData as $userInfoItem){ ?>
<div id="UserId">
    <div>
    <h1> <?php $userInfoItem ['id'] ?> </h1>
        <form>

        </form>
    </div>
</div>
<div id="UserInfoBox">
    <div id="Gebruikersnaam">
        <h2> <?php $userInfoItem ['gebruikersnaam'] ?> </h2>
    </div>
    <div id="Wachtwoord">
        <h2> <?php $userInfoItem ['wachtwoord'] ?> </h2>
    </div>
    <div id="Created_at">
        <p><?php $userInfoItem ['created_at'] ?></p>
    </div>
    <div id="Updated_at">
        <p><?php $userInfoItem ['updated_at'] ?></p>
    </div>
</div>
<?php } ?>
</body>
</html>
<?php }else{header('location:/admin');} ?>