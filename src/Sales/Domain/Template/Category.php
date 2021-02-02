<?php
namespace Nucarf\Invoice\Sales\Domain\Template;


class Category  implements TemplateInterface
{
    public function receiptTemplate()
    {
        return '开品类票';
    }
}