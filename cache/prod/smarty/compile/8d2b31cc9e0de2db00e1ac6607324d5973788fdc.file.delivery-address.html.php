<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-12-15 18:28:45
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/VirtualProductDelivery/templates/pdf/default/delivery-address.html" */ ?>
<?php /*%%SmartyHeaderCode:8843667365c1539cd37d699-68447714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d2b31cc9e0de2db00e1ac6607324d5973788fdc' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/VirtualProductDelivery/templates/pdf/default/delivery-address.html',
      1 => 1542744040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8843667365c1539cd37d699-68447714',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c1539cd3e00b2_89812572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1539cd3e00b2_89812572')) {function content_5c1539cd3e00b2_89812572($_smarty_tpl) {?><p>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No delivery address for this delivery method",'d'=>"virtualproductdelivery.pdf.default"),$_smarty_tpl);?>

</p><?php }} ?>
