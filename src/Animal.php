<?php
namespace xreload;
class Animal{

    public $name;

    public $color;

    public $msg;

    public function __construct($name, $color, $msg)
    {
        $this->name = $name;
        $this->color = $color;
        $this->msg = $msg;
    }
}
