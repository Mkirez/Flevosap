<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Products" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Toevoegen product</h1>
        <a class="button button-3d float-right" href="/products/create">Add Product</a>
    </div>
</section>
<div class="container">
    <div id="weergaveProducts" class="form-group">
        <div class="wrapper">
            <form action="/products" method="post" class="card-body border" enctype="multipart/form-data">
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
                    <label for="productImage">Product Image:</label>
                    <br>
                    <input name="productImage" type="file" class="inputFile" />
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
    </div>
</div>
</body>
</html>
<!-- <?php } else {
    header('location:/admin');
} ?> -->