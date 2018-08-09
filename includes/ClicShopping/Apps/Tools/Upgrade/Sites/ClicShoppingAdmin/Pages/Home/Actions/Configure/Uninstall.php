<?php
/*
 * Uninstall.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
*/

  namespace ClicShopping\Apps\Tools\Upgrade\Sites\ClicShoppingAdmin\Pages\Home\Actions\Configure;

  use ClicShopping\OM\Registry;

  class Uninstall extends \ClicShopping\OM\PagesActionsAbstract {

    public function execute() {

      $CLICSHOPPING_MessageStack = Registry::get('MessageStack');
      $CLICSHOPPING_Upgrade = Registry::get('Upgrade');

      $current_module = $this->page->data['current_module'];
      $m = Registry::get('UpgradeAdminConfig' . $current_module);
      $m->uninstall();

      $CLICSHOPPING_MessageStack->add($CLICSHOPPING_Upgrade->getDef('alert_module_uninstall_success'), 'success', 'Upgrade');

      $CLICSHOPPING_Upgrade->redirect('Configure&module=' . $current_module);
    }
  }