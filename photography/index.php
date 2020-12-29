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
        <a href="people">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/people.jpg" class="figure-img img-fluid rounded" alt="People">
            <figcaption class="figure-caption text-center text-dark"><h3>People</h3></figcaption>
          </figure>
        </a>
      </div>
      <div class="col-md-3">
        <a href="landscape">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/landscape.jpg" class="figure-img img-fluid rounded" alt="Landscape">
            <figcaption class="figure-caption text-center text-dark"><h3>Landscape</h3></figcaption>
          </figure>
        </a>
      </div>
      <div class="col-md-3">
        <a href="architecture">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/architecture.jpg" class="figure-img img-fluid rounded" alt="Architecture">
            <figcaption class="figure-caption text-center text-dark"><h3>Architecture</h3></figcaption>
          </figure>
        </a>
      </div>
      <div class="col-md-3">
        <a href="experimental">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/experimental.jpg" class="figure-img img-fluid rounded" alt="Experimental">
            <figcaption class="figure-caption text-center text-dark"><h3>Experimental</h3></figcaption>
          </figure>
        </a>
      </div>
    </div>
    <div class="row pt-3 pb-2 mt-5" style="background-color: #ededed;">
      <div class="col text-center d-none d-md-block">
        <h1 style="font-size: 800%; font-family: Cabin Sketch;">Projects</h1>
      </div>
      <div class="col text-center d-md-none">
        <h1 style="font-size: 500%; font-family: Cabin Sketch;">Projects</h1>
      </div>
    </div>
    <div class="row pt-4">
      <div class="col-md-3">
        <a href="casual_lives">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/casual_lives.jpg" class="figure-img img-fluid rounded" alt="Casual Lives">
            <figcaption class="figure-caption text-center text-dark"><h3>Casual Lives</h3></figcaption>
          </figure>
        </a>
      </div>
    </div>
    <div class="row pt-3 pb-2 mt-5" style="background-color: #ededed;">
      <div class="col text-center d-none d-md-block">
        <h1 style="font-size: 800%; font-family: Cabin Sketch;">&nbsp;</h1>
      </div>
      <div class="col text-center d-md-none">
        <h1 style="font-size: 500%; font-family: Cabin Sketch;">&nbsp;</h1>
      </div>
    </div>
    <div class="row pt-4">
      <div class="col-md-3">
        <a href="others">
          <figure class="figure border border-secondary border-3 rounded p-2">
            <img src="thumbnails/others.jpg" class="figure-img img-fluid rounded" alt="Others">
            <figcaption class="figure-caption text-center text-dark"><h3>Others</h3></figcaption>
          </figure>
        </a>
      </div>
    </div>
  </div>
  <!-- END THUMBNAILS -->

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/footers/general.php");?>
</body>
</html>
