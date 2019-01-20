<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-12-03 11:03:34
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/image-upload-list-ajax.html" */ ?>
<?php /*%%SmartyHeaderCode:17752108265c04ff763e09b5-52454978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3c9fcea05922aa7858517f814f2437efbde8d9e' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/image-upload-list-ajax.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17752108265c04ff763e09b5-52454978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imageType' => 0,
    'parentId' => 0,
    'ID' => 0,
    'PROCESSING_ERROR' => 0,
    'TITLE' => 0,
    'IMAGE_URL' => 0,
    'POSITION' => 0,
    'VISIBLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c04ff76407f97_73488383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c04ff76407f97_73488383')) {function content_5c04ff76407f97_73488383($_smarty_tpl) {?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"image")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <ul id="js-sort-image" class="row list-unstyled">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"image",'name'=>"image",'backend_context'=>"on",'source'=>$_smarty_tpl->tpl_vars['imageType']->value,'order'=>"manual",'source_id'=>$_smarty_tpl->tpl_vars['parentId']->value,'width'=>"200",'height'=>"100",'resize_mode'=>"borders",'visible'=>"*")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"image",'backend_context'=>"on",'source'=>$_smarty_tpl->tpl_vars['imageType']->value,'order'=>"manual",'source_id'=>$_smarty_tpl->tpl_vars['parentId']->value,'width'=>"200",'height'=>"100",'resize_mode'=>"borders",'visible'=>"*"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="col-sm-6 col-md-3 ui-state-default" data-sort-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
">
                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/image/type/".((string)$_smarty_tpl->tpl_vars['imageType']->value)."/".((string)$_smarty_tpl->tpl_vars['ID']->value)."/update"),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Update this image'),$_smarty_tpl);?>
" class="thumbnail">
                    <?php if ($_smarty_tpl->tpl_vars['PROCESSING_ERROR']->value) {?>
                        <img src="http://placehold.it/200x100&text=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Image+file+not+found'),$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
">
                    <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_URL']->value;?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
">
                    <?php }?>
                </a>

                <div class="btn-group" >
                    <a class="image-update-btn btn btn-default btn-xs disabled js-sorted-position" href="#"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['POSITION']->value,$_smarty_tpl);?>
</a>
                    <a class="image-toggle-btn btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['VISIBLE']->value) {?>visibility-visible<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/image/type/".((string)$_smarty_tpl->tpl_vars['imageType']->value)."/".((string)$_smarty_tpl->tpl_vars['ID']->value)."/toggle"),$_smarty_tpl);?>
" data-error-message="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Please retry'),$_smarty_tpl);?>
">
                        <span class="glyphicon glyphicon-eye-open"></span><span class="glyphicon glyphicon-eye-close"></span>
                    </a>
                    <a class="image-update-btn btn btn-default btn-xs" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/image/type/".((string)$_smarty_tpl->tpl_vars['imageType']->value)."/".((string)$_smarty_tpl->tpl_vars['ID']->value)."/update"),$_smarty_tpl);?>
" data-error-message="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Please retry'),$_smarty_tpl);?>
">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a class="image-delete-btn btn btn-default btn-xs" id="image-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/image/type/".((string)$_smarty_tpl->tpl_vars['imageType']->value)."/delete/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
" data-error-message="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Please retry'),$_smarty_tpl);?>
">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </div>
            </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"image",'backend_context'=>"on",'source'=>$_smarty_tpl->tpl_vars['imageType']->value,'order'=>"manual",'source_id'=>$_smarty_tpl->tpl_vars['parentId']->value,'width'=>"200",'height'=>"100",'resize_mode'=>"borders",'visible'=>"*"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"image"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"image")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="alert alert-info"><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['imageType']->value,$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'There is no images attached to this %type.','type'=>$_tmp1),$_smarty_tpl);?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"image"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
