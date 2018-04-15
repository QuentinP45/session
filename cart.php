<?php
session_start();
if(!isset($_SESSION['loginname'])) {
    header('Location: login.php');
} else {
    require 'inc/head.php';
    ?>
    <section class="cookies container-fluid">
        <div class="row">
       <?php /* NE PAS EFFACER (début) */

       if (!isset($_SESSION['cart'])) {
           //si je n'ai pas de session panier
           $_SESSION['cart'] = [];
       }
       if (isset($_POST['submit'])) {
           // si j'ai un submit

               $_SESSION['cart'][] = $_POST;
       }

       foreach ($_SESSION['cart'] as $info) { ?>

           <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="<?php if (isset($info['cookImage'])) { echo $info['cookImage'];}?>" alt="<?php if (isset($info['cookAltImage'])) { echo $info['cookAltImage'];}?>" class="img-responsive">
                <figcaption class="caption">
                    <h3><?php if (isset($info['cookName'])) { echo $info['cookName'];}?></h3>
                    <p><?php if (isset($info['cookedBy'])) { echo $info['cookedBy'];}?></p>
                </figcaption>
            </figure>
        </div>

            <?php
       }





       /* NE PAS EFFACER (fin) */ ?>
        </div>
    </section>
    <?php
    require 'inc/foot.php';
}
?>











<!--if (isset($_POST['submit'])) {
$_SESSION['cookImage'] = $_POST['cookImage'];
$_SESSION['cookAltImage'] = $_POST['cookAltImage'];
$_SESSION['cookName'] = $_POST['cookName'];
$_SESSION['cookedBy'] = $_POST['cookedBy'];
}-->




<!--<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="<?php /*if (isset($_SESSION['cookImage'])) { echo $_SESSION['cookImage'];}*/?>" alt="<?php /*if (isset($_SESSION['cookAltImage'])) { echo $_SESSION['cookAltImage'];}*/?>" class="img-responsive">
                <figcaption class="caption">
                    <h3><?php /*if (isset($_SESSION['cookName'])) { echo $_SESSION['cookName'];}*/?></h3>
                    <p><?php /*if (isset($_SESSION['cookedBy'])) { echo $_SESSION['cookedBy'];}*/?></p>
                </figcaption>
            </figure>
        </div>
    </div>
</section>-->
