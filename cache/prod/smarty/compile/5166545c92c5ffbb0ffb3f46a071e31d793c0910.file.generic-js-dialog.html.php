<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:33:19
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/generic-js-dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:11390385775bed570711f414-08404601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5166545c92c5ffbb0ffb3f46a071e31d793c0910' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/generic-js-dialog.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11390385775bed570711f414-08404601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed5707130856_54573209',
  'variables' => 
  array (
    'form_name' => 0,
    'form_error' => 0,
    'dialog_id' => 0,
    'additionnal_js_code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed5707130856_54573209')) {function content_5bed5707130856_54573209($_smarty_tpl) {?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>((string)$_smarty_tpl->tpl_vars['form_name']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>((string)$_smarty_tpl->tpl_vars['form_name']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['form_error']->value) {?>
        $('#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
').modal();
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>((string)$_smarty_tpl->tpl_vars['form_name']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>




$('#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
').on('hidden.bs.modal', function() {

    // Hide error message
    $('#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
_error').remove();

    // Clear error status
    $("#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
 .error").removeClass('error');

    $('#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
 .form-group').removeClass('has-error')

    // Empty field values
    $("#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
 input[type=text], #<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
 select").val('');

    // Uncheck boxes
    $("#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
 input[type=checkbox]").removeAttr('checked');

    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['additionnal_js_code']->value)===null||$tmp==='' ? '' : $tmp),$_smarty_tpl);?>

});<?php }} ?>
