<?php

function myFuncStringAdd(string $s1, string $s2) : string
{
    //
    $ret = "{$s1}{$s2}";

    //
    return $ret;
}
//s
echo myFuncStringAdd("make", " function");