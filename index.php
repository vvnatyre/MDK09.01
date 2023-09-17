<?php
$vremya = 14;

if($vremya>=18 && $vremya <=24){
    echo "Вечер";
}elseif($vremya >=1 && $vremya<=6){
    echo "Ночь";
}elseif($vremya >=6 && $vremya<=12){
    echo "Утро";
}elseif($vremya >=12 && $vremya<=18){
    echo "День";
}
?>
