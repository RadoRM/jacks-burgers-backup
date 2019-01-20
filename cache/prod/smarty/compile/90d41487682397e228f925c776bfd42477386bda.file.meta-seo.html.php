<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-01-15 10:02:32
         compiled from "/var/www/vhosts/jacksburgers.fr/v2/templates/frontOffice/default/includes/meta-seo.html" */ ?>
<?php /*%%SmartyHeaderCode:4296368125c3da1a8aed9a2-28695878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90d41487682397e228f925c776bfd42477386bda' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/v2/templates/frontOffice/default/includes/meta-seo.html',
      1 => 1547542892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4296368125c3da1a8aed9a2-28695878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'META_DESCRIPTION' => 0,
    'CHAPO' => 0,
    'META_KEYWORDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c3da1a8af8802_22421089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3da1a8af8802_22421089')) {function content_5c3da1a8af8802_22421089($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/jacksburgers.fr/v2/core/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['META_DESCRIPTION']->value) {?>
<meta name="description" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['META_DESCRIPTION']->value,$_smarty_tpl);?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['CHAPO']->value) {?>
<meta name="description" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['CHAPO']->value,150,''),$_smarty_tpl);?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['META_KEYWORDS']->value) {?><meta name="keywords" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['META_KEYWORDS']->value,$_smarty_tpl);?>
"><?php }?><?php }} ?>
