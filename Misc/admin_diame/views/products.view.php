<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>
<?php foreach ($products as $productInfo){ ?>
    <div id="weergaveProducts">
        <table id="example" border="1" class="table table-striped table-bordered" style="width:100%">
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
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $productInfo->getId(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $productInfo->getTitle(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $productInfo->getProductOmschrijving(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $productInfo->getPrijs(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $productInfo->getHoeveelheid(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $productInfo->getCreatedAt(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?php echo $productInfo->getUpdatedAt(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">

                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <a href="javascript:confirmDelete <?php echo $productInfo->getId();?>" class="btn btn-primary btn-sm" role="button">Delete</a>
                </td>
            </tr>
        </table>
    </div>
<?php } ?>
</body>
</html>
<!-- <?php }else{header('location:/admin');} ?> -->

