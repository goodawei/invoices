<?php
namespace Nucarf\Invoice\Sales\Domain\Scene;

use Nucarf\Invoice\Sales\Domain\Template\Category;
use Nucarf\Invoice\Sales\Domain\Validators\CategoryLimit;
use Nucarf\Invoice\Sales\Domain\Validators\TimesLimit;

class Vip1  extends SceneAbstract
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
        $this->template =  new Category();
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