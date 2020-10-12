<?php
$title = "Logout";
include "includes/head.view.php";

session_destroy();
?>
<body>
<meta http-equiv="refresh" content="3;url=/" />
<?php include "includes/nav.view.php" ?>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <div class="container-fluid" style="font-family:'Calibri';">
                <h1>U bent nu uitgelogd</h1>

            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.view.php" ?>
</body>
</html>