<?php
namespace Nucarf\Invoice\Sales\Domain\Scene;

use Nucarf\Invoice\Sales\Domain\Template\History;
use Nucarf\Invoice\Sales\Domain\Validators\TimesLimit;
use Nucarf\Invoice\Sales\Domain\Validators\CategoryLimit;

class Vip extends SceneAbstract
{

    /**
     * 挂接一组校验器
     * @var array|string[]
     */
    protected $validators = [
        TimesLimit::class,
        CategoryLimit::class,
    ];


    /**
     * 动态加载对应开票模板
     */
    public function template()
    {
        $this->template =  new History();
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


    public function list()
    {
        return [];
    }
}