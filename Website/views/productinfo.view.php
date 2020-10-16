<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php $title = "Product Info" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<?php foreach($productInfoData as $productInfoItem){ ?>
<div id="productView">
    <img alt="Flevosap logo" id="logoSite" src="../asset/img/Flevosap-logo-footer.png">
    <img alt="Product foto" id="productPicture" src="<?php $productInfoItem->getAfbeelding() ?>">
</div>

<div id="productInfoBox">
    <div id="productTitle">
        <h2> <?php $productInfoItem->getTitle() ?> </h2>
    </div>
    <div id="productDescription">
        <p><?php $productInfoItem->getDescription() ?></p>
    </div>
    <div id="addToCart">
        <button>Voeg toe aan winkelmandje</button>
    </div>
    <br>
    <div id="availableAtStores">
        <table>
            <tr>ah </tr>
            <tr>jumbo </tr>
            <tr>dirk </tr>
            <tr>plus </tr>
            <tr>dekamarkt </tr>
            <tr>deen </tr>
        </table>
    </div>
    <br>
    <div>
        <table id="nutritiveValues">
            <tr>
                <th>Voedingswaarde</th>
                <th>per 100 ml</th>
            </tr>
            <tr>
                <td>Energie</td>
                <td></td>
            </tr>
            <tr>
                <td>Vetten</td>
                <td></td>
            </tr>
            <tr>
                <td>Waarvan verzadigd</td>
                <td></td>
            </tr>
            <tr>
                <td>Koolhydraten</td>
                <td></td>
            </tr>
            <tr>
                <td>Waarvan suikers</td>
                <td></td>
            </tr>
            <tr>
                <td>Eiwitten</td>
                <td></td>
            </tr>
            <tr>
                <td>Zout</td>
                <td></td>
            </tr>
        </table>
    </div>
</div>
<?php } ?>

<?php include "includes/footer.view.php" ?>
</body>
</html>