<?php

function create_favourites(string $path_to_xml)
{
  $xml = simplexml_load_file($path_to_xml);
  $favourites = array();
  foreach($xml->favourite as $favourite)
  {
    $link = (string) $favourite->link;
    $name = (string) $favourite->name;
    $image = (string) $favourite->image;
    $tuple = array($link, $name, $image);
    array_push($favourites, $tuple);
  }

  $rand_favourite_indexes = array_rand($favourites, 6);

  $favourites_HTML = '<div class="row g-0">';
  foreach($rand_favourite_indexes as $index)
  {
    $favourite = $favourites[$index];
    $link = $favourite[0];
    $name = $favourite[1];
    $image = $favourite[2];

    $favourites_HTML .= '<div class="col-md-2 col-4">';
    $favourites_HTML .= '<a href="' . $link . '" target="_blank">';
    $favourites_HTML .= '<figure class="figure m-1"';
    $favourites_HTML .= ' data-bs-toggle="tooltip" data-bs-placement="top"';
    $favourites_HTML .= ' title="' . $name . '">';
    $favourites_HTML .= '<img src="' . $image . '" class="figure-img img-fluid m-0" alt="' . $name . '">';
    $favourites_HTML .= '</figure></a></div>';
  }
  $favourites_HTML .= '</div>';

  echo $favourites_HTML;
}
?>
