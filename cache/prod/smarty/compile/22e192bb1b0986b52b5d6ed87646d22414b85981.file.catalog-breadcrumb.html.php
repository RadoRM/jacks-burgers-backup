<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:33:19
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/catalog-breadcrumb.html" */ ?>
<?php /*%%SmartyHeaderCode:18906928855bed5706dae3c0-85883156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e192bb1b0986b52b5d6ed87646d22414b85981' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/catalog-breadcrumb.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18906928855bed5706dae3c0-85883156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed5706dde306_21957854',
  'variables' => 
  array (
    'category_id' => 0,
    'ID' => 0,
    'editing_product' => 0,
    'editing_category' => 0,
    'TITLE' => 0,
    'product_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed5706dde306_21957854')) {function content_5bed5706dde306_21957854($_smarty_tpl) {?>

<ul class="breadcrumb">
	<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/home'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Home"),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/catalog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Catalog"),$_smarty_tpl);?>
</a></li>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"category_path")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"category_path"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"category_path",'type'=>"category-path",'visible'=>"*",'category'=>$_smarty_tpl->tpl_vars['category_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"category_path",'type'=>"category-path",'visible'=>"*",'category'=>$_smarty_tpl->tpl_vars['category_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if ($_smarty_tpl->tpl_vars['ID']->value==$_smarty_tpl->tpl_vars['category_id']->value&&$_smarty_tpl->tpl_vars['editing_product']->value==false) {?>
				<li class="active">
				   <?php if ($_smarty_tpl->tpl_vars['editing_category']->value==true) {?>
                       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Editing %cat','cat'=>((string)$_smarty_tpl->tpl_vars['TITLE']->value)),$_smarty_tpl);?>

				   <?php } else { ?>
                       <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories/update','category_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit this category'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"(edit)"),$_smarty_tpl);?>
</a>
			        <?php }?>
				</li>
			<?php } else { ?>
			   <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>" ".((string)$_smarty_tpl->tpl_vars['ID']->value),'action'=>'browse'),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</a></li>
			<?php }?>
	   <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"category_path",'type'=>"category-path",'visible'=>"*",'category'=>$_smarty_tpl->tpl_vars['category_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"category_path"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['editing_product']->value==true) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product_path",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_path",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Editing %title",'title'=>((string)$_smarty_tpl->tpl_vars['TITLE']->value)),$_smarty_tpl);?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_path",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
</ul><?php }} ?>
