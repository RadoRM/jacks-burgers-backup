<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:34
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/backOffice/default/include/comments-list.html" */ ?>
<?php /*%%SmartyHeaderCode:9658298965bed572f13f0b3-40084738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '226ee053f4a594d14ffb021a166b0f71be60bb0f' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/backOffice/default/include/comments-list.html',
      1 => 1542744039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9658298965bed572f13f0b3-40084738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572f21dd11_02255697',
  'variables' => 
  array (
    'error_message' => 0,
    'loop_status' => 0,
    'loop_order' => 0,
    'amount' => 0,
    'loop_limit' => 0,
    'loop_page' => 0,
    'comment_status' => 0,
    'filter_status' => 0,
    'status' => 0,
    'loop_ref' => 0,
    'loop_ref_id' => 0,
    'ID' => 0,
    'CUSTOMER_ID' => 0,
    'EMAIL' => 0,
    'FIRSTNAME' => 0,
    'LASTNAME' => 0,
    'USERNAME' => 0,
    'TITLE' => 0,
    'CONTENT' => 0,
    'CREATED' => 0,
    'RATING' => 0,
    'VERIFIED' => 0,
    'REF_VIEW_URL' => 0,
    'REF_TITLE' => 0,
    'REF' => 0,
    'REF_ID' => 0,
    'STATUS' => 0,
    'error_delete_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572f21dd11_02255697')) {function content_5bed572f21dd11_02255697($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"comments.top",'location'=>"comments_top"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['error_message']->value,$_smarty_tpl);?>

            </div>
        </div>
    </div>
<?php }?>


<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_GET['loop_limit'])===null||$tmp==='' ? 20 : $tmp),$_smarty_tpl);?>
<?php $_tmp65=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['loop_limit'] = new Smarty_variable($_tmp65, null, 0);?>
<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp),$_smarty_tpl);?>
<?php $_tmp66=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['loop_page'] = new Smarty_variable($_tmp66, null, 0);?>
<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_GET['loop_order'])===null||$tmp==='' ? 'created_reverse' : $tmp),$_smarty_tpl);?>
<?php $_tmp67=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['loop_order'] = new Smarty_variable($_tmp67, null, 0);?>
<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_GET['loop_status'])===null||$tmp==='' ? '' : $tmp),$_smarty_tpl);?>
<?php $_tmp68=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['loop_status'] = new Smarty_variable($_tmp68, null, 0);?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"comment",'status'=>$_smarty_tpl->tpl_vars['loop_status']->value,'order'=>$_smarty_tpl->tpl_vars['loop_order']->value,'backend_context'=>"1"),$_smarty_tpl);?>
<?php $_tmp69=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["amount"] = new Smarty_variable($_tmp69, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['amount']->value<$_smarty_tpl->tpl_vars['loop_limit']->value*$_smarty_tpl->tpl_vars['loop_page']->value) {?>
    <?php $_smarty_tpl->tpl_vars['loop_page'] = new Smarty_variable(1, null, 0);?>
<?php }?>

<form action="" method="">
    <table class="table table-striped table-condensed table-left-aligned">
        <caption>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Comments management"),$_smarty_tpl);?>


            
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/module/comment/request-customer'),$_smarty_tpl);?>
"
               class="btn btn-primary action-btn">
                <span class="glyphicon glyphicon-envelope"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>'Send email to customer'),$_smarty_tpl);?>

            </a>

            <div class="table-filters">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="loop_status"
                                   class="sr-only"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Status"),$_smarty_tpl);?>
</label>
                            <select id="loop_status" name="loop_status" class="filter-element form-control"
                                    data-name="loop_status">
                                <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"All"),$_smarty_tpl);?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['status']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->index++;
?>
                                    <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['status']->index,$_smarty_tpl);?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['status']->index==$_smarty_tpl->tpl_vars['filter_status']->value) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['status']->value['label'],$_smarty_tpl);?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="trigger-filter btn btn-default"
                                type="button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Filter"),$_smarty_tpl);?>
</button>
                    </div>
                </form>
            </div>

        </caption>
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"ID"),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Author"),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Comment"),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Reference"),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Actions"),$_smarty_tpl);?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"comment",'name'=>"comment.list",'ref'=>$_smarty_tpl->tpl_vars['loop_ref']->value,'ref_id'=>$_smarty_tpl->tpl_vars['loop_ref_id']->value,'status'=>$_smarty_tpl->tpl_vars['loop_status']->value,'order'=>$_smarty_tpl->tpl_vars['loop_order']->value,'page'=>$_smarty_tpl->tpl_vars['loop_page']->value,'limit'=>$_smarty_tpl->tpl_vars['loop_limit']->value,'load_ref'=>"1",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"comment",'name'=>"comment.list",'ref'=>$_smarty_tpl->tpl_vars['loop_ref']->value,'ref_id'=>$_smarty_tpl->tpl_vars['loop_ref_id']->value,'status'=>$_smarty_tpl->tpl_vars['loop_status']->value,'order'=>$_smarty_tpl->tpl_vars['loop_order']->value,'page'=>$_smarty_tpl->tpl_vars['loop_page']->value,'limit'=>$_smarty_tpl->tpl_vars['loop_limit']->value,'load_ref'=>"1",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <tr>
                <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</td>

                
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['CUSTOMER_ID']->value) {?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"customer",'name'=>"customer",'id'=>$_smarty_tpl->tpl_vars['CUSTOMER_ID']->value,'current'=>"no",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"customer",'name'=>"customer",'id'=>$_smarty_tpl->tpl_vars['CUSTOMER_ID']->value,'current'=>"no",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/customer/update','customer_id'=>$_smarty_tpl->tpl_vars['CUSTOMER_ID']->value),$_smarty_tpl);?>
">
                                <img src="http://www.gravatar.com/avatar/<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(md5(strtolower(trim($_smarty_tpl->tpl_vars['EMAIL']->value))),$_smarty_tpl);?>
?s=48"
                                     alt=""/><br>
                                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['FIRSTNAME']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LASTNAME']->value,$_smarty_tpl);?>

                            </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"customer",'name'=>"customer",'id'=>$_smarty_tpl->tpl_vars['CUSTOMER_ID']->value,'current'=>"no",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"customer")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <em><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Unknow customer %id",'id'=>$_smarty_tpl->tpl_vars['CUSTOMER_ID']->value),$_smarty_tpl);?>
</em>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"customer"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php } else { ?>
                        <span class="label label-default"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"not a customer"),$_smarty_tpl);?>
</span>
                        <br>
                        <a href="mailto:<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['EMAIL']->value,$_smarty_tpl);?>
">
                            <img src="http://www.gravatar.com/avatar/<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(md5(strtolower(trim($_smarty_tpl->tpl_vars['EMAIL']->value))),$_smarty_tpl);?>
?s=48"
                                 alt=""/><br>
                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['USERNAME']->value,$_smarty_tpl);?>

                        </a>
                    <?php }?>
                </td>

                
                <td>
                    <h4><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</h4>

                    <p><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CONTENT']->value,$_smarty_tpl);?>
</p>
                    <ul class="list-inline">
                        <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Posted: "),$_smarty_tpl);?>

                            <strong><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CREATED']->value,$_smarty_tpl);?>
<?php $_tmp70=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->formatDate(array('date'=>$_tmp70,'output'=>"datetime"),$_smarty_tpl);?>
</strong></li>
                        <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"rating: "),$_smarty_tpl);?>
 <strong><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['RATING']->value,$_smarty_tpl);?>
</strong></li>
                        <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"verified: "),$_smarty_tpl);?>

                            <strong><?php if ($_smarty_tpl->tpl_vars['VERIFIED']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>'yes'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>'no'),$_smarty_tpl);?>
<?php }?></strong>
                        </li>
                    </ul>
                </td>

                
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['REF_VIEW_URL']->value) {?>
                    <a href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF_VIEW_URL']->value,$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>'View'),$_smarty_tpl);?>
">
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['REF_TITLE']->value) {?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF_TITLE']->value,$_smarty_tpl);?>
 <?php }?>
                        (<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
: <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF_ID']->value,$_smarty_tpl);?>
)
                        <?php if ($_smarty_tpl->tpl_vars['REF_VIEW_URL']->value) {?>
                    </a>
                    <?php }?>
                </td>

                <td class="actions" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
">
                    <div class="btn-group dropdown dropdown-status">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>"comment",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>"comment",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <a id="status-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
"
                               class="btn btn-xs btn-<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['STATUS']->value,$_smarty_tpl);?>
<?php $_tmp71=ob_get_clean();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['comment_status']->value[$_tmp71]['css'],$_smarty_tpl);?>
 dropdown-toggle"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['STATUS']->value,$_smarty_tpl);?>
<?php $_tmp72=ob_get_clean();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['comment_status']->value[$_tmp72]['label'],$_smarty_tpl);?>
 <span class="caret"></span>
                            </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>"comment",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                    <hr class="invisible"/>
                    <div class="btn-group dropdown dropdown-status">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>"comment",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>"comment",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <a class="btn btn-default btn-xs comment-change" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
"
                               title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>'Change this comment'),$_smarty_tpl);?>
"
                               href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module/comment/update/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>"comment",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>"comment",'access'=>"DELETE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>"comment",'access'=>"DELETE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <a href="#delete_dialog" data-toggle="modal" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
"
                               class="btn btn-default btn-xs comment-delete"
                               title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Delete this comment"),$_smarty_tpl);?>
">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'module'=>"comment",'access'=>"DELETE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </td>
            </tr>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"comment",'name'=>"comment.list",'ref'=>$_smarty_tpl->tpl_vars['loop_ref']->value,'ref_id'=>$_smarty_tpl->tpl_vars['loop_ref_id']->value,'status'=>$_smarty_tpl->tpl_vars['loop_status']->value,'order'=>$_smarty_tpl->tpl_vars['loop_order']->value,'page'=>$_smarty_tpl->tpl_vars['loop_page']->value,'limit'=>$_smarty_tpl->tpl_vars['loop_limit']->value,'load_ref'=>"1",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </tbody>
        <tfoot>
        <tr>
            <td colspan="100">
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"current"),$_smarty_tpl);?>
<?php $_tmp73=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>$_tmp73,'product_order'=>$_smarty_tpl->tpl_vars['loop_page']->value),$_smarty_tpl);?>
<?php $_tmp74=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('loop_ref'=>"comment.list",'max_page_count'=>$_smarty_tpl->tpl_vars['loop_limit']->value,'page_url'=>$_tmp74), 0);?>


            </td>
        </tr>
        </tfoot>
    </table>
    
</form>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"comments.bottom",'location'=>"comments_bottom"),$_smarty_tpl);?>


<div id="dropdown-status">
    <ul class="dropdown-menu" role="menu" data-id="">
        <li><a href="#" class="change-status" data-status="0"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['comment_status']->value[0]['label'],$_smarty_tpl);?>
</a></li>
        <li><a href="#" class="change-status" data-status="1"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['comment_status']->value[1]['label'],$_smarty_tpl);?>
</a></li>
        <li><a href="#" class="change-status" data-status="2"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['comment_status']->value[2]['label'],$_smarty_tpl);?>
</a></li>
        <li><a href="#" class="change-status" data-status="3"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['comment_status']->value[3]['label'],$_smarty_tpl);?>
</a></li>
    </ul>
</div>






<?php $_smarty_tpl->_capture_stack[0][] = array("delete_dialog", null, null); ob_start(); ?>
    <input type="hidden" name="comment_id" id="comment_delete_id" value=""/>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"comments.delete-form",'location'=>"comments_delete_form"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Delete comment"),$_smarty_tpl);?>
<?php $_tmp75=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Do you really want to delete this comment ?"),$_smarty_tpl);?>
<?php $_tmp76=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['token_url'][0][0]->generateUrlWithToken(array('path'=>'/admin/module/comment/delete'),$_smarty_tpl);?>
<?php $_tmp77=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['delete_dialog'];?>
<?php $_tmp78=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-confirm-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"delete_dialog",'dialog_title'=>$_tmp75,'dialog_message'=>$_tmp76,'form_action'=>$_tmp77,'form_content'=>$_tmp78,'form_error_message'=>$_smarty_tpl->tpl_vars['error_delete_message']->value), 0);?>


<div id="comment-update-modal"></div>

<div class="modal fade" id="delete-failed" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content alert alert-block alert-danger ">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Error"),$_smarty_tpl);?>
</h2>
            </div>
            <div class="modal-body">
                <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Impossible to delete comment."),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Please contact your administrator or try later"),$_smarty_tpl);?>
</strong>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="status-failed" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content alert alert-block alert-danger ">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Error"),$_smarty_tpl);?>
</h2>
            </div>
            <div class="modal-body">
                <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Impossible to change status."),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>'comment.bo.default','l'=>"Please contact your administrator or try later"),$_smarty_tpl);?>
</strong>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    var commentStatus = <?php echo json_encode($_smarty_tpl->tpl_vars['comment_status']->value);?>
;
    var commentConfig = {
        'status': '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/module/comment/status"),$_smarty_tpl);?>
'
    };

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"comments.js",'location'=>"comments-js"),$_smarty_tpl);?>

</script><?php }} ?>
