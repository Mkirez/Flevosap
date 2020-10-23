<!doctype html>
<html lang="en">
<?php $title = "Home" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>
<section id="page-title">
    <div class="container clearfix">
        <h1>Checkout</h1>
    </div>
</section>
<div class="container clearfix" id="checkout">
    <form class="form-horizontal" method="POST" id="checkout_form" action="/checkout">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table cart">
                    <thead>
                    <tr>
                        <th class="cart-product-name">Product</th>
                        <th class="cart-product-quantity">Quantity</th>
                        <th class="cart-product-subtotal">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cart->getProducts() as $product) { ?>
                        <tr class="cart_item">
                            <td class="cart-product-name">
                                <a href="#"><?= (new ProductModel())->find($product->getProductId())->getTitle(); ?></a>
                            </td>
                            <td class="cart-product-quantity">
                                <div class="quantity clearfix">
                                    <?= $product->getTotal() ?>
                                </div>
                            </td>
                            <td class="cart-product-subtotal">
                                <span class="amount">&euro;<?= number_format($product->getPrice() * $product->getTotal(), 2, ",", "."); ?></span>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="content-wrap">
                    <h3>Totaal</h3>
                    <div class="table-responsive">
                        <table class="table cart">
                            <tbody>
                            <tr class="cart_item">
                                <td class="border-top-0 cart-product-name">
                                    <strong>Winkelmand Subtotal</strong>
                                </td>
                                <td class="border-top-0 cart-product-name">
                                    <span class="amount">&euro;<?= $cart->getPriceTotal(); ?></span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="cart-product-name">
                                    <strong>Bezorging</strong>
                                </td>
                                <td class="cart-product-name">
                                    <span class="amount">Gratis bezorging</span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="cart-product-name">
                                    <strong>Totaal</strong>
                                </td>
                                <td class="cart-product-name">
                                    <span class="amount color lead"><strong>&euro;<?= $cart->getPriceTotal(); ?></strong></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="content-wrap">
                    <h3>Shipping Address</h3>
                    <div class="form-error" style="display: none;">
                        <p style="color: red;">Niet alle velden zijn ingevuld.</p>
                    </div>
                    <div class="row">
                        <div class="w-100"></div>
                        <div class="col-8 form-group">
                            <label for="street">Straat:</label>
                            <input type="text" id="street" name="street" value=""
                                   class="sm-form-control">
                        </div>
                        <div class="col-4 form-group">
                            <label for="house_nr">Huis NR:</label>
                            <input type="text" id="house_nr" name="house_nr" value=""
                                   class="sm-form-control">
                        </div>
                        <div class="col-12 form-group">
                            <label for="zipcode">Postcode</label>
                            <input type="text" id="zipcode" name="zipcode" value=""
                                   class="sm-form-control">
                        </div>
                        <div class="col-12 form-group">
                            <label for="city">Plaats</label>
                            <input type="text" id="city" name="city" value=""
                                   class="sm-form-control">
                        </div>
                    </div>
                    <a href="#" id="proceed_checkout" class="button button-3d float-right">Place Order</a>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include "includes/footer.view.php" ?>

<script>
    $("#proceed_checkout").on("click", function () {
        var street = $("#street").val();
        var house_nr = $("#house_nr").val();
        var zipcode = $("#zipcode").val();
        var city = $("#city").val();

        if(street !== "" && house_nr !== ""  && zipcode !== "" && city !== ""){
            $("#checkout_form").submit();
        }else{
            $(".form-error").css({"display" : "block"});
        }

    });
</script>
</body>
</html>