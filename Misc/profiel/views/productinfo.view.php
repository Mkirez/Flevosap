<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php $title = "Product Info" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<div class="main-content">
    <div class="container">
        <div class="product">
            <div class="row">
                <div class="col-sm-12 col-md-6 product-info-image">
                    <img src="/ProductImage?productId=<?= $product->getId(); ?>"/>
                </div>
                <div class="col-sm-12 col-md-6 product-info">
                    <div id="product_title">
                        <h2><?= $product->getTitle(); ?></h2>
                    </div>
                    <div id="product_description">
                        <p><?= $product->getProductOmschrijving(); ?></p>
                    </div>
                    <div class="cbar"></div>
                    <div id="addToCart">
                        <a class="cartButton" href="/cart/add?id=<?= $product->getId(); ?>">Voeg toe</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbar mt-50"></div>
        <div class="values">
            <h3>Voedings waarde</h3>
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <td>Size</td>
                    <td>Small, Medium &amp; Large</td>
                </tr>
                <tr>
                    <td>Color</td>
                    <td>Pink &amp; White</td>
                </tr>
                <tr>
                    <td>Waist</td>
                    <td>26 cm</td>
                </tr>
                <tr>
                    <td>Length</td>
                    <td>40 cm</td>
                </tr>
                <tr>
                    <td>Chest</td>
                    <td>33 inches</td>
                </tr>
                <tr>
                    <td>Fabric</td>
                    <td>Cotton, Silk &amp; Synthetic</td>
                </tr>
                <tr>
                    <td>Warranty</td>
                    <td>3 Months</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<?php include "includes/footer.view.php" ?>
</html>