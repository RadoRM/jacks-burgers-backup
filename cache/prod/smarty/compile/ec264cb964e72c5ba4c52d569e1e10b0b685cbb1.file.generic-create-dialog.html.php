<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:33:19
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/generic-create-dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:8879288505bed5707089393-41887785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec264cb964e72c5ba4c52d569e1e10b0b685cbb1' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/generic-create-dialog.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8879288505bed5707089393-41887785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed57070a79e6_05177653',
  'variables' => 
  array (
    'form_error_message' => 0,
    'dialog_id' => 0,
    'dialog_title' => 0,
    'form_action' => 0,
    'form_enctype' => 0,
    'dialog_body' => 0,
    'dialog_cancel_label' => 0,
    'ok_button_id' => 0,
    'dialog_ok_label' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed57070a79e6_05177653')) {function content_5bed57070a79e6_05177653($_smarty_tpl) {?>
<div class="modal fade <?php if (!empty($_smarty_tpl->tpl_vars['form_error_message']->value)) {?>modal-force-show<?php }?>" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
" tabindex="-1" <?php if (empty($_smarty_tpl->tpl_vars['form_error_message']->value)) {?>aria-hidden="true"<?php } else { ?>aria-hidden="false"<?php }?>>

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><?php echo $_smarty_tpl->tpl_vars['dialog_title']->value;?>
</h3>
            </div>

            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['form_enctype']->value;?>
>

                <div class="modal-body">
                    <?php if (!empty($_smarty_tpl->tpl_vars['form_error_message']->value)) {?><div class="alert alert-danger" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dialog_id']->value,$_smarty_tpl);?>
_error"><?php echo $_smarty_tpl->tpl_vars['form_error_message']->value;?>
</div><?php }?>

                    <?php echo $_smarty_tpl->tpl_vars['dialog_body']->value;?>

                </div>

	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Cancel'),$_smarty_tpl);?>
<?php $_tmp56=ob_get_clean();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['dialog_cancel_label']->value)===null||$tmp==='' ? $_tmp56 : $tmp),$_smarty_tpl);?>
</button>
                    <button <?php if (!empty($_smarty_tpl->tpl_vars['ok_button_id']->value)) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ok_button_id']->value,$_smarty_tpl);?>
"<?php }?> type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'OK'),$_smarty_tpl);?>
<?php $_tmp57=ob_get_clean();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['dialog_ok_label']->value)===null||$tmp==='' ? $_tmp57 : $tmp),$_smarty_tpl);?>
</button>
	            </div>

            </form>
        </div>
    </div>
</div>
<?php }} ?>
