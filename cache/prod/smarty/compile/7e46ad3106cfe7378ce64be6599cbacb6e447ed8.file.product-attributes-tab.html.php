<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:36
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/ajax/product-attributes-tab.html" */ ?>
<?php /*%%SmartyHeaderCode:3105149285bfd019cdccaf0-24182701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e46ad3106cfe7378ce64be6599cbacb6e447ed8' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/ajax/product-attributes-tab.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3105149285bfd019cdccaf0-24182701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'edit_language_id' => 0,
    'ID' => 0,
    'TEMPLATE' => 0,
    'NAME' => 0,
    'DEFAULT_CATEGORY' => 0,
    'TITLE' => 0,
    'FEATURE_AV_ID' => 0,
    'selected' => 0,
    'LOOP_COUNT' => 0,
    'options_count' => 0,
    'FREE_TEXT_VALUE' => 0,
    'feature_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bfd019ce9a140_34637633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfd019ce9a140_34637633')) {function content_5bfd019ce9a140_34637633($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'bo.default'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product_edit",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_edit",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="form-container">

    <div class="row">
        <div class="col-md-12">
            <p></p> 
		    <form method="POST" class="clearfix" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/".((string)$_smarty_tpl->tpl_vars['ID']->value)."/set-product-template"),$_smarty_tpl);?>
" id="product_template_form">

                <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
                <input type="hidden" name="current_tab" value="attributes" />

		        <div class="row">
		            <div class="col-md-12">
		                <div class="well well-sm">
		                    <p><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/configuration/templates'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"To use features or attributes on this product, please select a product template. You can define product templates in the <a href=\"%tpl_mgmt_url\" target=\"tpl_window\">configuration section</a> of the administration.",'tpl_mgmt_url'=>$_tmp1),$_smarty_tpl);?>

		                    </p>

			                <label for="template_id" class="control-label">
			                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Current product template'),$_smarty_tpl);?>
 :
			                </label>

			                <div class="input-group">
			                    <select required="required" name="template_id" id="template_id" class="form-control">
			                        <option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Do not use a product template'),$_smarty_tpl);?>
</option>
			                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product_template_select",'type'=>"product-template")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_template_select",'type'=>"product-template"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			                            <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['TEMPLATE']->value==$_smarty_tpl->tpl_vars['ID']->value) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl);?>
</option>
			                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_template_select",'type'=>"product-template"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			                    </select>

			                    <span class="input-group-btn" id="apply_template_button">
			                       <button class="btn btn-primary action-btn" type="submit"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Apply"),$_smarty_tpl);?>
</button>
			                    </span>
			                </div>
		                </div>
		            </div>
		        </div>
		    </form>
        </div>
    </div>

    

    <div class="row">
        <div class="col-md-12">

			<form method="POST" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/".((string)$_smarty_tpl->tpl_vars['ID']->value)."/update-attributes-and-features"),$_smarty_tpl);?>
" id="attribute_form">

			    <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
			    <input type="hidden" name="current_tab" value="attributes" />

			    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>false,'page_url'=>$_tmp2,'close_url'=>$_tmp3), 0);?>


			    

                <div class="row">
			         <div class="col-md-12">
				         <div class="well well-sm">
					       <div class="form-group">
					           <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product Attributes'),$_smarty_tpl);?>
</p>

	                            <p>
	                            <?php if ($_smarty_tpl->tpl_vars['TEMPLATE']->value) {?>
	                                <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TEMPLATE']->value,$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/configuration/templates/update','template_id'=>$_tmp4),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You can change template attributes and their positions in <a href=\"%tpl_mgmt_url\" target=\"tpl_window\">the template configuration page</a>.",'tpl_mgmt_url'=>$_tmp5),$_smarty_tpl);?>

	                            <?php } else { ?>
	                                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/configuration/attributes'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You can change attributes and their positions in <a href=\"%tpl_mgmt_url\" target=\"tpl_window\">the attributes configuration page</a>.",'tpl_mgmt_url'=>$_tmp6),$_smarty_tpl);?>

	                            <?php }?>
	                            </p>

	                            <div class="table-responsive">
	                                <table class="table table-striped table-condensed table-left-aligned">
	                                    <thead>
	                                        <tr>
	                                            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
</th>
	                                            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Attribute Name'),$_smarty_tpl);?>
</th>

	                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.attributes-table-header",'location'=>"product_attributes_table_header"),$_smarty_tpl);?>

	                                        </tr>
	                                    </thead>

	                                    <tbody>
	                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product-attributes",'type'=>"attribute",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-attributes",'type'=>"attribute",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                                        <tr>
	                                            <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</td>

	                                            <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</td>

	                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.attributes-table-row",'location'=>"product_attributes_table_row"),$_smarty_tpl);?>

	                                        </tr>
	                                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-attributes",'type'=>"attribute",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	                                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"product-attributes")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product-attributes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                                             <tr>
	                                                 <td colspan="2">
	                                                     <div class="alert alert-info">
	                                                         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This product template does not contains any features"),$_smarty_tpl);?>

	                                                     </div>
	                                                 </td>
	                                             </tr>
	                                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product-attributes"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	                                    </tbody>
	                                </table>
	                            </div>
					         </div>
					     </div>
					 </div>
			    </div>

			    

                <div class="row">
			        <div class="col-md-12">
			            <div class="well well-sm">
				            <div class="form-group">
				                <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product Features'),$_smarty_tpl);?>
</p>

	                            <p>
	                            <?php if ($_smarty_tpl->tpl_vars['TEMPLATE']->value) {?>
	                                <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TEMPLATE']->value,$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/configuration/templates/update','template_id'=>$_tmp7),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You can change templates features and their positions in <a href=\"%tpl_mgmt_url\" target=\"tpl_window\">the template configuration page</a>.",'tpl_mgmt_url'=>$_tmp8),$_smarty_tpl);?>

	                            <?php } else { ?>
	                                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/configuration/features'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You can change feature and their positions in <a href=\"%tpl_mgmt_url\" target=\"tpl_window\">the features configuration page</a>.",'tpl_mgmt_url'=>$_tmp9),$_smarty_tpl);?>

	                            <?php }?>
	                            </p>

				                <div class="table-responsive">
						            <table class="table table-striped table-condensed table-left-aligned">
						                <thead>
						                    <tr>
	                                            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
</th>
	                                            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Feature Name'),$_smarty_tpl);?>
</th>
						                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Feature value for this product'),$_smarty_tpl);?>
</th>

						                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.features-table-header",'location'=>"product_features_table_header"),$_smarty_tpl);?>


						                    </tr>
						                </thead>

										<tbody>
										    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product-features",'type'=>"feature",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-features",'type'=>"feature",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										    <tr>
	                                            <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</td>

										        <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</td>

							                    <td>
							                        

							                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"product-features-av")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product-features-av"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		                                                

		                                                <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(array(), null, 0);?>

							                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"free-text-value",'exclude_free_text'=>"true",'type'=>"feature_value",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"free-text-value",'exclude_free_text'=>"true",'type'=>"feature_value",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							                               <?php $_smarty_tpl->createLocalArrayVariable('selected', null, 0);
$_smarty_tpl->tpl_vars['selected']->value[] = $_smarty_tpl->tpl_vars['FEATURE_AV_ID']->value;?>
							                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"free-text-value",'exclude_free_text'=>"true",'type'=>"feature_value",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


								                         <?php $_smarty_tpl->_capture_stack[0][] = array("select_options", null, null); ob_start(); ?>
								                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product-features-av",'type'=>"feature-availability",'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'order'=>"manual",'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-features-av",'type'=>"feature-availability",'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'order'=>"manual",'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								                             <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" <?php if (in_array($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl->tpl_vars['selected']->value)) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</option>

								                             <?php $_smarty_tpl->tpl_vars['options_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['LOOP_COUNT']->value, null, 0);?> 
								                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-features-av",'type'=>"feature-availability",'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'order'=>"manual",'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								                         <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

								                         <div class="input-form">
								                         <select multiple="multiple" name="feature_value[<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
][]" id="feature_value_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" size="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['options_count']->value,$_smarty_tpl);?>
" class="form-control">
								                             <?php echo Smarty::$_smarty_vars['capture']['select_options'];?>

								                         </select>
								                         </div>

													     <span class="help-block text-right">
													         <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Use Ctrl+click to select more than one value. You can also <a href="#" class="clear_feature_value" data-id="%id">clear selected values</a>.','id'=>$_tmp10),$_smarty_tpl);?>

													     </span>
							                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product-features-av"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


								                     

								                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"product-features-av")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product-features-av"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								                         
                                                        <?php $_smarty_tpl->tpl_vars['feature_value'] = new Smarty_variable('', null, 0);?>

								                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"free-text-value",'exclude_feature_availability'=>"1",'type'=>"feature_value",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"free-text-value",'exclude_feature_availability'=>"1",'type'=>"feature_value",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								                            <?php $_smarty_tpl->tpl_vars['feature_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['FREE_TEXT_VALUE']->value, null, 0);?>
								                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"free-text-value",'exclude_feature_availability'=>"1",'type'=>"feature_value",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'feature'=>$_smarty_tpl->tpl_vars['ID']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


								                         <input type="text" id="feature_text_value_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" name="feature_text_value[<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
]" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Enter here the feature value as free text'),$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Feature value'),$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['feature_value']->value)===null||$tmp==='' ? '' : $tmp),$_smarty_tpl);?>
">
								                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product-features-av"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							                    </td>

										        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.features-table-row",'location'=>"product_features_table_row"),$_smarty_tpl);?>


										    </tr>
										     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-features",'type'=>"feature",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


										     <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"product-features")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product-features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										         <tr>
										             <td colspan="3">
										                 <div class="alert alert-info">
										                     <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This product template does not contains any features"),$_smarty_tpl);?>

										                 </div>
										             </td>
										         </tr>
										     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product-features"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										</tbody>
				                    </table>
				                </div>
				            </div>
				        </div>
                    </div>
			    </div>

                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>false,'hide_flags'=>true,'page_url'=>$_tmp11,'close_url'=>$_tmp12), 0);?>


			</form>
		</div>
	</div>

</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_edit",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<script>
$(function() {

    // Unselect all options in attribute + feature tab
    $('.clear_feature_value').click(function(event){
        $('#feature_value_' + $(this).data('id') + ' option').prop('selected', false);

        event.preventDefault();
    });
});
</script>
<?php }} ?>
