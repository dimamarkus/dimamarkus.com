<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  '*' => array(
		'appId'       => 'dimamarkus.com',
		'cacheMethod' => 'redis',
  ),
  'local' => array(
  	'devMode' => true,
  	'siteUrl' => 'http://local.dimamarkus.com',
	),
  'production' => array(
  	'siteUrl' => 'http://dimamarkus.com',
  ),
);




