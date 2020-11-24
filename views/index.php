<?php
  //ini adalah file init untuk memanggil koneksi dan fungsi
  require_once('../init/init.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    //Memanggil File Header
    require_once('../templates/header.php'); ?>
  </head>
  <body>
    <?php
    //Memanggil File Navbar
    require_once('../templates/navbar.php');
    ?>
    <div id="wrapper">
      <?php
      //Memanggil File Sidebar
      require_once('../templates/sidebar.php');
      ?>
      <div class="main">
        <div class="main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <?php
                //Memanggil File Body dengan Routes
                require_once('../routes/routes.php');
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer>
  <?php
  //Memanggil File Footer
  require_once('../templates/footer.php'); ?>
  </footer>
</html>
