<?php


class number
{
    public function count($i, $from)
    {
        while ($i < $from) {
            echo $i.PHP_EOL;
            $i++;
        }
    }
}

$obj = new number();

echo $obj->count(0,15).PHP_EOL;