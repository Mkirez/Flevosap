<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<div id="weergaveUsers">
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
    <table id="UserContent" border=1 class="table-sm" style="width:100%">
        <?php foreach ($users as $userInfo) { ?>
            <tr id="user_<?= $userInfo->getId(); ?>">
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
                    <a value="<?= isset($_POST[$userInfo->getId()]) ?>"
                       class="edit-item"
                       href="/users?controller=AdminUsersController&method=edit&id=<?= $userInfo->getId(); ?>"
                       onclick="confirmEdit('Weet je zeker dat je gebruiker #<?= $userInfo->getId(); ?> wilt modificeren?');">Edit</a>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <button data-user_id="<?= $userInfo->getId(); ?>" data-user_name="<?= $userInfo->getUsername(); ?>" class="delete_user">Delete User</button>
                </td>
            </tr>
        <?php } ?>
    </table>
    <script src="asset/js/jquery.min.js"></script>
    <script>
        $("#UserContent").on("click",".delete_user", function () {
            var user_id = $(this).data("user_id");
            var user_name = $(this).data("user_name");
            var confirmation = confirm('Weet u zeker dat u gebruiker: ' + user_name + ' wilt verwijderen?');

            if (confirmation == true) {
                $.ajax({
                    url: '/users?id=' + user_id,
                    type: 'DELETE',
                    success: function (result) {
                        // Do something with the result
                        if (result === "1"){
                            $("#UserContent").find("#user_" + user_id).remove();
                        }
                    }
                });
            }
        });
    </script>
</div>
</body>
</html>
<!-- <?php } else {
    header('location:/admin');
} ?> -->
