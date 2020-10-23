<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Users" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>


<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Order</h1>
    </div>
</section>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="container clearfix">
                <h1 class="float-left">Gebruikers informatie</h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>User</p>
                </div>
                <div class="col-md-8">
                    <p><?= ((new UserModel())->fetchById($order->getUserId()))->getUserName(); ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>Straat</p>
                </div>
                <div class="col-md-8">
                    <p><?= $order->getStreet(); ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>Huis NR.</p>
                </div>
                <div class="col-md-8">
                    <p><?= $order->getHouseNr(); ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>Stad</p>
                </div>
                <div class="col-md-8">
                    <p><?= $order->getCity(); ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>Postcode</p>
                </div>
                <div class="col-md-8">
                    <p><?= $order->getZipcode(); ?></p>
                </div>
            </div>

        </div>
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="container clearfix">
                <h1 class="float-left">Order regels</h1>
            </div>
            <div id="weergaveProducts" class="form-group">
                <table id="ProductTable" border="1" class="table-sm table-striped table-bordered"
                       style="width:100%; height:60px;">
                    <tr>
                        <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            Naam
                        </th>
                        <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            Product Code
                        </th>
                        <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            Prijs
                        </th>
                        <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            Hoeveelheid
                        </th>
                        <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            Total Prijs
                        </th>
                    </tr>
                    <?php foreach ($order_rules as $rule) { ?>
                        <tr id="product_<?= $rule->getId(); ?>">
                            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                                <?= ((new ProductModel())->find($rule->getProductId()))->getTitle() ?>
                            </td>
                            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                                <?= ((new ProductModel())->find($rule->getProductId()))->getProductCode() ?>
                            </td>
                            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                                &euro;<?= $rule->getPrice(); ?>
                            </td>
                            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                                <?= $rule->getTotal(); ?>
                            </td>
                            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                                &euro;<?= number_format($rule->getPrice() * $rule->getTotal(), 2, ",", ".") ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <script src="asset/js/jquery.min.js"></script>
</body>
</html>
<!-- <?php } else {
    header('location:/admin');
} ?> -->
