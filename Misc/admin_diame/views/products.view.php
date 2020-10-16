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
                    <?= $productInfo->getId(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $productInfo->getTitle(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $productInfo->getProductOmschrijving(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $productInfo->getPrijs(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $productInfo->getHoeveelheid(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $productInfo->getCreatedAt(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <?= $productInfo->getUpdatedAt(); ?>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <a href="javascript:void(0);" onclick="confirmEdit('Weet je zeker dat je product #<?= $productInfo->getId();?> wilt modificeren?', '/products?recordId=<?= urlencode($productInfo->getId()); ?>');">Edit</a>
                </td>
                <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    <a href="javascript:void(0);" onclick="confirmDelete('Weet je zeker dat je product #<?= $productInfo->getId();?> wilt verwijderen? Dit is permanent.', '/products?recordId=<?= urlencode($productInfo->getId()); ?>');">Delete</a>
                </td>
            </tr>
        </table>
        <script>
            function confirmEdit ( message, url )
            {
                var confirmation = confirm ( message );

                if (confirmation == true ) {
                    window.location = url;
                } else {
                    return false;
                }
            }
        </script>
        <script>
            function confirmDelete ( message, url )
            {
                var confirmation = confirm ( message );

                if (confirmation == true ) {
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
<!-- <?php }else{header('location:/admin');} ?> -->

