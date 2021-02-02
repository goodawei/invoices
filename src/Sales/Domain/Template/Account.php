<?php
namespace Nucarf\Invoice\Sales\Domain\Template;


class Account implements TemplateInterface
{
    public function receiptTemplate()
    {
        return '新户+旧户的票';
    }
}