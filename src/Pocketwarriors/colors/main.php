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

     public function onCommand(CommandSender $issuer, Command $cmd, array $args){
          switch($cmd->getName()){
          case "tag":             
          if($issuer instanceof Player){  
          switch($args[0] == "blue"){
              
          }
			if($issuer->hasPermission("tag.command.blue") or $issuer->hasPermission("tag.command")){
              }else{
	$sender->sendMessage("You do not have permission to use that command.");             
        return true;
              }
          $currentTag = $sender->getName();
          $sender->setNameTag("§1$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to blue");                                             
                        break;
          }elseif($args[0] == "red"){                          
			if($sender->hasPermission("tag.command.red") or $sender->hasPermission("tag.command")){
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
           $currentTag = $sender->getName();
          $sender->setNameTag("§c$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to red");
                        
                        break;
 }elseif($args[0] == "green"){
			if($issuer->hasPermission("tag.command.green") or $issuer->hasPermission("tag.command")){
                                       return true;
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
          $currentTag = $sender->getName();
          $sender->setNameTag("§a$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to green");
     
			break;
 }elseif($args[0] == "gold"){
     
         if($issuer->hasPermission("tag.command.gold") or $issuer->hasPermission("tag.command")) {
             return true;       
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
          $currentTag = $sender->getName();
          $sender->setNameTag("§6$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to gold");                                      
			break;
 }elseif($args[0] == "reset"){
 }
			if($issuer->hasPermission("tag.command.reset") or $issuer->hasPermission("tag.command")){
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
