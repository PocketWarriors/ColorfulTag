<?php

namespace Pocketwarriors\colors;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\Player;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class main extends PluginBase{
     
     public function onEnable(){
          $this->getLogger()->info(TextFormat::AQUA." Loaded Successfully!");
     }
     
     public function onDisable(){
          $this->getLogger()->info(TextFormat::AQUA." Unloaded Successfully!");
     }
     
     public function tagblue(Player $player){
          $currentTag = $player->getName();
          $player->setNameTag("§1$currentTag");
          $player->sendMessage("[ColorfulTag] Your NameTag has been changed to blue");
     }
          public function tagred(Player $player){
          $currentTag = $player->getName();
          $player->setNameTag("§c$currentTag");
          $player->sendMessage("[ColorfulTag] Your NameTag has been changed to red");
     }
       public function taggreen(Player $player){
          $currentTag = $player->getName();
          $player->setNameTag("§a$currentTag");
          $player->sendMessage("[ColorfulTag] Your NameTag has been changed to green");
     }
      public function taggold(Player $player){
          $currentTag = $player->getName();
          $player->setNameTag("§6$currentTag");
          $player->sendMessage("[ColorfulTag] Your NameTag has been changed to gold");
     }
     
     public function tagreset(Player $player){
          $player->setNameTag($player->getName());
          $player->sendMessage("[ColorfulTag] Your NameTag has been reset!");
     }
     
     public function onCommand(CommandSender $issuer, Command $cmd, $label, array $args){
          switch($cmd->getName()){
          case "tag":
          switch($args[0]){
					case "blue":
						if($sender->hasPermission("tag.command.blue") or $sender->hasPermission("tag.command")){
               if($issuer instanceof Player){
                         $this->tagblue($issuer);
                         return true;
                    }
                    	case "red":
						if($sender->hasPermission("tag.command.red") or $sender->hasPermission("tag.command")){
                         $this->tagred($issuer);
                         return true;
						}
                    	case "green":
						if($sender->hasPermission("tag.command.green") or $sender->hasPermission("tag.command")){
                         $this->taggreen($issuer);
                         return true;
						}
                    	case "gold":
						if($sender->hasPermission("tag.command.gold") or $sender->hasPermission("tag.command")){
                         $this->taggold($issuer);
                         return true;
                         
	                    case "reset":
						if($sender->hasPermission("tag.command.reset") or $sender->hasPermission("tag.command")){
                         $this->tagreset($issuer);
                         return true;
                    }
               }else{
                    $issuer->sendMessage("Command only works in-game!");
                    return true;
               }
          }else{
               $issuer->sendMessage("You don't have permission for this!");
               return true;
          }
     }
}
