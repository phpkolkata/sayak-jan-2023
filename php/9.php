<?php

function calc($v1,$v2,$act="+"):int|string
{
    if($act == "+" || $act == "add"){
        return $v1+$v2;
    }
    else if($act == "-" || $act == "sub"){
        return $v1-$v2;
    }
    else{
        return "wrong input";
    }
}


echo  calc(30,10, "-");