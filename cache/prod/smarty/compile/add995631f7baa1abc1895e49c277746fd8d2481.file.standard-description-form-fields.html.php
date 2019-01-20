<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:33
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/standard-description-form-fields.html" */ ?>
<?php /*%%SmartyHeaderCode:12900573155bed572e84c625-83399912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'add995631f7baa1abc1895e49c277746fd8d2481' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/standard-description-form-fields.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12900573155bed572e84c625-83399912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572e856c09_56033513',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572e856c09_56033513')) {function content_5bed572e856c09_56033513($_smarty_tpl) {?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render_form_field'][0][0]->standardFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'title'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render_form_field'][0][0]->standardFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"chapo"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render_form_field'][0][0]->standardFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"description",'extra_class'=>"wysiwyg"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render_form_field'][0][0]->standardFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"postscriptum"),$_smarty_tpl);?>
<?php }} ?>
