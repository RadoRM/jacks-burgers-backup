<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-20 21:14:09
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/misc/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16625417095bebe1795ae5a7-76259655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6a6694fee2b6ac336097aaf920700e74ca197b8' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/frontOffice/default/misc/breadcrumb.tpl',
      1 => 1542744042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16625417095bebe1795ae5a7-76259655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebe1795c5dd5_39303312',
  'variables' => 
  array (
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebe1795c5dd5_39303312')) {function content_5bebe1795c5dd5_39303312($_smarty_tpl) {?><nav class="nav-breadcrumb" role="navigation" aria-labelledby="breadcrumb-label">
    <!--<strong id="breadcrumb-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You are here:"),$_smarty_tpl);?>
</strong>-->
    <ul class="breadcrumb" itemprop="breadcrumb">
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"index"),$_smarty_tpl);?>
" itemprop="url"><span itemprop="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Home"),$_smarty_tpl);?>
</span></a></li>

        <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['breadcrumb']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['breadcrumb']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
 $_smarty_tpl->tpl_vars['breadcrumb']->iteration++;
 $_smarty_tpl->tpl_vars['breadcrumb']->last = $_smarty_tpl->tpl_vars['breadcrumb']->iteration === $_smarty_tpl->tpl_vars['breadcrumb']->total;
?>
        <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value['title']) {?>
            <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->last) {?>
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(htmlspecialchars_decode($_smarty_tpl->tpl_vars['breadcrumb']->value['title'], ENT_QUOTES),$_smarty_tpl);?>
</span></li>
            <?php } else { ?>
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['breadcrumb']->value['url'])===null||$tmp==='' ? '#' : $tmp);?>
"  title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(htmlspecialchars_decode($_smarty_tpl->tpl_vars['breadcrumb']->value['title'], ENT_QUOTES),$_smarty_tpl);?>
" itemprop="url"><span itemprop="title"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(htmlspecialchars_decode($_smarty_tpl->tpl_vars['breadcrumb']->value['title'], ENT_QUOTES),$_smarty_tpl);?>
</span></a></li>
            <?php }?>
        <?php }?>
        <?php } ?>
    </ul>
</nav><!-- /.nav-breadcrumb -->
<?php }} ?>
