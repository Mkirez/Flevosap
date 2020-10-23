<!doctype html>
<html lang="en">
<?php $title = "Edit Product" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <?php foreach ($products as $productInfo) {
            } ?>
            <h2>Edit Contact #<?= $productInfo->getId(); ?></h2>
            <form action="/admineditproducts" method="POST">
                <div class="hide">
                    <input class="hidden" type="hidden" name="id"
                           id="id" value="<?= isset($_POST["id"]) ? $_POST["id"] : $productInfo->getId(); ?>">
                </div>
                <div class="form-group">
                    <label for="title">Naam product:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="title"
                           id="title" value="<?= isset($_POST["title"]) ? $_POST["title"] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="productCode">Productcode:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="productCode"
                           id="productCode">
                </div>
                <div class="form-group">
                    <label for="productOmschrijving">Beschrijving product:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="productOmschrijving"
                           id="productOmschrijving">
                </div>
                <div class="form-group">
                    <label for="Prijs">Prijs:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="Prijs"
                           id="Prijs">
                </div>
                <div class="form-group">
                    <label for="Hoeveelheid">Hoeveelheid:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="Hoeveelheid"
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