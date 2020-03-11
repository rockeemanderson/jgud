
<?php
$title = 'Gallery';
$banner = '';
require_once 'includes/header.php'; 
?>


<section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" >
        <?php require 'album/album1.php' ?>
        </div>

        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Peak Trip 2013</h2>
          <p class="lead mb-0">Weh yuh a wait pon!? (what are you waiting on!?)</p>
        </div>
      </div><br>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img"> <?php require 'album/album2.php' ?> </div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Sights and Views</h2>
          <p class="lead mb-0">Weh yuh a wait pon!? (what are you waiting on!?)</p>
        </div>
      </div><br>
      <div class="col-lg-6 order-lg-2 text-white showcase-img" >
          <iframe width="656" height="492" src="https://www.youtube.com/embed/VgGNNN9L-vU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>

        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Jus Guh Up Deh</h2>
          <p class="lead mb-0">Weh yuh a wait pon!? (what are you waiting on!?)</p>
        </div></div>
      </div>
    </div>
  </section>






<?php include_once 'includes/footer.php'?>