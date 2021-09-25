<?php

namespace zeyroz\leave;

use pocketmine\block\Leaves;
use pocketmine\event\block\LeavesDecayEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function CancelLeave(LeavesDecayEvent $event){
        $event->cancel();
    }
}