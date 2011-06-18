<?php
// bootstrap.php

/**
 * Bootstrap Doctrine.php, register autoloader specify
 * configuration attributes and load models.
 */

require_once(dirname(__FILE__) . '/lib/doctrine/Doctrine.php');
require_once(dirname(__FILE__) . '/lib/Game.php');

spl_autoload_register(array('Doctrine', 'autoload'));
spl_autoload_register(array('Game', 'autoloader'));

$manager = Doctrine_Manager::getInstance();
$manager->setAttribute(Doctrine_Core::ATTR_AUTOLOAD_TABLE_CLASSES, true);


?>
