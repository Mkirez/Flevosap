<<!doctype html>
<html lang="en">
<?php $title = "Edit User" ?>
<body>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <h2>Edit User <?=$userInfo->getId();?></h2>
            <form action="/users" method="post">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="Title" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Productcode</label>
                    <input type="text" name="Productcode" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Prijs</label>
                    <input type="text" name="Prijsw" class="form-control form-control-sm">
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