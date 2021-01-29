<?php

namespace Nucarf\Invoice\Sales\Repository;

use Nucarf\Invoice\Sales\Model\ConsoleModel;

class ConsoleRepository
{
    public function getCard()
    {
        return ConsoleModel::getInstance()->getCartById(1);
    }
}