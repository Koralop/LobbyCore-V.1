<?php

namespace LCore\Commands;

use LCore\Main;
use pocketmine\command\{ PluginCommand, CommandSender };
use pocketmine\utils\{ Config };

class SetHubCommand extends PluginCommand{
    public function __construct(){
        parent::__construct("sethub", Loader::getInstance());
    }
    public function execute(CommandSender $sender, Array $label, Args $args){
        if ($sender->isOp()) {
            $sender->sendMessage($prefix . " " . $config->getConfig()->get("dontPermissions-message"));
        }

        $config->setConfig()->set("lobby", $sender->getLevel());
        $sender->sendMessage($prefix . " " . $config->getConfig()->get("sethub-message"));

    }
}