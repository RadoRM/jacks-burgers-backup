<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:33
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/forms/standard/form-field-attributes-renderer.html" */ ?>
<?php /*%%SmartyHeaderCode:3943519885bed572e901435-70442143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ed0aa62c5ddaca789c48a1f394c8f8f720f06f' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/forms/standard/form-field-attributes-renderer.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3943519885bed572e901435-70442143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572e97cc71_93715613',
  'variables' => 
  array (
    'value' => 0,
    'field_value' => 0,
    'label_attr' => 0,
    'form' => 0,
    'field_name' => 0,
    'value_key' => 0,
    'disabled' => 0,
    'read_only' => 0,
    'max_length' => 0,
    'required' => 0,
    'type' => 0,
    'name' => 0,
    'attr' => 0,
    'field_extra_class' => 0,
    'checked' => 0,
    'sDisabled' => 0,
    'sReadonly' => 0,
    'sRequired' => 0,
    'multiple' => 0,
    'attr_list' => 0,
    'sMaxLength' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572e97cc71_93715613')) {function content_5bed572e97cc71_93715613($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['value']->value==''||$_smarty_tpl->tpl_vars['value']->value==null)&&isset($_smarty_tpl->tpl_vars['field_value']->value)&&$_smarty_tpl->tpl_vars['field_value']->value!==''&&$_smarty_tpl->tpl_vars['field_value']->value!==null) {?><?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['field_value']->value, null, 0);?><?php }?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
<?php $_tmp30=ob_get_clean();?><?php if (empty($_tmp30)) {?><?php $_smarty_tpl->createLocalArrayVariable('label_attr', null, 0);
$_smarty_tpl->tpl_vars['label_attr']->value['for'] = ((string)$_smarty_tpl->tpl_vars['form']->value->getName())."-id-".((string)$_smarty_tpl->tpl_vars['field_name']->value);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['value_key']->value)) {?><?php $_smarty_tpl->createLocalArrayVariable('label_attr', null, 0);
$_smarty_tpl->tpl_vars['label_attr']->value['for'] = ((string)$_smarty_tpl->tpl_vars['label_attr']->value['for'])."_".((string)$_smarty_tpl->tpl_vars['value_key']->value);?><?php }?><?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?><?php $_smarty_tpl->tpl_vars['sDisabled'] = new Smarty_variable('disabled', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['read_only']->value) {?><?php $_smarty_tpl->tpl_vars['sRead_only'] = new Smarty_variable('readonly', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['max_length']->value) {?><?php $_smarty_tpl->tpl_vars['sMaxLength'] = new Smarty_variable("maxlength=\"".((string)$_smarty_tpl->tpl_vars['max_length']->value)."\"", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['required']->value) {?><?php $_smarty_tpl->tpl_vars['sRequired'] = new Smarty_variable('aria-required="true" required', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['type']->value=='hidden') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['attr']->value,$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='checkbox'||$_smarty_tpl->tpl_vars['type']->value=='radio') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='choice') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?> <?php if ($_smarty_tpl->tpl_vars['attr_list']->value['size']) {?>size="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['attr_list']->value['size'],$_smarty_tpl);?>
"<?php }?> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='collection') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
[]" class="form-control <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?> <?php if ($_smarty_tpl->tpl_vars['attr_list']->value['size']) {?>size="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['attr_list']->value['size'],$_smarty_tpl);?>
"<?php }?> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='textarea') {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['attr_list']->value['rows']) {?>rows="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['attr_list']->value['rows'],$_smarty_tpl);?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['sMaxLength']->value;?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php } else { ?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" class="form-control <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['field_extra_class']->value,$_smarty_tpl);?>
" <?php echo $_smarty_tpl->tpl_vars['sMaxLength']->value;?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sDisabled']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['sReadonly']->value,$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['sRequired']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
<?php }?><?php }} ?>
