<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>
<?php foreach ($products as $productInfo){ ?>
    <div id="weergaveProducts">
        <table>
            <tr>
                <th>
                    Product ID:
                </th>
                <th>
                    Productnaam:
                </th>
                <th>
                    Productbeschrijving:
                </th>
                <th>
                    Prijs:
                </th>
                <th>
                    Hoeveelheid:
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
                    <?php echo $productInfo->getId(); ?>
                </td>
                <td>
                    <?php echo $productInfo->getTitle(); ?>
                </td>
                <td>
                    <?php echo $productInfo->getProductOmschrijving(); ?>
                </td>
                <td>
                    <?php echo $productInfo->getPrijs(); ?>
                </td>
                <td>
                    <?php echo $productInfo->getHoeveelheid(); ?>
                </td>
                <td>
                    <?php echo $productInfo->getCreatedAt(); ?>
                </td>
                <td>
                    <?php echo $productInfo->getUpdatedAt(); ?>
                </td>
            </tr>
        </table>
    </div>
<?php } ?>
</body>
</html>
<!-- <?php }else{header('location:/admin');} ?> -->

