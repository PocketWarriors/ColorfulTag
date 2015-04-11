<?php

namespace main;

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
          $currentTag = $player->getName()->getNameTag();
          $player->setNameTag("§1.$currentTag");
          $player->sendMessage("[ColorfulTag] Your NameTag has been changed to blue");
     }
     
     public function tagreset(Player $player){
          $player->setNameTag($player->getName());
          $player->sendMessage("[ColorfulTag] Your NameTag has been reset!");
     }
     
     public function onCommand(CommandSender $issuer, Command $cmd, $label, array $args){
          if($issuer->hasPermission("tag.command")){
               if($issuer instanceof Player){
                    if($cmd->getName() === "tagblue"){
                         $this->tagblue($issuer);
                         return true;
                    }
                    if($cmd->getName() === "unhidetag"){
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
