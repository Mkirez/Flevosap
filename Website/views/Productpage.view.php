<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes/head.view.php" ?>
</head>
<body>
<?php include "includes/nav.view.php" ?>

<?php include "includes/header.view.php" ?>


<div class="space">
</div>
<main role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3" id="filter_search">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">Soorten sap</div>
                        <div class="card-text">
                            <div class="custom-radio">
                                <label><input type="radio" name="check"/>Alles</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="radio" name="check"/>100%Fruitsap</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="radio" name="check"/>100%Groentesap</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">Smaak</div>
                        <div class="card-text">
                            <div class="custom-radio">
                                <label><input type="radio" name="check"/>Alles</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="radio" name="check"/>Fris</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="radio" name="check"/>Zoet</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">Appel met</div>
                        <div class="card-text" id="filter_for">
                            <div class="custom-checkbox">
                                <label><input type="checkbox" data-filter_id="1" value="1" name="check"/>Aardbei</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="checkbox" data-filter_id="1" value="2" name="check"/>Ananas</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="checkbox" data-filter_id="1" value="3" name="check"/>Perzik</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="checkbox" data-filter_id="1" value="4" name="check"/>100%Groentesap</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="checkbox" data-filter_id="1" value="5"
                                              name="check"/>100%Fruitsap</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-9">
                <?php for ($a = 0; $a < ((count($products) / 2) + ((count($products) % 2) == 0 ? 0 : 1)); $a++) { ?>
                    <div class="row mb-4">
                        <?php for ($b = 0; $b < 2; $b++) { ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <img class="card-img-top"
                                         src="/ProductImage?productId=<?= $products[($a * 2) + $b]->getId(); ?>"/>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-title texT-right" id="cards-style">
                                                    <p><strong><?= $products[($a * 2) + $b]->getTitle(); ?></strong></p>
                                                </div>
                                            </div>
<<<<<<< Updated upstream

                                            <div class="col-md-12">
                                                <div class="card-text">

=======
                                             <div class="col-md-12">
                                                    <div class="card-text"  >
>>>>>>> Stashed changes
                                                    <?= $products[($a * 2) + $b]->getProductOmschrijving(); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
<<<<<<< Updated upstream
                                                <div class="card-text">

                                                    <?= $products[($a * 2) + $b]->getPrijs(); ?>
                                                </div>

                                            </div>
                                            <div class="col-md-6 text-right ">
                                                <div class="card-text" id="cards-style">

=======
                                                <div class="card-text" >
                                                   <?= $products[($a * 2) + $b]->getPrijs(); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-right ">
                                                <div class="card-text" id="cards-style" >
>>>>>>> Stashed changes
                                                    <a href="#"><i class="fa fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php include "includes/footer.view.php" ?>
</footer>

<script src="/asset/js/jquery.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>

<script>
    $("#filter_search").on("change", "input", function () {
        build_url();
    });

    function build_url(){

        //Fix this shit
        var url = "";

        $("#filter_search #filter_for").each(function () {
            var filter_id = $(this).data("filter_id");
            var value = $(this).val();
            url += filter_id + "=" + value;
        });

        window.location.replace("/Productpage?" + url);
    }
</script>
<?php
//echo "<table style='border: solid 1px black;'>";
//echo "<tr><th>Id</th><th>Productnaam</th><th>Productcode</th><th>Prijs</th></tr>";
//
//class TableRows extends RecursiveIteratorIterator {
//    function __construct($it) {
//        parent::__construct($it, self::LEAVES_ONLY);
//    }
//
//    function current() {
//        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
//    }
//
//    function beginChildren() {
//        echo "<tr>";
//    }
//
//    function endChildren() {
//        echo "</tr>" . "\n";
//    }
//}
//
//$servername = "localhost";
//$username = "root";
//$password = "root";
//$dbname = "Flevosapproducts";
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $stmt = $conn->prepare("SELECT id, title, productCode, prijs FROM Products");
//    $stmt->execute();
//
//    // set the resulting array to associative
//    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//
//    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//        echo $v;
//    }
//}
//catch(PDOException $e) {
//    echo "Error: " . $e->getMessage();
//}
//$conn = null;
//echo "</table>";
//?>
</body>
</html>