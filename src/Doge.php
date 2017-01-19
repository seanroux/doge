<?php

namespace SeanRoux\Doge\Wow\Such;

use SeanRoux\Wow\Much\Doge\Wow;

class Doge
{
    public function getOne()
    {
        return '1';
    }

    public function getWow()
    {
        $wow = new Wow();

        return $wow->getWowString('WOWOWW');
    }
}
