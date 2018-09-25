<?php

function do_keywords($keywords){
    $arr = explode(' ',$keywords);
    $str = '';
    foreach($arr as $k=>$v){
        $str .= "<button class='btn btn-success radius'>$v</button>"."&nbsp;";
    }
    return $str;
}