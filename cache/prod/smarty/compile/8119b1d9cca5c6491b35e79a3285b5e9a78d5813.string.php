<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-15 12:22:46
         compiled from "8119b1d9cca5c6491b35e79a3285b5e9a78d5813" */ ?>
<?php /*%%SmartyHeaderCode:6452392965bed5706e8e4c2-81233043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8119b1d9cca5c6491b35e79a3285b5e9a78d5813' => 
    array (
      0 => '8119b1d9cca5c6491b35e79a3285b5e9a78d5813',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '6452392965bed5706e8e4c2-81233043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_utilities_go_up_url' => 0,
    'admin_utilities_in_place_edit_class' => 0,
    'admin_utilities_object_id' => 0,
    'admin_utilities_current_position' => 0,
    'admin_utilities_go_down_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed5706e95ff9_88389635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed5706e95ff9_88389635')) {function content_5bed5706e95ff9_88389635($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['admin_utilities_go_up_url']->value;?>
" class="u-position-up"><i class="glyphicon glyphicon-arrow-up"></i></a>
<span class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_in_place_edit_class']->value,$_smarty_tpl);?>
" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_object_id']->value,$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_current_position']->value,$_smarty_tpl);?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['admin_utilities_go_down_url']->value;?>
" class="u-position-down"><i class="glyphicon glyphicon-arrow-down"></i></a><?php }} ?>
