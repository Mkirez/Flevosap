<!doctype html>
<html lang="en">
<?php $title = "Edit Product" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>
<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Edit Product #<?= $product->getId(); ?></h1>
    </div>
</section>
<div class="container">
    <div class="wrapper">
        <form action="/admineditproducts" method="POST" enctype="multipart/form-data">
            <div class="hide">
                <input class="hidden" type="hidden" name="id"
                       id="id" value="<?= $product->getId(); ?>">
            </div>
            <div class="form-group">
                <label for="title">Naam product:</label>
                <br>
                <input class="form-control-sm" style="width: 100%;"  type="text" name="title"
                       id="title" value="<?= $product->getTitle(); ?>">
            </div>
            <div class="form-group">
                <label for="productCode">Productcode:</label>
                <br>
                <input class="form-control-sm" style="width: 100%;"  type="text" name="productCode"
                       id="productCode" value="<?= $product->getProductCode(); ?>">
            </div>

            <div class="form-group">
                <label for="productOmschrijving">Beschrijving product:</label>
                <br>
                <textarea rows="12" style="width: 100%;" type="text" name="productOmschrijving"
                          id="productOmschrijving"><?= $product->getProductOmschrijving(); ?></textarea>
            </div>

            <div class="form-group">
                <label for="productImage">Product Image:</label>
                <br>
                <input name="productImage" type="file" class="inputFile" />
            </div>

            <div class="form-group">
                <label for="Prijs">Prijs:</label>
                <br>
                <input class="form-control-sm"  style="width: 100%;" type="text" name="Prijs"
                       id="Prijs" value="<?= $product->getPrijs(); ?>">
            </div>

            <div class="form-group">
                <label for="Hoeveelheid">Hoeveelheid:</label>
                <br>
                <input class="form-control-sm" style="width: 100%;"  type="text" name="Hoeveelheid"
                       id="Hoeveelheid" value="<?= $product->getHoeveelheid(); ?>">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</div>
</body>
</html>