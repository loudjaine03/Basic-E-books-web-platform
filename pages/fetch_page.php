<?php

$url = $_GET['url'];
$word = $_GET['word'];

error_log("Searching for word: $word in URL: $url");


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($curl);
curl_close($curl);

if (!$html) {

  error_log("Failed to fetch content from URL: $url");
  echo '';
  exit;
}


$pattern = '/' . preg_quote($word, '/') . '/i';
preg_match_all($pattern, $html, $matches, PREG_OFFSET_CAPTURE); 


if (!empty($matches)) {

    $firstMatch = $matches[0][0];
    $startOffset = $firstMatch[1];
    $endOffset = $startOffset + strlen($firstMatch[0]);
     
    $element = substr($html, 0, $endOffset); 
    $element = strrpos($element, '<', -1) + 1; 
    $element = substr($html, $element); 

    
    $element = str_replace($word, '<span class="highlight">' . $word . '</span>', $element);

   
    echo $element;
} else {
    
    echo '';
}