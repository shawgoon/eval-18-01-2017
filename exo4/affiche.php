<?php
class LesChats extends Chat {

$chat1 = new Chat('mimine', '3', 'roux', 'mâle', 'européen');
var_dump($chat1);
// echo $chat1 -> getInfos();
$chat2 = new Chat('minouche', '2', 'multicouleur', 'femelle', 'européen');
var_dump($chat2);
echo $chat2 -> getInfos();
$chat3 = new Chat('minetto', '6', 'noir et blanc', 'mâle', 'européen');
var_dump($chat3);
echo $chat3 -> getInfos();
}
 ?>
