<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-21 00:33:14
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/includes/asides/articles.html" */ ?>
<?php /*%%SmartyHeaderCode:11251382885bec190c93f131-42196332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9041b19473a7a8bab4a7cd1bff3b228762299a3' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/includes/asides/articles.html',
      1 => 1542744042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11251382885bec190c93f131-42196332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bec190c952e23_22372413',
  'variables' => 
  array (
    'URL' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bec190c952e23_22372413')) {function content_5bec190c952e23_22372413($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"content.sidebar-top"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"content.sidebar-body")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"content.sidebar-body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"content.sidebar-body"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"content.sidebar-body"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"content.sidebar-body")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"content.sidebar-body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<!--<section id="categories" class="block block-nav" role="navigation" aria-labelledby="categories-label">
    <div class="block-heading"><h3 class="block-title" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Related"),$_smarty_tpl);?>
</h3></div>
    <div class="block-content">
        <nav class="nav-categories">
            <ul id="category" class="accordion">
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['content'][0][0]->contentDataAccess(array('attr'=>"id"),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"blog.article",'type'=>"content",'current_folder'=>"yes",'exclude'=>$_tmp12)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"blog.article",'type'=>"content",'current_folder'=>"yes",'exclude'=>$_tmp12), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"blog.article",'type'=>"content",'current_folder'=>"yes",'exclude'=>$_tmp12), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </nav>
    </div>
</section>-->
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"content.sidebar-body"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"content.sidebar-bottom"),$_smarty_tpl);?>
<?php }} ?>
