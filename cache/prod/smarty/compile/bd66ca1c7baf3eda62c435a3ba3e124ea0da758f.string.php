<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-15 12:22:46
         compiled from "bd66ca1c7baf3eda62c435a3ba3e124ea0da758f" */ ?>
<?php /*%%SmartyHeaderCode:2225175945bed5706e1d732-15524372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd66ca1c7baf3eda62c435a3ba3e124ea0da758f' => 
    array (
      0 => 'bd66ca1c7baf3eda62c435a3ba3e124ea0da758f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2225175945bed5706e1d732-15524372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_utilities_sort_direction' => 0,
    'admin_utilities_sorting_url' => 0,
    'admin_utilities_header_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed5706e26187_90411875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed5706e26187_90411875')) {function content_5bed5706e26187_90411875($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['admin_utilities_sort_direction']->value=='up') {?>
    <i class="glyphicon glyphicon-chevron-up"></i>
<?php } elseif ($_smarty_tpl->tpl_vars['admin_utilities_sort_direction']->value=='down') {?>
    <i class="glyphicon glyphicon-chevron-down"></i>
<?php }?>
<a href="<?php echo $_smarty_tpl->tpl_vars['admin_utilities_sorting_url']->value;?>
" class="u-sort-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_sort_direction']->value,$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['admin_utilities_header_text']->value,$_smarty_tpl);?>
</a><?php }} ?>
