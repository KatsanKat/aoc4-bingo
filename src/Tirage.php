<?php

namespace App;

class Tirage
{
    public $size;
    public $numberBag;

    /**
     * @param array|false $file
     */
    public function __construct(array $file)
    {
        $this->numberBag = explode(',', $file[0]);
        $this->size = count($this->numberBag);
    }
}
