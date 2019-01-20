<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:24:29
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/misc/checkout-progress.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20134723675bebf71ee32ee4-67612419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f0949971ba4be7933826e6f5f18827f40565b40' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/misc/checkout-progress.tpl',
      1 => 1542744042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20134723675bebf71ee32ee4-67612419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebf71ee66350_87369182',
  'variables' => 
  array (
    'step' => 0,
    'step1' => 0,
    'step2' => 0,
    'step3' => 0,
    'step4' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebf71ee66350_87369182')) {function content_5bebf71ee66350_87369182($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['step']->value=="cart") {?>
    <?php $_smarty_tpl->tpl_vars["step1"] = new Smarty_variable(" active", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step2"] = new Smarty_variable(" disabled", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step3"] = new Smarty_variable(" disabled", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step4"] = new Smarty_variable(" disabled", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value=="delivery") {?>
    <?php $_smarty_tpl->tpl_vars["step1"] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step2"] = new Smarty_variable(" active", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step3"] = new Smarty_variable(" disabled", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step4"] = new Smarty_variable(" disabled", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value=="invoice") {?>
    <?php $_smarty_tpl->tpl_vars["step1"] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step2"] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step3"] = new Smarty_variable(" active", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step4"] = new Smarty_variable(" disabled", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value=="last") {?>
    <?php $_smarty_tpl->tpl_vars["step1"] = new Smarty_variable(" disabled", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step2"] = new Smarty_variable(" disabled", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step3"] = new Smarty_variable(" disabled", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["step4"] = new Smarty_variable(" active", null, 0);?>
<?php }?>

<div class="btn-group checkout-progress">
    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/cart"),$_smarty_tpl);?>
" role="button" class="btn btn-step<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['step1']->value,$_smarty_tpl);?>
"><span class="step-nb">1</span> <span class="step-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Your Cart"),$_smarty_tpl);?>
</span></a>
    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/order/delivery"),$_smarty_tpl);?>
" role="button" class="btn btn-step<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['step2']->value,$_smarty_tpl);?>
"><span class="step-nb">2</span> <span class="step-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Billing and delivery"),$_smarty_tpl);?>
</span></a>
    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/order/invoice"),$_smarty_tpl);?>
" role="button" class="btn btn-step<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['step3']->value,$_smarty_tpl);?>
"><span class="step-nb">3</span> <span class="step-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Check my order"),$_smarty_tpl);?>
</span></a>
    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/order/placed"),$_smarty_tpl);?>
" role="button" class="btn btn-step<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['step4']->value,$_smarty_tpl);?>
"><span class="step-nb">4</span> <span class="step-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Secure payment"),$_smarty_tpl);?>
</span></a>
</div>
<?php }} ?>
