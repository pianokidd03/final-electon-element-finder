<?php

     $selectedElement = $_REQUEST["q"];

    $url = 'https://en.wikipedia.org/w/api.php?action=query&prop=extracts|info&exintro&titles='.$selectedElement.'&format=json&explaintext&utf8='; // &redirects&inprop=url&indexpageids
     $json = file_get_contents($url);
     $encondedJson = json_encode($json);

     $testArray = explode('\"', $json);
     // Element name: print_r($testArray[11]);

     $extractedText = explode('extract', $json);
     //print_r($extractedText[1]);

     $roughText = explode('contentmodel', $extractedText[1]);

     $finalRoughText = "<p>".$roughText[0];

     $finalRoughText = str_replace('":"', "", $finalRoughText);

     $finalRoughText = str_replace('","', "", $finalRoughText);

     $finalRoughText = str_replace('\n', "</p> <p>", $finalRoughText);

     $finalRoughText = str_replace('\"', '"', $finalRoughText)."</p>";

     //echo "<br> <br>";

     echo $finalRoughText; 

     /* disfunctional code:

     $fullWikiUrl = "https://en.wikipedia.org/wiki/".$selectedElement;

     echo($fullWikiUrl);

     echo '<a href="<?php echo $fullWikiUrl;?>">Read More</a>'; */

     // NOTE: there will always be 31 "\"s before the actual element definiton starts. 
?>