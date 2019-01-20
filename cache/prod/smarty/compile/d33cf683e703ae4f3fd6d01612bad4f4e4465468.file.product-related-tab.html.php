<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-12-03 11:03:20
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/ajax/product-related-tab.html" */ ?>
<?php /*%%SmartyHeaderCode:6198624505c04ff686c9904-76115187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd33cf683e703ae4f3fd6d01612bad4f4e4465468' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/ajax/product-related-tab.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6198624505c04ff686c9904-76115187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'edit_language_id' => 0,
    'ID' => 0,
    'DEFAULT_CATEGORY' => 0,
    'LEVEL' => 0,
    'TITLE' => 0,
    'CONTENT_ID' => 0,
    'POSITION' => 0,
    'ACCESSORY_ID' => 0,
    'exclude_from_tree' => 0,
    'folder_id' => 0,
    'accessory_category_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c04ff688f2270_13864272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c04ff688f2270_13864272')) {function content_5c04ff688f2270_13864272($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'bo.default'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product_edit",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_edit",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="form-container">

    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>true,'page_url'=>$_tmp1,'close_url'=>$_tmp2), 0);?>


    <div class="row">

        

	    <div class="col-md-6">
	       <div class="well well-sm">
		        <div class="form-group">
		            <form method="POST" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/content/add'),$_smarty_tpl);?>
" id="related_content_form">

		                <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Related content'),$_smarty_tpl);?>
</p>
		                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'You can attach here some content to this product'),$_smarty_tpl);?>
</p>

		                <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
		                <input type="hidden" name="current_tab" value="related" />

		                <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"folders")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"folders"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                <div class="form-group">
		                    <select name="folder_id" id="folder_id" class="form-control">
		                        <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a folder...'),$_smarty_tpl);?>
</option>
		                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"folders",'type'=>"folder-tree",'folder'=>"0",'backend_context'=>"1",'visible'=>"*",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"folders",'type'=>"folder-tree",'folder'=>"0",'backend_context'=>"1",'visible'=>"*",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                            <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" style="padding-left: <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(3+$_smarty_tpl->tpl_vars['LEVEL']->value*20,$_smarty_tpl);?>
px"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</option>
		                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"folders",'type'=>"folder-tree",'folder'=>"0",'backend_context'=>"1",'visible'=>"*",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                    </select>

		                    <span class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a folder to get its content'),$_smarty_tpl);?>
</span>
		                </div>

		                <div id="content_selector" class="hide">
		                    <div class="input-group">
		                        <select required="required" name="content_id" id="content_id" class="form-control">
		                            <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a folder content...'),$_smarty_tpl);?>
</option>
		                        </select>
		                        <span class="input-group-btn" id="content_add_button">
		                           <button class="btn btn-primary action-btn" type="submit"><span class="glyphicon glyphicon-plus-sign"></span></button>
		                        </span>
		                    </div>

		                    <span class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a content and click (+) to add it to this product'),$_smarty_tpl);?>
</span>
		                </div>

		                <div id="content_selector_empty" class="hide">
		                   <div class="alert alert-info">
		                       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No available content in this folder"),$_smarty_tpl);?>

		                   </div>
		                </div>
		                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"folders"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"folders")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"folders"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                    <div class="alert alert-info"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No folders found"),$_smarty_tpl);?>
</div>
		                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"folders"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		            </form>
		        </div>

		        <div class="table-responsive">
		            <table class="table table-striped table-condensed table-left-aligned">
		                <thead>
		                    <tr>
		                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
</th>

		                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Content title'),$_smarty_tpl);?>
</th>

		                        <th class="text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Position'),$_smarty_tpl);?>
</th>

		                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.contents-table-header",'location'=>"product_contents_table_header"),$_smarty_tpl);?>


		                        <th class="actions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Actions"),$_smarty_tpl);?>
</th>
		                    </tr>
		                </thead>

		                <tbody>
		                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"assigned_contents",'type'=>"associated_content",'visible'=>"*",'product'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"assigned_contents",'type'=>"associated_content",'visible'=>"*",'product'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                    <tr>
		                        <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CONTENT_ID']->value,$_smarty_tpl);?>
</td>

		                        <td>
		                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/content/update/".((string)$_smarty_tpl->tpl_vars['CONTENT_ID']->value)),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</a>
		                        </td>

		                         <td class="text-center">
		                         <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/product/update-content-position','product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'current_tab'=>"related"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_position_block'][0][0]->generatePositionChangeBlock(array('resource'=>"admin.product",'access'=>"UPDATE",'path'=>$_tmp3,'url_parameter'=>"content_id",'in_place_edit_class'=>"contentPositionChange",'position'=>$_smarty_tpl->tpl_vars['POSITION']->value,'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>

		                         </td>

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.contents-table-row",'location'=>"product_contents_table_row-bottom"),$_smarty_tpl);?>


		                        <td class="actions">
		                            <div class="btn-group">
		                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resources'=>"admin.product",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resources'=>"admin.product",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                                   <a class="btn btn-default btn-xs delete-content" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Delete this content'),$_smarty_tpl);?>
" href="#delete_content_dialog" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CONTENT_ID']->value,$_smarty_tpl);?>
" data-toggle="modal">
		                                    <span class="glyphicon glyphicon-trash"></span>
		                                   </a>
		                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resources'=>"admin.product",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                            </div>
		                        </td>
		                    </tr>
		                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"assigned_contents",'type'=>"associated_content",'visible'=>"*",'product'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"assigned_contents")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"assigned_contents"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                         <tr>
		                             <td colspan="4">
		                                 <div class="alert alert-info">
		                                     <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This product contains no contents"),$_smarty_tpl);?>

		                                 </div>
		                             </td>
		                         </tr>
		                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"assigned_contents"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                </tbody>
		            </table>
		        </div>
	        </div>
	    </div>

	    

	    

	    <div class="col-md-6">
	        <div class=" well well-sm">
		        <div class="form-group">
		            <form method="POST" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/accessory/add'),$_smarty_tpl);?>
" id="accessory_form">

		                <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product accessories'),$_smarty_tpl);?>
</p>
		                <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Define here this product\'s accessories'),$_smarty_tpl);?>
</p>

		                <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
		                <input type="hidden" name="current_tab" value="related" />

		                <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"categories")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                <div class="form-group">
		                    <select name="accessory_category_id" id="accessory_category_id" class="form-control">
		                        <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a category...'),$_smarty_tpl);?>
</option>
		                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"categories",'type'=>"category-tree",'category'=>"0",'backend_context'=>"1",'visible'=>"*",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"categories",'type'=>"category-tree",'category'=>"0",'backend_context'=>"1",'visible'=>"*",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                            <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" style="padding-left: <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(3+$_smarty_tpl->tpl_vars['LEVEL']->value*20,$_smarty_tpl);?>
px"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</option>
		                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"categories",'type'=>"category-tree",'category'=>"0",'backend_context'=>"1",'visible'=>"*",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                    </select>

		                    <span class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a category to get its products'),$_smarty_tpl);?>
</span>
		                </div>

		                <div id="accessory_selector" class="hide">
		                    <div class="input-group">
		                        <select required="required" name="accessory_id" id="accessory_id" class="form-control">
		                            <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a product...'),$_smarty_tpl);?>
</option>
		                        </select>
		                        <span class="input-group-btn" id="accessory_add_button">
		                           <button class="btn btn-primary action-btn" type="submit"><span class="glyphicon glyphicon-plus-sign"></span></button>
		                        </span>
		                    </div>

		                    <span class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a product and click (+) to add it as an accessory'),$_smarty_tpl);?>
</span>
		                </div>

		                <div id="accessory_selector_empty" class="hide">
		                   <div class="alert alert-info">
		                       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No available product in this category"),$_smarty_tpl);?>

		                   </div>
		                </div>

		                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"categories"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"categories")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                    <div class="alert alert-info"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No categories found"),$_smarty_tpl);?>
</div>
		                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"categories"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		            </form>
		        </div>

		        <div class="table-responsive">
		            <table class="table table-striped table-condensed table-left-aligned">
		                <thead>
		                    <tr>
		                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
</th>

		                        <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Accessory title'),$_smarty_tpl);?>
</th>

		                        <th class="text-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Position'),$_smarty_tpl);?>
</th>

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.accessories-table-header",'location'=>"product_accessories_table_header-bottom"),$_smarty_tpl);?>


		                        <th class="actions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Actions"),$_smarty_tpl);?>
</th>
		                    </tr>
		                </thead>

		                <tbody>
		                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"assigned_accessories",'order'=>"accessory",'visible'=>"*",'type'=>"accessory",'product'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"assigned_accessories",'order'=>"accessory",'visible'=>"*",'type'=>"accessory",'product'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                    <tr>
		                        <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</td>

		                        <td>
		                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>

		                        </td>

		                         <td class="text-center">
		                         <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/product/update-accessory-position','product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'current_tab'=>"related"),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_position_block'][0][0]->generatePositionChangeBlock(array('resource'=>"admin.product",'access'=>"UPDATE",'path'=>$_tmp4,'url_parameter'=>"accessory_id",'in_place_edit_class'=>"accessoryPositionChange",'position'=>$_smarty_tpl->tpl_vars['POSITION']->value,'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>

		                         </td>

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.accessories-table-row",'location'=>"product_accessories_table_row-bottom"),$_smarty_tpl);?>


		                        <td class="actions">
		                            <div class="btn-group">
		                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resources'=>"admin.product",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resources'=>"admin.product",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                                   <a class="btn btn-default btn-xs delete-accessory" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Delete this accessory'),$_smarty_tpl);?>
" href="#delete_accessory_dialog" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ACCESSORY_ID']->value,$_smarty_tpl);?>
" data-toggle="modal">
		                                    <span class="glyphicon glyphicon-trash"></span>
		                                   </a>
		                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resources'=>"admin.product",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                            </div>
		                        </td>
		                    </tr>
		                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"assigned_accessories",'order'=>"accessory",'visible'=>"*",'type'=>"accessory",'product'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"assigned_accessories")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"assigned_accessories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		                         <tr>
		                             <td colspan="4">
		                                 <div class="alert alert-info">
		                                     <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This product contains no accessories"),$_smarty_tpl);?>

		                                 </div>
		                             </td>
		                         </tr>
		                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"assigned_accessories"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                </tbody>
		            </table>
		        </div>
		    </div>
	    </div>

        

    </div>

    <div class="row">

        

        <div class="col-md-6">
            <div class="well well-sm">
	            <div class="form-group">
	                <form method="POST" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/category/add'),$_smarty_tpl);?>
" id="related_content_form">

	                    <p class="title title-without-tabs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Additional categories'),$_smarty_tpl);?>
</p>
	                    <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'A product could be attached to more than one category. Select here the additional categories for this product.'),$_smarty_tpl);?>

	                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"default_category",'visible'=>"*",'type'=>"category",'id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"default_category",'visible'=>"*",'type'=>"category",'id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                        <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'You can change the default category (%title) in the "General" tab.','title'=>$_tmp5),$_smarty_tpl);?>

	                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"default_category",'visible'=>"*",'type'=>"category",'id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	                    <?php $_smarty_tpl->tpl_vars['exclude_from_tree'] = new Smarty_variable("-1", null, 0);?>
	                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"additional_categories",'type'=>"category",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'visible'=>"*",'exclude'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"additional_categories",'type'=>"category",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'visible'=>"*",'exclude'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                        <?php $_smarty_tpl->tpl_vars['exclude_from_tree'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['exclude_from_tree']->value).",".((string)$_smarty_tpl->tpl_vars['ID']->value), null, 0);?>
	                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"additional_categories",'type'=>"category",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'visible'=>"*",'exclude'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	                    <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
	                    <input type="hidden" name="current_tab" value="related" />

	                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"categories")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                    <div class="input-group">

	                        <select name="additional_category_id" id="accessory_category_id" class="form-control">
	                            <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a category...'),$_smarty_tpl);?>
</option>
	                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"categories",'type'=>"category-tree",'category'=>"0",'exclude'=>$_smarty_tpl->tpl_vars['exclude_from_tree']->value,'visible'=>"*",'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"categories",'type'=>"category-tree",'category'=>"0",'exclude'=>$_smarty_tpl->tpl_vars['exclude_from_tree']->value,'visible'=>"*",'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                                <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" style="padding-left: <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(3+$_smarty_tpl->tpl_vars['LEVEL']->value*20,$_smarty_tpl);?>
px" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value==$_smarty_tpl->tpl_vars['ID']->value) {?>disabled="disabled"<?php }?>>
	                                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value==$_smarty_tpl->tpl_vars['ID']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>' (default)'),$_smarty_tpl);?>
<?php }?>
	                                </option>
	                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"categories",'type'=>"category-tree",'category'=>"0",'exclude'=>$_smarty_tpl->tpl_vars['exclude_from_tree']->value,'visible'=>"*",'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	                        </select>

	                        <span class="input-group-btn" id="content_add_button">
	                           <button class="btn btn-primary action-btn" type="submit"><span class="glyphicon glyphicon-plus-sign"></span></button>
	                        </span>

	                    </div>
	                    <span class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select a category and click (+) to add it to the additional category list'),$_smarty_tpl);?>
</span>
	                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"categories"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"categories")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                        <div class="alert alert-info"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No categories found"),$_smarty_tpl);?>
</div>
	                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"categories"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	                </form>
	            </div>

	            <div class="table-responsive">
	                <table class="table table-striped table-condensed table-left-aligned">
	                    <thead>
	                        <tr>
	                            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
</th>

	                            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Category title'),$_smarty_tpl);?>
</th>

	                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.categories-table-header",'location'=>"product_categories_table_header"),$_smarty_tpl);?>


	                            <th class="actions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Actions"),$_smarty_tpl);?>
</th>
	                        </tr>
	                    </thead>

	                    <tbody>
	                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"additional_categories",'type'=>"category",'visible'=>"*",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'exclude'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"additional_categories",'type'=>"category",'visible'=>"*",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'exclude'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                        <tr>
	                            <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</td>

	                            <td>
	                                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>

	                            </td>

	                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.categories-table-row",'location'=>"product_categories_table_row"),$_smarty_tpl);?>


	                            <td class="actions">
	                                <div class="btn-group">
	                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resources'=>"admin.product",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resources'=>"admin.product",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                                       <a class="btn btn-default btn-xs delete-category" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Remove the product from this category'),$_smarty_tpl);?>
" href="#delete_category_dialog" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-toggle="modal">
	                                        <span class="glyphicon glyphicon-trash"></span>
	                                       </a>
	                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resources'=>"admin.product",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	                                </div>
	                            </td>
	                        </tr>
	                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"additional_categories",'type'=>"category",'visible'=>"*",'product'=>$_smarty_tpl->tpl_vars['product_id']->value,'exclude'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'backend_context'=>"1",'lang'=>((string)$_smarty_tpl->tpl_vars['edit_language_id']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"additional_categories")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"additional_categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	                            <tr>
	                                <td colspan="3">
	                                    <div class="alert alert-info">
	                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This product doesn't belong to any additional category."),$_smarty_tpl);?>

	                                    </div>
	                                </td>
	                            </tr>
	                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"additional_categories"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	                    </tbody>
	                </table>
	            </div>
	        </div>
        </div>
        
    </div>

</div>



<?php $_smarty_tpl->_capture_stack[0][] = array("delete_content_dialog", null, null); ob_start(); ?>
    <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
    <input type="hidden" name="content_id" id="content_delete_id" value="" />
    <input type="hidden" name="folder_id" id="folder_delete_id" value="" />

    <input type="hidden" name="current_tab" value="related" />
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Remove related content"),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to remove this related content from the product ?"),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['token_url'][0][0]->generateUrlWithToken(array('path'=>'/admin/products/content/delete'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['delete_content_dialog'];?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-confirm-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"delete_content_dialog",'dialog_title'=>$_tmp6,'dialog_message'=>$_tmp7,'form_action'=>$_tmp8,'form_content'=>$_tmp9), 0);?>




<?php $_smarty_tpl->_capture_stack[0][] = array("delete_accessory_dialog", null, null); ob_start(); ?>
    <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
    <input type="hidden" name="accessory_id" id="accessory_delete_id" value="" />
    <input type="hidden" name="accessory_category_id" id="accessory_category_delete_id" value="" />

    <input type="hidden" name="current_tab" value="related" />
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Remove an accessory"),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to remove this accessory from the product ?"),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['token_url'][0][0]->generateUrlWithToken(array('path'=>'/admin/products/accessory/delete'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['delete_accessory_dialog'];?>
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-confirm-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"delete_accessory_dialog",'dialog_title'=>$_tmp10,'dialog_message'=>$_tmp11,'form_action'=>$_tmp12,'form_content'=>$_tmp13), 0);?>




<?php $_smarty_tpl->_capture_stack[0][] = array("delete_category_dialog", null, null); ob_start(); ?>
    <input type="hidden" name="product_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
" />
    <input type="hidden" name="additional_category_id" id="additional_category_delete_id" value="" />

    <input type="hidden" name="current_tab" value="related" />
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Remove from category"),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to remove the product from this category ?"),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['token_url'][0][0]->generateUrlWithToken(array('path'=>'/admin/products/category/delete'),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['delete_category_dialog'];?>
<?php $_tmp17=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-confirm-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"delete_category_dialog",'dialog_title'=>$_tmp14,'dialog_message'=>$_tmp15,'form_action'=>$_tmp16,'form_content'=>$_tmp17), 0);?>


<script>
$(function() {

    // Set proper content ID in delete content from
    $('a.delete-content').click(function(ev) {
        $('#content_delete_id').val($(this).data('id'));
        $('#folder_delete_id').val($('#folder_id').val());
    });

    // Set proper content ID in accessory delete from
    $('a.delete-accessory').click(function(ev) {
        $('#accessory_delete_id').val($(this).data('id'));
        $('#accessory_category_delete_id').val($('#accessory_category_id').val());
    });

    // Set proper content ID in accessory delete from
    $('a.delete-category').click(function(ev) {
        $('#additional_category_delete_id').val($(this).data('id'));
    });


    // Load content on folder selection
    $('#folder_id').change(function(event) {
        var val = $(this).val();

        if (val != "") {
            $.ajax({
                 url      : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/".((string)$_smarty_tpl->tpl_vars['product_id']->value)."/available-content/"),$_smarty_tpl);?>
' + $(this).val() + '.xml',
                 type     : 'get',
                 dataType : 'json',
                 success  : function(json) {
                     $('#content_id :not(:first-child)').remove();

                     var have_content = false;

                     $.each(json, function(idx, value) {
                         $('#content_id').append($('<option>').text(value.title).attr('value', value.id));

                         have_content = true; // Lame...
                     });

                     if (have_content) {
                         $('#content_selector_empty').addClass('hide');
                         $('#content_selector').removeClass('hide');
                     }
                     else {
                         $('#content_selector_empty').removeClass('hide');
                         $('#content_selector').addClass('hide');
                     }

                 }
            });
        }
        else {
            $('#content_selector_empty').addClass('hide');
            $('#content_selector').addClass('hide');
        }
    });

    // Load accessory on category selection
    $('#accessory_category_id').change(function(event) {
        var val = $(this).val();

        if (val != "") {
            $.ajax({
                 url      : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/".((string)$_smarty_tpl->tpl_vars['product_id']->value)."/available-accessories/"),$_smarty_tpl);?>
' + $(this).val() + '.xml',
                 type     : 'get',
                 dataType : 'json',
                 success  : function(json) {
                     $('#accessory_id :not(:first-child)').remove();

                     var have_content = false;

                     $.each(json, function(idx, value) {
                         $('#accessory_id').append($('<option>').text(value.title).attr('value', value.id));

                         have_content = true; // Lame...
                     });

                     if (have_content) {
                         $('#accessory_selector_empty').addClass('hide');
                         $('#accessory_selector').removeClass('hide');
                     }
                     else {
                         $('#accessory_selector_empty').removeClass('hide');
                         $('#accessory_selector').addClass('hide');
                     }

                 }
            });
        }
        else {
            $('#accessory_selector_empty').addClass('hide');
            $('#accessory_selector').addClass('hide');
        }
    });

    

    $('.accessoryPositionChange').editable({
        type        : 'text',
        title       : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Enter new accessory position"),$_smarty_tpl);?>
",
        mode        : 'popup',
        inputclass  : 'input-mini',
        placement   : 'left',
        success     : function(response, newValue) {
            // The URL template
            var url = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('noamp'=>'1','path'=>'/admin/product/update-accessory-position','accessory_id'=>'__ID__','position'=>'__POS__','product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'current_tab'=>'related'),$_smarty_tpl);?>
";

            // Perform subtitutions
            url = url.replace('__ID__', $(this).data('id')).replace('__POS__', newValue);

            // Reload the page
            location.href = url;
        }
    });

    $('.contentPositionChange').editable({
        type        : 'text',
        title       : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Enter new content position"),$_smarty_tpl);?>
",
        mode        : 'popup',
        inputclass  : 'input-mini',
        placement   : 'left',
        success     : function(response, newValue) {
            // The URL template
            var url = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('noamp'=>'1','path'=>'/admin/product/update-content-position','content_id'=>'__ID__','position'=>'__POS__','product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'current_tab'=>'related'),$_smarty_tpl);?>
";

            // Perform subtitutions
            url = url.replace('__ID__', $(this).data('id')).replace('__POS__', newValue);

            // Reload the page
            location.href = url;
        }
    });

    // Initialize folder select value
    <?php if ($_smarty_tpl->tpl_vars['folder_id']->value!=0) {?>
        $('#folder_id').val("<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['folder_id']->value,$_smarty_tpl);?>
").change();
    <?php }?>

    // Initialize accessory category id select value
    <?php if ($_smarty_tpl->tpl_vars['accessory_category_id']->value!=0) {?>
        $('#accessory_category_id').val("<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['accessory_category_id']->value,$_smarty_tpl);?>
").change();
    <?php }?>

    // Unselect all options in attribute + feature tab
    $('.clear_feature_value').click(function(event){
        $('#feature_value_' + $(this).data('id') + ' option').prop('selected', false);

        event.preventDefault();
    });
});
</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_edit",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
