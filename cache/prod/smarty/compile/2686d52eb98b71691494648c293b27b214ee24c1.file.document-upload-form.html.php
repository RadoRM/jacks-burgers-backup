<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-12-03 11:03:32
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/document-upload-form.html" */ ?>
<?php /*%%SmartyHeaderCode:1275024435c04ff74c89e84-59242332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2686d52eb98b71691494648c293b27b214ee24c1' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/document-upload-form.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1275024435c04ff74c89e84-59242332',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c04ff74ca1c05_59231971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c04ff74ca1c05_59231971')) {function content_5c04ff74ca1c05_59231971($_smarty_tpl) {?>

<div class="document-manager" >
    <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/document/type/".((string)$_smarty_tpl->tpl_vars['documentType']->value)."/".((string)$_smarty_tpl->tpl_vars['parentId']->value)."/save-ajax"),$_smarty_tpl);?>
" method="post" class="dropzone" id="documents-dropzone" enctype="multipart/form-data">
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

    <div class="existing-document">
        <?php echo $_smarty_tpl->getSubTemplate ('includes/document-upload-list-ajax.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

</div>

<script>
    var documentDropZoneUrl = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/document/type/".((string)$_smarty_tpl->tpl_vars['documentType']->value)."/".((string)$_smarty_tpl->tpl_vars['parentId']->value)."/save-ajax"),$_smarty_tpl);?>
";
    var documentListUrl = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/document/type/".((string)$_smarty_tpl->tpl_vars['documentType']->value)."/".((string)$_smarty_tpl->tpl_vars['parentId']->value)."/list-ajax"),$_smarty_tpl);?>
";
    var documentReorder = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/document/type/".((string)$_smarty_tpl->tpl_vars['documentType']->value)."/".((string)$_smarty_tpl->tpl_vars['parentId']->value)."/update-position"),$_smarty_tpl);?>
";
    var documentListErrorMessage = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Can\'t load documents, please refresh this page.'),$_smarty_tpl);?>
";
    var documentReorderErrorMessage = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Can\'t reorder documents, please refresh this page.'),$_smarty_tpl);?>
";
</script>
<?php }} ?>
