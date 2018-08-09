<?php
/*
 * main.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
*/

  use ClicShopping\OM\HTML;
  use ClicShopping\OM\CLICSHOPPING;
  use ClicShopping\OM\Registry;

  $CLICSHOPPING_Upgrade = Registry::get('Upgrade');
  $CLICSHOPPING_MessageStack = Registry::get('MessageStack');

  if ($CLICSHOPPING_MessageStack->exists('Upgrade')) {
    echo $CLICSHOPPING_MessageStack->get('Upgrade');
  }
?>
  <div class="contentBody">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-block headerCard">
          <div class="row">
            <span class="col-md-1 logoHeading"><?php echo HTML::image($CLICSHOPPING_Template->getImageDirectory() . '/categories/apps.png', $CLICSHOPPING_Upgrade->getDef('heading_title'), '40', '40'); ?></span>
            <span class="col-md-4 pageHeading"><?php echo '&nbsp;' . $CLICSHOPPING_Upgrade->getDef('heading_title'); ?></span>
          </div>
        </div>
      </div>
    </div>
    <div class="separator"></div>
    <div class="col-md-12 mainTitle"><strong><?php echo $CLICSHOPPING_Upgrade->getDef('text_upgrade') ; ?></strong></div>
    <div class="adminformTitle">
      <div class="row">
        <div class="separator"></div>

        <div class="col-md-12">
          <div class="form-group">
            <div class="col-md-12">
              <?php echo $CLICSHOPPING_Upgrade->getDef('text_intro');  ?>
            </div>
          </div>
          <div class="separator"></div>

          <div class="col-md-12 text-md-center">
            <div class="form-group">
              <div class="col-md-12">
<?php
  echo HTML::form('configure', CLICSHOPPING::link('index.php', 'A&Tools\Upgrade&Configure'));
  echo HTML::button($CLICSHOPPING_Upgrade->getDef('button_configure'), null, null, 'primary');
  echo '</form>';
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
