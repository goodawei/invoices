<?php
namespace Nucarf\Invoice\Sales\Domain\Validators;


class CategoryLimit extends ValidatorAbstract
{
    public function validator()
    {
        //print_r($this->ruleConfig);

        return true;
    }
}