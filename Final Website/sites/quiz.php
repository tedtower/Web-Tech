<!DOCTYPE html>
<html>
<head>
	<title>Quiz - Web Systems &amp; Technologies</title>
</head>
<body>
    <?php
        $json = file_get_contents("/json/questions.json");
        $array = json_decode($json, true);
        for ($x = 0; $x < sizeof($array['questions']); $x++) {
            echo $array['questions'][$x]['question'];
            for($y = 0; $y<sizeof($array['questions'][$x]['choices']); $y++ ){
                echo $array['questions'][$x]['choices'][$y];
            }
        } 
    ?>
</body>
</html>