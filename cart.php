<?php
require 'inc/head.php';
?>

    <section class="cookies container-fluid">

        <h2>Panier</h2>
        <p>Vos achats</p>
        <table class="cookie">
            <thead>
            <tr>
                <th>Article</th>
                <th>Quantité</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (!isset($_SESSION['username'])) {
                header('Location: login.php');
            }
            ?>
                <?php if (!empty($_COOKIE['panier']['pecanNuts'])) : ?>
                    <tr>
                        <td>Pecan Nuts</td>
                        <td><?= $_COOKIE['panier']['pecanNuts'] ?></td>
                    </tr>
                <?php endif; ?>
                <?php if (!empty($_COOKIE['panier']['chocolateChips'])) : ?>
                    <tr>
                        <td>Chocolate Chips</td>
                        <td><?= $_COOKIE['panier']['chocolateChips'] ?></td>
                    </tr>
                <?php endif; ?>
                <?php if (!empty($_COOKIE['panier']['chocolateCookie'])) : ?>
                    <tr>
                        <td>Chocolate Cookie</td>
                        <td><?= $_COOKIE['panier']['chocolateCookie'] ?></td>
                    </tr>
                <?php endif; ?>
                <?php if (!empty($_COOKIE['panier']['mmsCookies'])) : ?>
                    <tr>
                        <td>M&ms Cookie</td>
                        <td><?= $_COOKIE['panier']['mmsCookies'] ?></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>

<?php require 'inc/foot.php'; ?>


