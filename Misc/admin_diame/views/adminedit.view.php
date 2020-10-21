<<!doctype html>
<html lang="en">
<?php $title = "Edit user" ?>
<body>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <h2>Add user</h2>
            private int $id;
            private string $title, $productCode, $prijs, $hoeveelheid, $ProductOmschrijving;
            private $picture;
            private $createdAt, $updatedAt;
            <form action="/users" method="post">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="Title" class="form-control form-control-sm" value="<?= isset($_POST["Title"]) ? $_POST["Title"] : ""?>">
                </div>
                <div class="form-group">
                    <label>Productcode</label>
                    <input type="text" name="Productcode" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Prijs</label>
                    <input type="text" name="Prijs" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Productcode</label>
                    <input type="number" name="Productcode" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Productcode</label>
                    <input type="number" name="Productcode" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Productcode</label>
                    <input type="image" name="picture" class="form-control form-control-sm">
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