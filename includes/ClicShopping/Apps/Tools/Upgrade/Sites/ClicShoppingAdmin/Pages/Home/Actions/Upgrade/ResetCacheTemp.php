<?php
/**
 * ResetCache.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse

 */


  namespace ClicShopping\Apps\Tools\Upgrade\Sites\ClicShoppingAdmin\Pages\Home\Actions\Upgrade;

  use ClicShopping\OM\Registry;
  use ClicShopping\OM\FileSystem;

  class ResetCacheTemp extends \ClicShopping\OM\PagesActionsAbstract {
    protected $app;

    public function execute()  {
      $this->app = Registry::get('Upgrade');

      $CLICSHOPPING_MessageStack = Registry::get('MessageStack');

      if (FileSystem::isWritable(CLICSHOPPING_BASE_DIR . 'Work/Cache/Github/Temp')) {
        $cache_file = glob(CLICSHOPPING_BASE_DIR . 'Work/Cache/Github/Temp/*.json');

        foreach ($cache_file as $value) {
          unlink($value);
        }

        $CLICSHOPPING_MessageStack->add($this->app->getDef('success_deleted_installed'), 'success', 'update');
      } else {
        $CLICSHOPPING_MessageStack->add($this->app->getDef('error_directory_not_writable'), 'danger', 'update');
      }

      $this->app->redirect('Upgrade');
    }
  }