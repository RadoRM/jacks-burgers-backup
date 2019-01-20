<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-20 21:14:13
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/frontOffice/default/comment.html" */ ?>
<?php /*%%SmartyHeaderCode:11129993395bebe82889e4f4-73788547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912778c3336686620f1be8bccf01adba1c8a522e' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/Comment/templates/frontOffice/default/comment.html',
      1 => 1542744039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11129993395bebe82889e4f4-73788547',
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
  'unifunc' => 'content_5bebe828998824_90618682',
  'variables' => 
  array (
    'value' => 0,
    'foo' => 0,
    'star' => 0,
    'empty' => 0,
    'star_empty' => 0,
    'definition' => 0,
    'form' => 0,
    'name' => 0,
    'label_attr' => 0,
    'label' => 0,
    'required' => 0,
    'message' => 0,
    'rating' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebe828998824_90618682')) {function content_5bebe828998824_90618682($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_comment_stars')) {
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


<div class="comments-main">

    <div id="comment-top">

        <div class="well well-sm">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Add your comment"),$_smarty_tpl);?>

        </div>

        <div id="comment-top-message" class="alert hidden"></div>

        <?php if ($_smarty_tpl->tpl_vars['definition']->value->isValid()) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"comment.add.form")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"comment.add.form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <form id="form-add-comment" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/comment/add"),$_smarty_tpl);?>
" method="post" novalidate>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"ref")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"ref"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['definition']->value->getRef(),$_smarty_tpl);?>
" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"ref"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"ref_id")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"ref_id"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['definition']->value->getRefId(),$_smarty_tpl);?>
" />
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"ref_id"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php if (!$_smarty_tpl->tpl_vars['definition']->value->getCustomer()) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"username")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"username"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form-group">
                    <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
</label>
                    <input type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> required<?php }?>>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"username"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"email")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"email"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form-group">
                    <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
</label>
                    <input type="email" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> required<?php }?>>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"email"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
</label>
                <input type="text" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> required<?php }?>>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"content")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
</label>
                <textarea name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> required<?php }?>></textarea>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"content"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php if ($_smarty_tpl->tpl_vars['definition']->value->hasRating()) {?>

               <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"rating")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"rating"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="form-group">
                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

                    <div class="text-primary">
                        <label class="radio-inline">
                            <input type="radio" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="0">
                            <?php smarty_template_function_comment_stars($_smarty_tpl,array('value'=>0));?>

                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1">
                            <?php smarty_template_function_comment_stars($_smarty_tpl,array('value'=>1));?>

                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="2">
                            <?php smarty_template_function_comment_stars($_smarty_tpl,array('value'=>2));?>

                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="3">
                            <?php smarty_template_function_comment_stars($_smarty_tpl,array('value'=>3));?>

                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="4">
                            <?php smarty_template_function_comment_stars($_smarty_tpl,array('value'=>4));?>

                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="5">
                            <?php smarty_template_function_comment_stars($_smarty_tpl,array('value'=>5));?>

                        </label>
                    </div>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"rating"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Send"),$_smarty_tpl);?>
</button>
            </div>
        </form>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"comment.add.form"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } else { ?>
            <div class="alert alert-info"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['message']->value,$_smarty_tpl);?>
</div>
        <?php }?>
    </div>

    <div id="comment-body" class="comment-body">
        <div class="well well-sm">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('d'=>"comment.fo.default",'l'=>"Comments"),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['definition']->value->hasRating()) {?>
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['meta'][0][0]->metaAccess(array('meta'=>"COMMENT_RATING",'key'=>((string)$_smarty_tpl->tpl_vars['definition']->value->getRef()),'id'=>((string)$_smarty_tpl->tpl_vars['definition']->value->getRefId())),$_smarty_tpl);?>
<?php $_tmp23=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['rating'] = new Smarty_variable($_tmp23, null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['rating']->value) {?>
                <span class="pull-right">
                    rating: <?php smarty_template_function_comment_stars($_smarty_tpl,array('value'=>$_smarty_tpl->tpl_vars['rating']->value));?>

                </span>
                <?php }?>
            <?php }?>
        </div>

        <div id="comment-list" class="comment-list"></div>
    </div>
</div><?php }} ?>
