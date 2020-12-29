<html lang="en">
<head>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/general.php");?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/fonts.php");?>
  <link rel="stylesheet" href="/css/thumbnails.css" type="text/css">
</head>
<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/navbar.php");?>

  <!-- RANDOM FACE BACKGROUND -->
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/random_face_background.php");
    create_random_face_background($_SERVER['DOCUMENT_ROOT'] . "/face_background/gallery.xml",
                                  "/face_background/gallery/");
  ?>
  <!-- END RANDOM FACE BACKGROUND -->

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/footers/general.php");?>
  <script src="/js/face_background_offset.js"></script>
</body>
</html>
