<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:33:12
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/generic-confirm-dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:13694967585bed57070fd990-99400928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ece4c1b24aa0eef835fd43ebf412bb7c1597674' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/generic-confirm-dialog.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13694967585bed57070fd990-99400928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed5707111a84_38059147',
  'variables' => 
  array (
    'dialog_id' => 0,
    'dialog_title' => 0,
    'form_method' => 0,
    'form_action' => 0,
    'form_id' => 0,
    'dialog_message' => 0,
    'form_content' => 0,
    'dialog_cancel_label' => 0,
    'dialog_ok_label' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed5707111a84_38059147')) {function content_5bed5707111a84_38059147($_smarty_tpl) {?>
<div class="modal fade" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_title']->value,$_smarty_tpl);?>
</h3>
            </div>

            <form method="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['form_method']->value)===null||$tmp==='' ? 'POST' : $tmp),$_smarty_tpl);?>
" action="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['form_action']->value,$_smarty_tpl);?>
" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['form_id']->value)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['dialog_id']->value)."_form" : $tmp),$_smarty_tpl);?>
">

	            <div class="modal-body">
	                <?php echo $_smarty_tpl->tpl_vars['dialog_message']->value;?>


                    <?php echo $_smarty_tpl->tpl_vars['form_content']->value;?>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No"),$_smarty_tpl);?>
<?php $_tmp37=ob_get_clean();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['dialog_cancel_label']->value)===null||$tmp==='' ? $_tmp37 : $tmp),$_smarty_tpl);?>
</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Yes"),$_smarty_tpl);?>
<?php $_tmp38=ob_get_clean();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['dialog_ok_label']->value)===null||$tmp==='' ? $_tmp38 : $tmp),$_smarty_tpl);?>
</button>
                </div>
            </form>

        </div>
    </div>
</div><?php }} ?>
