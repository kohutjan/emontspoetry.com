<html lang="en">
<head>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/general.php");?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/fonts.php");?>
  <link rel="stylesheet" href="/css/scroll.css" type="text/css">
</head>
<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/navbar.php");?>

  <!-- POEMS -->
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/poems.php");?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-3 col-xl-3 pt-4 pb-5">
        <?php create_poems_list($_SERVER['DOCUMENT_ROOT'] . "/poetry/leaving/poems.xml");?>
      </div>
      <div class="col-md-9 col-lg-6 col-xl-4 col-scroll">
        <?php create_poems($_SERVER['DOCUMENT_ROOT'] . "/poetry/leaving/poems.xml");?>
      </div>
      <div class="col-lg-3 col-xl-5 pt-4">
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/images_grid_3x3.php");?>
      </div>
    </div>
  </div>
  <!-- POEMS END -->

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/footers/general.php");?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/footers/poetry.php");?>
</body>
</html>
