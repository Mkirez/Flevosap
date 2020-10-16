<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>
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
                </td>
            </tr>
        </table>
    </div>
<?php } ?>
</body>
</html>
<!-- <?php }else{header('location:/admin');} ?> -->