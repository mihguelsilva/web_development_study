<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
<title>Calculate Class</title>
    </head>
     <body>
     <?php
     $_DIR = $_SERVER['DOCUMENT_ROOT'];
     $CALCULATE = $_DIR . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "calculate.php";
     require_once $CALCULATE;
     /*
     $a = new Calculate();
     $res_div = $a -> div(10, 3);
     echo "<div class='division'>";
     echo "<div class='clean_result'>";
     echo "The clean result of 10 / 3 is " . ($res_div);
     echo "</div>";
     echo "<div class='round'>";
     echo "The round result of 10 / 3 is " . round($res_div);
     echo "</div>";
     echo "<div class='ceil'>";
     echo "The ceil result of 10 / 3 is " . ceil($res_div);
     echo "</div>";
     echo "<div class='floor'>";
     echo "The floor result of 10 / 3 is " . floor($res_div);
     echo "</div>";
     echo "<div class='intval'>";
     echo "The integer value of 10 / 3 is " . intval($res_div);
     echo "</div>";
     echo "</div>";
      */
     $a = new Calculate();
     $a -> n1 = 50;
     $a -> n2 = 30;
     $a -> sum();
     echo $a -> getRes();
     ?>
     </body>
    </html>
