<html lang="en">
<head>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/general.php");?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/fonts.php");?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/gallery.php");?>
</head>
<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/navbar.php");?>

  <!-- GALLERY -->
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/gallery.php");
    create_gallery($_SERVER['DOCUMENT_ROOT'] . "/photography/others/gallery.xml",
                   $_SERVER['DOCUMENT_ROOT'] . "/photography/others/gallery/");
  ?>
  <!-- END GALLERY -->

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/footers/general.php");?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/footers/gallery.php");?>
</body>
</html>
