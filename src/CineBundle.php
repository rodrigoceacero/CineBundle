<?php

use Symfony\Component\HttpKernel\Bundle\Bundle; 

class CineBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}