<?php
if(isset($_POST['submit'])){
    require "../includes/readJson.php";
    $correct_answers = [];
    for($index = 0; $index < sizeof($array['questions']) ; $index++){
        array_push($correct_answers, $array['questions'][$index]['answer']);
    }
    $user_answers = [];
    $qChar = chr(0161);
    $score = 0;
    for($index = 0; $index < 20 ; $index++){
        $name = $qChar . ($index+1);
        array_push($user_answers, $_POST[$name]);
        if(strcmp($correct_answers[$index], $user_answers[$index]) == 0 ){
            $score++;
        }
    }
    echo "Your score is" . $score . "out of 20";
}    


?>