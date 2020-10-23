<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Users" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Gebruikers</h1>
        <a class="button button-3d float-right" href="/users/create">Add Gebruiker</a>
    </div>
</section>
<div class="container">
    <div id="weergaveUsers" class="form-group">
        <table id="Usertable" border="1" class="table-sm table-striped table-bordered" style="width:100%; height:60px;">
            <tr>
                <th style="white-space: nowrap; height: 50px; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Gebruikers
                </th>
                <th style="white-space: nowrap; height: 50px; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Type
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Created at
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Updated at
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Edit
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Delete
                </th>
            </tr>
            <?php foreach ($users as $userInfo) { ?>
                <tr id="user_<?= $userInfo->getId(); ?>">
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <?= $userInfo->getUsername(); ?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <?php if($userInfo->getType() == 1){ ?>
                            Gebruiker
                        <?php }else{ ?>
                            Zakelijk
                        <?php } ?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <?= date("d-m-Y",strtotime($userInfo->getCreatedAt())); ?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <?= date("d-m-Y",strtotime($userInfo->getUpdatedAt())); ?>
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
                                class="delete_user">Delete User
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script src="asset/js/jquery.min.js"></script>
    <script>
        $("#Usertable").on("click", ".delete_user", function () {
            var user_id = $(this).data("user_id");
            var user_name = $(this).data("user_name");
            var confirmation = confirm('Weet u zeker dat u gebruiker: ' + user_name + ' wilt verwijderen?');

            if (confirmation == true) {
                $.ajax({
                    url: '/users?id=' + user_id,
                    type: 'DELETE',
                    success: function (result) {
                        // Do something with the result
                        if (result === "1") {
                            $("#UserContent").find("#user_" + user_id).remove();
                        }
                    }
                });
            }
        });

        $("#Usertable").on("click", ".edit_user", function () {
            var user_id = $(this).data("user_id");
            var user_name = $(this).data("user_name");
            var confirmation = confirm('Weet u zeker dat u gebruiker: ' + user_name + ' wilt modificeren?');

            if (confirmation == true) {
                window.location.href = '/admineditusers?id=' + user_id
            }
        });
    </script>
</div>
</body>
</html>
<!-- <?php } else {
    header('location:/admin');
} ?> -->
