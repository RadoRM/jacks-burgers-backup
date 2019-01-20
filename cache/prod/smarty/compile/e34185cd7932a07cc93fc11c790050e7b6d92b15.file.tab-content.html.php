<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:34
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/backOffice/default/tab-content.html" */ ?>
<?php /*%%SmartyHeaderCode:17025679975bed572f0d4914-40754011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e34185cd7932a07cc93fc11c790050e7b6d92b15' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/backOffice/default/tab-content.html',
      1 => 1542744039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17025679975bed572f0d4914-40754011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572f10ae64_66732756',
  'variables' => 
  array (
    'ref' => 0,
    'id' => 0,
    'activated' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572f10ae64_66732756')) {function content_5bed572f10ae64_66732756($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['meta'][0][0]->metaAccess(array('meta'=>"COMMENT_ACTIVATED",'key'=>$_smarty_tpl->tpl_vars['ref']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl);?>
<?php $_tmp60=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['activated'] = new Smarty_variable($_tmp60, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['activated']->value===null) {?>
    <?php $_smarty_tpl->tpl_vars['activated'] = new Smarty_variable("-1", null, 0);?>
<?php }?>

<div class="title title-without-tabs">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>'Comments activation.'),$_smarty_tpl);?>

</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-container clearfix">
            <form method="POST" id="comment-form" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module/comment/activation/".((string)$_smarty_tpl->tpl_vars['ref']->value)."/".((string)$_smarty_tpl->tpl_vars['id']->value)),$_smarty_tpl);?>
">
                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                    <label for="comment-status" class="control-label">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Status :"),$_smarty_tpl);?>

                    </label>

                    <select name="status" class="form-control" id="comment-status">
                        <option <?php if ($_smarty_tpl->tpl_vars['activated']->value=="-1") {?>selected="selected"<?php }?>
                                value="-1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Use global configuration"),$_smarty_tpl);?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['activated']->value=="0") {?>selected="selected"<?php }?>
                                value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Deactivated for this element"),$_smarty_tpl);?>
</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['activated']->value=="1") {?>selected="selected"<?php }?>
                                value="1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Activated for this element"),$_smarty_tpl);?>
</option>
                    </select>
                </div>

                <button type="button" id="comment-save" name="comment_save" value="save"
                        class="form-submit-button btn btn-sm btn-default"
                        title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Save'),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Save'),$_smarty_tpl);?>

                </button>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php echo $_smarty_tpl->getSubTemplate ("commons.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 1);?>

        <?php echo $_smarty_tpl->getSubTemplate ("include/comments-list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('loop_ref'=>$_smarty_tpl->tpl_vars['ref']->value,'loop_ref_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    </div>
</div><?php }} ?>
