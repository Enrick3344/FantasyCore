<?php
/*
 *
 *  _____           _                   ____               
 * |  ___|_ _ _ __ | |_ __ _ ___ _   _ / ___|___  _ __ ___ 
 * | |_ / _` | '_ \| __/ _` / __| | | | |   / _ \| '__/ _ \
 * |  _| (_| | | | | || (_| \__ \ |_| | |__| (_) | | |  __/
 * |_|  \__,_|_| |_|\__\__,_|___/\__, |\____\___/|_|  \___|
 * 				 |___/                     
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 *
 * @author Enrick Fortier
 * 
 * Github: https://github.com/Enrick3344
 * Version: v0.1-beta
 *
*/ 

namespace FantasyCore;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;



class Main extends PluginBase implements Listener{

public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		if(!file_exists($this->getDataFolder() . "config.yml")){
     			 @mkdir($this->getDataFolder());
     			 file_put_contents($this->getDataFolder()."config.yml", $this->getResource("config.yml"));
   		 }
		$this->getLogger()->notice("You are running on the v0.1-beta of FantasyCore.");;
	}
  
  public function onDisable(){
		$this->getLogger()->notice("FantasyProtection Disabled!");
	}

public function translateColors($string){
		$msg = str_replace("&1",TextFormat::DARK_BLUE,$string);
		$msg = str_replace("&2",TextFormat::DARK_GREEN,$msg);
		$msg = str_replace("&3",TextFormat::DARK_AQUA,$msg);
		$msg = str_replace("&4",TextFormat::DARK_RED,$msg);
		$msg = str_replace("&5",TextFormat::DARK_PURPLE,$msg);
		$msg = str_replace("&6",TextFormat::GOLD,$msg);
		$msg = str_replace("&7",TextFormat::GRAY,$msg);
		$msg = str_replace("&8",TextFormat::DARK_GRAY,$msg);
		$msg = str_replace("&9",TextFormat::BLUE,$msg);
		$msg = str_replace("&0",TextFormat::BLACK,$msg);
		$msg = str_replace("&a",TextFormat::GREEN,$msg);
		$msg = str_replace("&b",TextFormat::AQUA,$msg);
		$msg = str_replace("&c",TextFormat::RED,$msg);
		$msg = str_replace("&d",TextFormat::LIGHT_PURPLE,$msg);
		$msg = str_replace("&e",TextFormat::YELLOW,$msg);
		$msg = str_replace("&f",TextFormat::WHITE,$msg);
		$msg = str_replace("&o",TextFormat::ITALIC,$msg);
		$msg = str_replace("&l",TextFormat::BOLD,$msg);
		$msg = str_replace("&r",TextFormat::RESET,$msg);
		return $msg;
	}
  
/*                       _       
 *   _____   _____ _ __ | |_ ___ 
 *  / _ \ \ / / _ \ '_ \| __/ __|
 * |  __/\ V /  __/ | | | |_\__ \
 *  \___| \_/ \___|_| |_|\__|___/
 *                                             
*/ 
  
  public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    $name = $player->getName();
    $text[0] = TextFormat::DARK_PURPLE . "##################";
    $text[1] = TextFormat::WHITE . "Welcome, $name";
    $text[2] = TextFormat::LIGHT_PURPLE . "Website: " . TextFormat::WHITE . "fantasy-network.org";
    $text[3] = TextFormat::LIGHT_PURPLE . "Vote Website " . TextFormat::WHITE . "bit.do/fantasyisland";
    $text[4] = TextFormat::DARK_PURPLE . "##################";
    foreach($player as $pl){
      $pl->sendMessage($text[0]);
      $pl->sendMessage($text[1]);
      $pl->sendMessage($text[2]);
      $pl->sendMessage($text[3]);
      $pl->sendMessage($text[4]);
    }
  }

}
