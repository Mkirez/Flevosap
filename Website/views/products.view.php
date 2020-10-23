<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Products" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>

<div id="weergaveProducts" class="form-group">
    <table id="ProductTable" border="1" class="table-sm table-striped table-bordered" style="width:100%; height:60px;">
        <tr>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Product ID:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Productnaam:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                ProductCode:
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
                <?= $productInfo->getProductCode(); ?>
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
                <button data-product_id="<?= $productInfo->getId(); ?>"
                        data-product_name="<?= $productInfo->getTitle(); ?>"
                        class="edit_product">Edit Product
                </button>
            </td>
            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                <button data-product_id="<?= $productInfo->getId(); ?>"
                        data-product_name="<?= $productInfo->getTitle(); ?>"
                        class="delete_product">Delete Product
                </button>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
    <script src="asset/js/jquery.min.js"></script>
    <script>
        $("#ProductContent").on("click", ".delete_product", function () {
            var product_id = $(this).data("product_id");
            var product_name = $(this).data("product_name");
            var confirmation = confirm('Weet u zeker dat u product: ' + product_name + ' wilt verwijderen?');

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
        $("#ProductContent").on("click", ".edit_product", function () {
            var product_id = $(this).data("product_id");
            var product_name = $(this).data("product_name");
            var confirmation = confirm('Weet u zeker dat u product: ' + product_name + ' wilt modificeren?');

            if (confirmation == true) {
                window.location.href = '/admineditproducts?id=' + product_id
            }
        });
    </script>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <h2 class="card-header">Add Product</h2>
            <form action="/products" method="post" class="card-body border">
                <div class="form-group">
                    <label>Productnaam</label>
                    <input type="text" name="title" class="form-control form-control-sm"
                           value="<?= isset($_POST["title"]) ? $_POST["title"] : "" ?>">
                </div>
                <div class="form-group">
                    <label>Product Code</label>
                    <input type="text" name="productCode" class="form-control form-control-sm"
                </div>
                <div class="form-group">
                    <label>Productomschrijving</label>
                    <input type="text" name="productOmschrijving" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Prijs</label>
                    <input type="number" name="Prijs" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Hoeveelheid</label>
                    <input type="text" name="Hoeveelheid" class="form-control form-control-sm">
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
<!-- <?php } else {header('location:/admin');} ?> -->