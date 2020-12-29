<html lang="en">
<head>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/general.php");?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/fonts.php");?>
  <link rel="stylesheet" href="/css/thumbnails.css" type="text/css">
</head>
<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/navbar.php");?>

  <!-- THUBNAILS -->
  <div class="container-fluid">
    <div class="row pt-4">
      <div class="col-md-3">
        <a href="leaving">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/searching_low.png" class="figure-img img-fluid rounded" alt="Leaving">
            <figcaption class="figure-caption text-center text-dark"><h3>Leaving</h3></figcaption>
          </figure>
        </a>
      </div>
      <div class="col-md-3">
        <a href="snysenavrati">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/snysenavrati_low.png" class="figure-img img-fluid rounded" alt="Sny se navrátí">
            <figcaption class="figure-caption text-center text-dark"><h3>Sny se navrátí</h3></figcaption>
          </figure>
        </a>
      </div>
      <div class="col-md-3">
        <a href="domov">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/domov_low.png" class="figure-img img-fluid rounded" alt="Domov">
            <figcaption class="figure-caption text-center text-dark"><h3>Domov</h3></figcaption>
          </figure>
        </a>
      </div>
      <div class="col-md-3">
        <a href="ihavetobecome">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/ihavetobecome_low.png" class="figure-img img-fluid rounded" alt="I Have to Become">
            <figcaption class="figure-caption text-center text-dark"><h3>I Have to Become</h3></figcaption>
          </figure>
        </a>
      </div>
    </div>
  </div>
  <!-- END THUMBNAILS -->

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/footers/general.php");?>
</body>
</html>
