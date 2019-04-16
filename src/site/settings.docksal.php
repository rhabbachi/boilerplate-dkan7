<?php

/**
 * @file
 */

$databases = array(
  'default' => array(
    'default' => array(
      'username' => getenv("MYSQL_USER"),
      'password' => getenv("MYSQL_PASSWORD"),
      'database' => getenv("MYSQL_DATABASE"),
      'host' => 'db',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

$conf['environment_indicator_overwrite'] = TRUE;
$conf['environment_indicator_overwritten_name'] = 'Local';
$conf['environment_indicator_overwritten_color'] = '#ff0000';
$conf['environment_indicator_overwritten_text_color'] = '#ffffff';
$conf['environment_indicator_overwritten_position'] = 'top';
$conf['environment_indicator_overwritten_fixed'] = TRUE;
