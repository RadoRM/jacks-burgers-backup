<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:33
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/product-prices-tab.html" */ ?>
<?php /*%%SmartyHeaderCode:1660421975bed572eac0f16-18126888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6faa5def8c43ce827ff3a9cc1717825db4fdf89' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/product-prices-tab.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1660421975bed572eac0f16-18126888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572ed8e7a5_21453843',
  'variables' => 
  array (
    'product_id' => 0,
    'edit_currency_id' => 0,
    'ID' => 0,
    'has_at_least_one_combination' => 0,
    'form' => 0,
    'DEFAULT_CATEGORY' => 0,
    'name' => 0,
    'value' => 0,
    'default_product_sale_element_id' => 0,
    'SYMBOL' => 0,
    'NAME' => 0,
    'IS_DEFAULT' => 0,
    'form_error' => 0,
    'form_error_message' => 0,
    'error' => 0,
    'label' => 0,
    'TAX_RULE_ID' => 0,
    'TITLE' => 0,
    'current_currency_is_default' => 0,
    'show_pricing_fields' => 0,
    'currency_symbol' => 0,
    'label_attr' => 0,
    'total_value_count' => 0,
    'idx' => 0,
    'current_pse_id' => 0,
    'LOOP_COUNT' => 0,
    'ATTRIBUTE_TITLE' => 0,
    'ATTRIBUTE_AVAILABILITY_TITLE' => 0,
    'VIRTUAL' => 0,
    'combination_label' => 0,
    'edit_language_id' => 0,
    'index' => 0,
    'ATTRIBUTE_ID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572ed8e7a5_21453843')) {function content_5bed572ed8e7a5_21453843($_smarty_tpl) {?><div class="form-container">

    <?php $_smarty_tpl->tpl_vars['has_at_least_one_combination'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['default_product_sale_element_id'] = new Smarty_variable(0, null, 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product.sales.elements.test",'type'=>"product_sale_elements",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'currency'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product.sales.elements.test",'type'=>"product_sale_elements",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'currency'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product.combinations",'type'=>"attribute_combination",'product_sale_elements'=>((string)$_smarty_tpl->tpl_vars['ID']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product.combinations",'type'=>"attribute_combination",'product_sale_elements'=>((string)$_smarty_tpl->tpl_vars['ID']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->tpl_vars['has_at_least_one_combination'] = new Smarty_variable(true, null, 0);?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product.combinations",'type'=>"attribute_combination",'product_sale_elements'=>((string)$_smarty_tpl->tpl_vars['ID']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"product.combinations")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product.combinations"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->tpl_vars['default_product_sale_element_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['ID']->value, null, 0);?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product.combinations"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product.sales.elements.test",'type'=>"product_sale_elements",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'currency'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['has_at_least_one_combination']->value==false) {?>
	    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.admin.product_default_sale_element.update")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product_default_sale_element.update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	    <form method="POST" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/product/default-price/update'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_enctype'][0][0]->formEnctype(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>
 class="clearfix">

		    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp37=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
<?php $_tmp38=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>false,'show_currencies'=>true,'page_url'=>$_tmp37,'close_url'=>$_tmp38), 0);?>


	        
            <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
	        <input type="hidden" name="current_tab" value="prices" />

	        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_id')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_id'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_sale_element_id')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_sale_element_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['default_product_sale_element_id']->value,$_smarty_tpl);?>
" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_sale_element_id'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isdefault')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isdefault'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isdefault'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'reference')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'reference'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'reference'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
" />
	        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"product-currency",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"product-currency",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	            <?php $_smarty_tpl->tpl_vars['currency_symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['SYMBOL']->value, null, 0);?>
	            <?php $_smarty_tpl->tpl_vars['currency_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['NAME']->value, null, 0);?>

	            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" />
	            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	            <?php $_smarty_tpl->tpl_vars['current_currency_is_default'] = new Smarty_variable($_smarty_tpl->tpl_vars['IS_DEFAULT']->value, null, 0);?>
	        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"product-currency",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



            <?php if ($_smarty_tpl->tpl_vars['form_error']->value) {?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['form_error_message']->value,$_smarty_tpl);?>
</div>
                </div>
            </div>
            <?php }?>

			<div class="row">
			    <div class="col-md-4">
			        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_rule')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_rule'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
			                <label for="tax_rule_field" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
			                <div class="form-group">
			                    <select id="tax_rule_field" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control">
			                        <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Select a tax tule"),$_smarty_tpl);?>
</option>
			                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"tax",'type'=>"tax-rule",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"tax",'type'=>"tax-rule",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			                            <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['ID']->value==$_smarty_tpl->tpl_vars['TAX_RULE_ID']->value) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</option>
			                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"tax",'type'=>"tax-rule",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			                    </select>
			                </div>

			            </div>
			        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_rule'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			    </div>
			</div>

	        <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Pricing'),$_smarty_tpl);?>
</p>

	        <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"The default pricing is used when no combination is defined."),$_smarty_tpl);?>
</p>

		    <div class="row">

		        

		        <div class="col-md-4">
	                <div class="well well-sm">
			            <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Pricing'),$_smarty_tpl);?>
</p>

			              <p></p> <!-- LAME !!! FIXME -->

	                      <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'use_exchange_rate')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'use_exchange_rate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                          <?php if ($_smarty_tpl->tpl_vars['current_currency_is_default']->value) {?>
	                             <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="0">
	                             <?php $_smarty_tpl->tpl_vars['show_pricing_fields'] = new Smarty_variable(true, null, 0);?>
	                          <?php } else { ?>
			                      <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
			                          <div class="checkbox">
			                              <label>
			                                  <input type="checkbox" data-pse-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['default_product_sale_element_id']->value,$_smarty_tpl);?>
" class="use_exchange_rate_box" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value!=0) {?>checked="checked"<?php }?>>
			                                  <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

			                              </label>
			                          </div>
			                      </div>
			                      <?php $_smarty_tpl->tpl_vars['show_pricing_fields'] = new Smarty_variable(($_smarty_tpl->tpl_vars['value']->value==0), null, 0);?>
			                  <?php }?>
	                      <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'use_exchange_rate'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			              <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			                  <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
			                      <label for="price_without_tax" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

			                         <div class="input-group">
			                             <input <?php if (!$_smarty_tpl->tpl_vars['show_pricing_fields']->value) {?>readonly<?php }?> data-pse-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['default_product_sale_element_id']->value,$_smarty_tpl);?>
" data-price-type="price-without-tax" data-rel-price="price_with_tax" type="text" id="price_without_tax" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="price_field automatic_price_field form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Price excl. taxes'),$_smarty_tpl);?>
">
			                             <span class="input-group-addon"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
</span>
			                         </div>
			                  </div>
			              <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                          <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price_with_tax')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price_with_tax'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			                  <div class="form-group">
			                      <label for="price_with_tax" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Product price including taxes"),$_smarty_tpl);?>
 : </label>
			                      <div class="input-group">
			                          <input <?php if (!$_smarty_tpl->tpl_vars['show_pricing_fields']->value) {?>readonly<?php }?> data-pse-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['default_product_sale_element_id']->value,$_smarty_tpl);?>
" data-price-type="price-with-tax" data-rel-price="price_without_tax" type="text" id="price_with_tax" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="price_field automatic_price_field form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Price incl. taxes'),$_smarty_tpl);?>
">
			                          <span class="input-group-addon"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
</span>
			                      </div>
			                  </div>
                          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price_with_tax'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.details-pricing-form",'location'=>"product_details_pricing_form"),$_smarty_tpl);?>

			          </div>
		        </div>


                 

                 <div class="col-md-4">
                     <div class="well well-sm">
                        <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Stock'),$_smarty_tpl);?>
</p>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ean_code')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ean_code'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						   <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
						       <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

						       <div class="form-group">
						           <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product EAN Code'),$_smarty_tpl);?>
">
						       </div>
						   </div>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ean_code'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

                                <div class="input-group">
                                    <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product weight'),$_smarty_tpl);?>
">
                                    <span class="input-group-addon"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Kg"),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'quantity')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'quantity'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

                                <div class="form-group">
                                    <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Current quantity'),$_smarty_tpl);?>
">
                                </div>
                            </div>
                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'quantity'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.details-details-form",'location'=>"product_details_details_form"),$_smarty_tpl);?>

                    </div>
                </div>


		        

		        <div class="col-md-4">
	                <div class="well well-sm">
			            <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Promotion'),$_smarty_tpl);?>
</p>

			            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
			                    <label for="sale_price_without_tax" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

			                    <div class="input-group">
			                        <input <?php if (!$_smarty_tpl->tpl_vars['show_pricing_fields']->value) {?>readonly<?php }?> data-pse-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['default_product_sale_element_id']->value,$_smarty_tpl);?>
" data-price-type="sale-price-without-tax" data-rel-price="sale_price_with_tax" type="text" id="sale_price_without_tax" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="price_field automatic_price_field form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product price'),$_smarty_tpl);?>
">
			                        <span class="input-group-addon"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
</span>
			                    </div>
			               </div>
			            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price_with_tax')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price_with_tax'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="form-group">
                            <label for="sale_price_with_tax" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
                            <div class="input-group">
                                <input <?php if (!$_smarty_tpl->tpl_vars['show_pricing_fields']->value) {?>readonly<?php }?> data-pse-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['default_product_sale_element_id']->value,$_smarty_tpl);?>
" data-price-type="sale-price-with-tax" data-rel-price="sale_price_without_tax" type="text" id="sale_price_with_tax" name="sale_price_with_tax" class="price_field automatic_price_field form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Sale price incl. taxes'),$_smarty_tpl);?>
">
                                <span class="input-group-addon"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
</span>
                            </div>
                        </div>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price_with_tax'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


						<?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'onsale')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'onsale'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
						    <div class="checkbox">
						        <label>
						            <input type="checkbox" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value!=0) {?>checked="checked"<?php }?>>
						            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

						        </label>
						    </div>
						</div>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'onsale'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isnew')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isnew'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
			                <div class="checkbox">
			                    <label>
			                        <input type="checkbox" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value!=0) {?>checked="checked"<?php }?>>
			                        <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

			                    </label>
			                </div>
			            </div>
			            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isnew'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.details-promotion-form",'location'=>"product_details_promotion_form"),$_smarty_tpl);?>

			        </div>
                </div>
	        </div>
        </form>
	    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product_default_sale_element.update"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    

    <?php if ($_smarty_tpl->tpl_vars['has_at_least_one_combination']->value) {?>

       <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.admin.product_sale_element.update")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product_sale_element.update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

       <form method="POST" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/product/combinations/update'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_enctype'][0][0]->formEnctype(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>
>
            <div class="row">
                <div class="col-md-12">

					<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp39=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
<?php $_tmp40=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>false,'show_currencies'=>true,'page_url'=>$_tmp39,'close_url'=>$_tmp40), 0);?>


					
					<input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
					<input type="hidden" name="current_tab" value="prices" />

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


					<?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_id')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					    <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" />
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_id'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					    <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
" />
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	                <?php if ($_smarty_tpl->tpl_vars['form_error']->value) {?><div class="alert alert-danger"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['form_error_message']->value,$_smarty_tpl);?>
</div><?php }?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"get-currency-symbol",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"get-currency-symbol",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php $_smarty_tpl->tpl_vars['currency_symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['SYMBOL']->value, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['current_currency_is_default'] = new Smarty_variable($_smarty_tpl->tpl_vars['IS_DEFAULT']->value, null, 0);?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" />
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"get-currency-symbol",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<div class="row">
					    <div class="col-md-4">
					        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_rule')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_rule'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
					                <label for="tax_rule_field" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
					                <div class="form-group">
					                   <select id="tax_rule_field" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control">
					                        <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Select a tax tule"),$_smarty_tpl);?>
</option>
					                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"tax",'type'=>"tax-rule",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"tax",'type'=>"tax-rule",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					                            <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['ID']->value==$_smarty_tpl->tpl_vars['TAX_RULE_ID']->value) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</option>
					                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"tax",'type'=>"tax-rule",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					                    </select>
					                </div>
					            </div>
					        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_rule'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					    </div>
					    <div class="col-md-4">
                          <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'use_exchange_rate')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'use_exchange_rate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                              <?php if ($_smarty_tpl->tpl_vars['current_currency_is_default']->value) {?>
                                 <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="0">
                                 <?php $_smarty_tpl->tpl_vars['show_pricing_fields'] = new Smarty_variable(true, null, 0);?>
                              <?php } else { ?>
                                  <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                                      <label>&nbsp;</label>
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox" class="use_exchange_rate_box" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value!=0) {?>checked="checked"<?php }?>>
                                              <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

                                          </label>
                                      </div>
                                  </div>
                                  <?php $_smarty_tpl->tpl_vars['show_pricing_fields'] = new Smarty_variable(($_smarty_tpl->tpl_vars['value']->value==0), null, 0);?>
                              <?php }?>
                          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'use_exchange_rate'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					    </div>
					</div>

	                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.before-combinations",'location'=>"product_before_combinations"),$_smarty_tpl);?>


					<table class="table table-striped table-condensed table-responsive" id="combinations_list">
					    <caption>
					        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Attribute Combinations'),$_smarty_tpl);?>


					        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.combinations-list-caption",'location'=>"product_combinations_list_caption"),$_smarty_tpl);?>


					        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <a class="btn btn-primary action-btn" id="open_combination_builder" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Quickly create combinations using the combination builder'),$_smarty_tpl);?>
" href="#combination_builder_dialog" data-toggle="modal">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Combination builder'),$_smarty_tpl);?>

                            </a>
					        <a class="btn btn-primary action-btn" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Add a new combination'),$_smarty_tpl);?>
" href="#combination_creation_dialog" data-toggle="modal">
					            <span class="glyphicon glyphicon-plus-sign"></span>
					        </a>
					        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					    </caption>

					    <thead>
					        <tr>
                                <th class="col-sm-2 text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Reference'),$_smarty_tpl);?>
</th>
                                <th class="col-sm-2 text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'EAN Code'),$_smarty_tpl);?>
</th>
                                <th class="col-sm-1 text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Stock'),$_smarty_tpl);?>
</th>
								<th class="col-sm-1 text-center"><small><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
<?php $_tmp41=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Price (%currency)<br />w/o taxes','currency'=>$_tmp41),$_smarty_tpl);?>
</small></th>
								<th class="col-sm-1 text-center"><small><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
<?php $_tmp42=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Price (%currency)<br />w/ taxes','currency'=>$_tmp42),$_smarty_tpl);?>
</small></th>
								<th class="col-sm-1 text-center"><small><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Weight<br />(Kg)'),$_smarty_tpl);?>
</small></th>
                                <th class="text-center"><small><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Default'),$_smarty_tpl);?>
</small></th>
                                <th class="text-center"><small><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Sale'),$_smarty_tpl);?>
</small></th>
                                <th class="text-center"><small><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'New'),$_smarty_tpl);?>
</small></th>
								<th class="col-sm-1 text-center"><small><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
<?php $_tmp43=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Sale price (%currency)<br />w/o taxes','currency'=>$_tmp43),$_smarty_tpl);?>
</small></th>
								<th class="col-sm-1 text-center"><small><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
<?php $_tmp44=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Sale price (%currency)<br />w/ taxes','currency'=>$_tmp44),$_smarty_tpl);?>
</small></th>
					        </tr>
					    </thead>

					    <tbody>
	                        

	                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_sale_element_id','value_key'=>0)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_sale_element_id','value_key'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                           <?php $_smarty_tpl->tpl_vars['pse_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_value_count']->value, null, 0);?>
	                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_sale_element_id','value_key'=>0), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	                        <?php $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['idx']->step = 1;$_smarty_tpl->tpl_vars['idx']->total = (int) ceil(($_smarty_tpl->tpl_vars['idx']->step > 0 ? $_smarty_tpl->tpl_vars['total_value_count']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['total_value_count']->value-1)+1)/abs($_smarty_tpl->tpl_vars['idx']->step));
if ($_smarty_tpl->tpl_vars['idx']->total > 0) {
for ($_smarty_tpl->tpl_vars['idx']->value = 0, $_smarty_tpl->tpl_vars['idx']->iteration = 1;$_smarty_tpl->tpl_vars['idx']->iteration <= $_smarty_tpl->tpl_vars['idx']->total;$_smarty_tpl->tpl_vars['idx']->value += $_smarty_tpl->tpl_vars['idx']->step, $_smarty_tpl->tpl_vars['idx']->iteration++) {
$_smarty_tpl->tpl_vars['idx']->first = $_smarty_tpl->tpl_vars['idx']->iteration == 1;$_smarty_tpl->tpl_vars['idx']->last = $_smarty_tpl->tpl_vars['idx']->iteration == $_smarty_tpl->tpl_vars['idx']->total;?>
	                        <tr>
                                <td colspan="10">

                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_sale_element_id','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_sale_element_id','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" />
                                        <?php $_smarty_tpl->tpl_vars['current_pse_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value, null, 0);?>

                                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "combination_label", null); ob_start(); ?>
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product.sales.elements.combinations",'type'=>"attribute_combination",'product_sale_elements'=>$_smarty_tpl->tpl_vars['current_pse_id']->value,'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product.sales.elements.combinations",'type'=>"attribute_combination",'product_sale_elements'=>$_smarty_tpl->tpl_vars['current_pse_id']->value,'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php if ($_smarty_tpl->tpl_vars['LOOP_COUNT']->value>1) {?> / <?php }?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_TITLE']->value,$_smarty_tpl);?>
: <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_AVAILABILITY_TITLE']->value,$_smarty_tpl);?>

                                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product.sales.elements.combinations",'type'=>"attribute_combination",'product_sale_elements'=>$_smarty_tpl->tpl_vars['current_pse_id']->value,'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_sale_element_id','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                    <div class="btn-group">
                                        <a class="btn btn-default btn-xs pse-assoc-image pse-assoc-image-document" data-target="#pse-assoc-image-document-modal" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Associate images"),$_smarty_tpl);?>
">
                                            <span class="glyphicon glyphicon-picture"></span>
                                        </a>
                                        <a class="btn btn-default btn-xs pse-assoc-document pse-assoc-image-document" data-target="#pse-assoc-image-document-modal" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Associate documents"),$_smarty_tpl);?>
">
                                            <span class="glyphicon glyphicon-file"></span>
                                        </a>
                                        <?php if ($_smarty_tpl->tpl_vars['VIRTUAL']->value) {?>
                                        <a class="btn btn-success btn-xs pse-assoc-virtual pse-assoc-image-document" data-type="virtual" data-target="#pse-assoc-image-document-modal" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Associate downloadable file"),$_smarty_tpl);?>
">
                                            <span class="glyphicon glyphicon-download"></span>
                                        </a>
                                        <?php }?>
                                    </div>

                                    <a class="btn btn-default btn-xs combination-delete" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Delete this combination'),$_smarty_tpl);?>
"  href="#combination_delete_dialog" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['current_pse_id']->value,$_smarty_tpl);?>
" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>

                                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['combination_label']->value,$_smarty_tpl);?>

                                </td>

                                <td class="text-right">ID: <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['current_pse_id']->value,$_smarty_tpl);?>
</td>
                            </tr>

                            <tr>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'reference','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'reference','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>class="has-error"<?php }?>><input class="form-control input-sm" type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" /></td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'reference','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ean_code','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ean_code','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>class="has-error"<?php }?>><input class="form-control input-sm" type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" /></td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ean_code','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'quantity','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'quantity','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>class="has-error"<?php }?>>
                                    <input class="form-control input-sm text-right" required type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" />
                                </td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'quantity','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>class="has-error"<?php }?>><input <?php if (!$_smarty_tpl->tpl_vars['show_pricing_fields']->value) {?>readonly<?php }?> required data-price-type="price-without-tax" data-rel-price="price_with_tax_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['idx']->value,$_smarty_tpl);?>
" id="price_without_tax_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['idx']->value,$_smarty_tpl);?>
" class="price_field automatic_price_field form-control text-right input-sm" required type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" /></td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price_with_tax','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price_with_tax','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>class="has-error"<?php }?>><input <?php if (!$_smarty_tpl->tpl_vars['show_pricing_fields']->value) {?>readonly<?php }?> data-price-type="price-with-tax" data-rel-price="price_without_tax_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['idx']->value,$_smarty_tpl);?>
" id="price_with_tax_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['idx']->value,$_smarty_tpl);?>
" class="price_field automatic_price_field form-control text-right input-sm" type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" /></td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price_with_tax','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>class="has-error"<?php }?>><input required class="form-control text-right input-sm" type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" /></td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'default_pse')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'default_pse'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td class="<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error <?php }?>text-center">
                                    <input class="input-sm" type="radio" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['current_pse_id']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['current_pse_id']->value) {?>checked="checked"<?php }?>/>
                                </td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'default_pse'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'onsale','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'onsale','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td class="<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error <?php }?>text-center">
                                    <input class="input-sm" type="checkbox" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value!=0) {?>checked="checked"<?php }?>/>
                                </td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'onsale','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isnew','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isnew','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td class="<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error <?php }?>text-center">
                                     <input class="input-sm" type="checkbox" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value!=0) {?>checked="checked"<?php }?>/>
                                </td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isnew','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>class="has-error"<?php }?>>
                                    <input <?php if (!$_smarty_tpl->tpl_vars['show_pricing_fields']->value) {?>readonly<?php }?> required data-price-type="sale-price-without-tax" data-rel-price="sale_price_with_tax_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['idx']->value,$_smarty_tpl);?>
" id="sale_price_without_tax_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['idx']->value,$_smarty_tpl);?>
" class="price_field automatic_price_field form-control text-right input-sm" type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
"  />
                                </td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price_with_tax','value_key'=>$_smarty_tpl->tpl_vars['idx']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price_with_tax','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <td <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>class="has-error"<?php }?>>
                                    <input <?php if (!$_smarty_tpl->tpl_vars['show_pricing_fields']->value) {?>readonly<?php }?> data-price-type="sale-price-with-tax" data-rel-price="sale_price_without_tax_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['idx']->value,$_smarty_tpl);?>
" id="sale_price_with_tax_<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['idx']->value,$_smarty_tpl);?>
" class="price_field automatic_price_field form-control text-right input-sm" type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
"  />
                                </td>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price_with_tax','value_key'=>$_smarty_tpl->tpl_vars['idx']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </tr>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.combinations-row",'pse'=>((string)$_smarty_tpl->tpl_vars['current_pse_id']->value)),$_smarty_tpl);?>


	                        <?php }} ?>
					    </tbody>
					</table>

	                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.after-combinations",'location'=>"product_after_combinations"),$_smarty_tpl);?>



                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp45=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
<?php $_tmp46=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>false,'hide_flags'=>true,'page_url'=>$_tmp45,'close_url'=>$_tmp46), 0);?>


	            </div>
	        </div>

        </form>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product_sale_element.update"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['has_at_least_one_combination']->value==false) {?>
       <div class="row">
           <div class="col-md-12">
		        <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Attribute Combinations'),$_smarty_tpl);?>
</p>

		        <div class="alert alert-info">
			        <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'This product has no combination. The default price is used. <a data-toggle="modal" href="%url">Click here to create a new combination</a>.','url'=>'#combination_creation_dialog'),$_smarty_tpl);?>
</p>
			        <p>
			          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'You may also quickly create combinations from products attributes using the  <a href="%url" data-toggle="modal">Combination Builder</a>.','url'=>'#combination_builder_dialog'),$_smarty_tpl);?>

			        </p>
		        </div>
		    </div>
		</div>
    <?php }?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.after-combinations",'location'=>"product_after_combinations"),$_smarty_tpl);?>


</div>


<div id="pse-modal-container">
    <div class="modal fade" id="pse-assoc-image-document-modal" tabindex="-1" role="dialog" aria-labelledby="associate_images_documents_label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="associate_images_documents_label"></h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>





<?php $_smarty_tpl->_capture_stack[0][] = array("combination_creation_dialog", null, null); ob_start(); ?>

    <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
    <input type="hidden" name="current_tab" value="prices" />

	<div class="form-group">
	   <label class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Attribute"),$_smarty_tpl);?>
 : </label>
	   <select  name="attribute_id" id="attribute_id" class="form-control">
	       <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select an attribute...'),$_smarty_tpl);?>
</option>
	       <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product-attributes",'type'=>"attribute",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-attributes",'type'=>"attribute",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	           <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</option>
	       <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-attributes",'type'=>"attribute",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	   </select>
	   <span class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select an attribute and click (+) to view available values'),$_smarty_tpl);?>
</span>
	</div>


	<div id="attribute_value_selector" class="hide">
	    <div class="input-group">
	        

	        <select name="attribute_value_id" id="attribute_value_id" class="form-control">
	            <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select an attribute value...'),$_smarty_tpl);?>
</option>
	        </select>

	        <span class="input-group-btn" id="add_attr_value_button">
	           <button class="btn btn-primary action-btn add-value-to-combination" type="button"><span class="glyphicon glyphicon-plus-sign"></span></button>
	        </span>
	    </div>

	    <span class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a value click (+) to add it to the combination'),$_smarty_tpl);?>
</span>
	</div>

	<div id="attribute_value_selector_empty" class="hide">
	    <div class="alert alert-info">
	       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No available value for this attribute"),$_smarty_tpl);?>

	   </div>
	</div>

	<div class="form-group">
	    <div class="alert alert-danger hide" id="combination_attributes_error"></div>

	    <select required="required" multiple="multiple" size="5" name="combination_attributes[]" id="combination_attributes" class="form-control">
	    </select>

	    <div class="help-block">
	        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'To remove a value from the combination, select it and click "remove"'),$_smarty_tpl);?>


	        <div class="pull-right">
	            <button class="btn btn-info btn-xs remove-value-from-combination" type="button">
	                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Remove selected values"),$_smarty_tpl);?>
 <span class="glyphicon glyphicon-minus-sign"></span>
	            </button>
	        </div>
	    </div>
	</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Create a new combination"),$_smarty_tpl);?>
<?php $_tmp47=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['combination_creation_dialog'];?>
<?php $_tmp48=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Create this combination"),$_smarty_tpl);?>
<?php $_tmp49=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/product/combination/add'),$_smarty_tpl);?>
<?php $_tmp50=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-create-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"combination_creation_dialog",'dialog_title'=>$_tmp47,'dialog_body'=>$_tmp48,'dialog_ok_label'=>$_tmp49,'form_action'=>$_tmp50,'form_enctype'=>'','form_error_message'=>'','ok_button_id'=>"combination_creation_dialog_ok"), 0);?>





<?php $_smarty_tpl->_capture_stack[0][] = array("combination_delete_dialog", null, null); ob_start(); ?>

    <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
    <input type="hidden" name="current_tab" value="prices" />

    <input type="hidden" name="product_sale_element_id" id="combination_delete_id" value="" />

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.combination-delete-form",'location'=>"product_combination_delete_form"),$_smarty_tpl);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Delete a combination"),$_smarty_tpl);?>
<?php $_tmp51=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to delete this combination ?"),$_smarty_tpl);?>
<?php $_tmp52=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/product/combination/delete'),$_smarty_tpl);?>
<?php $_tmp53=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['combination_delete_dialog'];?>
<?php $_tmp54=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-confirm-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"combination_delete_dialog",'dialog_title'=>$_tmp51,'dialog_message'=>$_tmp52,'form_action'=>$_tmp53,'form_content'=>$_tmp54), 0);?>






<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.admin.product_combination.build")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product_combination.build"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php $_smarty_tpl->_capture_stack[0][] = array("combination_builder_dialog", null, null); ob_start(); ?>

    
    <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
    <input type="hidden" name="current_tab" value="prices" />

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_id')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'product_id'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['form_error']->value) {?><div class="alert alert-danger" id="combination_builder_dialog_error"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['form_error_message']->value,$_smarty_tpl);?>
</div><?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"get-currency-symbol",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"get-currency-symbol",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->tpl_vars['currency_symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['SYMBOL']->value, null, 0);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" />
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"get-currency-symbol",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'current_tab'=>'prices'),$_smarty_tpl);?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div class="alert alert-info">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select attribute values to combine. You may enter a default value for some of the fields of the generated combinations.'),$_smarty_tpl);?>

    </div>

    <div class="row">
        <div class="col-md-6">
		    <div class="scrollable">
		        <ul class="list-unstyled">
		        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, 0);?>
		        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product-attributes",'type'=>"attribute",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-attributes",'type'=>"attribute",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"product-attributes-av")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product-attributes-av"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		            <li>
		                <strong><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</strong>
		                <ul class="list-unstyled">
		                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product-attributes-av",'type'=>"attribute_availability",'attribute'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'order'=>"manual",'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-attributes-av",'type'=>"attribute_availability",'attribute'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'order'=>"manual",'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                    <li>
			                    <div class="checkbox">
			                        <label>
			                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'attribute_av','value_key'=>$_smarty_tpl->tpl_vars['index']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'attribute_av','value_key'=>$_smarty_tpl->tpl_vars['index']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			                            <input data-attribute-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_ID']->value,$_smarty_tpl);?>
" class="attribute_av_value" type="checkbox" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_ID']->value,$_smarty_tpl);?>
:<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==((string)$_smarty_tpl->tpl_vars['ATTRIBUTE_ID']->value).":".((string)$_smarty_tpl->tpl_vars['ID']->value)) {?>checked="checked"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>

			                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'attribute_av','value_key'=>$_smarty_tpl->tpl_vars['index']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			                        </label>
			                    </div>
		                    </li>
		                    <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
		                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-attributes-av",'type'=>"attribute_availability",'attribute'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'order'=>"manual",'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                </ul>
		            </li>
		            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product-attributes-av"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product-attributes",'type'=>"attribute",'order'=>"manual",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		        </ul>
		    </div>
		</div>

		<div class="col-md-6">
         <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

             <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                 <label for="price_without_tax" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

                    <div class="input-group">
                        <input type="text" id="price_without_tax" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="price_field automatic_price_field form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Price excl. taxes'),$_smarty_tpl);?>
">
                        <span class="input-group-addon"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
</span>
                    </div>
             </div>
         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


         <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'reference')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'reference'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

                <div class="form-group">
                    <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Combination reference'),$_smarty_tpl);?>
">
                </div>
            </div>
         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'reference'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


         <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ean_code')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ean_code'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

                <div class="form-group">
                    <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Combination EAN Code'),$_smarty_tpl);?>
">
                </div>
            </div>
         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ean_code'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


         <div class="row">
            <div class="col-md-6">
	            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
	                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

	                <div class="input-group">
	                    <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product weight'),$_smarty_tpl);?>
">
	                    <span class="input-group-addon"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Kg"),$_smarty_tpl);?>
</span>
	                </div>
	            </div>
	            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	         </div>

	          <div class="col-md-6">
	          <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'quantity')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'quantity'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	             <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
	                 <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Stock'),$_smarty_tpl);?>
 : </label>

	                 <div class="form-group">
	                     <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Current quantity'),$_smarty_tpl);?>
">
	                 </div>
	             </div>
	          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'quantity'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	          </div>
	     </div>

         <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

             <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                 <label for="sale_price_without_tax" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
                 <div class="input-group">
                     <input type="text" id="sale_price_without_tax" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="price_field automatic_price_field form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product price'),$_smarty_tpl);?>
">
                     <span class="input-group-addon"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['currency_symbol']->value,$_smarty_tpl);?>
</span>
                 </div>
            </div>
         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'sale_price'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		 <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'onsale')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'onsale'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	     <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
	        <div class="checkbox">
	            <label>
	                <input type="checkbox" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1">
	                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

	            </label>
	        </div>
	     </div>
	     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'onsale'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


         <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isnew')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isnew'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
             <div class="checkbox">
                 <label>
                     <input type="checkbox" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1">
                     <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

                 </label>
             </div>
         </div>
         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'isnew'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


         <div class="well well-sm" style="margin-bottom: 0"><b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'<span id="number_of_generated_combinations">0</span> combinations'),$_smarty_tpl);?>
</b></div>
    </div>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Create combinations"),$_smarty_tpl);?>
<?php $_tmp55=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['combination_builder_dialog'];?>
<?php $_tmp56=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Create combinations"),$_smarty_tpl);?>
<?php $_tmp57=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/product/combination/build'),$_smarty_tpl);?>
<?php $_tmp58=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_enctype'][0][0]->formEnctype(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>
<?php $_tmp59=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-create-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"combination_builder_dialog",'dialog_title'=>$_tmp55,'dialog_body'=>$_tmp56,'dialog_ok_label'=>$_tmp57,'form_action'=>$_tmp58,'form_enctype'=>$_tmp59,'form_error_message'=>'','ok_button_id'=>"combination_builder_dialog_ok"), 0);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product_combination.build"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
