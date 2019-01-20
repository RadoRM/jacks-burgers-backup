<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:34
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/backOffice/default/commons.html" */ ?>
<?php /*%%SmartyHeaderCode:7979468365bed572f123573-46227370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d9229f185968d3bb4dfc8526e57c2f3936cc7b0' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/backOffice/default/commons.html',
      1 => 1542744039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7979468365bed572f123573-46227370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572f13c311_05801666',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572f13c311_05801666')) {function content_5bed572f13c311_05801666($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['comment_status'] = new Smarty_variable(array(), null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Pending"),$_smarty_tpl);?>
<?php $_tmp61=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('comment_status', null, 0);
$_smarty_tpl->tpl_vars['comment_status']->value['0'] = array('label'=>$_tmp61,'css'=>'default');?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Accepted"),$_smarty_tpl);?>
<?php $_tmp62=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('comment_status', null, 0);
$_smarty_tpl->tpl_vars['comment_status']->value['1'] = array('label'=>$_tmp62,'css'=>'success');?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Refused"),$_smarty_tpl);?>
<?php $_tmp63=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('comment_status', null, 0);
$_smarty_tpl->tpl_vars['comment_status']->value['2'] = array('label'=>$_tmp63,'css'=>'danger');?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Abused"),$_smarty_tpl);?>
<?php $_tmp64=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('comment_status', null, 0);
$_smarty_tpl->tpl_vars['comment_status']->value['3'] = array('label'=>$_tmp64,'css'=>'warning');?>

        <?php }} ?>
