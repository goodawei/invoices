<?php
namespace Nucarf\Invoice\Sales\Domain\Template;

/**
 * 模板可复用
 * Class History
 * @package app\receipt\sales\template
 */
class History implements TemplateInterface
{
    /**
     * @var
     */
    private $params;


    public function receiptTemplate()
    {
        return '开历史票';
    }


    public function setParams($params)
    {
        $this->params = $params;
    }

}