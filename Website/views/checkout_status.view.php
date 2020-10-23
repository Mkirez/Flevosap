<!doctype html>
<html lang="en">
<?php $title = "Home" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<div class="main-content">
    <div class="container">
        <div class="wrapper-home">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="inner">
                        <h2><strong><?= $status[0]; ?></strong></h2>
                        <p>
                            <?= $status[1]; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>
