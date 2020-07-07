<?php

namespace armoreffect;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {
	public function onEnable()
	{
		$this->getLogger()->info("CreatorINFO armor effect activé avec succès");
	}

	public function onDisable()
	{
		$this->getLogger()->info("");
	}

	public function onChangeArmor(EntityArmorChangeEvent $event)
	{
		$player = $event->getEntity();
		$newItem = $event->getNewItem();

		// Leather -- 298 - 299 - 300 - 301

		// 298
		if($newItem->getId() == 298){
			$effect = new EffectInstance(Effect::getEffect(1), 9999 * 9999, 0);
			$effect->setVisible(false);
			$player->addEffect($effect);
		}

		// 299
		if($newItem->getId() == 299){
			$effect = new EffectInstance(Effect::getEffect(2), 9999 * 9999, 0);
			$effect->setVisible(false);
			$player->addEffect($effect);
		}

		// 300

		// 301
	}
}