<?php
function create_random_face_background(string $path_to_xml, string $path_to_images)
{
  $xml = simplexml_load_file($path_to_xml);
  $random = array_rand($xml->xpath("image"));
  $image = $xml->image[$random];
  $image_name = (string) $image->name;
  $x = (string) $image->x;
  $y = (string) $image->y;

  $random_face_background_HTML = '<div class="bg"';
  $random_face_background_HTML .= 'style="background-image: url(' . $path_to_images . $image_name . ');';
  $random_face_background_HTML .= ' background-position: ' . $x . ' ' . $y . ';">';
  $random_face_background_HTML .= '</div>';

  echo $random_face_background_HTML;
}

?>
