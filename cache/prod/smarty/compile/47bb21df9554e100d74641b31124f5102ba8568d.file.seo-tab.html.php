<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:33
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/seo-tab.html" */ ?>
<?php /*%%SmartyHeaderCode:14348893105bed572ea737b7-44981706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47bb21df9554e100d74641b31124f5102ba8568d' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/seo-tab.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14348893105bed572ea737b7-44981706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572ea9bcf9_89820390',
  'variables' => 
  array (
    'formAction' => 0,
    'form' => 0,
    'pageUrl' => 0,
    'closeUrl' => 0,
    'current_id' => 0,
    'success_url' => 0,
    'form_error_message' => 0,
    'url_language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572ea9bcf9_89820390')) {function content_5bed572ea9bcf9_89820390($_smarty_tpl) {?><div class="form-container">

    <form method="POST" action="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['formAction']->value,$_smarty_tpl);?>
" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_enctype'][0][0]->formEnctype(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>
 class="clearfix">

        <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['pageUrl']->value,$_smarty_tpl);?>
<?php $_tmp31=ob_get_clean();?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['closeUrl']->value,$_smarty_tpl);?>
<?php $_tmp32=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>false,'page_url'=>$_tmp31,'close_url'=>$_tmp32,'current_tab'=>"seo"), 0);?>


        
        <input type="hidden" name="current_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['current_id']->value,$_smarty_tpl);?>
">
        <input type="hidden" name="current_tab" value="seo">

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['success_url']->value;?>
<?php $_tmp33=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render_form_field'][0][0]->standardFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"success_url",'value'=>$_tmp33),$_smarty_tpl);?>


        
        <?php echo $_smarty_tpl->getSubTemplate ('includes/notifications.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message'=>$_smarty_tpl->tpl_vars['form_error_message']->value,'type'=>"danger"), 0);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('custom_render_form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'url')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['custom_render_form_field'][0][0]->customFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'url'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="input-group">
                <span class="input-group-addon"><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"url_site"),$_smarty_tpl);?>
<?php $_tmp34=ob_get_clean();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['url_language']->value)===null||$tmp==='' ? $_tmp34 : $tmp);?>
/</span>
                <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field_attributes'][0][0]->standardFormFieldAttributes(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'url'),$_smarty_tpl);?>
>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['custom_render_form_field'][0][0]->customFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'url'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render_form_field'][0][0]->standardFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"meta_title"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render_form_field'][0][0]->standardFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"meta_description"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render_form_field'][0][0]->standardFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"meta_keywords"),$_smarty_tpl);?>


        <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['pageUrl']->value,$_smarty_tpl);?>
<?php $_tmp35=ob_get_clean();?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['closeUrl']->value,$_smarty_tpl);?>
<?php $_tmp36=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>false,'hide_flags'=>true,'page_url'=>$_tmp35,'close_url'=>$_tmp36), 0);?>


    </form>
</div><?php }} ?>
