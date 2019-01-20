<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-20 21:14:05
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/HookCart/templates/frontOffice/default/main-navbar-secondary.html" */ ?>
<?php /*%%SmartyHeaderCode:18075193815bebe1791b4f97-43874754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cefb8943cdfc75434bb1f70e09e41d20a38bac4' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/HookCart/templates/frontOffice/default/main-navbar-secondary.html',
      1 => 1542744040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18075193815bebe1791b4f97-43874754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebe1792157c0_96892663',
  'variables' => 
  array (
    'IS_PROMO' => 0,
    'PROMO_TAXED_PRICE' => 0,
    'TAXED_PRICE' => 0,
    'IMAGE_URL' => 0,
    'QUANTITY' => 0,
    'TITLE' => 0,
    'real_price' => 0,
    'total_price' => 0,
    'asset_url' => 0,
    'store_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebe1792157c0_96892663')) {function content_5bebe1792157c0_96892663($_smarty_tpl) {?>
<div class="cart-container">
<div class="article"><a href="#" class="cart"><b class="badge"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cart'][0][0]->cartDataAccess(array('attr'=>"count_item"),$_smarty_tpl);?>
</b> <span>articles dans le panier</span><i
        class="fa fa-chevron-down"></i></a>

    <div class="article-drop">
        <ul>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"cart",'name'=>"cartloop")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"cart",'name'=>"cartloop"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['IS_PROMO']->value==1) {?>
            <?php $_smarty_tpl->tpl_vars["real_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['PROMO_TAXED_PRICE']->value, null, 0);?>
            <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["real_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['TAXED_PRICE']->value, null, 0);?>
            <?php }?>
            

            <li><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"product",'name'=>"productloop",'id'=>((string)$_smarty_tpl->tpl_vars['PRODUCT_ID']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"product",'name'=>"productloop",'id'=>((string)$_smarty_tpl->tpl_vars['PRODUCT_ID']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"image",'name'=>"catloop",'category'=>((string)$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"catloop",'category'=>((string)$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['IMAGE_URL']->value,$_smarty_tpl);?>
" alt="$TITLE">
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"catloop",'category'=>((string)$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"product",'name'=>"productloop",'id'=>((string)$_smarty_tpl->tpl_vars['PRODUCT_ID']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<span><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['QUANTITY']->value,$_smarty_tpl);?>
</span> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
 <span class="cost"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(sprintf("%.2f",$_smarty_tpl->tpl_vars['real_price']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"symbol"),$_smarty_tpl);?>
</span></li>
            <?php $_smarty_tpl->tpl_vars["total_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['total_price']->value+($_smarty_tpl->tpl_vars['QUANTITY']->value*$_smarty_tpl->tpl_vars['real_price']->value), null, 0);?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"cart",'name'=>"cartloop"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        </ul>
        <h2>TOTAL : <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(sprintf("%.2f",$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currency'][0][0]->currencyDataAccess(array('attr'=>"symbol"),$_smarty_tpl);?>
</h2>

        <div class="paying">
            <a href="/cart" class="pay">Voir mon panier</a>
            <a href="/cart" class="pay1"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/images/coin.png')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images/coin.png'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
"><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images/coin.png'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
PAYER</a>
        </div>
    </div>
</div>
</div><?php }} ?>
