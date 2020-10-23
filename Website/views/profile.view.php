<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile page</title>
    <?php include "includes/head.view.php" ?>
</head>
<body>
<?php include "includes/nav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1>Profile pagina</h1>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-6 form-group">
            <p>
                <b>Gebruikersnaam</b><br>
                <?= $profile["gebruikersnaam"]; ?>
            </p>
        </div>
        <div class="col-md-6 form-group">
            <p>
                <b>Type</b><br>
                <?php if($profile["type"] == 1){ ?>
                    Gebruiker
                <?php }else{ ?>
                    Zakelijk
                <?php } ?>
            </p>
        </div>
        <div class="col-md-12" style="margin-bottom: 40px;">
            <h3>Orders</h3>
            <table id="Usertable" border="1" class="table-sm table-striped table-bordered" style="width:100%; height:60px;">
                <tr>
                    <th style="white-space: nowrap; width: 80px;height: 50px; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        #
                    </th>
                    <th style="white-space: nowrap;height: 50px; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        City
                    </th>
                    <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        Status
                    </th>
                    <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        Created at
                    </th>
                </tr>
                <?php foreach ($orders as $order) { ?>
                    <tr id="user_<?= $order->getId(); ?>">
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            <?= $order->getId(); ?>
                        </td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            <?= $order->getCity(); ?>
                        </td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            <?php if($order->getStatus() == 1){ ?>
                                Nieuwe order
                            <?php }else{ ?>
                                Verstuurd
                            <?php } ?>
                        </td>
                        <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                            <?= date("d-m-Y",strtotime($order->getCreatedAt())); ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>