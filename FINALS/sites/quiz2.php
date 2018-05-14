<!DOCTYPE html>
<html>
<head>

</head>
<body><form action="checkAnswers2.php" target="_self" method="post">
    <?php
    require "../includes/readJson2.php";
    if($array == null){
        echo "Your array is empty!!!";
    }else{
        $cChar = 0141;

        for ($x = 0; $x < sizeof($array['questions']); $x++) {
            $qNo = $x+1;
            $choiceChar = chr($cChar);
            echo "\n<p>" .$qNo . ". ". $array['questions'][$x]['question'] . "</p>";

            for($y = 0; $y<sizeof($array['questions'][$x]['choices']); $y++ ){
                $cNo = $y+1;
                $id = $choiceChar . ($y+1);
                echo "<input type='radio' name='q$qNo' id='$id' value='$id'><label for='$id'>" . $array['questions'][$x]['choices'][$y] . "</label><br>";
            }
            $cChar++;
        }
    }
    ?>
    <input type="submit" value="Submit" name="submit">
</form></body>
</html>
