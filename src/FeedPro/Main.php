<?php

namespace FeedPro;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onEnable(){
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

        switch($cmd->getName()){

            case "feed":
                if($sender instanceof Player){
			if($sender->hasPermission("feed.main.command")){
				$sender->setFood(20);
				$sender->sendMessage("§6You have been feeded!");
			}
			   
                }
            break;

        }

        return true;

    }

}
		
