<?php
$text = "I felt happy because I saw the others were happy and because I knew I should feel happy, but I wasnt really happy.";
$word = "happy";
function search_word($text, $word){
    $arrayText = preg_split('/[.|,| ]/', $text);
    $count = 0;
    $x = 0;
    while ($x < sizeof($arrayText)) {
        if ($arrayText[$x] == $word) {
            $count++;
        }
        $x++;
    }
    echo $count,"\n";
}
search_word($text, $word);
?>
