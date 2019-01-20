<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:34:33
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/product-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:21469717605bed572de8a235-71596885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f0c903471d99bfe922dae59fb5a5391a4a3d55b' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/product-edit.html',
      1 => 1542744041,
      2 => 'file',
    ),
    '5c9ab03b080ad5103879d8be43036881d42e19bf' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/admin-layout.tpl',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21469717605bed572de8a235-71596885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed572e242024_09680597',
  'variables' => 
  array (
    'lang_code' => 0,
    'asset_url' => 0,
    'THELIA_VERSION' => 0,
    'CODE' => 0,
    'TITLE' => 0,
    'admin_current_location' => 0,
    'id' => 0,
    'class' => 0,
    'url' => 0,
    'title' => 0,
    'ID' => 0,
    'orderStatusLabel' => 0,
    '("order_".((string)$_smarty_tpl->tpl_vars[\'CODE\']->value))' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed572e242024_09680597')) {function content_5bed572e242024_09680597($_smarty_tpl) {?>


    <?php ob_start();?>admin.product<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php $_tmp2=ob_get_clean();?><?php ob_start();?>update<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['check_auth'][0][0]->checkAuthFunction(array('role'=>"ADMIN",'resource'=>$_tmp1,'module'=>$_tmp2,'access'=>$_tmp3,'login_tpl'=>"/admin/login"),$_smarty_tpl);?>




    <?php $_smarty_tpl->tpl_vars['admin_current_location'] = new Smarty_variable('catalog', null, 0);?>



<?php  $_config = new Smarty_Internal_Config('variables.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['declare_assets'][0][0]->declareAssets(array('directory'=>'assets'),$_smarty_tpl);?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'bo.default'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
">
<head>
    <meta charset="utf-8">

    <title><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit product'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia Back Office'),$_smarty_tpl);?>
</title>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/img/favicon.ico')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/img/favicon.ico'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<link rel="shortcut icon" href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" /><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/img/favicon.ico'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    

    

    

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('stylesheets', array('file'=>'assets/css/styles.css')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['stylesheets'][0][0]->blockStylesheets(array('file'=>'assets/css/styles.css'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <link rel="stylesheet" href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
">
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['stylesheets'][0][0]->blockStylesheets(array('file'=>'assets/css/styles.css'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    

    

    

    

    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.head-css",'location'=>"head_css"),$_smarty_tpl);?>


    
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/libs/respond.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/respond.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/respond.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <![endif]-->
</head>

<body>
	

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"top-bar-auth",'type'=>"auth",'role'=>"ADMIN")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"top-bar-auth",'type'=>"auth",'role'=>"ADMIN"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	    

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-topbar",'location'=>"before_topbar"),$_smarty_tpl);?>


		<div class="topbar">
			<div class="container">

		        <div class="row">
		            <div class="col-md-12 clearfix">
		      		    <div class="version-info pull-left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Version %ver','ver'=>((string)$_smarty_tpl->tpl_vars['THELIA_VERSION']->value)),$_smarty_tpl);?>
</div>

                        <div class="clearfix pull-right hidden-xs">
                            <div class="button-toolbar pull-right" role="toolbar">

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.topbar-top"),$_smarty_tpl);?>


                                <div class="btn-group">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"index"),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'View site'),$_smarty_tpl);?>
" target="_blank" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"View shop"),$_smarty_tpl);?>
</a>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin'][0][0]->adminDataAccess(array('attr'=>"firstname"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin'][0][0]->adminDataAccess(array('attr'=>"lastname"),$_smarty_tpl);?>
</button>
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="profile" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/configuration/administrators'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-edit"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Profil"),$_smarty_tpl);?>
</a></li>
                                        <li><a class="logout" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/logout'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Close administation session'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-off"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Logout"),$_smarty_tpl);?>
</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0][0]->langDataAccess(array('attr'=>'id'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"lang",'name'=>"ui-lang",'id'=>$_tmp4)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"ui-lang",'id'=>$_tmp4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <button class="btn btn-default">
                                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>"assets/img/flags/".((string)$_smarty_tpl->tpl_vars['CODE']->value).".png"),$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" /> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(ucfirst($_smarty_tpl->tpl_vars['CODE']->value),$_smarty_tpl);?>

                                    </button>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"ui-lang",'id'=>$_tmp4), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"lang",'name'=>"ui-lang")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"ui-lang"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <li><a href="<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"current"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CODE']->value,$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>$_tmp5,'lang'=>$_tmp6),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>"assets/img/flags/".((string)$_smarty_tpl->tpl_vars['CODE']->value).".png"),$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" /> <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(ucfirst($_smarty_tpl->tpl_vars['CODE']->value),$_smarty_tpl);?>
