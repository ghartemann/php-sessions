<?php

session_start();
require 'inc/head.php';
require 'inc/data/products.php';

// On teste si la variable de session existe et contient une valeur
if (empty($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

$selectedCookies[] = $catalog[$_SESSION['cookie_id']];
?>

<p>Cookies sélectionnés</p>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
            <?php
            if (isset($_SESSION['cookie_id'])) {
                foreach ($selectedCookies as $selectedCookie) { ?>
                    <li>
                        <p><?= $selectedCookie['name'] ?></p>
                        <img src="assets/img/product-<?= $_SESSION['cookie_id'] ?>.jpg">
                    </li>

            <?php }
            }
            ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>