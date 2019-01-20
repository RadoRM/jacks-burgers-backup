<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-01-17 20:39:24
         compiled from "/var/www/vhosts/jacksburgers.fr/v2/templates/backOffice/default/ajax/thelia_news_feed.html" */ ?>
<?php /*%%SmartyHeaderCode:19519368315c40d9ec052d90-31972222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac706bd6d6ecd7857f53ed7c99d92fa3adf21322' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/v2/templates/backOffice/default/ajax/thelia_news_feed.html',
      1 => 1547542892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19519368315c40d9ec052d90-31972222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LOOP_COUNT' => 0,
    'TITLE' => 0,
    'DATE' => 0,
    'DESCRIPTION' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c40d9ec075c26_53058515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c40d9ec075c26_53058515')) {function content_5c40d9ec075c26_53058515($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/jacksburgers.fr/v2/core/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'bo.default'),$_smarty_tpl);?>


<div class="panel-group" id="accordion">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"feed",'name'=>"thelia_feeds",'url'=>"http://thelia.net/Flux-rss.html?id_rubrique=8",'limit'=>"3")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"feed",'name'=>"thelia_feeds",'url'=>"http://thelia.net/Flux-rss.html?id_rubrique=8",'limit'=>"3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LOOP_COUNT']->value,$_smarty_tpl);?>
">
						<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['TITLE']->value);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->formatDate(array('timestamp'=>$_smarty_tpl->tpl_vars['DATE']->value,'output'=>'date'),$_smarty_tpl);?>

					</a>
				</h3>
			</div>
			<div id="collapse-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LOOP_COUNT']->value,$_smarty_tpl);?>
" class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['LOOP_COUNT']->value==1) {?>in<?php }?>">
				<div class="panel-body">
					
         			<p><?php echo smarty_modifier_truncate(mb_convert_encoding(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['DESCRIPTION']->value), 'UTF-8', 'HTML-ENTITIES'),250,"...",true);?>
</p>
				</div>
				<div class="panel-footer">
					<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" target="_blank" class="btn btn-defaut btn-primary"><span class="glyphicon glyphicon-book"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Lire la suite'),$_smarty_tpl);?>
</a>
				</div>
			</div>
		</div>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"feed",'name'=>"thelia_feeds",'url'=>"http://thelia.net/Flux-rss.html?id_rubrique=8",'limit'=>"3"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>
