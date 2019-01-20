<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-12-03 11:03:34
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/image-upload-form.html" */ ?>
<?php /*%%SmartyHeaderCode:1515813025c04ff76384da0-19378490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '570c180a9eb19f85a6a7551db061141340fc4f7e' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/image-upload-form.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1515813025c04ff76384da0-19378490',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c04ff7639ea65_40818421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c04ff7639ea65_40818421')) {function content_5c04ff7639ea65_40818421($_smarty_tpl) {?>

<div class="image-manager" >
    <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/image/type/".((string)$_smarty_tpl->tpl_vars['imageType']->value)."/".((string)$_smarty_tpl->tpl_vars['parentId']->value)."/save-ajax"),$_smarty_tpl);?>
" method="post" class="dropzone" id="images-dropzone" enctype="multipart/form-data">
        <div class="fallback">
            <input name="file" type="file" />
            <button type="submit" class="btn btn-info btn-upload"><span class="glyphicon glyphicon-send"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Send files"),$_smarty_tpl);?>
</button>
        </div>

        <div class="btn-browse hide">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Drop files to upload"),$_smarty_tpl);?>

            <span>Or</span>
            <button type="button" class="btn btn-info btn-upload"><span class="glyphicon glyphicon-upload"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Browse files"),$_smarty_tpl);?>
</button>
        </div>


    </form>

    <div class="existing-image">
        <?php echo $_smarty_tpl->getSubTemplate ('includes/image-upload-list-ajax.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

</div>

<script>
    var imageDropZoneUrl = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/image/type/".((string)$_smarty_tpl->tpl_vars['imageType']->value)."/".((string)$_smarty_tpl->tpl_vars['parentId']->value)."/save-ajax"),$_smarty_tpl);?>
";
    var imageListUrl = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/image/type/".((string)$_smarty_tpl->tpl_vars['imageType']->value)."/".((string)$_smarty_tpl->tpl_vars['parentId']->value)."/list-ajax"),$_smarty_tpl);?>
";
    var imageReorder = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/image/type/".((string)$_smarty_tpl->tpl_vars['imageType']->value)."/".((string)$_smarty_tpl->tpl_vars['parentId']->value)."/update-position"),$_smarty_tpl);?>
";
    var imageListErrorMessage = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Can\'t load images, please refresh this page.'),$_smarty_tpl);?>
";
    var imageReorderErrorMessage = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Can\'t reorder images, please refresh this page.'),$_smarty_tpl);?>
";
</script>

<div class="modal fade" id="image_delete_dialog" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"delete image"),$_smarty_tpl);?>
</h3>
            </div>
                <div class="modal-body">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to delete this image ?"),$_smarty_tpl);?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No"),$_smarty_tpl);?>
</button>
                    <button type="button" id="submit-delete-image" data-element-id="" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Yes"),$_smarty_tpl);?>
</button>
                </div>
        </div>
    </div>
</div>
<?php }} ?>
