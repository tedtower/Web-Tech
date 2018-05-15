<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Systems &amp; Technologies: Quiz (Basic Edition)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/fontawesome-all.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body><!--NAVIGATION BAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-none fixed-top" id="home">
        <div class="navbar-brand">
            <img src="../img/logo.png">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" onclick="addBG()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link text-light" href="../index.html#home">&nbsp;<i class="fa fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="../index.html#lecture">&nbsp;<i class="fa fa-book"></i> Lecture Notes</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="../index.html#quiz">&nbsp;<i class="fa fa-edit"></i> Quiz</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="../index.html#repo">&nbsp;<i class="fab fa-github"></i> Repository</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="../index.html#about">&nbsp;<i class="fa fa-address-card"></i> About Us</a></li>
            </ul>
        </div>
    </nav>
    <br><br>
    <form method="post">
            <?php
            require "../includes/readJson.php";
            if(isset($_POST['submit'])) {
                $array_size = sizeof($array['questions']);
                $correct_answers = [];
                for ($index = 0; $index < $array_size; $index++) {
                    array_push($correct_answers, $array['questions'][$index]['answer']);
                }

                $user_answers = [];
                $qChar = chr(0161);
                $score = 0;
                for ($index = 0; $index < $array_size; $index++) {
                    $name = $qChar . ($index + 1);
                    array_push($user_answers, $_POST[$name]);
                    if (strcmp($correct_answers[$index], $user_answers[$index]) == 0) {
                        $score++;
                    }
                }
                echo("<script>
                    window.alert('You have scored $score out of $array_size!');
                    window.location.href='../index.html';
                    </script>");
            }else {
                if ($array == null) {
                    echo "Your array is empty!!!";
                } else {
                    $cChar = 0141;

                    for ($x = 0; $x < sizeof($array['questions']); $x++) {
                        $qNo = $x + 1;
                        $choiceChar = chr($cChar);
                        echo "\n<p id='questions'>" . $qNo . ". " . $array['questions'][$x]['question'] . "</p>";

                        for ($y = 0; $y < sizeof($array['questions'][$x]['choices']); $y++) {
                            $cNo = $y + 1;
                            $id = $choiceChar . ($y + 1);
                            echo "<input type='radio' name='q$qNo' id='$id' value='$id'><label for='$id' style='font-size:17px;'>" . $array['questions'][$x]['choices'][$y] . "</label><br>";
                        }
                        $cChar++;
                    }
                }
            }
            ?>
            <br>
            <div class="butt">
                <input type="submit" value="Submit" name="submit">
            </div>
    </form><?php

    ?>
<!--JAVASCRIPT-->
    <script src="../js/jquery-3.2.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>      
</body>
</html>
