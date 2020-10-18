<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<div id="weergaveUsers">
    <form action="" method="post">
        <table id="Usertable" border="1" class="table-sm table-striped table-bordered" style="width:100%; height:60px;">
            <tr>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Gebruikers:
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Wachtwoorden:
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Created at:
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Updated at:
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Edit
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Delete
                </th>
            </tr>
        </table>
            <?php foreach ($users as $userInfo){ ?>
        <table id="UserContent" border=1 class="table-sm" style="width:100%">
            <tr>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $userInfo->getUsername(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $userInfo->getPassword(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $userInfo->getCreatedAt(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $userInfo->getUpdatedAt(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <a class="edit-item" href="users?id=2" onclick="confirmEdit('Weet je zeker dat je gebruiker #<?= $edit = $userInfo->getId(); ?> wilt modificeren?');">Edit</a>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <a class="delete-item" href="users?id=2" onclick="confirmDelete('Weet je zeker dat je gebruiker #<?= $delete = $userInfo->getId(); ?> wilt verwijderen? Dit is permanent.')">Delete</a>
                </td>
                </tr>
        </table>
    </form>
    <script>
        function confirmEdit(message) {
            var confirmation = confirm(message);

            if (confirmation == true) {
                window.location = url;
            } else {
                return false;
            }
        }
    </script>
    <script>
        function confirmDelete(message) {
            var confirmation = confirm(message);

            if (confirmation == true) {
                window.location = url;

            } else {
                return false;
            }
        }
    </script>
</div>
<?php } ?>
</body>
</html>
<!-- <?php } else {header('location:/admin');} ?> -->
