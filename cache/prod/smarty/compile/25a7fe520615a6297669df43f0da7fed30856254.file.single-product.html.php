<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-01-15 10:02:32
         compiled from "/var/www/vhosts/jacksburgers.fr/v2/templates/frontOffice/default/includes/single-product.html" */ ?>
<?php /*%%SmartyHeaderCode:14065777085c3da1a8df3095-65802425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a7fe520615a6297669df43f0da7fed30856254' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/v2/templates/frontOffice/default/includes/single-product.html',
      1 => 1547542892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14065777085c3da1a8df3095-65802425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FEATURE_AV_ID' => 0,
    'TITLE' => 0,
    'CHAPO' => 0,
    'TAXED_PRICE' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c3da1a8e06658_56775404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3da1a8e06658_56775404')) {function content_5c3da1a8e06658_56775404($_smarty_tpl) {?><li class="col-md-12 col-sm-12 col-xs-12">
    <div class="tab-content1">
        <div class="col-md-10 col-sm-10">

            
            <div class="pictos">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"feature_value",'feature'=>"1",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'name'=>"eee")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"feature_value",'feature'=>"1",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'name'=>"eee"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['FEATURE_AV_ID']->value==1) {?>
            <img class="indic" src="/images/chaud.png" alt=""/>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['FEATURE_AV_ID']->value==2) {?>
            <img class="indic" src="/images/froid.png" alt=""/>
            <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['FEATURE_AV_ID']->value==3) {?>
            <img class="indic" src="/images/spicy.png" alt=""/>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"feature_value",'feature'=>"1",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'name'=>"eee"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>



            <h2><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</h2>
            <h5><?php echo $_smarty_tpl->tpl_vars['CHAPO']->value;?>
</h5>
        </div>
        <div class="col-md-2 col-sm-2 tab-rt">
            <h3><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"symbol"),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['TAXED_PRICE']->value,'symbol'=>$_tmp13),$_smarty_tpl);?>
 </h3>
            <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" class="choice">CHOISIR</a>
        </div>
    </div>
</li>


<?php }} ?>
