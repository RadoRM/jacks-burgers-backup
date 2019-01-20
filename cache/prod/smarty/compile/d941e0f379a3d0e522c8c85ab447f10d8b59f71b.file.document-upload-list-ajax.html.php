<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-12-03 11:03:32
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/document-upload-list-ajax.html" */ ?>
<?php /*%%SmartyHeaderCode:4085903585c04ff74cec974-17364584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd941e0f379a3d0e522c8c85ab447f10d8b59f71b' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/document-upload-list-ajax.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4085903585c04ff74cec974-17364584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'documentType' => 0,
    'parentId' => 0,
    'ID' => 0,
    'DOCUMENT_PATH' => 0,
    'TITLE' => 0,
    'POSITION' => 0,
    'VISIBLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c04ff74d0e612_16893302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c04ff74d0e612_16893302')) {function content_5c04ff74d0e612_16893302($_smarty_tpl) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"document")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"document"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <ul id="js-sort-document" class="list-unstyled document-list">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"document",'name'=>"document",'source'=>((string)$_smarty_tpl->tpl_vars['documentType']->value),'order'=>"manual",'source_id'=>((string)$_smarty_tpl->tpl_vars['parentId']->value),'visible'=>"*")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"document",'name'=>"document",'source'=>((string)$_smarty_tpl->tpl_vars['documentType']->value),'order'=>"manual",'source_id'=>((string)$_smarty_tpl->tpl_vars['parentId']->value),'visible'=>"*"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="clearfix ui-state-default" data-sort-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
">
                <a href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['DOCUMENT_PATH']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" class="pull-left" target="_blank"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</a>


                <div class="btn-group pull-right">
                    <a class="document-update-btn btn btn-default btn-xs disabled js-sorted-position" href="#"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['POSITION']->value,$_smarty_tpl);?>
</a>
                    <a class="document-toggle-btn btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['VISIBLE']->value) {?>visibility-visible<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/document/type/".((string)$_smarty_tpl->tpl_vars['documentType']->value)."/".((string)$_smarty_tpl->tpl_vars['ID']->value)."/toggle"),$_smarty_tpl);?>
" data-error-message="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Please retry'),$_smarty_tpl);?>
">
                        <span class="glyphicon glyphicon-eye-open"></span><span class="glyphicon glyphicon-eye-close"></span>
                    </a>
                    <a class="document-update-btn btn btn-default btn-xs" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/document/type/".((string)$_smarty_tpl->tpl_vars['documentType']->value)."/".((string)$_smarty_tpl->tpl_vars['ID']->value)."/update"),$_smarty_tpl);?>
" data-error-message="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Please retry'),$_smarty_tpl);?>
">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a class="document-delete-btn btn btn-default btn-xs" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/document/type/".((string)$_smarty_tpl->tpl_vars['documentType']->value)."/delete/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
" data-error-message="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Please retry'),$_smarty_tpl);?>
">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </div>
            </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"document",'name'=>"document",'source'=>((string)$_smarty_tpl->tpl_vars['documentType']->value),'order'=>"manual",'source_id'=>((string)$_smarty_tpl->tpl_vars['parentId']->value),'visible'=>"*"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"document"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"document")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"document"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="alert alert-info"><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['documentType']->value,$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'There is no documents attached to this %type.','type'=>$_tmp1),$_smarty_tpl);?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"document"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
