<?php
function create_poems_list(string $path_to_xml)
{
  $xml = simplexml_load_file($path_to_xml);

  $counter = 0;
  $poems_list_HTML = '<div id="list-example" class="list-group poems-list">';
  foreach($xml->poem as $poem)
  {
    $title = (string) $poem->title;
    $poems_list_HTML .='<a class="list-group-item list-group-item-action"';
    $poems_list_HTML .='href="#list-item-' . $counter . '">' . $title . '</a>';
    $counter += 1;
  }
  $poems_list_HTML .= '</div>';

  echo $poems_list_HTML;
}

function create_poems(string $path_to_xml)
{
  $xml = simplexml_load_file($path_to_xml);

  $counter = 0;
  $poems_HTML = '<div data-target="#list-example" data-offset="0" class="songs-content">';
  foreach($xml->poem as $poem)
  {
    $title = (string) $poem->title;
    $date = (string) $poem->date;
    $text = (string) $poem->text;
    $text = str_replace(array("\r\n", "\r", "\n"), "<br>", $text);
    $note = (string) $poem->note;

    $poems_HTML .= '<h3 class="pt-4" id="list-item-' . $counter . '">' . $title . '</h3>';
    $poems_HTML .= '<p class="poems-font">' . $text . '</p>';
    $poems_HTML .= '<h5>' . $date . '</h5>';
    $poems_HTML .= '<div class="pt-2 pb-5">';
    $poems_HTML .= '<a class="text-muted" data-bs-toggle="collapse"';
    $poems_HTML .= 'data-bs-target="#collapse-' . $counter . '" role="button"';
    $poems_HTML .= 'aria-expanded="false" aria-controls="collapse-' . $counter . '">';
    $poems_HTML .= '<i class="far fa-comment-alt fa-2x"></i>';
    $poems_HTML .= '</a>';
    $poems_HTML .= '<div class="collapse pt-2" id="collapse-' . $counter . '">';
    $poems_HTML .= '<div class="card card-body">' . $note . '</div>';
    $poems_HTML .= '</div>';
    $poems_HTML .= '</div>';

    $counter += 1;
  }
  $poems_HTML .= '</div>';

  echo $poems_HTML;
}
?>
