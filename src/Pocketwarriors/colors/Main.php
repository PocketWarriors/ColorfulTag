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

namespace Pocketwarriors\colors;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\Player;

class Main extends PluginBase{
  
     public function onEnable(){
          $this->getLogger()->info(TextFormat::AQUA." Loaded Successfully!");
     }
     
     public function onDisable(){
          $this->getLogger()->info(TextFormat::AQUA." Unloaded Successfully!");
     }

     public function onCommand(CommandSender $issuer, Command $cmd, array $args){
                   if($issuer->hasPermission("hidetag.command")){
               if($issuer instanceof Player){
          switch($cmd->getName()){
          case "tag":
          if($sender->hasPermission("tag.command.blue") or $sender->hasPermission("tag.command")){
          switch($args[0]){
                        case "blue":
          if($sender->hasPermission("tag.command.blue") or $sender->hasPermission("tag.command")){
          $currentTag = $sender->getName();
          $sender->setNameTag("§1$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to blue");         
                        return true;
              }else{
	$sender->sendMessage("You do not have permission to use that command.");             
      
              }
                                      
                        break;
                        case "red":
     if($sender->hasPermission("tag.command.red") or $sender->hasPermission("tag.command")){
    $currentTag = $issuer->getName();      
          $sender->setNameTag("§c$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to red");   
			
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }

                        
                        break;
                        case "green":
                            if($sender->hasPermission("tag.command.green") or $sender->hasPermission("tag.command")){
                                    $currentTag = $issuer->getName();
          $sender->setNameTag("§a$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to green");
                                       return true;
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
  
			break;
                        case "gold":
                if($sender->hasPermission("tag.command.gold") or $sender->hasPermission("tag.command")) {
               $currentTag = $issuer->getName();
          $sender->setNameTag("§6$currentTag");
          $sender->sendMessage("[ColorfulTag] Your NameTag has been changed to gold"); 
             return true;       
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
                                     
			break;
    case "reset":
  if($sender->hasPermission("tag.command.reset") or $sender->hasPermission("tag.command")){
                 $currentTag = $issuer->getName();
         $sender->setNameTag($sender->getName());
          $sender->sendMessage("[ColorfulTag] Your NameTag has been reset!");
                        return true;
  
                                          }else{
	$sender->sendMessage("You do not have permission to use that command.");
        return true;
                                          }
