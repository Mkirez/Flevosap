<?php
$title = "Logout";
include "includes/head.view.php";

session_destroy();
?>
<style>
    h1 {text-align: center;}
    p {text-align: center;}
    div {text-align: center;}
</style>
<body>
<meta http-equiv="refresh" content="3;url=/" />
<?php include "includes/nav.view.php" ?>
<div class="container" style="align-content: center">
<section class="body">
    <div class="align-content-lg-center">
            <div>
                <h1>U bent nu uitgelogd</h1>
            </div>
    </div>
</section>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>