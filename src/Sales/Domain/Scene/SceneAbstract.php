<?php
namespace Nucarf\Invoice\Sales\Domain\Scene;

use Nucarf\Invoice\Sales\Domain\Template\TemplateAbstract;
use Nucarf\Invoice\Sales\Domain\Template\TemplateInterface;
use Nucarf\Invoice\Sales\Domain\Validators\ValidatorAbstract;
use Nucarf\Invoice\Sales\Domain\Rules\Config;
use Nucarf\Invoice\Common\Result;

/**
 * 场景可复用
 * Class SceneAbstract
 * @package app\receipt\sales\scene
 */
abstract class SceneAbstract
{
    protected $rule = '';


    protected $validators = [];

    /**
     * @var TemplateInterface | TemplateAbstract
     */
    protected $template;


    /**
     *
     * 将规则注入的验证器 new rule
     * @return bool
     */
    private function validator(){
        if (!empty($this->validators)) {
            foreach ($this->validators as $validator) {
                /** @var ValidatorAbstract $ist */
                $ist = new $validator(new Config());
                if (!$ist->validator()) {
                    return false;
                }
            }
        }


        return  true;
    }

    /**
     * 子类负责注入自己的模板
     * @return mixed
     */
    abstract public function template();

    /**
     * 模板方法
     * @return bool|TemplateAbstract|TemplateInterface
     */
     function loadTemplate(){
        if(!$this->validator()){
            Result::error('验证失败，无权限开票')->send();
        }

        return $this->template();
     }
}