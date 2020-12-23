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
        if(isset($args[0])){

        }
        if ($sender->isOp()) {
            
        }
    }
}