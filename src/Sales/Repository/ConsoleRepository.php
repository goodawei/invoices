<?php

namespace Nucarf\Invoice\Sales\Repository;

use Nucarf\Invoice\Sales\Model\ConsoleModel;

class ConsoleRepository
{
    public function getCard()
    {
        return 'fsdfsdf';
        return ConsoleModel::getInstance()->getCartById(1);
    }
}