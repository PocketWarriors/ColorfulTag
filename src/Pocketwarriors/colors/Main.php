<?php

namespace Pocketwarriors\colors;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\Player;
use pocketmine\event\EventExecutor;
use pocketmine\event\EventPriority;
use pocketmine\event\Listener;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements listener {
  
     public function onEnable(){
          $this->getLogger()->info(TextFormat::AQUA." Loaded Successfully!");
     }
     
     public function onDisable(){
          $this->getLogger()->info(TextFormat::AQUA." Unloaded Successfully!");
     }

     public function onCommand(CommandSender $sender, Command $cmd, array $args){
          switch($cmd->getName()){
          case "tag":
          if($sender->hasPermission("tag.command.blue") or $sender->hasPermission("tag.command")){
          switch($args[0]){
                        case "blue":
	if($sender->hasPermission("tag.command.blue") or $sender->hasPermission("tag.command")){
              }else{
	$sender->sendMessage("You do not have permission to use that command.");             
        return true;
              }
          $currentTag = $sender->getName();
          $sender->setNameTag("§1$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to blue");                                             
                        break;
                        case "red":
			if($sender->hasPermission("tag.command.red") or $sender->hasPermission("tag.command")){
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
           $currentTag = $sender->getName();
          $sender->setNameTag("§c$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to red");
                        
                        break;
                        case "green":
			if($sender->hasPermission("tag.command.green") or $sender->hasPermission("tag.command")){
                                       return true;
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
          $currentTag = $sender->getName();
          $sender->setNameTag("§a$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to green");
     
			break;
                        case "gold":
     
         if($sender->hasPermission("tag.command.gold") or $sender->hasPermission("tag.command")) {
             return true;       
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
          $currentTag = $sender->getName();
          $sender->setNameTag("§6$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to gold");                                      
			break;
    case "reset":
			if($sender->hasPermission("tag.command.reset") or $sender->hasPermission("tag.command")){
                         return true;
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
         $currentTag = $sender->getName();
         $sender->setNameTag($sender->getName());
          $sender->sendMessage("[ColorfulTag] Your NameTag has been reset!");
          break;
     }
    }
   }
  }
 }
