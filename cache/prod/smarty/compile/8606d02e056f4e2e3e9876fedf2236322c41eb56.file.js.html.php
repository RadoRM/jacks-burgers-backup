<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-20 21:14:40
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/frontOffice/default/js.html" */ ?>
<?php /*%%SmartyHeaderCode:2593364615bebe829050c82-48353711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8606d02e056f4e2e3e9876fedf2236322c41eb56' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/frontOffice/default/js.html',
      1 => 1542744039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2593364615bebe829050c82-48353711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebe82905b592_19730194',
  'variables' => 
  array (
    'ref' => 0,
    'ref_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebe82905b592_19730194')) {function content_5bebe82905b592_19730194($_smarty_tpl) {?><script type="text/javascript">

var commentConfig = {
    ref: '<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ref']->value,$_smarty_tpl);?>
',
    id: '<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ref_id']->value,$_smarty_tpl);?>
',
    start: 0,
    count: 10,

    get: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/comment/get"),$_smarty_tpl);?>
',
    post: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/comment/add"),$_smarty_tpl);?>
',
    delete: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/comment/delete"),$_smarty_tpl);?>
',
    abuse: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/comment/abuse"),$_smarty_tpl);?>
'
};

</script>
<?php }} ?>
