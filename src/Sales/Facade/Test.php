<?php

namespace Nucarf\Invoice\Sales\Facade;

use Nucarf\Invoice\Sales\Repository\ConsoleRepository;

class Test
{
    public static function test()
    {
        $r = new ConsoleRepository();
        var_dump($r->getCard());
    }
}