<?php
/*
 * sort_order.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse

*/

  namespace ClicShopping\Apps\Tools\Upgrade\Module\ClicShoppingAdmin\Config\UP\Params;

  class sort_order extends \ClicShopping\Apps\Tools\Upgrade\Module\ClicShoppingAdmin\Config\ConfigParamAbstract {

    public $default = '300';
    public $app_configured = true;
    public $sort_order = 20;

    protected function init() {
        $this->title = $this->app->getDef('cfg_upgrade_sort_order_title');
        $this->description = $this->app->getDef('cfg_upgrade_sort_order_description');
    }
  }
