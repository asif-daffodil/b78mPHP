<?php
class yousufType
{
    public string $josef = "Josef Kaowser";
    public function mirz(float $n1, float $n2): float
    {
        return $n1 + $n2;
    }
}

$obj = new yousufType;
echo $obj->josef;
echo $obj->mirz(5.2, 6.1);
