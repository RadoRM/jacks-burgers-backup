<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-14 11:38:16
         compiled from "c0022e8b61d4c8e2ce6624872d79264fe1301752" */ ?>
<?php /*%%SmartyHeaderCode:9136803405bebfb186cb841-94335583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0022e8b61d4c8e2ce6624872d79264fe1301752' => 
    array (
      0 => 'c0022e8b61d4c8e2ce6624872d79264fe1301752',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '9136803405bebfb186cb841-94335583',
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
  'unifunc' => 'content_5bebfb186ea6c8_07858262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebfb186ea6c8_07858262')) {function content_5bebfb186ea6c8_07858262($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"order.invoice",'type'=>"order",'id'=>$_smarty_tpl->tpl_vars['order_id']->value,'customer'=>"*",'limit'=>"1",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"order.invoice",'type'=>"order",'id'=>$_smarty_tpl->tpl_vars['order_id']->value,'customer'=>"*",'limit'=>"1",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<p>
Votre commande <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
 a été validé. Nous sommes en train de la préparer.</p>
<!--<p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Produits de votre commande :"),$_smarty_tpl);?>
</p>
<ul>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order_product",'name'=>"order-products",'order'=>$_smarty_tpl->tpl_vars['ID']->value,'virtual'=>"1",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product",'name'=>"order-products",'order'=>$_smarty_tpl->tpl_vars['ID']->value,'virtual'=>"1",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<li>
    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
 : <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/account/download/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/account/download/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
</a>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"combinations")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"combinations"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <br><em>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order_product_attribute_combination",'name'=>"combinations",'order_product'=>$_smarty_tpl->tpl_vars['ID']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product_attribute_combination",'name'=>"combinations",'order_product'=>$_smarty_tpl->tpl_vars['ID']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_TITLE']->value,$_smarty_tpl);?>
 - <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_AVAILABILITY_TITLE']->value,$_smarty_tpl);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product_attribute_combination",'name'=>"combinations",'order_product'=>$_smarty_tpl->tpl_vars['ID']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </em>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"combinations"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product",'name'=>"order-products",'order'=>$_smarty_tpl->tpl_vars['ID']->value,'virtual'=>"1",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</ul>-->
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"order.invoice",'type'=>"order",'id'=>$_smarty_tpl->tpl_vars['order_id']->value,'customer'=>"*",'limit'=>"1",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!--<p><em>
Vous devez être connecté à votre compte pour pouvoir télécharger le fichier.</em></p>-->
<p>N'hésitez pas à nous contacter pour toute information complémentaire.</p>
<p>Cordialement</p><?php }} ?>
