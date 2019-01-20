<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-20 21:14:24
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/HookNewsletter/templates/frontOffice/default/main-footer-body.html" */ ?>
<?php /*%%SmartyHeaderCode:2750643755bebe17967f818-75299790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5ccd83263813c5a1885c93cdf1b8b41db21a1a' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/HookNewsletter/templates/frontOffice/default/main-footer-body.html',
      1 => 1542744040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2750643755bebe17967f818-75299790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebe179698b01_61485420',
  'variables' => 
  array (
    'form' => 0,
    'label_attr' => 0,
    'name' => 0,
    'required' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebe179698b01_61485420')) {function content_5bebe179698b01_61485420($_smarty_tpl) {?><p id="newsletter-describe"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sign up to receive our latest news.",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
</p>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.front.newsletter")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.front.newsletter"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<form id="form-newsletter-mini" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/newsletter"),$_smarty_tpl);?>
" method="post">
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"email")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"email"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="form-group">
    <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
-mini"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Email address",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
</label>
    <input type="email" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
-mini" class="form-control" maxlength="255" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Your email address",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
" aria-describedby="newsletter-describe" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> aria-required="true" required<?php }?> autocomplete="off">
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"email"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<button type="submit" class="btn btn-subscribe"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Subscribe",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
</button>
</form>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.front.newsletter"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
