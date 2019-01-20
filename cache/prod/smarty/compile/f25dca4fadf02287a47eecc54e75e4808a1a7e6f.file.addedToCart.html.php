<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:24:12
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/includes/addedToCart.html" */ ?>
<?php /*%%SmartyHeaderCode:627201685bec0983737d54-37712279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f25dca4fadf02287a47eecc54e75e4808a1a7e6f' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/includes/addedToCart.html',
      1 => 1542744042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '627201685bec0983737d54-37712279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bec09837d5978_14962338',
  'variables' => 
  array (
    'DEFAULT_CATEGORY' => 0,
    'IMAGE_URL' => 0,
    'TITLE' => 0,
    'ATTRIBUTE_TITLE' => 0,
    'ATTRIBUTE_AVAILABILITY_TITLE' => 0,
    'IS_PROMO' => 0,
    'TAXED_PROMO_PRICE' => 0,
    'TAXED_PRICE' => 0,
    'ID' => 0,
    'ACCESSORY_ID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bec09837d5978_14962338')) {function content_5bec09837d5978_14962338($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set_previous_url'][0][0]->setPreviousUrlFunction(array('ignore_current'=>"1"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'fo.default'),$_smarty_tpl);?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['product'][0][0]->productDataAccess(array('attr'=>"id"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"product",'name'=>"add_product_to_cart",'id'=>$_tmp1)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"product",'name'=>"add_product_to_cart",'id'=>$_tmp1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="clearfix">
    <table>
        <tr>
            <td colspan="3">
                <h3 class="text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"The product has been added to your cart"),$_smarty_tpl);?>
</h3>
            </td>
        </tr>
        <tr>
            <td class="col-md-4 text-right">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"image",'category'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'name'=>"product_thumbnail")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'category'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'name'=>"product_thumbnail"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['IMAGE_URL']->value,$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" />
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'category'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'name'=>"product_thumbnail"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </td>
            <td class="col-md-4">




                <h2><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</h2>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"attribute_combination",'name'=>"product_options",'product_sale_elements'=>((string)$_GET['pse_id']))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"attribute_combination",'name'=>"product_options",'product_sale_elements'=>((string)$_GET['pse_id'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <p><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_TITLE']->value,$_smarty_tpl);?>
 : <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_AVAILABILITY_TITLE']->value,$_smarty_tpl);?>
</p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"attribute_combination",'name'=>"product_options",'product_sale_elements'=>((string)$_GET['pse_id'])), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </td>
            <td class="col-md-4">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"product_sale_elements",'name'=>"product_price",'id'=>((string)$_GET['pse_id']))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"product_sale_elements",'name'=>"product_price",'id'=>((string)$_GET['pse_id'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['IS_PROMO']->value==1) {?>
                        <?php $_smarty_tpl->tpl_vars["real_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['TAXED_PROMO_PRICE']->value, null, 0);?>
                        <div class="special-price"><span class="price"><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"symbol"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['TAXED_PROMO_PRICE']->value,'symbol'=>$_tmp2),$_smarty_tpl);?>
</span></div>
                        <small class="old-price"> <span class="price"><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"symbol"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['TAXED_PRICE']->value,'symbol'=>$_tmp3),$_smarty_tpl);?>
</span></small>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["real_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['TAXED_PRICE']->value, null, 0);?>
                        <div class="special-price"><span class="price"><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"symbol"),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['TAXED_PRICE']->value,'symbol'=>$_tmp4),$_smarty_tpl);?>
</span></div>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"product_sale_elements",'name'=>"product_price",'id'=>((string)$_GET['pse_id'])), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </td>
        </tr>
    </table>

    <?php if ($_smarty_tpl->tpl_vars['ID']->value==68||$_smarty_tpl->tpl_vars['ID']->value==70||$_smarty_tpl->tpl_vars['ID']->value==71||$_smarty_tpl->tpl_vars['ID']->value==8||$_smarty_tpl->tpl_vars['ID']->value==9||$_smarty_tpl->tpl_vars['ID']->value==10||$_smarty_tpl->tpl_vars['ID']->value==11||$_smarty_tpl->tpl_vars['ID']->value==12||$_smarty_tpl->tpl_vars['ID']->value==13||$_smarty_tpl->tpl_vars['ID']->value==39||$_smarty_tpl->tpl_vars['ID']->value==40) {?>

        <?php if ($_smarty_tpl->tpl_vars['ID']->value==68) {?>
        <a href="/sauce-jacks.html" role="button" class="btn btn_add_to_cart pull-right"><span>Choisir ma sauce burger</span></a>
        <?php } elseif ($_smarty_tpl->tpl_vars['ID']->value==70) {?>
        <a href="/sauce-vegetarien.html" role="button" class="btn btn_add_to_cart pull-right"><span>Choisir ma sauce burger</span></a>
        <?php } elseif ($_smarty_tpl->tpl_vars['ID']->value==71) {?>
        <a href="/sauce-montagnard.html" role="button" class="btn btn_add_to_cart pull-right"><span>Choisir ma sauce burger</span></a>

        <?php } elseif ($_smarty_tpl->tpl_vars['ID']->value==8||$_smarty_tpl->tpl_vars['ID']->value==9||$_smarty_tpl->tpl_vars['ID']->value==10||$_smarty_tpl->tpl_vars['ID']->value==11||$_smarty_tpl->tpl_vars['ID']->value==12||$_smarty_tpl->tpl_vars['ID']->value==13||$_smarty_tpl->tpl_vars['ID']->value==39||$_smarty_tpl->tpl_vars['ID']->value==40) {?>
    
    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/cart"),$_smarty_tpl);?>
" role="button" class="btn btn_add_to_cart pull-right"><span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"View Cart"),$_smarty_tpl);?>
</span></a>
              

<?php }?>

    </span></a>
    <?php } else { ?>



    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/cart"),$_smarty_tpl);?>
" role="button" class="btn btn_add_to_cart pull-right"><span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"View Cart"),$_smarty_tpl);?>
</span></a>
    <button type="button" class="btn btn-checkout pull-right" data-dismiss="modal"><span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Continue Shopping"),$_smarty_tpl);?>
</span></button>

    <?php }?>



</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"accessories")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"accessories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <aside id="products-upsell" role="complementary" aria-labelledby="products-upsell-label">
        <div class="products-heading">
            <h3 id="products-upsell-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Upsell Products"),$_smarty_tpl);?>
</h3>
        </div>
        <div class="products-content">
            <ul class="products-grid product-col-3 hover-effect">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"accessory",'name'=>"accessories",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'order'=>"random",'limit'=>"3")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"accessory",'name'=>"accessories",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'order'=>"random",'limit'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php echo $_smarty_tpl->getSubTemplate ("includes/single-product.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['ACCESSORY_ID']->value,'hasBtn'=>false,'hasDescription'=>false,'width'=>"218",'height'=>"146"), 0);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"accessory",'name'=>"accessories",'product'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'order'=>"random",'limit'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </aside><!-- #products-upsell -->
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"accessories"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"product",'name'=>"add_product_to_cart",'id'=>$_tmp1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
