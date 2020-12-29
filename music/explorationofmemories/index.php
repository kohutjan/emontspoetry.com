<html lang="en">
<head>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/general.php");?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/headers/fonts.php");?>
  <link rel="stylesheet" href="/css/scroll.css" type="text/css">
  <link rel="stylesheet" href="/css/responsive_video.css" type="text/css"
</head>
<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/navbar.php");?>

  <!-- SONGS -->
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/songs.php");?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 pt-4 pb-5">
        <?php create_songs_list($_SERVER['DOCUMENT_ROOT'] . "/music/explorationofmemories/songs.xml");?>
      </div>
      <div class="col-md-9 col-xl-7 col-scroll">
        <div class="row">
          <div class="col-12 pt-5">
            <div class="col text-center d-none d-md-block">
              <h1 style="font-size: 700%; font-family: Special Elite;">Exploration of Memories EP</h1>
            </div>
            <div class="col text-center d-md-none">
              <h1 style="font-size: 500%; font-family: Special Elite;">Exploration of Memories EP</h1>
            </div>
          </div>
          <div class="col-md-6 pb-2">
            <div class="justify poems-font">
              Raw, imperfect, something on the edge between reality and fantasy.
              Such are my deepest memories. I’m not sure if I lived through them
              or if I made them up. Probably a little bit of both and then there
              is the rest of it. The rest is the biggest mystery. It seems like
              certain feelings and thoughts that are dwelling inside your head
              cannot even be yours. When you are looking over vast spaces and
              watching everything round dying because autumn is coming. New end,
              new begging, again. And then you wander in the middle of nowhere.
              No people, no cities. Without any history or any future in you.
              And yet, you can still feel the almost ancient calling when you
              smell the winter air after a year. Time passes by, you are home
              again. Standing in front of a mirror. It’s you again. The oldest,
              the most ungraspable memory of all.
            </div>
          </div>
          <div class="col-md-6">
            <div class="justify poems-font">
              I’ve tried to put my thoughts and feelings about this topic into
              these songs. There is still one (final) missing. Unfortunately,
              I’m too busy to finish it right now, but it is coming. The recording
              process was quite dirty. I have no experience in this field, but
              I’ve tried to keep it real and authentic. So, what you can hear
              is exactly what you would hear if you would sit next to me. One
              voice, one guitar, couple of takes, take the first one with no
              fatal errors. As I was making these songs I kind of started to
              like the imperfect sound of it. In a way it delivers the right
              mood. Yet, I consider these versions to be demos. It is my wish
              that I will record better versions in the future. I’m not sure
              if I stick to the concept of one voice and one guitar yet. But
              everything I’ll do will support the mood further.
            </div>
          </div>
        </div>
        <div class="row">
          <?php create_songs($_SERVER['DOCUMENT_ROOT'] . "/music/explorationofmemories/songs.xml");?>
        </div>
      </div>
    </div>
  </div>
  <!-- SONGS END -->

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/layout/footers/general.php");?>
  <script src="/js/scroll_offset.js"></script>
</body>
</html>
