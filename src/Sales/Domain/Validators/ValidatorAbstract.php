<?php
namespace Nucarf\Invoice\Sales\Domain\Validators;

/**
 * 验证器可复用
 * Class ValidatorAbstract
 * @package app\receipt\sales\validators
 */
abstract class ValidatorAbstract
{
    protected $ruleConfig;

    public function __construct($ruleConfig)
    {
        $this->ruleConfig = $ruleConfig;
    }

    abstract function validator();
}