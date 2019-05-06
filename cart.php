<?php
session_start();
require 'inc/head.php'; ?>
    <section class="cookies container-fluid">
        <div class="row">
            <?php
            if(isset($_SESSION["user"]) && isset($_GET["basket"])) {
                unset($_SESSION["basket"]);
                header("Location: /cart.php");
            }
            echo '<div class="container">
                <div class="row">
                  <div class="col-12 text-center">
              ';
            if(isset($_SESSION["user"]) && isset($_SESSION["basket"])) {
                if(count($_SESSION["basket"]) === 0) {
                    echo 'votre panier est vide !!';
                } else {
                    echo 'Votre panier <br>';
                    for($i=0;$i<count($_SESSION["basket"]);$i++) {
                        echo $_SESSION["basket"][$i].'<br>';
                    }
                }
            }
            echo '</div>
                </div>
              </div>
              ';
            if(count($_SESSION["basket"]) > 0) {
                echo '<div class="container mt-5">
                <div class="row">
                  <div class="col-12 text-center">
                    <a href="?basket=empty" class="btn btn-primary">vider le panier</a>
                  </div>
                </div>
              </div>';
            }
            ?>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>