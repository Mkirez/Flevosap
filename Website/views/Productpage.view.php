<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asset/css/productpageStyle.css">
    <meta charset="UTF-8">
    <title>Product Page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<header>

</header>
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
            <?php for($a = 0; $a < ((count($products)/2) + ((count($products)%2)==0?0:1)); $a++) { ?>
                <div class="row mb-4">
                    <?php for($b = 0; $b < 2; $b++) { ?>
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
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</main>
<footer>

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