<html lang="en">
<head>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/general.php");?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/fonts.php");?>
  <link rel="stylesheet" href="/about/about.css" type="text/css">
</head>
<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/navbar.php");?>

  <div class="container-fluid">
    <!-- NEWS -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/news.php");?>
    <?php create_news($_SERVER['DOCUMENT_ROOT'] . "/news/news.xml");?>
    <!-- END NEWS -->
  </div>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/footers/general.php");?>
</body>
</html>
