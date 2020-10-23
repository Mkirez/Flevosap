<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes/head.view.php" ?>
</head>
<body>
<?php include "includes/nav.view.php" ?>

<?php include "includes/header.view.php" ?>
<div class="main-content" style="padding: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3" id="filter_search">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">Soorten sap</div>
                        <div class="card-text">
                            <div class="custom-radio">
                                <label><input type="radio" name="check" onchange="alles();" id="alles"/>Alles</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="radio" name="check" id="appel" onchange="appels();" />appel</label>
                            </div>
                            <div class="custom-radio">
                                <label><input type="radio" name="check" id="peer" onchange="peer();" />peer</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row mb-4" id="products">
                    <?php if (!empty($products)) {
                        foreach ($products as $product) { ?>
                            <div class="col-md-6">
                                <div class="card product-item" data-product_id="<?= $product->getId(); ?>">
                                    <div class="product-image">
                                        <img class="card-img-top"
                                             src="/ProductImage?productId=<?= $product->getId(); ?>"/>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-title texT-right" id="cards-style">
                                                    <p><strong><?= $product->getTitle(); ?></strong></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card-text row">
                                                    <div class="col-md-12">
                                                        <div class="card-text">
                                                            <?= substr($product->getProductOmschrijving(), 0,
                                                                strrpos($product->getProductOmschrijving(), ' ',
                                                                    100 - strlen($product->getProductOmschrijving())));
                                                            ?>.....
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-text" id="cards-style">
                                                            <div class="card-text">
                                                                &euro;<?= $product->getPrijs(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-text" id="cards-style">
                                                            <a href="#" class="float-right"><i
                                                                        class="fa fa-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php include "includes/footer.view.php" ?>
</footer>


<script>
    $("#filter_search").on("change", "input", function () {
        // build_url();


    });


    function alles(){

        
        window.location.href = "/shop";

    }
    function appels(){

        
        window.location.href = "/shop/appels";

    }
    function peer(){

        
        window.location.href = "/shop/peer";

    }
    // function build_url() {

    //     //Fix this shit

    //     alert('hooiu');
    //     var url = "";

    //     $("#filter_search #filter_for").each(function () {
    //         var filter_id = $(this).data("filter_id");
    //         var value = $(this).val();
    //         url += filter_id + "=" + value;
    //     });

    //     window.location.replace("/shop?" + url);
    // }
</script>
</body>
</html>