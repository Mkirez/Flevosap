<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Users" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<div id="weergaveUsers" class="form-group">
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
                    <button data-user_id="<?= $userInfo->getId(); ?>"
                            data-user_name="<?= $userInfo->getUsername(); ?>"
                            class="edit_user">Edit User
                    </button>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <button data-user_id="<?= $userInfo->getId(); ?>"
                            data-user_name="<?= $userInfo->getUsername(); ?>"
                            class="delete_user">Delete User</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
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
        $("#UserContent").on("click",".edit_user", function () {
            var user_id = $(this).data("user_id");
            var user_name = $(this).data("user_name");
            var confirmation = confirm('Weet u zeker dat u gebruiker: ' + user_name + ' wilt modificeren?');

            if (confirmation == true) {
                window.location.href = '/admineditusers?id=' + user_id
            }
        });
    </script>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <h2 class="card-header">Add user</h2>
            <form action="/users" method="post" class="card-body border">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="gebruikersnaam" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="wachtwoord" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
            </form>
        </div>
</section>
</body>
</html>
<!-- <?php } else {
    header('location:/admin');
} ?> -->
