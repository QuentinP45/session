<?php
session_start();
require 'inc/head.php';?>
<section class="cookies container-fluid" xmlns="http://www.w3.org/1999/html">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <form method="POST" action="cart.php">
            <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
              <input type="hidden" name="cookImage" value="assets/img/product-46.jpg"/>
              <input type="hidden" name="cookAltImage" value="cookies choclate chips"/>
            <figcaption class="caption">
              <h3>Pecan nuts</h3>
                <input type="hidden" name="cookName" value="Pecan nuts"/>
              <p>Cooked by Penny !</p>
                <input type="hidden" name="cookedBy" value="Cooked by Penny !"/>
              <button class="btn btn-primary" type="submit" name="submit"</button>
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </figcaption>
        </form>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
          <form method="POST" action="cart.php">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
              <input type="hidden" name="cookImage" value="assets/img/product-36.jpg"/>
              <input type="hidden" name="cookAltImage" value="cookies choclate chips"/>
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
            <input type="hidden" name="cookName" value="Chocolate chips"/>
          <p>Cooked by Bernadette !</p>
            <input type="hidden" name="cookedBy" value="Cooked by Bernadette !"/>
            <button class="btn btn-primary" type="submit" name="submit"</button>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
        </figcaption>
          </form>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
          <form method="POST" action="cart.php">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
              <input type="hidden" name="cookImage" value="assets/img/product-58.jpg"/>
              <input type="hidden" name="cookAltImage" value="cookies choclate chips"/>
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
            <input type="hidden" name="cookName" value="Chocolate cookie"/>
          <p>Cooked by Bernadette !</p>
            <input type="hidden" name="cookedBy" value="Cooked by Bernadette !"/>
            <button class="btn btn-primary" type="submit" name="submit"</button>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
        </figcaption>
          </form>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
          <form method="POST" action="cart.php">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
              <input type="hidden" name="cookImage" value="assets/img/product-32.jpg"/>
              <input type="hidden" name="cookAltImage" value="cookies choclate chips"/>
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
            <input type="hidden" name="cookName" value="M&M's&copy; cookies"/>
          <p>Cooked by Penny !</p>
            <input type="hidden" name="cookedBy" value="Cooked by Penny !"/>
            <button class="btn btn-primary" type="submit" name="submit"</button>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
        </figcaption>
          </form>
      </figure>
    </div>
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
<?php require 'inc/foot.php'; ?>

