<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Users" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Orders</h1>
    </div>
</section>
<div class="container">
        <div class="form-group">
            <table id="Usertable" border="1" class="table-sm table-striped table-bordered" style="width:100%; height:60px;">
                <tr>
                    <th style="white-space: nowrap;height: 50px; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        User
                    </th>
                    <th style="white-space: nowrap;height: 50px; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        City
                    </th>
                    <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        Status
                    </th>
                    <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        Created at
                    </th>
                    <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        Actie
                    </th>
                </tr>
                <?php foreach ($orders as $order) { ?>
                    <tr id="user_<?= $order->getId(); ?>">
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            <?= ((new UserModel())->fetchById($order->getUserId()))->getUserName(); ?>
                        </td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            <?= $order->getCity(); ?>
                        </td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            <?= $order->getStatus(); ?>
                        </td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            <?= date("d-m-Y",strtotime($order->getCreatedAt())); ?>
                        </td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            <a class="button button-3d" href="/order?id=<?= $order->getId(); ?>">Show</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <script src="asset/js/jquery.min.js"></script>
</body>
</html>
<!-- <?php } else {
    header('location:/admin');
} ?> -->
