<?php

//require_once '/var/www/3rdparty/symfony-1.4.20/lib/autoload/sfCoreAutoload.class.php';
require_once '/Volumes/SvnDevDisk/3rdParty/symfony-1.4.20/symfony-1.4.20/lib/autoload/sfCoreAutoload.class.php';

sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfPropelPlugin');
  }
}
