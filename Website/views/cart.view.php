<!doctype html>
<html lang="en">
<?php $title = "Home" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1>Winkelmand</h1>
    </div>
</section>
<div class="container">
    <form method="POST" id="cart_form" action="/cart/update">
        <table class="table cart mb-5">
            <thead>
            <tr>
                <th class="cart-product-remove">&nbsp;</th>
                <th class="cart-product-thumbnail">&nbsp;</th>
                <th class="cart-product-name">Product</th>
                <th class="cart-product-price">Unit Price</th>
                <th class="cart-product-quantity">Quantity</th>
                <th class="cart-product-subtotal">Total</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cart->getProducts() as $product) { ?>
                <tr class="cart_item">
                    <td class="cart-product-remove">
                        <a href="cart/remove?id=<?= $product->getProductId(); ?>" class="remove"
                           title="Remove this item"><i class="fa fa-trash"></i></a>
                    </td>

                    <td class="cart-product-thumbnail">
                        <a href="#"><img width="64" height="64"
                                         src="/ProductImage?productId=<?= $product->getProductId(); ?>"
                                         alt="Pink Printed Dress"></a>
                    </td>

                    <td class="cart-product-name">
                        <a href="/product/info?id=<?= $product->getProductId(); ?>">
                            <?= (new ProductModel())->find($product->getProductId())->getTitle(); ?>
                        </a>
                    </td>

                    <td class="cart-product-price">
                        <span class="amount">&euro;<?= number_format($product->getPrice(), 2, ",", "."); ?></span>
                    </td>

                    <td class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input type="text"
                                   name="quantity[<?= $product->getProductId(); ?>]"
                                   value="<?= $product->getTotal() ?>" class="qty">
                            <input type="button" value="+" class="plus">
                        </div>
                    </td>

                    <td class="cart-product-subtotal">
                        <span class="amount">&euro;<?= number_format($product->getPrice() * $product->getTotal(), 2, ",", "."); ?></span>
                    </td>
                </tr>
            <?php } ?>


            <tr class="cart_item">
                <td colspan="5" class="cart-total">
                    <div class="row justify-content-between py-2 float-right">
                        <span class="amount">Totaal</span>
                    </div>
                </td>
                <td class="cart-product-total">
                    <div class="total">
                        <span class="amount">&euro;<?= $cart->getPriceTotal(); ?></span>
                    </div>
                </td>
            </tr>

            <tr class="cart_item">
                <td colspan="6">
                    <div class="row justify-content-between py-2 float-right">
                        <a href="#" id="update_cart" class="button button-3d">Update Cart</a>
                        <a href="/checkout" class="button button-3d float-right">Proceed to Checkout</a>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>
    </form>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>