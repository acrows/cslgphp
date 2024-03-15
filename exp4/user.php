<?php

class user
{
    public $xh;
    public $xm;
    public $xb;
    public $mm;

    public function __construct($xh, $xm, $xb, $mm)
    {
        $this->xh = $xh;
        $this->xm = $xm;
        $this->xb = $xb;
        $this->mm = $mm;
    }
}