</a></li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"ui-lang"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                     </ul>
                                </div>

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.topbar-bottom"),$_smarty_tpl);?>


                            </div>
                        </div>

		            </div>

		    		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.inside-topbar",'location'=>"inside_topbar"),$_smarty_tpl);?>


		        </div>

		    </div>
		</div>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-topbar",'location'=>"after_topbar"),$_smarty_tpl);?>


	    

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-top-menu",'location'=>"before_top_menu"),$_smarty_tpl);?>


		<nav class="navbar navbar-default" role="navigation">

            <div class="container">

                <div class="row">
        			<div class="navbar-header">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"top-bar-search",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.search",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"top-bar-search",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.search",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <form class="navbar-form-xs col-xs-8 visible-xs" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/search'),$_smarty_tpl);?>
">
                            <div class="input-group">
                                <input type="text" class="form-control" id="search_term" name="search_term" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Search'),$_smarty_tpl);?>
">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>

                        </form>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"top-bar-search",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.search",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                              
        				<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        				</button>
        			</div>

        			<div class="collapse navbar-collapse navbar-collapse">
        				<ul class="nav navbar-nav navbar-top-menu">

                            <li class="<?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='home') {?>active<?php }?>" id="home_menu">
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/home'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Home"),$_smarty_tpl);?>
</a>
                            </li>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"menu-auth-customer",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.customer",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-customer",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.customer",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.top-menu-customer")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"main.top-menu-customer",'fields'=>"id,class,url,title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-customer",'fields'=>"id,class,url,title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='customer') {?>active<?php }?>" id="customers_menu">

                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/customers'),$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/customers'),$_smarty_tpl);?>
" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Customers"),$_smarty_tpl);?>
 <span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"main.top-menu-customer")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <li role="menuitem">
                                            <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
" <?php }?> class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                                                <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                                            </a>
                                        </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-customer"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </ul>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-customer",'fields'=>"id,class,url,title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-customer"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"main.top-menu-customer")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-customer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="<?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='customer') {?>active<?php }?>" id="customers_menu">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/customers'),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Customers"),$_smarty_tpl);?>
</a>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-customer"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-customer",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.customer",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"menu-auth-order",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-order",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='order') {?>active<?php }?>" id="orders_menu">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders"),$_smarty_tpl);?>
 <span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">

                                        <li role="menuitem">
                                            <a class="clearfix" data-target="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/orders'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/orders'),$_smarty_tpl);?>
">
                                                <span class="pull-left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"All orders"),$_smarty_tpl);?>
</span>
                                                <span class="label label-default pull-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"order",'customer'=>"*",'backend_context'=>"1"),$_smarty_tpl);?>
</span>
                                            </a>
                                        </li>

                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"order-status-list",'type'=>"order-status")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"order-status-list",'type'=>"order-status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php $_smarty_tpl->tpl_vars["orderStatusLabel"] = new Smarty_variable("order_".((string)$_smarty_tpl->tpl_vars['CODE']->value), null, 0);?>
                                            <li role="menuitem">
                                                <a class="clearfix" data-target="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"admin/orders/".((string)$_smarty_tpl->tpl_vars['LABEL']->value)),$_smarty_tpl);?>
" href="<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"admin/orders",'status'=>$_tmp7),$_smarty_tpl);?>
">
                                                    <span class="pull-left"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</span>
                                                    <span class="label label-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['orderStatusLabel']->value))===null||$tmp==='' ? $_smarty_tpl->tpl_vars[("order_".((string)$_smarty_tpl->tpl_vars['CODE']->value))]->value : $tmp),$_smarty_tpl);?>
 pull-right"><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['count'][0][0]->theliaCount(array('type'=>"order",'customer'=>"*",'backend_context'=>"1",'status'=>$_tmp8),$_smarty_tpl);?>
</span>
                                                </a>
                                            </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"order-status-list",'type'=>"order-status"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"main.top-menu-order",'fields'=>"id,class,url,title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-order",'fields'=>"id,class,url,title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"main.top-menu-order")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-order"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem">
                                                <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
" <?php }?> class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                                                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                                                </a>
                                            </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-order"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-order",'fields'=>"id,class,url,title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </ul>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-order",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"menu-auth-catalog",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-catalog",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.top-menu-catalog")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-catalog"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"main.top-menu-catalog",'fields'=>"id,class,url,title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-catalog",'fields'=>"id,class,url,title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='catalog') {?>active<?php }?>" id="catalog_menu">

                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog'),$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog'),$_smarty_tpl);?>
" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Catalog"),$_smarty_tpl);?>
 <span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"main.top-menu-catalog")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-catalog"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem">
                                                <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
" <?php }?> class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                                                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                                                </a>
                                            </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-catalog"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </ul>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-catalog",'fields'=>"id,class,url,title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-catalog"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"main.top-menu-catalog")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-catalog"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="<?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='catalog') {?>active<?php }?>" id="catalog_menu">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Catalog"),$_smarty_tpl);?>
</a>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-catalog"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-catalog",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"menu-auth-content",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.folder",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-content",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.folder",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.top-menu-content")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"main.top-menu-content",'fields'=>"id,class,url,title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-content",'fields'=>"id,class,url,title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='content') {?>active<?php }?>" id="contents_menu">

                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/folders'),$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/contents'),$_smarty_tpl);?>
" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Folders"),$_smarty_tpl);?>
 <span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"main.top-menu-content")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem">
                                                <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
" <?php }?> class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                                                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                                                </a>
                                            </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-content"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </ul>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-content",'fields'=>"id,class,url,title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-content"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"main.top-menu-content")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="<?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='folder') {?>active<?php }?>" id="contents_menu">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/folders'),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Folders"),$_smarty_tpl);?>
</a>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-content"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-content",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.folder",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"menu-auth-tools",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.tools",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-tools",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.tools",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='tools') {?>active<?php }?>" id="tools_menu">
                                    
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Tools"),$_smarty_tpl);?>
 <span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"auth-coupon",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.coupon",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-coupon",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.coupon",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/coupon'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Coupons"),$_smarty_tpl);?>
</a></li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-coupon",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.coupon",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"auth-sales",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.sales",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-sales",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.sales",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/sales'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Sales management"),$_smarty_tpl);?>
</a></li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-sales",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.sales",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"auth-brand",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.brand",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-brand",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.brand",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/brand'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Brands"),$_smarty_tpl);?>
</a></li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-brand",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.brand",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"auth-export",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.export",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-export",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.export",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/export'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Export"),$_smarty_tpl);?>
</a></li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-export",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.export",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"auth-import",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.import",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-import",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.import",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/import'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Import"),$_smarty_tpl);?>
</a></li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"auth-import",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.import",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"main.top-menu-tools",'fields'=>"id,class,url,title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-tools",'fields'=>"id,class,url,title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"main.top-menu-tools")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                <li role="menuitem">
                                                    <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
" <?php }?> class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                                                        <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                                                    </a>
                                                </li>
                                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-tools"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-tools",'fields'=>"id,class,url,title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                    </ul>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-tools",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.tools",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"menu-auth-modules",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-modules",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.top-menu-modules")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-modules"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"main.top-menu-modules",'fields'=>"id,class,url,title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-modules",'fields'=>"id,class,url,title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='modules') {?>active<?php }?>" id="modules_menu">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/modules'),$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/modules'),$_smarty_tpl);?>
" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Modules"),$_smarty_tpl);?>
<span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"main.top-menu-modules")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-modules"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem">
                                                <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
" <?php }?> class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                                                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                                                </a>
                                            </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-modules"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </ul>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-modules",'fields'=>"id,class,url,title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-modules"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"main.top-menu-modules")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-modules"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="<?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='modules') {?>active<?php }?>" id="modules_menu">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/modules'),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Modules"),$_smarty_tpl);?>
</a>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-modules"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-modules",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.module",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"menu-auth-config",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.configuration",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-config",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.configuration",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"main.top-menu-configuration")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-configuration"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"main.top-menu-configuration",'fields'=>"id,class,url,title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-configuration",'fields'=>"id,class,url,title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='configuration') {?>active<?php }?>" id="config_menu">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/configuration'),$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/configuration'),$_smarty_tpl);?>
" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Configuration"),$_smarty_tpl);?>
<span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"main.top-menu-configuration")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-configuration"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li role="menuitem">
                                                <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
" <?php }?> class="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['class']->value,$_smarty_tpl);?>
" data-target="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                                                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                                                </a>
                                            </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"main.top-menu-configuration"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </ul>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"main.top-menu-configuration",'fields'=>"id,class,url,title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"main.top-menu-configuration"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"main.top-menu-configuration")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-configuration"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="<?php if ($_smarty_tpl->tpl_vars['admin_current_location']->value=='configuration') {?>active<?php }?>" id="config_menu">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/configuration'),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Configuration"),$_smarty_tpl);?>
</a>
                                </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"main.top-menu-configuration"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"menu-auth-config",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.configuration",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.in-top-menu-items",'location'=>"in_top_menu_items"),$_smarty_tpl);?>


                        </ul>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"top-bar-search",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.search",'access'=>"VIEW")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"top-bar-search",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.search",'access'=>"VIEW"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <form class="navbar-form pull-right hidden-xs" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/search'),$_smarty_tpl);?>
