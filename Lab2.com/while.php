<?php
    $word= "HELLO";
    $i = 0;
    while($i<mb_strlen($word)){
     echo $word{$i},'<br/>';
        $i++;
    }
?>
<!-- mb_strlen - длина строки  -->