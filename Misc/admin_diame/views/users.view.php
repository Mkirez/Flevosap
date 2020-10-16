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
                </td>
            </tr>
        </table>
    </div>
<?php } ?>
</body>
</html>
<!-- <?php }else{header('location:/admin');} ?> -->