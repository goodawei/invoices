<?php
namespace Nucarf\Invoice\Sales\Domain\Validators;

/**
 * 开票次数校验
 * Class TimesLimit
 * @package app\receipt\sales\validators
 */
class TimesLimit extends ValidatorAbstract
{
    public function validator()
    {
        //rint_r($this->ruleConfig);exit;
        return false;
    }
}