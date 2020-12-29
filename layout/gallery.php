<?php
function create_gallery(string $path_to_xml, string $path_to_images)
{
  $xml = simplexml_load_file($path_to_xml);
  $image_name_to_height_width = array();
  foreach($xml->row as $row)
  {
    foreach($row->image_name as $image_name)
    {
      $image_name = trim((string) $image_name);
      $image_path = $path_to_images . $image_name;
      list($w, $h) = getimagesize($image_path);
      $image_name_to_height_width[$image_name] = array($h, $w);
    }
  }

  $gallery_HTML = '';
  $gallery_HTML .= '<div id=links class=gallery-container>';
  foreach($xml->row as $row)
  {
    $smallest_height = get_smallest_height($row->image_name, $image_name_to_height_width);
    $final_imgs_width = get_final_imgs_width($row->image_name, $smallest_height, $image_name_to_height_width);
    $gallery_HTML .= '<div class="gallery-row d-flex flex-row">';
    foreach($final_imgs_width as $index => $final_width)
    {
      $image_name = trim((string) $row->image_name[$index]);
      $image_path = 'gallery/' . $image_name;
      $gallery_HTML .= '<div style="width: ' . (string) ($final_width * 100) . '%; height: auto;">';
      $gallery_HTML .= '<a href=' . $image_path . '>';
      $gallery_HTML .= '<img class="gallery-img lazy img-fluid" data-src=' . $image_path . '></img>';
      $gallery_HTML .= '</a>';
      $gallery_HTML .= '</div>';
    }
    $gallery_HTML .= '</div>';
  }
  $gallery_HTML .= '</div>';

  echo $gallery_HTML;
}


function get_smallest_height(SimpleXMLElement $image_names, array $image_name_to_height_width)
{
  $smallest_height = 100000;
  foreach($image_names as $image_name)
  {
    $image_name = trim((string) $image_name);
    $actual_height = $image_name_to_height_width[$image_name][0];
    if ($actual_height < $smallest_height)
    {
      $smallest_height = $actual_height;
    }
  }
  return $smallest_height;
}


function get_final_imgs_width(SimpleXMLElement $image_names, int $smallest_height,
                              array $image_name_to_height_width)
{
  $prep_imgs_width = [];
  foreach($image_names as $image_name)
  {
    $image_name = trim((string) $image_name);
    list($h, $w) = $image_name_to_height_width[$image_name];
    array_push($prep_imgs_width, $w / ($h / $smallest_height));
  }
  $prep_width_sum = array_sum($prep_imgs_width);
  $final_imgs_width = [];
  foreach ($prep_imgs_width as $prep_width)
  {
    array_push($final_imgs_width, $prep_width / $prep_width_sum);
  }
  return $final_imgs_width;
}
?>
