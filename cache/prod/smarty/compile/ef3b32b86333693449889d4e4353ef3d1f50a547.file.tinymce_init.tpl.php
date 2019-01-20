<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:34
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Tinymce/templates/backOffice/default/tinymce_init.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17063117875bed572f2ac872-58209782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3b32b86333693449889d4e4353ef3d1f50a547' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Tinymce/templates/backOffice/default/tinymce_init.tpl',
      1 => 1542744040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17063117875bed572f2ac872-58209782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572f2bcc19_27539930',
  'variables' => 
  array (
    'asset_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572f2bcc19_27539930')) {function content_5bed572f2bcc19_27539930($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('file'=>'/tinymce/tinymce.min.js'),$_smarty_tpl);?>
"></script>

<script>
    tinymce.init({
        selector: ".wysiwyg",
        theme: "modern",

        // height of the editor zone
        //height: 500,

        // Set it to true to display the menubar.
        menubar : false,

        // Use our smarty plugin to guess the best available language
        language: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['tinymce_lang'][0][0]->guessTinyMCELanguage(array(),$_smarty_tpl);?>
",

        // See available plugins at http://www.tinymce.com/wiki.php/Plugins
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager",
            "fullscreen code youtube importcss"
        ],

        // See available controls at http://www.tinymce.com/wiki.php/Controls
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | hr | styleselect | filemanager | code | fullscreen",
        toolbar2: "link unlink anchor | image responsivefilemanager media youtube | forecolor backcolor | charmap | print preview ",

        image_advtab: true,

        // File manager configuration
        external_filemanager_path: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('file'=>'/tinymce/filemanager/'),$_smarty_tpl);?>
",
        filemanager_title: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'File manager','d'=>'tinymce.bo.default'),$_smarty_tpl);?>
" ,
        external_plugins: { "filemanager" : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('file'=>'/tinymce/filemanager/plugin.min.js'),$_smarty_tpl);?>
"},

        // Always paste as text, removing external formatting when pasting text
        //paste_as_text: true,

        // All newlines are <p>, Shift+enter inserts <br />
        //force_p_newlines : true,

        relative_urls : false,
        document_base_url : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/"),$_smarty_tpl);?>
",

        // Styles (CSS or LESS) available in the editor could be defined in assets/css/editor.less file.
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('stylesheets', array('file'=>'assets/css/editor.less','filters'=>'less','source'=>'Tinymce')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['stylesheets'][0][0]->blockStylesheets(array('file'=>'assets/css/editor.less','filters'=>'less','source'=>'Tinymce'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        content_css: "<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
",
        importcss_append: true
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['stylesheets'][0][0]->blockStylesheets(array('file'=>'assets/css/editor.less','filters'=>'less','source'=>'Tinymce'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    });
</script>
<?php }} ?>
