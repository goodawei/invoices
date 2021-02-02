<?php
namespace Nucarf\Invoice\Sales\Facade;

use Nucarf\Invoice\Sales\Repository\ConsoleRepository;
use Nucarf\Invoice\Sales\Factory\SalesSceneFactory;

class SalesReceiptFacade
{
    public static function cal($sceneId)
    {
        $r = new ConsoleRepository();
        //var_dump($r->getCard());

        $factory = new SalesSceneFactory();

        $template =  $factory->createScene($sceneId)->loadTemplate()->receiptTemplate();

        var_dump($template);

    }

    public static function list()
    {
        echo 'list';
        //        $sceneId  = Request::instance()->get('scene_id');
//
//        $factory = new SalesSceneFactory();
//
//        return $factory->createScene($sceneId)->list();
    }
}