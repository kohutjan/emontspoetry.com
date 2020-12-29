<?php

function create_news(string $path_to_xml)
{
  $xml = simplexml_load_file($path_to_xml);

  $news_HTML = '';
  foreach($xml->new as $new)
  {
    $title = (string) $new->title;
    $cover = (string) $new->cover;
    $year = (string) $new->year;
    $month = (string) $new->month;
    $day = (string) $new->day;
    $html = (string) $new->html;
    $html = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "<br><br>", $html);


    $news_HTML .= '<div class="row pb-3">';
    $news_HTML .= '<div class="col-xl-2"></div>';
    $news_HTML .= '<div class="col-xl-8">';
    $news_HTML .= '<img src="' . $cover . '" class="img-fluid" alt="' . $year .'_' . $month . '_' . $day .'">';
    $news_HTML .= '</div>';
    $news_HTML .= '<div class="col-xl-2"></div>';
    $news_HTML .= '</div>';

    $news_HTML .= '<div class="row">';
    $news_HTML .= '<div class="col-xl-2"></div>';
    $news_HTML .= '<div class="col-xl-8">';
    $news_HTML .= '<div class="text-center">';
    $news_HTML .= '<h3>' . $title . '</h3>';
    $news_HTML .= '</div>';
    $news_HTML .= '</div>';
    $news_HTML .= '<div class="col-xl-2"></div>';
    $news_HTML .= '</div>';

    $news_HTML .= '<div class="row pb-3">';
    $news_HTML .= '<div class="col-xl-2"></div>';
    $news_HTML .= '<div class="col-xl-8">';
    $news_HTML .= '<div class="text-center text-secondary">';
    $news_HTML .= '—&nbsp;&nbsp;' . $day . '. ' . $month . '. ' . $year . '&nbsp;&nbsp;—';
    $news_HTML .= '</div>';
    $news_HTML .= '</div>';
    $news_HTML .= '<div class="col-xl-2"></div>';
    $news_HTML .= '</div>';

    $news_HTML .= '<div class="row pb-5">';
    $news_HTML .= '<div class="col-xl-3"></div>';
    $news_HTML .= '<div class="col-xl-6">';
    $news_HTML .= '<div class="poems-font justify">' . $html . '</div>';
    $news_HTML .= '</div>';
    $news_HTML .= '<div class="col-xl-3"></div>';
    $news_HTML .= '</div>';
  }

  echo $news_HTML;
}
?>
