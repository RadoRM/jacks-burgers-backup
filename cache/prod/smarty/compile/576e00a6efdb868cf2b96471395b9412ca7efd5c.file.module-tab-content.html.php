<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:34
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/module-tab-content.html" */ ?>
<?php /*%%SmartyHeaderCode:8224018465bed572f0c14c2-98063255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '576e00a6efdb868cf2b96471395b9412ca7efd5c' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/module-tab-content.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8224018465bed572f0c14c2-98063255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572f0d14e9_22023367',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572f0d14e9_22023367')) {function content_5bed572f0d14e9_22023367($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array("module_include", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>((string)$_smarty_tpl->tpl_vars['hook']->value),'location'=>((string)$_smarty_tpl->tpl_vars['location']->value),'id'=>((string)$_smarty_tpl->tpl_vars['id']->value),'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'countvar'=>"module_count"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (trim(Smarty::$_smarty_vars['capture']['module_include'])=='') {?>
    <br />

        <div class="alert alert-info">
            <p class="text-center" style="font-size: 2.2em"><span class="glyphicon glyphicon-info-sign"></span></p>
            <p class="text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"There is currently no active module here."),$_smarty_tpl);?>
</p>
        </div>

<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['module_include'];?>

<?php }?>
<?php }} ?>
