<?php
/**
 * CoreUpgrade.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
 
 */


  namespace ClicShopping\Apps\Tools\Upgrade\Sites\ClicShoppingAdmin\Pages\Home\Actions\Upgrade;

  use ClicShopping\OM\Registry;
  use ClicShopping\OM\FileSystem;
  use ClicShopping\OM\HTML;

  use ClicShopping\Apps\Tools\Upgrade\Classes\ClicShoppingAdmin\Github;

  class ModuleInstall extends \ClicShopping\OM\PagesActionsAbstract {
    protected $app;

    public function __construct(){
      $this->app = Registry::get('Upgrade');
    }

    public function execute()  {

      $CLICSHOPPING_MessageStack = Registry::get('MessageStack');
      $CLICSHOPPING_Github = new Github();

      $module_real_name = HTML::sanitize($_POST['module_real_name']);
      $type_module = HTML::sanitize($_POST['type_module']);
      $module_directory = HTML::sanitize($_POST['module_directory']);

      if (FileSystem::isWritable(CLICSHOPPING_BASE_DIR . 'Work/Temp/')) {
        if ($type_module == 'template') {
          $CLICSHOPPING_Github->getModuleMasterArchive($module_real_name);
          $CLICSHOPPING_Github->getInstallModuleTemplate($module_real_name);
        } else {
          $CLICSHOPPING_Github->getModuleMasterArchive($module_real_name);
          $CLICSHOPPING_Github->getInstallModuleFixe($module_real_name);
        }

        $CLICSHOPPING_MessageStack->add($this->app->getDef('success_file_installed'), 'success');
      } else {
        $CLICSHOPPING_MessageStack->add($this->app->getDef('error_directory_not_writable'), 'danger');
      }

      $this->app->redirect('Upgrade&install_module_directory&template_directory=' . $module_directory);
    }
  }