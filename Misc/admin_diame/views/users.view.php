<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<?php $row = $users -> fetch_assoc(); ?>
<?php foreach ($row as $userInfo){ ?>
    <div id="weergaveUsers">
        <table>
            <tr>
                <th>
                    Gebruikers:
                </th>
                <th>
                    Wachtwoorden:
                </th>
                <th>
                    Created at:
                </th>
                <th>
                    Updated at:
                </th>
            </tr>
            <tr>
                <td>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                    <?php $userInfo["gebruikersnaam"] ?>
                </td>
                <td>
                    <?php $userInfo["wachtwoord"] ?>
                </td>
                <td>
                    <?php $userInfo["created_at"] ?>
                </td>
                <td>
                    <?php $userInfo["updated_at"] ?>
=======
=======
>>>>>>> Stashed changes
                    <?php echo $userInfo->getUsername(); ?>
                </td>
                <td>
                    <?php echo $userInfo->getPassword(); ?>
                </td>
                <td>
                    <?php echo $userInfo->getCreatedAt(); ?>
                </td>
                <td>
                    <?php echo $userInfo->getUpdatedAt(); ?>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
                </td>
            </tr>
        </table>
    </div>
<?php } ?>
</body>
</html>
<!-- <?php }else{header('location:/admin');} ?> -->