">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search_term" name="search_term" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Search'),$_smarty_tpl);?>
">
                            </div>
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"top-bar-search",'type'=>"auth",'role'=>"ADMIN",'resource'=>"admin.search",'access'=>"VIEW"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        			</div>
                </div>
            </div>
		</nav>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-top-menu",'location'=>"after_top_menu"),$_smarty_tpl);?>


	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"top-bar-auth",'type'=>"auth",'role'=>"ADMIN"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"top-bar-auth")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"top-bar-auth"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="topbar">
        <div class="container">

            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="version-info pull-left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Version %ver','ver'=>((string)$_smarty_tpl->tpl_vars['THELIA_VERSION']->value)),$_smarty_tpl);?>
</div>
                    <div class="clearfix pull-right hidden-xs">
                        <div class="button-toolbar pull-right" role="toolbar">
                            <div class="btn-group">
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['navigate'][0][0]->navigateToUrlFunction(array('to'=>"index"),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'View site'),$_smarty_tpl);?>
" target="_blank" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"View shop"),$_smarty_tpl);?>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"top-bar-auth"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-content",'location'=>"before_content"),$_smarty_tpl);?>


	

    <div class="catalog edit-product">

        <div id="wrapper" class="container">

            <?php echo $_smarty_tpl->getSubTemplate ("includes/catalog-breadcrumb.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('editing_category'=>"false",'editing_product'=>"true"), 0);?>


            <div class="row">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product_edit",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_edit",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                
                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['close_url'] = new Smarty_variable($_tmp9, null, 0);?>

                <div class="col-md-12 general-block-decorator">
                    <div class="row">
                        <div class="col-md-7 title">
                            <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit product %title','title'=>$_tmp10),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['REF']->value) {?> (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ref.:'),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
)<?php }?>
                        </div>

                        <div class="col-md-5 actions">
                            <a <?php if ($_smarty_tpl->tpl_vars['HAS_PREVIOUS']->value!=0) {?>href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['PREVIOUS']->value),$_smarty_tpl);?>
"<?php } else { ?>disabled="disabled"<?php }?> class="btn btn-default" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit previous product'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-arrow-left"></span></a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" target="_blank" class="btn btn-default" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Preview product page'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-eye-open"></span></a>
                            <a <?php if ($_smarty_tpl->tpl_vars['HAS_NEXT']->value!=0) {?>href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['NEXT']->value),$_smarty_tpl);?>
"<?php } else { ?>disabled="disabled"<?php }?> class="btn btn-default" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit next product'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-arrow-right"></span></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"product.tab",'id'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'fields'=>"id,title,href,content")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"product.tab",'id'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'fields'=>"id,title,href,content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                                <?php $_smarty_tpl->_capture_stack[0][] = array("product_tab_tab", null, null); ob_start(); ?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"product.tab")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"product.tab"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <li>
                                        <a href="#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>data-href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['href']->value,$_smarty_tpl);?>
"<?php }?>
                                            data-toggle="tab"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>

                                        </a>
                                    </li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"product.tab"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                                <?php $_smarty_tpl->_capture_stack[0][] = array("product_tab_content", null, null); ob_start(); ?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"product.tab")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"product.tab"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <div class="tab-pane fade" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl);?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>
                                            
                                            <div class="text-center"><span class="loading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Please wait, loading"),$_smarty_tpl);?>
</span></div>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                                        <?php }?>
                                    </div>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"product.tab"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"product.tab",'id'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'fields'=>"id,title,href,content"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <ul class="nav nav-tabs" id="tabbed-menu">
                                <li><a href="#general" data-toggle="tab" data-trigger="#virtual_field::change"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"General"),$_smarty_tpl);?>
</a></li>
                                <li><a href="#seo" data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"SEO"),$_smarty_tpl);?>
</a></li>
                                <li><a href="#prices" data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Price"),$_smarty_tpl);?>
</a></li>
                                <li>
                                    <a href="#attributes"
                                       data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/attributes/tab','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
"
                                       data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Attributes &amp; Features"),$_smarty_tpl);?>

                                    </a>
                                </li>
                                <li>
                                    <a href="#related"
                                       data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/related/tab','folder_id'=>$_smarty_tpl->tpl_vars['folder_id']->value,'accessory_category_id'=>$_smarty_tpl->tpl_vars['accessory_category_id']->value,'product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
