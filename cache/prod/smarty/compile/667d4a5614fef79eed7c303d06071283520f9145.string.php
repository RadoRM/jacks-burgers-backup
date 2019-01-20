<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-14 11:38:16
         compiled from "667d4a5614fef79eed7c303d06071283520f9145" */ ?>
<?php /*%%SmartyHeaderCode:18651951875bebfb18ae40f0-96024176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '667d4a5614fef79eed7c303d06071283520f9145' => 
    array (
      0 => '667d4a5614fef79eed7c303d06071283520f9145',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '18651951875bebfb18ae40f0-96024176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_ref' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebfb18aea522_92036426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebfb18aea522_92036426')) {function content_5bebfb18aea522_92036426($_smarty_tpl) {?>Cher client,
Ce message confirme le paiement de votre commande numero <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['order_ref']->value,$_smarty_tpl);?>
 via Payzen sur notre boutique.
Votre facture est maintenant disponible dans votre compte client à l'adresse <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"url_site"),$_smarty_tpl);?>

Merci encore pour votre achat !
L'équipe <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php }} ?>
