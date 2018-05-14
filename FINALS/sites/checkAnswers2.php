<?php
if(isset($_POST['submit'])){
    require "../includes/readJson2.php";

    $array_size = sizeof($array['questions']);
    $correct_answers = [];
    for($index = 0; $index < $array_size ; $index++){
        array_push($correct_answers, $array['questions'][$index]['answer']);
    }

    $user_answers = [];
    $qChar = chr(0161);
    $score = 0;
    for($index = 0; $index < $array_size ; $index++){
        $name = $qChar . ($index+1);
        array_push($user_answers, $_POST[$name]);
        if(strcmp($correct_answers[$index], $user_answers[$index]) == 0 ){
            $score++;
        }
    }
    echo "Your score is $score out of $array_size";
}    
