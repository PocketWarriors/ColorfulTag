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

     public function onCommand(CommandSender $issuer, Command $cmd, $label, array $args){
          switch($cmd->getName()){
          case "tag":
          if($issuer instanceof Player){  
          switch($args[0] == "blue"){
              
          }
			if($sender->hasPermission("tag.command.blue") or $sender->hasPermission("tag.command")){
              }else{
	$sender->sendMessage("You do not have permission to use that command.");             
        return true;
              }
          $currentTag = $player->getName();
          $player->setNameTag("§1$currentTag");
          $player->sendMessage("[ColorfulTag] Your NameTag has been changed to blue");                                             
                        break;
          }elseif($args[0] == "red"){                          
			if($sender->hasPermission("tag.command.red") or $sender->hasPermission("tag.command")){
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
           $currentTag = $player->getName();
          $player->setNameTag("§c$currentTag");
          $player->sendMessage("[ColorfulTag] Your NameTag has been changed to red");
                        
                        break;
 }elseif($args[0] == "green"){
			if($sender->hasPermission("tag.command.green") or $sender->hasPermission("tag.command")){
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
          $currentTag = $player->getName();
          $player->setNameTag("§a$currentTag");
          $player->sendMessage("[ColorfulTag] Your NameTag has been changed to green");
     
			break;
 }elseif($args[0] == "gold"){
			if($sender->hasPermission("tag.command.gold") or $sender->hasPermission("tag.command")){
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
          $currentTag = $player->getName();
          $player->setNameTag("§6$currentTag");
          $player->sendMessage("[ColorfulTag] Your NameTag has been changed to gold");                                      
			break;
 }elseif($args[0] == "reset"){
 }
			if($sender->hasPermission("tag.command.reset") or $sender->hasPermission("tag.command")){
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
         $currentTag = $player->getName();
         $player->setNameTag($player->getName());
          $player->sendMessage("[ColorfulTag] Your NameTag has been reset!");

			break;
                    }

          }
     }
