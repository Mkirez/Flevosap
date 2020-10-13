
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding">
                <nav class="navbar navbar-expand-lg navbar-light bg-color-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <div class="mx-auto logo-header">
                            <a href="">
                                <img src="../../asset/img/logo-headerV3.png" >
                            </a>
                            

                        </div>
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/shop">Shop</a>
                                </li>
                            <?php } ?>

                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>

                            <?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/logout">Logout</a>
                                </li>
                            <?php }else{ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">Register</a>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
