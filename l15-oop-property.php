<?php

class yousufVai
{
    protected $mushfiqSir = "Mushfiq Sir";
    public $siam;
    private $nazat = "Chadia khan";
    protected function rakib()
    {
        $this->siam = $this->mushfiqSir . " " . $this->nazat;
    }
}

class yousufVaiErChele extends yousufVai
{
    public function fan()
    {
        $this->rakib();
        return $this->siam;
    }
}

$obj = new yousufVai;
// echo $obj->mushfiqSir;
// echo $obj->nazat;


echo "<br>";

$obj2 = new yousufVaiErChele;
echo $obj2->fan();
