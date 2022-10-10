<?php
function calculator(string $line): int
{
    $arrayError = array("?", "!", "#");
    foreach ($arrayError as $error) {
        $findError = strpos($line, $error);
        if ($findError !== false) {
            echo "error ";
        }
    }
    return eval("return (int)$line;");
}

echo calculator('4/1+2*3');
