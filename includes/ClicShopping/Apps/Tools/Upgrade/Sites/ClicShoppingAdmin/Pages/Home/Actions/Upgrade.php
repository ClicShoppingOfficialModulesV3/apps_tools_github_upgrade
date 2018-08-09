<?php
/*
 * Configure.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
*/

  namespace ClicShopping\Apps\Tools\Upgrade\Sites\ClicShoppingAdmin\Pages\Home\Actions;

  use ClicShopping\OM\Registry;

  class Upgrade extends \ClicShopping\OM\PagesActionsAbstract {
    public function execute() {
      $CLICSHOPPING_Upgrade = Registry::get('Upgrade');

      $this->page->setFile('upgrade.php');
      $this->page->data['action'] = 'Upgrade';

      $CLICSHOPPING_Upgrade->loadDefinitions('Sites/ClicShoppingAdmin/main');
    }
  }