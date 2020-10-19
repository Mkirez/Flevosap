<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Products" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<div id="weergaveProducts">
    <table id="example" border="1" class="table table-striped table-bordered" style="width:100%">
        <tr>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Product ID:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Productnaam:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Productbeschrijving:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Prijs:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Hoeveelheid:
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
    <table id="ProductContent" border=1 class="table-sm" style="width:100%">
        <?php foreach ($products as $productInfo){ ?>
        <tr id="product_<?= $productInfo->getId(); ?>">
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
                <a href="javascript:void(0);"
                   onclick="confirmEdit('Weet je zeker dat je product #<?= $productInfo->getId(); ?> wilt modificeren?', '/products?recordId=<?= urlencode($productInfo->getId()); ?>');">Edit</a>
            </td>
            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                <button data-product_id="<?= $productInfo->getId(); ?>"
                        data-product_name="<?= $productInfo->getTitle(); ?>" class="delete_user">Delete User
                </button>
            </td>
        </tr>
    </table>
    <script src="asset/js/jquery.min.js"></script>
    <script>
        $("#ProductContent").on("click", ".delete_user", function () {
            var product_id = $(this).data("product_id");
            var product_name = $(this).data("product_name");
            var confirmation = confirm('Weet u zeker dat u gebruiker: ' + product_name + ' wilt verwijderen?');

            if (confirmation == true) {
                $.ajax({
                    url: '/products?id=' + product_id,
                    type: 'DELETE',
                    success: function (result) {
                        // Do something with the result
                        if (result === "1") {
                            $("#ProductContent").find("#product_" + product_id).remove();
                        }
                    }
                });
            }
        });
    </script>
    <script>
        function confirmEdit(message, url) {
            var confirmation = confirm(message);

            if (confirmation == true) {
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
<!-- <?php } else {header('location:/admin');} ?> -->