"
                                       data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Associations"),$_smarty_tpl);?>

                                    </a>
                                </li>
                                <li>
                                    <a href="#images"
                                       data-toggle="tab"
                                       data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/image/type/product/".((string)$_smarty_tpl->tpl_vars['ID']->value)."/form-ajax"),$_smarty_tpl);?>
"
                                       data-callback="$.imageUploadManager.initImageDropZone">
                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Images"),$_smarty_tpl);?>

                                    </a>
                                </li>
                                <li>
                                    <a href="#documents"
                                       id="tab-documents"
                                       data-toggle="tab"
                                       data-href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/document/type/product/".((string)$_smarty_tpl->tpl_vars['ID']->value)."/form-ajax"),$_smarty_tpl);?>
"
                                       data-callback="$.documentUploadManager.initDocumentDropZone">
                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Documents"),$_smarty_tpl);?>

                                    </a>
                                </li>
                                <?php echo Smarty::$_smarty_vars['capture']['product_tab_tab'];?>

                                <li><a href="#modules" data-toggle="tab"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Modules"),$_smarty_tpl);?>
</a></li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane fade" id="general">
                                    <?php echo $_smarty_tpl->getSubTemplate ("includes/product-general-tab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                </div>

                                <div class="tab-pane fade" id="seo">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.admin.seo")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.seo"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/seo/save'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories','category_id'=>$_smarty_tpl->tpl_vars['DEFAULT_CATEGORY']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/seo-tab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>$_smarty_tpl->tpl_vars['form']->value,'formAction'=>$_tmp11,'pageUrl'=>$_tmp12,'closeUrl'=>$_smarty_tpl->tpl_vars['close_url']->value,'current_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'success_url'=>$_tmp13), 0);?>

                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.seo"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </div>

                                <div class="tab-pane fade" id="prices">
                                    <?php echo $_smarty_tpl->getSubTemplate ("includes/product-prices-tab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                </div>

                                <div class="tab-pane fade" id="attributes">
                                    <div class="text-center"><span class="loading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Please wait, loading"),$_smarty_tpl);?>
</span></div>
                                </div>

                                <div class="tab-pane fade" id="related">
                                    <div class="text-center"><span class="loading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Please wait, loading"),$_smarty_tpl);?>
</span></div>
                                </div>

                                <div class="tab-pane fade" id="images">
                                    <div class="text-center"><span class="loading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Please wait, loading"),$_smarty_tpl);?>
</span></div>
                                </div>

                                <div class="tab-pane fade" id="documents">
                                    <div class="text-center"><span class="loading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Please wait, loading"),$_smarty_tpl);?>
</span></div>
                                </div>

                                <?php echo Smarty::$_smarty_vars['capture']['product_tab_content'];?>


                                <div class="tab-pane fade" id="modules">
                                    <div class="form-container">
                                        <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['pageUrl']->value,$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['closeUrl']->value,$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/inner-form-toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_submit_buttons'=>true,'page_url'=>$_tmp14,'close_url'=>$_tmp15,'current_tab'=>"modules"), 0);?>

                                    </div>
                                    
                                    <?php echo $_smarty_tpl->getSubTemplate ("includes/module-tab-content.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hook'=>"product.tab-content",'location'=>"product-edit",'id'=>((string)$_smarty_tpl->tpl_vars['product_id']->value),'view'=>"product"), 0);?>

                                </div>

                             </div>
                        </div>
                    </div>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_edit",'type'=>"product",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['product_id']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['edit_language_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
    </div>

   <div class="modal fade" id="template_notice" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"warning"),$_smarty_tpl);?>
</h3>
                </div>
                <div class="modal-body">
                    <p>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"If you change the template, all the prices will be reset and you have to configure them again."),$_smarty_tpl);?>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"ok"),$_smarty_tpl);?>
</button>
                </div>
            </div>
        </div>
    </div>




    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-content",'location'=>"after_content"),$_smarty_tpl);?>

    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.before-footer",'location'=>"before_footer"),$_smarty_tpl);?>


    <hr />
    <footer class="footer">
        <div class="container">
            <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'&copy; Thelia 2013'),$_smarty_tpl);?>

            - <a href="http://www.openstudio.fr/" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Published by OpenStudio'),$_smarty_tpl);?>
</a>
            - <a href="http://thelia.net/forum" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia support forum'),$_smarty_tpl);?>
</a>
            - <a href="http://thelia.net/modules" target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia contributions'),$_smarty_tpl);?>
