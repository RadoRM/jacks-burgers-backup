<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-20 21:14:05
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/includes/meta-seo.html" */ ?>
<?php /*%%SmartyHeaderCode:1098195855bebe3225527d1-59922365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d544704b7514a2691ec3f5779d4149d5eeb9734' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/includes/meta-seo.html',
      1 => 1542744042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1098195855bebe3225527d1-59922365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebe32255dd71_90828432',
  'variables' => 
  array (
    'META_DESCRIPTION' => 0,
    'CHAPO' => 0,
    'META_KEYWORDS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebe32255dd71_90828432')) {function content_5bebe32255dd71_90828432($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/core/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['META_DESCRIPTION']->value) {?>
<meta name="description" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['META_DESCRIPTION']->value,$_smarty_tpl);?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['CHAPO']->value) {?>
<meta name="description" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['CHAPO']->value,150,''),$_smarty_tpl);?>
">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['META_KEYWORDS']->value) {?><meta name="keywords" content="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['META_KEYWORDS']->value,$_smarty_tpl);?>
"><?php }?><?php }} ?>
