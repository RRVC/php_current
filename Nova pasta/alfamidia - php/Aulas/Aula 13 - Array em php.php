<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array em PHP</title>
</head>
<body>
    <?php
        $array0 = array(1, 2, 3, 4, 5);

        echo $array0[0];
        echo "<br>";
        echo $array0[1];
        echo "<br>";
        echo $array0[2];
        echo "<br>";
        echo $array0[3];
        echo "<br>";
        echo $array0[4];
        echo "<br>";

        print_r($array0);
        
        echo "<hr>"; // =========================================

        $array1 = array( "a", "b", "c", "d", "e");

        for($i = 0; $i < count($array1); $i++){
            echo $array1[$i];
            echo "<br>";
        }
        print_r($array1);

        echo "<hr>"; // =========================================

        $array2 = array( "a1", "b2", "c3", "d4", "e5");
        $c = 0;
        while ($c < 5){
            echo $array2[$c];
            echo "<br>";
            $c++;
        }
        print_r($array2);

        echo "<hr>"; // =========================================

        $array3 = array( "aa", "bb", "cc", "dd", "ee");
        $c = 0;
        while ($c < 5){
            echo $array3[$c++];
            echo "<br>";
        }
        print_r($array3);

    ?>    
</body>
</html>