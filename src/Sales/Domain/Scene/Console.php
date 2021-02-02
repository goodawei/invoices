<?php
namespace Nucarf\Invoice\Sales\Domain\Scene;

use Nucarf\Invoice\Sales\Domain\Template\Account;
use Nucarf\Invoice\Sales\Domain\Validators\CategoryLimit;

class Console extends SceneAbstract
{
    /**
     * 挂接一组校验器
     * @var array|string[]
     */
    protected $validators = [
        CategoryLimit::class,
    ];


    /**
     * 动态加载对应开票模板
     */
    public function template()
    {
        $this->template =  new Account();
        return $this;
    }

    /**
     * 开票动作入口
     * @return mixed
     */
    public function receiptTemplate()
    {
        return $this->template->receiptTemplate();
    }
}