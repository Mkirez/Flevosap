<!doctype html>
<html lang="en">
<?php $title = "Edit Product" ?>
<?php include "includes/head.view.php" ?>
<body>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <?php foreach ($products as $productInfo) {
            } ?>
            <h2>Edit Contact #<?= $productInfo->getId(); ?></h2>
            <form action="/admineditproducts" method="UPDATE">
                <div class="form-group">
                    <label for="title">Naam product:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="title"
                           value="<?= isset($_POST["title"]) ? $_POST["title"] : $productInfo->getTitle() ?>"
                           id="title">
                </div>
                <div class="form-group">
                    <label for="productCode">Productcode:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="productCode"
                           value="<?= isset($_POST["productCode"]) ? $_POST["productCode"] : $productInfo->getProductCode() ?>"
                           id="productCode">
                </div>
                <div class="form-group">
                    <label for="productOmschrijving">Beschrijving product:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="productOmschrijving"
                           value="<?= isset($_POST["productOmschrijving"]) ? $_POST["productOmschrijving"] : $productInfo->getProductOmschrijving() ?>"
                           id="productOmschrijving">
                </div>
                <div class="form-group">
                    <label for="Prijs">Prijs:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="Prijs"
                           value="<?= isset($_POST["Prijs"]) ? $_POST["Prijs"] : $productInfo->getPrijs() ?>"
                           id="Prijs">
                </div>
                <div class="form-group">
                    <label for="Hoeveelheid">Hoeveelheid:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="Hoeveelheid"
                           value="<?= isset($_POST["Hoeveelheid"]) ? $_POST["Hoeveelheid"] : $productInfo->getHoeveelheid() ?>"
                           id="Hoeveelheid">
                </div>
                <div>
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>