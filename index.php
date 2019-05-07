<?php
session_start();
if (isset($_GET['add_to_cart'])) {
    if ($_GET['add_to_cart'] == 46) {
        $_SESSION['pecan'] ++;
    } elseif ($_GET['add_to_cart'] == 36) {
        $_SESSION['chips'] ++;
    } elseif ($_GET['add_to_cart'] == 58) {
        $_SESSION['cookie'] ++;
    } elseif ($_GET['add_to_cart'] == 32) {
        $_SESSION['m&m'] ++;
    }
} else {
    $_SESSION['pecan'] = $_SESSION['chips'] = $_SESSION['cookie'] = $_SESSION['m&m'] = 0;
}
require 'inc/head.php';
?>

    <section class="cookies container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p>Cooked by Cécile !</p>
                        <a  href="?add_to_cart=46" class="addBtn">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate chips</h3>
                        <p>Cooked by Yonis !</p>
                        <a  href="?add_to_cart=36" class="addBtn">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate cookie</h3>
                        <p>Cooked by Emilie !</p>
                        <a  href="?add_to_cart=58" class="addBtn">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>M&M's&copy; cookies</h3>
                        <p>Cooked by Loki !</p>
                        <a  href="?add_to_cart=32" class="addBtn">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>