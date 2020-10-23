<div id="footer">
    <ul class="nav text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 footer-link ">
                    <h4>Flevosap</h4>
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">over ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Faq">Veelgestelde vragen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </div>
                <div class="col-md-4 footer-link">
                    <h4>Horeca</h4>
                    <li class="nav-item">
                        <?php if (!isset($_SESSION["loggedIn"])) { ?>
                            <a class="nav-link active" href="/ZakelijkeRegister">Klant worden</a>
                        <?php } ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/onzepartners">Onze Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nieuwsbrief">Nieuwsbrief aanvragen</a>
                    </li>
                </div>
                <div class="col-md-4 footer-link">
                    <h4>Volgs ons op</h4>

                    <li class="nav-item footer-link">
                        <a class="nav-link" href="https://www.linkedin.com/company/vermeulen-food-group/"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/flevosap/?hl=nl"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.facebook.com/Flevosap"><i class="fa fa-facebook"></i></a>
                    </li>
                </div>
            </div>
        </div>
    </ul>
</div>


<script src="/asset/js/jquery.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>
<script src="/asset/js/main.js"></script>