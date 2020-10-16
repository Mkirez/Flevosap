<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>
<?php foreach ($users as $userInfo){ ?>
    <div id="weergaveUsers">
        <table id="Usertable" border="1" class="table table-striped table-bordered" style="width:100%">
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
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </tr>
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
                    <a  href="javascript:confirmEdit <?= $userInfo->getId();?>" class="btn btn-primary btn-sm" role="button">Edit</a>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <a  href="javascript:confirmDelete <?= $userInfo->getId();?>" class="btn btn-primary btn-sm" role="button">Delete</a>
                </td>

            </tr>
        </table>
            <script>
                function confirmEdit(editUrl) {
                  if (confirm("Are you sure you want to delete")) {
                    document.location = editUrl;
                  }
                }
            </script>
            <script>
                function confirmDelete(delUrl) {
                   if (confirm("Are you sure you want to delete")) {
                      document.location = delUrl;
                  }
                }
            </script>
    </div>
<?php } ?>
</body>
</html>
<!-- <?php }else{header('location:/admin');}?> -->