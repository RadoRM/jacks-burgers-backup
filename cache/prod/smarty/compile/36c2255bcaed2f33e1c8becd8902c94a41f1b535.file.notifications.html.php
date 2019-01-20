<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:33
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/notifications.html" */ ?>
<?php /*%%SmartyHeaderCode:11606826525bed572eaa9600-28587560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36c2255bcaed2f33e1c8becd8902c94a41f1b535' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/notifications.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11606826525bed572eaa9600-28587560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572eab50a3_09436779',
  'variables' => 
  array (
    'message' => 0,
    'type' => 0,
    'dismissable' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572eab50a3_09436779')) {function content_5bed572eab50a3_09436779($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
<div class="alert alert-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? "danger" : $tmp),$_smarty_tpl);?>
<?php if (!$_smarty_tpl->tpl_vars['dismissable']->value) {?> alert-dismissable<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['dismissable']->value) {?><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php }?>
    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['message']->value,$_smarty_tpl);?>

</div>
<?php }?><?php }} ?>
