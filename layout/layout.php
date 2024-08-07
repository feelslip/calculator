<?php include_once 'head.php'; ?>
  <body>  
    <?php include_once 'alt_theme.php'; ?>
    <div class="container-fluid">
      <div class="row">

        <?php 
          if (isset($_SESSION['user_data']) && $page != 'login') {
            include_once 'menu.php';
          }
        ?>
        <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
          <?php pageContent();?>
        </main>
      </div>
    </div>
    <?php include_once 'footer.php';?>
  </body>
</html>