<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:33
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/product-general-tab.html" */ ?>
<?php /*%%SmartyHeaderCode:1520100465bed572e74ae26-56204175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2af37a0d650d762f98e63469c03b1d7e15215205' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/product-general-tab.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1520100465bed572e74ae26-56204175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572e7effa1_68826640',
  'variables' => 
  array (
    'form' => 0,
    'ID' => 0,
    'DEFAULT_CATEGORY' => 0,
    'page' => 0,
    'product_id' => 0,
    'name' => 0,
    'value' => 0,
    'edit_language_locale' => 0,
    'form_error' => 0,
    'form_error_message' => 0,
    'error' => 0,
    'label_attr' => 0,
    'label' => 0,
    'required' => 0,
    'LEVEL' => 0,
    'TITLE' => 0,
    'VIRTUAL' => 0,
    'PSE_COUNT' => 0,
    'PRODUCT_SALE_ELEMENT' => 0,
    'DOCUMENT_FILE' => 0,
    'BRAND_ID' => 0,
    'CREATE_DATE' => 0,
    'UPDATE_DATE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572e7effa1_68826640')) {function content_5bed572e7effa1_68826640($_smarty_tpl) {?><div class="form-container">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.admin.product.modification")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product.modification"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <form method="POST" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/save'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_enctype'][0][0]->formEnctype(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>
 class="clearfix">

        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>false,'page_url'=>$_tmp17,'close_url'=>$_tmp18), 0);?>


        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.modification.form_top",'form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


        
        <input type="hidden" name="page" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['page']->value,$_smarty_tpl);?>
" />
        <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
">
        <input type="hidden" name="current_tab" value="general">

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'id')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'id'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'locale')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'locale'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['edit_language_locale']->value,$_smarty_tpl);?>
">
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'locale'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php if ($_smarty_tpl->tpl_vars['form_error']->value) {?><div class="alert alert-danger"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['form_error_message']->value,$_smarty_tpl);?>
</div><?php }?>

        <div class="row">
            <div class="col-md-8">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ref')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ref'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                        <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label">
                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 :
                        </label>
                        <div class="control-input">
                            <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['required']->value) {?> aria-required="true" required<?php }?>>
                        </div>
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ref'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php echo $_smarty_tpl->getSubTemplate ("includes/standard-description-form-fields.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

            <div class="col-md-4">

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'default_category')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'default_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">

                        <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label">
                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 :
                        </label>

                        <select id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control">
                              <option value="0" disabled><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Top level"),$_smarty_tpl);?>
</option>

                              <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"cat-parent",'type'=>"category-tree",'category'=>"0",'visible'=>"*",'product'=>"0")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"cat-parent",'type'=>"category-tree",'category'=>"0",'visible'=>"*",'product'=>"0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                   <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" style="padding-left: <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(3+$_smarty_tpl->tpl_vars['LEVEL']->value*20,$_smarty_tpl);?>
px" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value==$_smarty_tpl->tpl_vars['ID']->value) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</option>
                              <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"cat-parent",'type'=>"category-tree",'category'=>"0",'visible'=>"*",'product'=>"0"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        </select>
                        <span class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'You can attach this product to more categories in the details tab.'),$_smarty_tpl);?>
</span>
                     </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'default_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                    <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Virtual product'),$_smarty_tpl);?>
</label>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['VIRTUAL']->value!=0) {?>checked="checked"<?php }?>>
                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

                        </label>
                    </div>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div id="virtual-product-file" class="<?php if ($_smarty_tpl->tpl_vars['VIRTUAL']->value==0) {?>hidden <?php }?>form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['PSE_COUNT']->value==1) {?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('custom_render_form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual_document_id')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['custom_render_form_field'][0][0]->customFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual_document_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field_attributes'][0][0]->standardFormFieldAttributes(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual_document_id','extra_class'=>'document-selector'),$_smarty_tpl);?>
 data-pse="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['PRODUCT_SALE_ELEMENT']->value,$_smarty_tpl);?>
" data-product="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
">
                            <option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No document"),$_smarty_tpl);?>
</option>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"virtual-documents",'type'=>"document",'product'=>$_smarty_tpl->tpl_vars['ID']->value,'visible'=>"0")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"virtual-documents",'type'=>"document",'product'=>$_smarty_tpl->tpl_vars['ID']->value,'visible'=>"0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['ID']->value) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
 (<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['DOCUMENT_FILE']->value,$_smarty_tpl);?>
)</option>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"virtual-documents",'type'=>"document",'product'=>$_smarty_tpl->tpl_vars['ID']->value,'visible'=>"0"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </select>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['custom_render_form_field'][0][0]->customFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual_document_id'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <div id="virtual-product-message" class="<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"virtual-documents")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"virtual-documents"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
hidden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"virtual-documents"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                            <div class="alert alert-warning">
                                <p>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"There is no files to associate to your product. Only documents that are not visible can be selected !"),$_smarty_tpl);?>
<br />
                                    <a href='javascript:jQuery("#tab-documents").tab("show");'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Add document to your product."),$_smarty_tpl);?>
</a>
                                </p>
                            </div>
                        </div>
                    <?php } else { ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual_document_id')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual_document_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="-1" />
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual_document_id'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <p>
                            <a href="#prices" data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Associate files to your combinations"),$_smarty_tpl);?>
</a>
                        </p>
                    <?php }?>
                </div>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('custom_render_form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'brand_id')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['custom_render_form_field'][0][0]->customFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'brand_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field_attributes'][0][0]->standardFormFieldAttributes(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'brand_id'),$_smarty_tpl);?>
>
                        <option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No brand"),$_smarty_tpl);?>
</option>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"brand-list",'type'=>"brand",'visible'=>"*")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand-list",'type'=>"brand",'visible'=>"*"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['BRAND_ID']->value==$_smarty_tpl->tpl_vars['ID']->value) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</option>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"brand-list",'type'=>"brand",'visible'=>"*"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </select>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['custom_render_form_field'][0][0]->customFormFieldRendering(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'brand_id'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'visible')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'visible'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                        <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Visibility'),$_smarty_tpl);?>
</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value!=0) {?>checked="checked"<?php }?>>
                                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

                            </label>
                        </div>
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'visible'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.modification.form_bottom",'form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>false,'hide_flags'=>true,'page_url'=>$_tmp19,'close_url'=>$_tmp20), 0);?>


        <small><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->formatDate(array('date'=>$_smarty_tpl->tpl_vars['CREATE_DATE']->value),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->formatDate(array('date'=>$_smarty_tpl->tpl_vars['UPDATE_DATE']->value),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product created on %date_create. Last modification: %date_change','date_create'=>$_tmp21,'date_change'=>$_tmp22),$_smarty_tpl);?>
</small>

    </form>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product.modification"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>
