<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<?php include "includes/nav.view.php" ?>
<body>
<?php foreach ($users as $userInfo){ ?>
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
                    <?php echo $userInfo["gebruikersnaam"] ?>
                </td>
                <td>
                    <?php echo $userInfo["wachtwoord"] ?>
                </td>
                <td>
                    <?php echo $userInfo["created_at"] ?>
                </td>
                <td>
                    <?php echo $userInfo["updated_at"] ?>
                </td>
            </tr>
        </table>
    </div>
<?php } ?>
</body>
</html>
<!-- <?php }else{header('location:/admin');} ?> -->