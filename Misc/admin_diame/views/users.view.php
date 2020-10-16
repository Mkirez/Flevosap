<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>
<?php foreach ($users as $userInfo){ ?>
    <div id="weergaveUsers">
        <table id="example" border="1" class="table table-striped table-bordered" style="width:100%">
            <colgroup>
                <col width="100%" />
                <col width="0%" />
            </colgroup>
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
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $userInfo->getUsername(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $userInfo->getPassword(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $userInfo->getCreatedAt(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $userInfo->getUpdatedAt(); ?>
                </td>
            </tr>
        </table>
    </div>
<?php } ?>
</body>
</html>
<!-- <?php }else{header('location:/admin');}?> -->