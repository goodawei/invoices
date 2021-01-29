<?php

namespace Nucarf\Invoice\Sales\Facade;

use Nucarf\Invoice\Sales\Repository\ConsoleRepository;

class Test
{
    public function test()
    {
        $r = new ConsoleRepository();
        var_dump($r->getCard());
    }
}