</a>
            </p>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.in-footer",'location'=>"in_footer"),$_smarty_tpl);?>


        </div>
    </footer>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"main.after-footer",'location'=>"after_footer"),$_smarty_tpl);?>



	

	
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script>
        if (typeof jQuery == 'undefined') {
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/libs/jquery.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/jquery.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            document.write(unescape("%3Cscript src='<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
' %3E%3C/script%3E"));
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/libs/jquery.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        }
    </script>

	

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap/bootstrap.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap/bootstrap.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap/bootstrap.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/dropzone.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/dropzone.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/dropzone.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/image-upload.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/image-upload.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/image-upload.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/document-upload.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/document-upload.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/document-upload.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap-editable/bootstrap-editable.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-editable/bootstrap-editable.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-editable/bootstrap-editable.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap-switch/bootstrap-switch.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-switch/bootstrap-switch.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	    <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-switch/bootstrap-switch.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/jquery.typewatch.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jquery.typewatch.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jquery.typewatch.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/jquery-ui-1.10.3.custom.min.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jquery-ui-1.10.3.custom.min.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jquery-ui-1.10.3.custom.min.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<script>
$(function() {
    // show tab documents
    $(".alert-warning a[href^='javascript']").on('click', function () {
        eval(this.href);
        return false;
        });
    // Atomatic ajax tab load, if data-href is defined.
    $('.nav-tabs a[data-href]').on('shown.bs.tab', function(ev) {
        var $this = $(this);
        $($this.attr('href')).load($this.data('href'), function(ev) {
            if($this.data('callback')) {
                eval($this.data('callback') + '();');
            }
        });

    });
    $('.nav-tabs a[data-trigger]').on('shown.bs.tab', function(ev) {
        var $this = $(this);
        var trigger = $this.data('trigger');
        var triggers = trigger.split('::');
        if (triggers.length == 2) {
            $(triggers[0]).trigger(triggers[1]);
        }
    });

    $("body").on("change", "#template_id", function(){
        $("#template_notice").modal('show');
    });


    // Load active tab
    $('.nav-tabs a[href="#<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['current_tab']->value,$_smarty_tpl);?>
"]').trigger("click");

    $('.nav-tabs a[href="#general"]').trigger("change");

    // vitual product
    $('#virtual_field').change(function(event) {
        var $virtual = $(this);
        if ($virtual.prop("checked")){
            var $virtualDocumentsSelector;
            $('#virtual-product-file').removeClass("hidden");
            $virtualDocumentsSelector = $('#virtual-product-file select');
            if ($virtualDocumentsSelector.length > 0){
                // update options
                $.ajax({
                    url      : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/virtual-documents/"),$_smarty_tpl);?>
' +
                               $virtualDocumentsSelector.data('product') + '/' +
                               $virtualDocumentsSelector.data('pse'),
                    type     : 'get',
                    dataType : 'json',
                    success  : function(data) {
                        var i = 0,
                            selectedOption = 0,
                            virtualDocumentsSelector,
                            option;
                        virtualDocumentsSelector = $virtualDocumentsSelector.get(0);
                        virtualDocumentsSelector.options.length = 1;
                        if (data.length == 0){
                            $('#virtual-product-message').removeClass('hidden');
                        } else {
                            $('#virtual-product-message').addClass('hidden');
                            for (; i < data.length ; i++ ){
                                if (data[i].selected){
                                    selectedOption = i + 1;
                                }
                                virtualDocumentsSelector.options[virtualDocumentsSelector.options.length]
                                    = new Option(data[i].title + ' (' + data[i].file + ')', data[i].id);
                            }
                            virtualDocumentsSelector.selectedIndex = selectedOption;

                        }
                    }
                });
            }

        } else {
            $('#virtual-product-file').addClass("hidden");
        }
    });

    // -- Product prices management tab ---------------------------------------

	// Load value on attribute selection
	$('#attribute_id').change(function(event) {
	    var val = $(this).val();

	    if (val != "") {
	        $.ajax({
	             url      : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/".((string)$_smarty_tpl->tpl_vars['product_id']->value)."/attribute-values/"),$_smarty_tpl);?>
' + $(this).val() + '.xml',
	             type     : 'get',
	             dataType : 'json',
	             success  : function(json) {
	                 $('#attribute_value_id :not(:first-child)').remove();

	                 var have_content = false;

	                 $.each(json, function(idx, value) {
	                     $('#attribute_value_id').append($('<option>').text(value.title).attr('value', value.id));

	                     have_content = true; // Lame...
	                 });

	                 if (have_content) {
	                     $('#attribute_value_selector_empty').addClass('hide');
	                     $('#attribute_value_selector').removeClass('hide');
	                 }
	                 else {
	                     $('#attribute_value_selector_empty').removeClass('hide');
	                     $('#attribute_value_selector').addClass('hide');
	                 }

	             }
	        });
	    }
	    else {
	        $('#attribute_value_selector_empty').addClass('hide');
	        $('#attribute_value_selector').addClass('hide');
	    }
	});

    // Add selected value to the combination
    $('.add-value-to-combination').click(function(event) {

    	// Hide error message
    	$('#combination_attributes_error').text('').addClass('hide');

    	// Select all elements
    	$('#combination_attributes option').prop('selected', 'selected');

        $.ajax({
            url      : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/".((string)$_smarty_tpl->tpl_vars['product_id']->value)."/add-attribute-value-to-combination/"),$_smarty_tpl);?>
'
                            + $('#attribute_value_id').val()
                            + '/'
                            + $('#combination_attributes').val()
                            + '.xml',
            type     : 'get',
            dataType : 'json',
            success  : function(json) {
                $('#combination_attributes option').remove();

                var have_content = false;

                $.each(json, function(idx, value) {
                	if (idx != 'error')
                	    $('#combination_attributes').append($('<option>').text(value.title).attr('value', value.id));
                });

                if (json.error)
                    $('#combination_attributes_error').text(json.error).removeClass('hide');

                $('#attribute_id').val('').change();
            }
       });

    	event.preventDefault();
    });

    // Remove selected value from combination
    $('.remove-value-from-combination').click(function() {

    	$('#combination_attributes option:selected').remove();

    	event.preventDefault();
    });

    // Set proper category ID in combination delete from
    $('a.combination-delete').click(function(ev) {
        $('#combination_delete_id').val($(this).data('id'));
    });

    // In create combination dialog, select all element of conbination list
    $('#combination_creation_dialog_ok').click(function() {
    	$('#combination_attributes option').prop('selected', 'selected');
    });

    // In proces tab, process exchange rate usage checkbox changes
    $('.use_exchange_rate_box').change(function(ev) {

    	if ($(this).is(':checked')) {

    		var pse_id = $(this).data('pse-id');

    	    $('.price_field').prop('readonly', true);

    	    // Reload prices
            $.ajax({
                url      : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/load-converted-prices"),$_smarty_tpl);?>
',
                data     : {
                    product_sale_element_id : pse_id,
                    currency_id             : <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['edit_currency_id']->value,$_smarty_tpl);?>

                },
                type     : 'get',
                dataType : 'json',
                success  : function(json) {
                    $('input[data-pse-id="'+pse_id+'"][data-price-type="price-with-tax"]').val(json.price_with_tax);
                    $('input[data-pse-id="'+pse_id+'"][data-price-type="price-without-tax"]').val(json.price_without_tax);
                    $('input[data-pse-id="'+pse_id+'"][data-price-type="sale-price-with-tax"]').val(json.sale_price_with_tax);
                    $('input[data-pse-id="'+pse_id+'"][data-price-type="sale-price-without-tax"]').val(json.sale_price_without_tax);
                },
                error : function(jqXHR, textStatus, errorThrown) {
                	alert("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Failed to get converted prices. Please try again.'),$_smarty_tpl);?>
 (" +errorThrown+ ")");
                }
           });

    	}
    	else {
    	    $('.price_field').prop('readonly', false)
    	}
    });

    function update_price(price, price_type, dest_field_id) {
        var tax_rule_id = $('#tax_rule_field').val();

        if (tax_rule_id != "") {

            var operation;

            if (price_type.indexOf('with-tax') != -1)
                operation = 'from_tax';
            else if (price_type.indexOf('without-tax') != -1)
                operation = 'to_tax';
            else
                operation = '';

            $.ajax({
                url      : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/calculate-price"),$_smarty_tpl);?>
',
                data     : {
                    price      : price,
                    action     : operation,
                    product_id : <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>

                },
                type     : 'get',
                dataType : 'json',
                success  : function(json) {
                    $('#' + dest_field_id).val(json.result);
                },
                error : function(jqXHR, textStatus, errorThrown) {
                    alert("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Failed to get prices. Please try again.'),$_smarty_tpl);?>
 (" +errorThrown+ ")");
                }
           });
        }
    }

    // -- Combination builder stuff --------------------------------------------

    $('#open_combination_builder').click(function(ev) {
        if (! confirm("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Existing combinations will be deleted. Do you want to continue ?'),$_smarty_tpl);?>
'")) {
        	ev.preventDefault();
        	ev.stopPropagation();
        }
    });

    <?php echo $_smarty_tpl->getSubTemplate ("includes/generic-js-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"combination_builder_dialog",'form_name'=>"thelia.admin.product_combination.build"), 0);?>


    // Automatic update of price fields: any change in the taxed (resp. untaxed) price
    // will update the untaxed (resp. taxed) one
    $('.automatic_price_field').typeWatch({
    	captureLength: 1,
    	wait         : 300,
    	callback     : function () {
            var price = $(this).val();
            $(this).val(sanitizeFloat(price));
            update_price($(this).val(), $(this).data('price-type'), $(this).data('rel-price'));
    	}
    });

    function sanitizeFloat(numVal) {
        return numVal.replace(",", ".");
    };

    // Count generated combinations in real time
    function countGeneratedCombinations() {

        var total = 0;

    	var counter = {};

    	var list = $('.attribute_av_value:checked');

    	if (list.length > 0) {

	    	list.each(function() {
	    		var attr_id = $(this).data('attribute-id');

	    		if (undefined != counter[attr_id])
	    			counter[attr_id]++;
	    		else
	    			counter[attr_id] = 1;
	    	});

	    	total = 1;

	    	for(var count in counter) {
	    		total *= counter[count];
	    	}
    	}

    	return total;
    }

    $('.attribute_av_value').change(function(ev) {
    	var total = countGeneratedCombinations();

    	$('#number_of_generated_combinations').text(total);
    });

    $(".pse-assoc-image-document").click(function() {
        var $this = $(this);
        var type = "none";
        var toggle_event = "";


        if ($this.hasClass("pse-assoc-image")) {
            type = "image";
            toggle_event = "click";
        } else if ($this.hasClass("pse-assoc-document")) {
            type = "document";
            toggle_event = "switch-change";
        } else {
            if ($this.data("type")){
                type = $this.data("type");
                toggle_event = "switch-change";
            }
        }

        var $modal_container = $("#pse-modal-container");
        var pse_id = $(this).data("id");

        $.ajax(
            "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product_sale_elements/ajax/"),$_smarty_tpl);?>
"+ type + "/" + pse_id
        ).done(function(data) {
            $modal_container.html(data);

            $("#pse-image-document-assoc-modal").modal();

            $(".do-associate").on(toggle_event, function(e, data) {
                var $file = $(this);
                var type_id = $file.data("id");

                $.ajax(
                    "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/product_sale_elements'),$_smarty_tpl);?>
/"+pse_id+"/"+type+"/"+type_id
                ).done(function() {
                    /**
                     * If the modal is for images, add some graphics
                     */
                    if (type == "image") {
                        if ($file.hasClass("is-associated")) {
                            $file.removeClass("is-associated");
                            $(".product-pse-image-join-glyphicon", $file.parent()).remove();
                        } else {
                            $file.addClass("is-associated");
                            $file.parent().append("<span class='glyphicon glyphicon-ok product-pse-image-join-glyphicon'></span>");
                        }
                    } else if (type == "virtual") {
                        if ( $file.bootstrapSwitch('status') ) {
                            $(".do-associate").each(function(){
                                if (type_id != $(this).data("id") && $(this).bootstrapSwitch('status')) {
                                    $(this).bootstrapSwitch('setState', false);
                                }
                            });
                        }
                    }

                }).fail(function(data) {
                    var $body = $(".modal-body", $modal_container);
                    $errorMessage = $("<div class='alert alert-danger'>"+data["error"]+"</div>");

                    $body.html($errorMessage + $body.html());
                });
            });
        }).fail(function(data) {
            var $modal_title = $("#associate_images_documents_label");
            var $body = $(".modal-body", $modal_container);

            $modal_title.html("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Error'),$_smarty_tpl);?>
");

            var error_message = data["error"];
            if (!error_message || error_message.length === 0) {
                error_message = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'An unknown error occured, please try again.'),$_smarty_tpl);?>
";
            }

            $body.html("<p>"+error_message+"</p>");

            $("#pse-assoc-image-document-modal").modal();
        });
    });

});

</script>




    <script>
        (function($) {
            $(document).ready(function(){
                var testModal = $(".modal-force-show");
                if(testModal.length > 0) {
                    testModal.modal("show");
                }

                // Autofocus first form field on modal
                var $modal = $('.modal');
                if ($modal.length > 0) {
                    $modal.on('shown.bs.modal', function() {
                        var $firstField = $('input:visible:first', $modal);
                        $firstField.focus();
                    });
                }
            });
        })(jQuery);
    </script>

	
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>'main.footer-js','location'=>"footer_js"),$_smarty_tpl);?>


                
    <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['product_id']->value,$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.edit-js",'location'=>"product-edit-js",'product_id'=>$_tmp16),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"wysiwyg.js",'location'=>"wysiwyg-product-edit-js"),$_smarty_tpl);?>


                </body>
         </html>

<?php }} ?>
