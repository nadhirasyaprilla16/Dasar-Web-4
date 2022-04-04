<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <?php
            $numberedString = "123456789012345678901234567890";
            $fivepos = strpos($numberedString, "5");
            echo "Posisi angka 5 di dalam string adalah $fivepos";
            $fivepos2 = strpos($numberedString, "5", $fivepos + 1);
            echo "<br> Posisi angka 5 yang kedua di dalam string adalah 
            $fivepos2";
        ?>
    </body>
</html>