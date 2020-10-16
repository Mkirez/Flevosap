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
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">

                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <a href="javascript:confirmDelete <?php echo $userInfo->getId();?>" class="btn btn-primary btn-sm" role="button">Delete</a>
                </td>
            </tr>
        </table>
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