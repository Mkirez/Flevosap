<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Products" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Producten</h1>
        <a class="button button-3d float-right" href="/products/create">Add Product</a>
    </div>
</section>
<div class="container">
    <div id="weergaveProducts" class="form-group">
        <table id="ProductTable" border="1" class="table-sm table-striped table-bordered"
               style="width:100%; height:60px;">
            <tr>
                <th style="white-space: nowrap; height: 50px; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    #
                </th>
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
                    Created at
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Edit
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Delete
                </th>
            </tr>
            <?php foreach ($products as $productInfo) { ?>
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
                        &euro;<?= $productInfo->getPrijs(); ?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <?= $productInfo->getHoeveelheid(); ?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <?= date("Y-m-d" , strtotime($productInfo->getCreatedAt())); ?>
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
        $("#ProductTable").on("click", ".delete_product", function () {
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
        $("#ProductTable").on("click", ".edit_product", function () {
            var product_id = $(this).data("product_id");
            var product_name = $(this).data("product_name");
            var confirmation = confirm('Weet u zeker dat u product: ' + product_name + ' wilt modificeren?');
            if (confirmation == true) {
                window.location.href = '/admineditproducts?id=' + product_id
            }
        });
    </script>
</div>
</body>
</html>
<!-- <?php } else {
    header('location:/admin');
} ?> -->