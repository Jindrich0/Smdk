<?php
function calculator(string $stroka)
{
    $otvet = eval("return $stroka;");
    echo $otvet;
}
calculator('4/1+2*3');
