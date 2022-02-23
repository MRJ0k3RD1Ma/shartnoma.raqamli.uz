<?php
/**
 * Created by PhpStorm.
 * User: Dilmurod
 * Date: 31.10.2019
 * Time: 16:37
 */

$res = "";
$n=0;
$number = strval($number);
for($i=strlen($number)-1; $i>=0; $i--){
    $n++;
    $res.= $number[$i];
    if($n%3==0){
        $res.=" ";
    }
}
for($i=strlen($res)-1; $i>=0; $i--){
   echo $res[$i];
}
