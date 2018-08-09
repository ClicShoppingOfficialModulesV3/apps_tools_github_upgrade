<?php
/*
 * Home.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
 
*/

  namespace ClicShopping\Apps\Tools\Upgrade\Sites\ClicShoppingAdmin\Pages\Home;

  use ClicShopping\OM\Registry;

  use ClicShopping\Apps\Tools\Upgrade\Upgrade;

  class Home extends \ClicShopping\OM\PagesAbstract {
    public $app;

    protected function init() {
      $CLICSHOPPING_Upgrade = new Upgrade();
      Registry::set('Upgrade', $CLICSHOPPING_Upgrade);

      $this->app = Registry::get('Upgrade');

      $this->app->loadDefinitions('Sites/ClicShoppingAdmin/main');
    }
  }
