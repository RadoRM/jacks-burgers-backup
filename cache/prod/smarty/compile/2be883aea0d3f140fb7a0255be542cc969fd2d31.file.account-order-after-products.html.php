<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-28 11:22:37
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/VirtualProductDelivery/templates/frontOffice/default/account-order-after-products.html" */ ?>
<?php /*%%SmartyHeaderCode:4708218575bebfd9d566be1-87876846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2be883aea0d3f140fb7a0255be542cc969fd2d31' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/VirtualProductDelivery/templates/frontOffice/default/account-order-after-products.html',
      1 => 1542744040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4708218575bebfd9d566be1-87876846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebfd9d5921b3_12245731',
  'variables' => 
  array (
    'STATUS' => 0,
    'VIRTUAL' => 0,
    'ID' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebfd9d5921b3_12245731')) {function content_5bebfd9d5921b3_12245731($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order",'name'=>"virtual.order",'id'=>((string)$_smarty_tpl->tpl_vars['order_id']->value),'limit'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order",'name'=>"virtual.order",'id'=>((string)$_smarty_tpl->tpl_vars['order_id']->value),'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['STATUS']->value>=2&&$_smarty_tpl->tpl_vars['VIRTUAL']->value) {?>
    <table class="table table-condensed table-order" summary="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"List of downloadable files",'d'=>'virtualproductdelivery.fo.default'),$_smarty_tpl);?>
">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"File",'d'=>'virtualproductdelivery.fo.default'),$_smarty_tpl);?>
</th>
                <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Download",'d'=>'virtualproductdelivery.fo.default'),$_smarty_tpl);?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"virtual.order.products",'type'=>"order_product",'virtual'=>"1",'order'=>$_tmp14)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"virtual.order.products",'type'=>"order_product",'virtual'=>"1",'order'=>$_tmp14), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <tr>
                <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</td>
                <td>
                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/account/download/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
" class="btn">
                    <span class="glyphicon glyphicon-download"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Download",'d'=>'virtualproductdelivery.fo.default'),$_smarty_tpl);?>

                    </a>
                </td>
            </tr>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"virtual.order.products",'type'=>"order_product",'virtual'=>"1",'order'=>$_tmp14), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </tbody>
    </table>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order",'name'=>"virtual.order",'id'=>((string)$_smarty_tpl->tpl_vars['order_id']->value),'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
