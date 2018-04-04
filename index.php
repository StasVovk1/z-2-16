<?php 
    $mass = [-1,-5,3,6,8,45,-3,54,6,7,-6,7,8,-4,5,6,7,16];
    $perem = $perem_2 = 1;
    $number = null;
    echo 'Исходные данные: '.json_encode($mass);

    for ($i = 0; $i < counts($mass); $i++){
        if($i+1 >= counts($mass)-1){break;}
        for ($j = $i+1; $j < counts($mass); $j++){
            if ($mass[$i] == $mass[$j] && $i != $j){
                $perem++;
            }
        }
        if ($perem > $perem_2){
            $perem_2 = $perem;
            $number = $mass[$i];            
        }
        $perem = 1;
    }
    if ($perem_2 == 1){
        echo '<br> Нет числ встречаются больше 1 раза';
    }else {
        echo '<br> Ответ: число '.$number.' встречается '.$perem_2.' раз';
    }
    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>