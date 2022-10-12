<?php
function calculator(string $line): int
{
    $arrayError = ["?", "!", "#", ".", ",", "/0"];
    foreach ($arrayError as $error) {
        $findError = strpos($line, $error);
        if ($findError !== false) {
            echo "error ";
        }
    }
    return eval("return $line;");
}

echo calculator('1+1');
