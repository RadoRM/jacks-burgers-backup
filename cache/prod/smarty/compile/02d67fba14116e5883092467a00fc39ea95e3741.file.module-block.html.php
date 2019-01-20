<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:33:12
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/module-block.html" */ ?>
<?php /*%%SmartyHeaderCode:14815351275bfd014826fdf0-33664756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02d67fba14116e5883092467a00fc39ea95e3741' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/includes/module-block.html',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14815351275bfd014826fdf0-33664756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'caption_title' => 0,
    'module_order' => 0,
    'module_type' => 0,
    'CODE' => 0,
    'ID' => 0,
    'EXISTS' => 0,
    'TITLE' => 0,
    'VERSION' => 0,
    'CHAPO' => 0,
    'ACTIVE' => 0,
    'POSITION' => 0,
    'zones' => 0,
    'NAME' => 0,
    'LOOP_TOTAL' => 0,
    'zone_count' => 0,
    'btnstyle' => 0,
    'title' => 0,
    'icon' => 0,
    'CONFIGURABLE' => 0,
    'HOOKABLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bfd0148318537_02959016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfd0148318537_02959016')) {function content_5bfd0148318537_02959016($_smarty_tpl) {?><div class="general-block-decorator">
    <div class="table-responsive">
        <table class="table table-striped table-condensed table-left-aligned">
            <caption class="clearfix">
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'classic modules'),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['caption_title']->value)===null||$tmp==='' ? $_tmp16 : $tmp),$_smarty_tpl);?>

            </caption>
            <thead>
            <tr>
                <th>
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/modules'),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['module_order']->value,'order'=>'id','reverse_order'=>'id_reverse','path'=>$_tmp17,'request_parameter_name'=>'module_order','label'=>$_tmp18),$_smarty_tpl);?>

                </th>
                <th>
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/modules'),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Name'),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['module_order']->value,'order'=>'alpha','reverse_order'=>'alpha_reverse','path'=>$_tmp19,'request_parameter_name'=>'module_order','label'=>$_tmp20),$_smarty_tpl);?>

                </th>

                <th>
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/modules'),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Code'),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['module_order']->value,'order'=>'code','reverse_order'=>'code_reverse','path'=>$_tmp21,'request_parameter_name'=>'module_order','label'=>$_tmp22),$_smarty_tpl);?>

                </th>

                <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"version"),$_smarty_tpl);?>
</th>

                <th>
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/modules'),$_smarty_tpl);?>
<?php $_tmp23=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Description'),$_smarty_tpl);?>
<?php $_tmp24=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['module_order']->value,'order'=>'title','reverse_order'=>'title_reverse','path'=>$_tmp23,'request_parameter_name'=>'module_order','label'=>$_tmp24),$_smarty_tpl);?>

                </th>

                <th class="text-center">
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/modules'),$_smarty_tpl);?>
<?php $_tmp25=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Enable/Disable'),$_smarty_tpl);?>
<?php $_tmp26=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['module_order']->value,'order'=>'enabled','reverse_order'=>'enabled_reverse','path'=>$_tmp25,'request_parameter_name'=>'module_order','label'=>$_tmp26),$_smarty_tpl);?>

                </th>

                <th class="text-center">
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/modules'),$_smarty_tpl);?>
<?php $_tmp27=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Position'),$_smarty_tpl);?>
<?php $_tmp28=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['module_order']->value,'order'=>'manual','reverse_order'=>'manual_reverse','path'=>$_tmp27,'request_parameter_name'=>'module_order','label'=>$_tmp28),$_smarty_tpl);?>

                </th>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"modules.table-header",'location'=>"modules_table_header"),$_smarty_tpl);?>


                <th class="actions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Actions"),$_smarty_tpl);?>
</th>
            </tr>
            </thead>

            <tbody>
            <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->tpl_vars['module_type']->value)===null||$tmp==='' ? 1 : $tmp),$_smarty_tpl);?>
<?php $_tmp29=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"module",'name'=>"module.".((string)$_smarty_tpl->tpl_vars['module_type']->value),'module_type'=>$_tmp29,'order'=>$_smarty_tpl->tpl_vars['module_order']->value,'backend_context'=>1)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"module",'name'=>"module.".((string)$_smarty_tpl->tpl_vars['module_type']->value),'module_type'=>$_tmp29,'order'=>$_smarty_tpl->tpl_vars['module_order']->value,'backend_context'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'role'=>"ADMIN",'name'=>"can_view_module.".((string)$_smarty_tpl->tpl_vars['module_type']->value),'access'=>"VIEW",'resource'=>"admin.module",'module'=>$_smarty_tpl->tpl_vars['CODE']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'role'=>"ADMIN",'name'=>"can_view_module.".((string)$_smarty_tpl->tpl_vars['module_type']->value),'access'=>"VIEW",'resource'=>"admin.module",'module'=>$_smarty_tpl->tpl_vars['CODE']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <tr id="module-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" <?php if (!$_smarty_tpl->tpl_vars['EXISTS']->value) {?>class="warning"<?php }?>>
                    <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</td>
                    <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</td>
                    <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CODE']->value,$_smarty_tpl);?>
</td>
                    <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['VERSION']->value,$_smarty_tpl);?>
</td>
                    <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CHAPO']->value,$_smarty_tpl);?>
</td>

                    <?php if ($_smarty_tpl->tpl_vars['EXISTS']->value) {?>
                        <td class="text-center">
                            <div class="make-switch switch-small module-activation" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-on="success" data-off="danger" data-on-label="<i class='glyphicon glyphicon-ok-circle'></i>" data-off-label="<i class='glyphicon glyphicon-remove-circle'></i>">
                                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value) {?>checked<?php }?>>
                            </div>
                            <noscript>
                                <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value) {?>
                                    <a title="<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_tmp30=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Deactivate %title module",'title'=>$_tmp30),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module/toggle-activation/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"deactivation"),$_smarty_tpl);?>
</a>
                                <?php } else { ?>
                                    <a title="<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_tmp31=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"activate %title module",'title'=>$_tmp31),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module/toggle-activation/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"activation"),$_smarty_tpl);?>
</a>
                                <?php }?>
                            </noscript>
                        </td>

                        <td class="text-center">
                            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"admin/module/update-position"),$_smarty_tpl);?>
<?php $_tmp32=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_position_block'][0][0]->generatePositionChangeBlock(array('resource'=>"admin.modules",'access'=>"UPDATE",'path'=>$_tmp32,'url_parameter'=>"module_id",'in_place_edit_class'=>"modulePositionChange",'position'=>$_smarty_tpl->tpl_vars['POSITION']->value,'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>

                        </td>
                    <?php } else { ?>
                        <td colspan="2" class="text-left">
                            <span class="label label-warning">Warning</span>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This module cannot be started, some files are probably missing."),$_smarty_tpl);?>

                        </td>
                    <?php }?>

                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"modules.table-row",'location'=>"modules_table_row"),$_smarty_tpl);?>


                    <td class="text-right">
                        <?php if ($_smarty_tpl->tpl_vars['module_type']->value==2) {?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"area-attached")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"area-attached"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->tpl_vars['zones'] = new Smarty_variable('', null, 0);?>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"area-attached",'type'=>"area",'module_id'=>$_smarty_tpl->tpl_vars['ID']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"area-attached",'type'=>"area",'module_id'=>$_smarty_tpl->tpl_vars['ID']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <?php $_smarty_tpl->tpl_vars['zones'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['zones']->value).", ".((string)$_smarty_tpl->tpl_vars['NAME']->value), null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['zone_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['LOOP_TOTAL']->value, null, 0);?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"area-attached",'type'=>"area",'module_id'=>$_smarty_tpl->tpl_vars['ID']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['zone_count']->value,$_smarty_tpl);?>
<?php $_tmp33=ob_get_clean();?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(ltrim($_smarty_tpl->tpl_vars['zones']->value,', '),$_smarty_tpl);?>
<?php $_tmp34=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'%count shipping zone(s) are attached to this module: %zones. Click here to change','count'=>$_tmp33,'zones'=>$_tmp34),$_smarty_tpl);?>
<?php $_tmp35=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_tmp35, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['btnstyle'] = new Smarty_variable("btn-info", null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable('', null, 0);?>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"area-attached"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"area-attached")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"area-attached"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'No shipping zone attached to this module, click here to attach one'),$_smarty_tpl);?>
<?php $_tmp36=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_tmp36, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable('<span class="glyphicon glyphicon glyphicon-exclamation-sign"></span> ', null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['btnstyle'] = new Smarty_variable("btn-danger", null, 0);?>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"area-attached"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <a class="<?php if (!$_smarty_tpl->tpl_vars['ACTIVE']->value) {?>disabled <?php }?> btn <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['btnstyle']->value,$_smarty_tpl);?>
 btn-xs" id="config-btn-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/configuration/shipping_zones/update/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Shipping zones"),$_smarty_tpl);?>
</a>
                        <?php }?>
                        <div class="btn-group">
                            <?php if ($_smarty_tpl->tpl_vars['EXISTS']->value) {?>

                                <?php if ($_smarty_tpl->tpl_vars['CONFIGURABLE']->value==1) {?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>$_smarty_tpl->tpl_vars['CODE']->value,'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>$_smarty_tpl->tpl_vars['CODE']->value,'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <a class="<?php if (!$_smarty_tpl->tpl_vars['ACTIVE']->value) {?>disabled <?php }?> btn btn-primary btn-xs" id="config-btn-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Configure this module'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module/".((string)$_smarty_tpl->tpl_vars['CODE']->value)),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Configure"),$_smarty_tpl);?>
</a>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>$_smarty_tpl->tpl_vars['CODE']->value,'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['HOOKABLE']->value) {?>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.module-hook",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.module-hook",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a class="<?php if (!$_smarty_tpl->tpl_vars['ACTIVE']->value) {?>disabled <?php }?> btn btn-default btn-xs" id="hook-btn-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Manage its hooks"),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module-hooks",'module'=>((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
" ><span class="glyphicon glyphicon-sort"></span></a>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.module-hook",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>

                                

                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <a class="btn btn-default btn-xs" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit this module'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module/update/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-edit"></span></a>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php }?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"DELETE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"DELETE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a class="btn btn-default btn-xs module-delete-action" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Delete this module'),$_smarty_tpl);?>
" href="#delete_module_dialog" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span></a>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"DELETE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    </td>
                </tr>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'role'=>"ADMIN",'name'=>"can_view_module.".((string)$_smarty_tpl->tpl_vars['module_type']->value),'access'=>"VIEW",'resource'=>"admin.module",'module'=>$_smarty_tpl->tpl_vars['CODE']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"module",'name'=>"module.".((string)$_smarty_tpl->tpl_vars['module_type']->value),'module_type'=>$_tmp29,'order'=>$_smarty_tpl->tpl_vars['module_order']->value,'backend_context'=>1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"module.".((string)$_smarty_tpl->tpl_vars['module_type']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"module.".((string)$_smarty_tpl->tpl_vars['module_type']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <tr>
                <td colspan="7">
                    <br />
                    <div class="alert alert-info">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"No module of this type was found."),$_smarty_tpl);?>

                    </div>
                </td>
            </tr>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"module.".((string)$_smarty_tpl->tpl_vars['module_type']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </tbody>
        </table>
    </div>
</div><?php }} ?>
