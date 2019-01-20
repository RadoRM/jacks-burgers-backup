<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-24 08:31:04
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/frontOffice/default/ajax-comments.html" */ ?>
<?php /*%%SmartyHeaderCode:14135329085bebe829dd96e8-72204814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b50d35d067772d6cc42b172d2533f5842dc5aa84' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/frontOffice/default/ajax-comments.html',
      1 => 1542744039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14135329085bebe829dd96e8-72204814',
  'function' => 
  array (
    'comment_stars' => 
    array (
      'parameter' => 
      array (
        'empty' => 1,
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebe829e787b7_61597537',
  'variables' => 
  array (
    'value' => 0,
    'foo' => 0,
    'star' => 0,
    'empty' => 0,
    'star_empty' => 0,
    'ref' => 0,
    'ref_id' => 0,
    'start' => 0,
    'count' => 0,
    'CUSTOMER_ID' => 0,
    'FIRSTNAME' => 0,
    'LASTNAME' => 0,
    'EMAIL' => 0,
    'USERNAME' => 0,
    'image' => 0,
    'username' => 0,
    'RATING' => 0,
    'TITLE' => 0,
    'CONTENT' => 0,
    'CREATED' => 0,
    'VERIFIED' => 0,
    'customer_id' => 0,
    'ID' => 0,
    'form' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebe829e787b7_61597537')) {function content_5bebe829e787b7_61597537($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/core/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_counter')) include '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/core/vendor/smarty/smarty/libs/plugins/function.counter.php';
?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0][0]->langDataAccess(array('attr'=>"locale"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['locale'] = new Smarty_variable($_tmp1, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['customer'][0][0]->customerDataAccess(array('attr'=>"id"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['customer_id'] = new Smarty_variable($_tmp2, null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"comments")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"comments"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php if (!function_exists('smarty_template_function_comment_stars')) {
    function smarty_template_function_comment_stars($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['comment_stars']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable('<span class="glyphicon glyphicon-star"></span>', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['star_empty'] = new Smarty_variable('<span class="glyphicon glyphicon-star-empty"></span>', null, 0);?>

        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 4+1 - (0) : 0-(4)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value>$_smarty_tpl->tpl_vars['foo']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['star']->value;?>

            <?php } elseif ($_smarty_tpl->tpl_vars['empty']->value==1) {?>
                <?php echo $_smarty_tpl->tpl_vars['star_empty']->value;?>

            <?php }?>
        <?php }} ?>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"comments",'type'=>"comment",'ref'=>((string)$_smarty_tpl->tpl_vars['ref']->value),'ref_id'=>((string)$_smarty_tpl->tpl_vars['ref_id']->value),'status'=>"1",'order'=>"created_reverse",'offset'=>((string)$_smarty_tpl->tpl_vars['start']->value),'limit'=>((string)$_smarty_tpl->tpl_vars['count']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"comments",'type'=>"comment",'ref'=>((string)$_smarty_tpl->tpl_vars['ref']->value),'ref_id'=>((string)$_smarty_tpl->tpl_vars['ref_id']->value),'status'=>"1",'order'=>"created_reverse",'offset'=>((string)$_smarty_tpl->tpl_vars['start']->value),'limit'=>((string)$_smarty_tpl->tpl_vars['count']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <?php if ($_smarty_tpl->tpl_vars['CUSTOMER_ID']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"customer",'type'=>"customer",'id'=>((string)$_smarty_tpl->tpl_vars['CUSTOMER_ID']->value),'current'=>"false",'limit'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"customer",'type'=>"customer",'id'=>((string)$_smarty_tpl->tpl_vars['CUSTOMER_ID']->value),'current'=>"false",'limit'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['LASTNAME']->value,2,"...",false),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['username'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['FIRSTNAME']->value)." ".$_tmp3, null, 0);?>
            <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(md5(strtolower(trim($_smarty_tpl->tpl_vars['EMAIL']->value))),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable("http://www.gravatar.com/avatar/".$_tmp4."?d=mm&s=64", null, 0);?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"customer",'type'=>"customer",'id'=>((string)$_smarty_tpl->tpl_vars['CUSTOMER_ID']->value),'current'=>"false",'limit'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"customer")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Anonymous"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['username'] = new Smarty_variable($_tmp5, null, 0);?>
            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>'assets/img/avatar.png'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_tmp6, null, 0);?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"customer"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['username'] = new Smarty_variable($_smarty_tpl->tpl_vars['USERNAME']->value, null, 0);?>
        <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(md5(strtolower(trim($_smarty_tpl->tpl_vars['EMAIL']->value))),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable("http://www.gravatar.com/avatar/".$_tmp7."?d=mm&s=64", null, 0);?>
    <?php }?>

    <div id="comment-customer-<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
" class="comment-item media">
        <img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl);?>
" alt="" class="pull-left" />
        <div class="media-body">
            <p>
                <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['username']->value,$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"By <strong>%username</strong>",'username'=>$_tmp8),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['RATING']->value) {?><span class="text-primary"><?php smarty_template_function_comment_stars($_smarty_tpl,array('value'=>$_smarty_tpl->tpl_vars['RATING']->value));?>
</span><?php }?>
            </p>
            <h3 class="comment-title media-heading"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</h3>

            <p class="comment-message"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CONTENT']->value,$_smarty_tpl);?>
</p>
            <div class="comment-alert alert hidden"></div>
            <ul class="comment-extra list-inline">
                <li class="comment-date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->formatDate(array('date'=>((string)$_smarty_tpl->tpl_vars['CREATED']->value),'output'=>"date"),$_smarty_tpl);?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['VERIFIED']->value) {?>
                <li class="comment-verified comment--is-verified"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Verified"),$_smarty_tpl);?>
</li>
                <?php } else { ?>
                <li class="comment-verified"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Verified"),$_smarty_tpl);?>
</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['customer_id']->value&&$_smarty_tpl->tpl_vars['customer_id']->value==$_smarty_tpl->tpl_vars['CUSTOMER_ID']->value) {?>
                <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/comment/delete/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
" class="delete-trigger" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-message="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Are you sure ?"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Delete"),$_smarty_tpl);?>
</a></li>
                <?php } else { ?>
                <li class="comment-abuse">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"comment.abuse.form")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"comment.abuse.form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <form id="form-add-comment-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/comment/abuse"),$_smarty_tpl);?>
" method="post" novalidate>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"id")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"id"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" />
                    <a href="#" class="abuse-trigger"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Mark as inappropriate"),$_smarty_tpl);?>
</a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"id"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </form>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"comment.abuse.form"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </li>
                <?php }?>
            </ul>
        </div>
    </div>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"comments",'type'=>"comment",'ref'=>((string)$_smarty_tpl->tpl_vars['ref']->value),'ref_id'=>((string)$_smarty_tpl->tpl_vars['ref_id']->value),'status'=>"1",'order'=>"created_reverse",'offset'=>((string)$_smarty_tpl->tpl_vars['start']->value),'limit'=>((string)$_smarty_tpl->tpl_vars['count']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"comment",'ref'=>((string)$_smarty_tpl->tpl_vars['ref']->value),'ref_id'=>((string)$_smarty_tpl->tpl_vars['ref_id']->value),'status'=>"1"),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9>$_smarty_tpl->tpl_vars['start']->value+$_smarty_tpl->tpl_vars['count']->value) {?>
    <div class="comments-more">
        <a href="#" class="comments-more-link"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Load more comments..."),$_smarty_tpl);?>
</a>
    </div>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"comments"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"comments")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"comments"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="alert alert-info">
        <?php if ($_smarty_tpl->tpl_vars['start']->value==0) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"There are no comments yet"),$_smarty_tpl);?>

        <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"No more comments"),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"comments"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
