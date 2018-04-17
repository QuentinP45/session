<?php
session_start();
if(!isset($_SESSION['loginname'])) {
    header('Location: login.php');
} else {
    require 'inc/head.php';
    ?>
    <section class="cookies container-fluid">
        <div class="row">
       <?php
       if (!isset($_SESSION['cart'])) {
           $_SESSION['cart'] = [];
       }
       if (isset($_POST['submit'])) {
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
       ?>
        </div>
        <?php
        if (isset($_SESSION['loginname'])) { ?>
            <div>
                <form method="POST" action="login.php">
                    <button type="submit" class="btn btn-warning btn-lg btn-block" name="disconnect">Déconnexion</button>
                </form>
            </div>
            <?php
        }
        ?>
    </section>
    <?php
    require 'inc/foot.php';
}
?>