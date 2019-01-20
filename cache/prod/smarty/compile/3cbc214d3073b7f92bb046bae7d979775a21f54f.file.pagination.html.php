<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:30
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/pagination.html" */ ?>
<?php /*%%SmartyHeaderCode:18165512305bed571a1ca6d6-50491448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cbc214d3073b7f92bb046bae7d979775a21f54f' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/pagination.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18165512305bed571a1ca6d6-50491448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed571a26bd07_95226948',
  'variables' => 
  array (
    'page_url' => 0,
    'loop_ref' => 0,
    'max_page_count' => 0,
    'PREV' => 0,
    'NEXT' => 0,
    'LAST' => 0,
    'CURRENT' => 0,
    'END' => 0,
    'START' => 0,
    'PAGE' => 0,
    'has_prev' => 0,
    'prev_page' => 0,
    'has_pages_before' => 0,
    'has_next' => 0,
    'has_pages_after' => 0,
    'next_page' => 0,
    'last_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed571a26bd07_95226948')) {function content_5bed571a26bd07_95226948($_smarty_tpl) {?>



<?php if (strpos($_smarty_tpl->tpl_vars['page_url']->value,'?')) {?>
    <?php $_smarty_tpl->tpl_vars['page_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['page_url']->value)."&", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['page_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['page_url']->value)."?", null, 0);?>
<?php }?>

<div class="text-center">
    <ul class="pagination pagination-centered">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('pageloop', array('rel'=>$_smarty_tpl->tpl_vars['loop_ref']->value,'limit'=>$_smarty_tpl->tpl_vars['max_page_count']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['pageloop'][0][0]->theliaPageLoop(array('rel'=>$_smarty_tpl->tpl_vars['loop_ref']->value,'limit'=>$_smarty_tpl->tpl_vars['max_page_count']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->tpl_vars['prev_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['PREV']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['next_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['NEXT']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['last_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['LAST']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['has_prev'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT']->value>1, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['has_next'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT']->value<$_smarty_tpl->tpl_vars['LAST']->value, null, 0);?>

            <?php $_smarty_tpl->tpl_vars['has_pages_after'] = new Smarty_variable($_smarty_tpl->tpl_vars['END']->value<$_smarty_tpl->tpl_vars['LAST']->value&&$_smarty_tpl->tpl_vars['LAST']->value>$_smarty_tpl->tpl_vars['max_page_count']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['has_pages_before'] = new Smarty_variable($_smarty_tpl->tpl_vars['START']->value>1, null, 0);?>

            <?php if ($_smarty_tpl->tpl_vars['PAGE']->value==$_smarty_tpl->tpl_vars['START']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['has_prev']->value) {?>
                    <li><a title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Go to first page"),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
page=1">&laquo;</a></li>
                    <li><a title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Go to previous page"),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
page=<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['prev_page']->value,$_smarty_tpl);?>
">&lsaquo;</a></li>

                    <?php if ($_smarty_tpl->tpl_vars['has_pages_before']->value) {?>
                        <li title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"More pages before"),$_smarty_tpl);?>
" class="disabled"><a href="#">&hellip;</a></li>
                    <?php }?>

                <?php } else { ?>
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="disabled"><a href="#">&lsaquo;</a></li>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['PAGE']->value!=$_smarty_tpl->tpl_vars['CURRENT']->value) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
page=<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['PAGE']->value,$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['PAGE']->value,$_smarty_tpl);?>
</a></li>
            <?php } else { ?>
                <li class="active"><a href="#"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['PAGE']->value,$_smarty_tpl);?>
</a></li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['PAGE']->value==$_smarty_tpl->tpl_vars['END']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['has_next']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['has_pages_after']->value) {?>
                        <li title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"More pages after"),$_smarty_tpl);?>
" class="disabled"><a href="#">&hellip;</a></li>
                    <?php }?>

                    <li><a title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Go to next page"),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
page=<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['next_page']->value,$_smarty_tpl);?>
">&rsaquo;</a></li>
                    <li><a title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Go to last page"),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
page=<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['last_page']->value,$_smarty_tpl);?>
">&raquo;</a></li>

                <?php } else { ?>
                    <li class="disabled"><a href="#">&rsaquo;</a></li>
                    <li class="disabled"><a href="#">&raquo;</a></li>
                <?php }?>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['pageloop'][0][0]->theliaPageLoop(array('rel'=>$_smarty_tpl->tpl_vars['loop_ref']->value,'limit'=>$_smarty_tpl->tpl_vars['max_page_count']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</div>
<?php }} ?>
