<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}
$totalOrder= $_SESSION['pecan'] + $_SESSION['chips'] + $_SESSION['cookie'] + $_SESSION['m&m'];
require 'inc/head.php';
?>
    <h3 class="total text-center">you ordered for a total of <?= $totalOrder ?> Product(s)</h3>
    <section class="cookies container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="cookiesCards thumbnail text-center">
                    <img src="assets/img/product-46.jpg" alt="cookies chocolate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p class="Order">You ordered <?= $_SESSION['pecan']; ?></p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="cookiesCards thumbnail text-center">
                    <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate chips</h3>
                        <p class="Order">You ordered <?= $_SESSION['chips']; ?></p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="cookiesCards thumbnail text-center">
                    <img src="assets/img/product-58.jpg" alt="cookies chocolate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate cookie</h3>
                        <p class="Order">You ordered <?= $_SESSION['cookie']; ?></p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="cookiesCards thumbnail text-center">
                    <img src="assets/img/product-32.jpg" alt="cookies chocolate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>M&M's&copy; cookies</h3>
                        <p class="Order">You ordered <?= $_SESSION['m&m']; ?></p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>