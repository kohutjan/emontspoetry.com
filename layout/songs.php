<?php
function create_songs_list(string $path_to_xml)
{
  $xml = simplexml_load_file($path_to_xml);

  $counter = 0;
  $songs_list_HTML = '<div id="list-example" class="list-group songs-list">';
  foreach($xml->song as $song)
  {
    $title = (string) $song->title;
    $songs_list_HTML .='<a class="list-group-item list-group-item-action"';
    $songs_list_HTML .='href="#list-item-' . $counter . '">' . $title . '</a>';
    $counter += 1;
  }
  $songs_list_HTML .= '</div>';

  echo $songs_list_HTML;
}

function create_songs(string $path_to_xml)
{
  $xml = simplexml_load_file($path_to_xml);

  $counter = 0;
  $songs_HTML = '<div data-target="#list-example" data-offset="0" class="songs-content songs-font">';
  foreach($xml->song as $song)
  {
    $title = (string) $song->title;
    $video = (string) $song->video;
    $date = (string) $song->date;
    $text = (string) $song->text;
    $text = str_replace(array("\r\n", "\r", "\n"), "<br>", $text);
    $note = (string) $song->note;

    $songs_HTML .= '<h3 id="list-item-' . $counter . '" class="pt-4"></h3>';
    $songs_HTML .= '<div class="responsive-video"><iframe src="' . $video . '" allowfullscreen></iframe></div>';
    $songs_HTML .= '<h3 class="pt-4">' . $title . '</h3>';
    $songs_HTML .= '<p class="poems-font">' . $text . '</p>';
    $songs_HTML .= '<h5>' . $date . '</h5>';
    $songs_HTML .= '<div class="pt-2 pb-5">';
    $songs_HTML .= '<div class="collapse pt-2" id="collapse-' . $counter . '">';
    $songs_HTML .= '</div>';
    $songs_HTML .= '</div>';

    $counter += 1;
  }
  $songs_HTML .= '</div>';

  echo $songs_HTML;
}
?>
