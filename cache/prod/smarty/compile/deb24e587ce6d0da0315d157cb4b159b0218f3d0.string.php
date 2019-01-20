<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-14 11:38:16
         compiled from "deb24e587ce6d0da0315d157cb4b159b0218f3d0" */ ?>
<?php /*%%SmartyHeaderCode:4291942535bebfb18793fe5-49264829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deb24e587ce6d0da0315d157cb4b159b0218f3d0' => 
    array (
      0 => 'deb24e587ce6d0da0315d157cb4b159b0218f3d0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '4291942535bebfb18793fe5-49264829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_id' => 0,
    'REF' => 0,
    'ID' => 0,
    'TITLE' => 0,
    'ATTRIBUTE_TITLE' => 0,
    'ATTRIBUTE_AVAILABILITY_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebfb187abb29_45984540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebfb187abb29_45984540')) {function content_5bebfb187abb29_45984540($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"order.invoice",'type'=>"order",'id'=>$_smarty_tpl->tpl_vars['order_id']->value,'customer'=>"*",'limit'=>"1",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"order.invoice",'type'=>"order",'id'=>$_smarty_tpl->tpl_vars['order_id']->value,'customer'=>"*",'limit'=>"1",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

Votre commande <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
 a été validé. Nous sommes en train de la préparer.
----------------------------------------------------------------------
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Produits de votre commande :"),$_smarty_tpl);?>

----------------------------------------------------------------------
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order_product",'name'=>"order-products",'order'=>$_smarty_tpl->tpl_vars['ID']->value,'virtual'=>"1",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product",'name'=>"order-products",'order'=>$_smarty_tpl->tpl_vars['ID']->value,'virtual'=>"1",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
 <!--: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/account/download/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
-->
<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"combinations")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"combinations"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order_product_attribute_combination",'name'=>"combinations",'order_product'=>$_smarty_tpl->tpl_vars['ID']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product_attribute_combination",'name'=>"combinations",'order_product'=>$_smarty_tpl->tpl_vars['ID']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_TITLE']->value,$_smarty_tpl);?>
 - <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_AVAILABILITY_TITLE']->value,$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product_attribute_combination",'name'=>"combinations",'order_product'=>$_smarty_tpl->tpl_vars['ID']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"combinations"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

----------------------------------------------------------------------
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product",'name'=>"order-products",'order'=>$_smarty_tpl->tpl_vars['ID']->value,'virtual'=>"1",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"order.invoice",'type'=>"order",'id'=>$_smarty_tpl->tpl_vars['order_id']->value,'customer'=>"*",'limit'=>"1",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!--Vous devez être connecté à votre compte pour pouvoir télécharger le fichier.-->
N'hésitez pas à nous contacter pour toute information complémentaire.
Cordialement<?php }} ?>
