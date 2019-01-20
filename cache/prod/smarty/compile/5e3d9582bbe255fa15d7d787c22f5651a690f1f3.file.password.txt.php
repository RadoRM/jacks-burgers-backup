<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-12-01 11:38:10
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/email/default/password.txt" */ ?>
<?php /*%%SmartyHeaderCode:16247170165bec83d13d5b38-50706243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e3d9582bbe255fa15d7d787c22f5651a690f1f3' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/email/default/password.txt',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16247170165bec83d13d5b38-50706243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bec83d13e77c3_83366257',
  'variables' => 
  array (
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bec83d13e77c3_83366257')) {function content_5bec83d13e77c3_83366257($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'email.default'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Hello,"),$_smarty_tpl);?>


<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You have requested a new password for your account at %store_name",'store_name'=>$_tmp11),$_smarty_tpl);?>
.

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Your new password is %pass",'pass'=>$_smarty_tpl->tpl_vars['password']->value),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'You can change your password in your user account by opening the "Change my password" link under your personal information'),$_smarty_tpl);?>
.

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Kind regards'),$_smarty_tpl);?>
,
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"The %store team.",'store'=>$_tmp12),$_smarty_tpl);?>


<?php }} ?>
