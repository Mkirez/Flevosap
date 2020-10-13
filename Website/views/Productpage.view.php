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
        <div class="col-md-3 ">
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
                    <div class="card-text">
                        <div class="custom-checkbox">
                            <label><input type="checkbox" name="check"/>Aardbei</label>
                        </div>
                        <div class="custom-radio">
                            <label><input type="checkbox" name="check"/>Ananas</label>
                        </div>
                        <div class="custom-radio">
                            <label><input type="checkbox" name="check"/>Perzik</label>
                        </div>
                        <div class="custom-radio">
                            <label><input type="checkbox" name="check"/>100%Groentesap</label>
                        </div>
                        <div class="custom-radio">
                            <label><input type="checkbox" name="check"/>100%Fruitsap</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
<<<<<<< Updated upstream

                <?php for($a = 0; $a < ((count($products)/2) + ((count($products)%2)==0?0:1)); $a++) { ?>
                    <div class="row mb-4">
                        <?php for($b = 0; $b < 2; $b++) { ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <img class="card-img-top" src="/ProductImage?productId=<?= $products[($a * 2) + $b]->getId();?>" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-title texT-right" id="cards-style" >
                                                    <p><strong><?= $products[($a * 2) + $b]->getTitle(); ?></strong></p>
                                                </div>
                                            </div>
                                            
                                             <div class="col-md-12">
                                                    <div class="card-text"  >

                                                    <?= $products[($a * 2) + $b]->getProductOmschrijving(); ?>
                                                    </div>
                                            </div>

                                            <div class="col-md-6 ">
                                                <div class="card-text" >

                                                   <?= $products[($a * 2) + $b]->getPrijs(); ?>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6 text-right ">
                                                <div class="card-text" id="cards-style" >

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
            <?php for($a = 0; $a < ((count($products)/2) + ((count($products)%2)==0?0:1)); $a++) { ?>
                <div class="row mb-4">
                    <?php for($b = 0; $b < 2; $b++) { if ( isset($products[($a * 2) + $b] )){ ?>
                        <div class="col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="/ProductImage?productId=<?= $products[($a * 2) + $b]->getId();?>" />
                                <div class="card-body">
                                    <div class="card-title"><?= $products[($a * 2) + $b]->getTitle(); ?></div>
                                    <div class="card-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
</main>
<footer>
    <?php include "includes/footer.view.php" ?>
</footer>
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