<?php
namespace Nucarf\Invoice\Sales\Factory;

use Nucarf\Invoice\Sales\Domain\Scene\SceneAbstract;
use Nucarf\Invoice\Sales\Domain\Scene\Vip;
use Nucarf\Invoice\Sales\Domain\Scene\Vip1;
use Nucarf\Invoice\Sales\Domain\Scene\Console;


class SalesSceneFactory
{
    private $classMap = [
        '1' => Vip::class,
        '2' => Vip1::class,
        '3' => Console::class,
    ];

    /**
     * @param $sceneId
     * @return SceneAbstract
     * @throws \Exception
     */
    public function createScene($sceneId)
    {
        if (!isset($this->classMap[$sceneId])){
            throw new \Exception('CLASS NOT FOUND');
        }

        $instane = new $this->classMap[$sceneId];
        return $instane;
    }
}