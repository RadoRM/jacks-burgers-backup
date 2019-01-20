<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:33:19
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/categories.html" */ ?>
<?php /*%%SmartyHeaderCode:6012832535bed57062dfc14-12419928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d8e84a5ce1f9c6e5b63ed42d0df7599340ba2e8' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/categories.html',
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
  'nocache_hash' => '6012832535bed57062dfc14-12419928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed5706849d72_88810086',
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
<?php if ($_valid && !is_callable('content_5bed5706849d72_88810086')) {function content_5bed5706849d72_88810086($_smarty_tpl) {?>


    <?php ob_start();?>admin.category<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php $_tmp2=ob_get_clean();?><?php ob_start();?>view<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['check_auth'][0][0]->checkAuthFunction(array('role'=>"ADMIN",'resource'=>$_tmp1,'module'=>$_tmp2,'access'=>$_tmp3,'login_tpl'=>"/admin/login"),$_smarty_tpl);?>




    <?php $_smarty_tpl->tpl_vars['admin_current_location'] = new Smarty_variable('catalog', null, 0);?>



<?php  $_config = new Smarty_Internal_Config('variables.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['declare_assets'][0][0]->declareAssets(array('directory'=>'assets'),$_smarty_tpl);?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'bo.default'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
">
<head>
    <meta charset="utf-8">

    <title><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Categories'),$_smarty_tpl);?>
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


	
<div class="categories">

    <div id="wrapper" class="container">

        <?php echo $_smarty_tpl->getSubTemplate ("includes/catalog-breadcrumb.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"categories.top",'location'=>"categories_top"),$_smarty_tpl);?>


        <div class="row">
            <div class="col-md-12">
                <div class="general-block-decorator">
                    <div class="table-responsive">
                         <table class="table table-striped table-condensed" id="category_list">
                             <caption>
                                 
                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"category_title",'type'=>"category",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['category_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"category_title",'type'=>"category",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['category_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                     <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Categories in %cat",'cat'=>$_tmp9),$_smarty_tpl);?>

                                     <?php $_smarty_tpl->tpl_vars['cat_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['ID']->value, null, 0);?>
                                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"category_title",'type'=>"category",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['category_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"category_title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"category_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                     <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Top level categories"),$_smarty_tpl);?>

                                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"category_title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"categories.caption",'location'=>"category_list_caption"),$_smarty_tpl);?>


                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"CREATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"CREATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                 <a class="btn btn-primary action-btn" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Add a new category'),$_smarty_tpl);?>
" href="#category_creation_dialog" data-toggle="modal">
                                     <span class="glyphicon glyphicon-plus-sign"></span>
                                 </a>
                                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"CREATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                             </caption>

                             <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"category_list")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"category_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                 <thead>
                                     <tr>
                                         <th class="object-title">
                                         <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['category_order']->value,'order'=>'id','reverse_order'=>'id_reverse','path'=>$_tmp10,'request_parameter_name'=>'category_order','label'=>$_tmp11),$_smarty_tpl);?>

                                         </th>

                                         <th class="object-image">&nbsp;</th>

                                         <th class="object-title">
                                         <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Category title'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['category_order']->value,'order'=>'alpha','reverse_order'=>'alpha_reverse','path'=>$_tmp12,'request_parameter_name'=>'category_order','label'=>$_tmp13),$_smarty_tpl);?>

                                         </th>

                                         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"categories.header",'location'=>"category_list_header"),$_smarty_tpl);?>


                                         <th>
                                         <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Online'),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['category_order']->value,'order'=>'visible','reverse_order'=>'visible_reverse','path'=>$_tmp14,'request_parameter_name'=>'category_order','label'=>$_tmp15),$_smarty_tpl);?>

                                         </th>

                                         <th>
                                         <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Position'),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['category_order']->value,'order'=>'manual','reverse_order'=>'manual_reverse','path'=>$_tmp16,'request_parameter_name'=>'category_order','label'=>$_tmp17),$_smarty_tpl);?>

                                         </th>

                                         <th class="actions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Actions'),$_smarty_tpl);?>
</th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"category_list",'type'=>"category",'visible'=>"*",'parent'=>$_smarty_tpl->tpl_vars['category_id']->value,'order'=>$_smarty_tpl->tpl_vars['category_order']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['lang_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"category_list",'type'=>"category",'visible'=>"*",'parent'=>$_smarty_tpl->tpl_vars['category_id']->value,'order'=>$_smarty_tpl->tpl_vars['category_order']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['lang_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                 <tr>
                                     <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</td>

                                     <td>
                                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"image",'name'=>"cat_image",'source'=>"category",'source_id'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'limit'=>"1",'width'=>"50",'height'=>"50",'resize_mode'=>"crop",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"cat_image",'source'=>"category",'source_id'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'limit'=>"1",'width'=>"50",'height'=>"50",'resize_mode'=>"crop",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                       <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['OBJECT_ID']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Browse this category'),$_smarty_tpl);?>
"><img class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_URL']->value;?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" /></a>
                                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"cat_image",'source'=>"category",'source_id'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'limit'=>"1",'width'=>"50",'height'=>"50",'resize_mode'=>"crop",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                     </td>

                                     <td class="object-title">
                                          <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Browse this category'),$_smarty_tpl);?>
">
                                            <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>

                                          </a>
                                     </td>

                                     <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"categories.row",'location'=>"category_list_row",'category_id'=>$_tmp18),$_smarty_tpl);?>


                                     <td>
                                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                             <div class="make-switch switch-small categoryVisibleToggle" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
"  data-on="success" data-off="danger" data-on-label="<i class='glyphicon glyphicon-ok'></i>" data-off-label="<i class='glyphicon glyphicon-remove'></i>">
                                                 <input type="checkbox" class="categoryVisibleToggle" <?php if ($_smarty_tpl->tpl_vars['VISIBLE']->value==1) {?>checked="checked"<?php }?>>
                                             </div>
                                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"can_change")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"can_change"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                             <div class="make-switch switch-small" data-on="success" data-off="danger" data-on-label="<i class='glyphicon glyphicon-ok'></i>" data-off-label="<i class='glyphicon glyphicon-remove'></i>">
                                                 <input type="checkbox" class="disabled" disabled="disabled" <?php if ($_smarty_tpl->tpl_vars['VISIBLE']->value==1) {?>checked="checked"<?php }?>>
                                             </div>
                                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"can_change"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                     </td>

                                     <td>
                                     <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/categories/update-position','category_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_position_block'][0][0]->generatePositionChangeBlock(array('resource'=>"admin.category",'access'=>"UPDATE",'path'=>$_tmp19,'url_parameter'=>"category_id",'in_place_edit_class'=>"categoryPositionChange",'position'=>$_smarty_tpl->tpl_vars['POSITION']->value,'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>

                                     </td>

                                     <td class="actions">
                                         <div class="btn-group">
                                             <a class="btn btn-default btn-xs" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Browse this category'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/categories','category_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
"><i class="glyphicon glyphicon-folder-open"></i></a>

                                             <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                <a class="btn btn-default btn-xs" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit this category'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories/update','category_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
"><i class="glyphicon glyphicon-edit"></i></a>
                                             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                             <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"DELETE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"DELETE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                <a class="btn btn-default btn-xs category-delete" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Delete this category and all its contents'),$_smarty_tpl);?>
"  href="#category_delete_dialog" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>
                                             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"DELETE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                         </div>
                                      </td>
                                 </tr>
                                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"category_list",'type'=>"category",'visible'=>"*",'parent'=>$_smarty_tpl->tpl_vars['category_id']->value,'order'=>$_smarty_tpl->tpl_vars['category_order']->value,'backend_context'=>"1",'lang'=>$_smarty_tpl->tpl_vars['lang_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                 </tbody>
                             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"category_list"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                             <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"category_list")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"category_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                             <thead>
                                 <tr>
                                     <td class="message">
                                         <div class="alert alert-info">
                                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"CREATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"CREATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                             <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This category has no sub-categories. To create a new one, click the + button above."),$_smarty_tpl);?>

                                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_create",'role'=>"ADMIN",'resource'=>"admin.category",'access'=>"CREATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"can_create")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"can_create"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This category has no sub-categories."),$_smarty_tpl);?>

                                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"can_create"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                         </div>
                                     </td>
                                 </tr>
                             </thead>
                             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"category_list"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                         </table>
                     </div>
                </div>
            </div>
        </div>



     

     <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"product-currency",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"product-currency",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->tpl_vars['currency_symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['SYMBOL']->value, null, 0);?>
     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"product-currency",'id'=>$_smarty_tpl->tpl_vars['edit_currency_id']->value,'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


     <?php if ($_smarty_tpl->tpl_vars['category_id']->value>0) {?>
     <div class="row">
         <div class="col-md-12">
             <div class="general-block-decorator">
                <div class="table-responsive">
                 <table class="table table-striped table-condensed">
                     <caption>
                         
                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"category_title",'type'=>"category",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['category_id']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"category_title",'type'=>"category",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['category_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                             <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Products in %cat",'cat'=>$_tmp20),$_smarty_tpl);?>

                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"category_title",'type'=>"category",'visible'=>"*",'id'=>$_smarty_tpl->tpl_vars['category_id']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"category_title")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"category_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                             <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Top level Products"),$_smarty_tpl);?>

                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"category_title"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"products.caption",'location'=>"product_list_caption"),$_smarty_tpl);?>


                         <a class="btn btn-primary action-btn" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Add a new product'),$_smarty_tpl);?>
" href="#product_creation_dialog" data-toggle="modal">
                             <span class="glyphicon glyphicon-plus-sign"></span>
                         </a>
                     </caption>

                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"product_list")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                         <thead>
                             <tr>
                                 <th class="object-title">
                                 <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'target'=>'products'),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['product_order']->value,'order'=>'id','reverse_order'=>'id_reverse','path'=>$_tmp21,'request_parameter_name'=>'product_order','label'=>$_tmp22),$_smarty_tpl);?>


                                 <th>&nbsp;</th>

                                 <th class="object-title">
                                 <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'target'=>'products'),$_smarty_tpl);?>
<?php $_tmp23=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Reference'),$_smarty_tpl);?>
<?php $_tmp24=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['product_order']->value,'order'=>'ref','reverse_order'=>'ref_reverse','path'=>$_tmp23,'request_parameter_name'=>'product_order','label'=>$_tmp24),$_smarty_tpl);?>

                                 </th>

                                 <th class="object-title">
                                 <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'target'=>'products'),$_smarty_tpl);?>
<?php $_tmp25=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product title'),$_smarty_tpl);?>
<?php $_tmp26=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['product_order']->value,'order'=>'alpha','reverse_order'=>'alpha_reverse','path'=>$_tmp25,'request_parameter_name'=>'product_order','label'=>$_tmp26),$_smarty_tpl);?>


                                 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"products.header",'location'=>"product_list_header"),$_smarty_tpl);?>


                                 <th class="text-right">
                                     <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'target'=>'products'),$_smarty_tpl);?>
<?php $_tmp27=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Price'),$_smarty_tpl);?>
<?php $_tmp28=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['product_order']->value,'order'=>'min_price','reverse_order'=>'max_price','path'=>$_tmp27,'request_parameter_name'=>'product_order','label'=>$_tmp28),$_smarty_tpl);?>

                                 </th>

                                 <th class="text-center">
                                     <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'target'=>'products'),$_smarty_tpl);?>
<?php $_tmp29=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Online'),$_smarty_tpl);?>
<?php $_tmp30=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['product_order']->value,'order'=>'visible','reverse_order'=>'visible_reverse','path'=>$_tmp29,'request_parameter_name'=>'product_order','label'=>$_tmp30),$_smarty_tpl);?>

                                 </th>

                                 <th class="text-center">
                                 <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/catalog','category_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'target'=>'products'),$_smarty_tpl);?>
<?php $_tmp31=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Position'),$_smarty_tpl);?>
<?php $_tmp32=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['product_order']->value,'order'=>'manual','reverse_order'=>'manual_reverse','path'=>$_tmp31,'request_parameter_name'=>'product_order','label'=>$_tmp32),$_smarty_tpl);?>

                                 </th>

                                 <th class="actions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Actions"),$_smarty_tpl);?>
</th>
                             </tr>
                         </thead>

                         <tbody>
                         <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"product_list",'type'=>"product",'visible'=>"*",'category_default'=>$_smarty_tpl->tpl_vars['category_id']->value,'order'=>$_smarty_tpl->tpl_vars['product_order']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'backend_context'=>"on",'limit'=>$_smarty_tpl->getConfigVariable('max_displayed_products'))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_list",'type'=>"product",'visible'=>"*",'category_default'=>$_smarty_tpl->tpl_vars['category_id']->value,'order'=>$_smarty_tpl->tpl_vars['product_order']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'backend_context'=>"on",'limit'=>$_smarty_tpl->getConfigVariable('max_displayed_products')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                         <tr>
                             <td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</td>

                             <td>
                             <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"image",'name'=>"cat_image",'source'=>"product",'source_id'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'limit'=>"1",'width'=>"50",'height'=>"50",'resize_mode'=>"crop",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"cat_image",'source'=>"product",'source_id'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'limit'=>"1",'width'=>"50",'height'=>"50",'resize_mode'=>"crop",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                               <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['OBJECT_ID']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit this product'),$_smarty_tpl);?>
">
                                 <img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_URL']->value;?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" />
                               </a>
                             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"image",'name'=>"cat_image",'source'=>"product",'source_id'=>((string)$_smarty_tpl->tpl_vars['ID']->value),'limit'=>"1",'width'=>"50",'height'=>"50",'resize_mode'=>"crop",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                             </td>

                             <td class="object-title">
                                 <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit this product'),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
</a>
                                 <?php if ($_smarty_tpl->tpl_vars['VIRTUAL']->value) {?><span class="glyphicon glyphicon-download text-muted" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Virtual product'),$_smarty_tpl);?>
"></span><?php }?>
                             </td>

                             <td class="object-title"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit this product'),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</a></td>

                             <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
<?php $_tmp33=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"products.row",'location'=>"product_list_row",'product_id'=>$_tmp33),$_smarty_tpl);?>


                             <td class="text-right"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'current_tab'=>'prices'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit Prices'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['BEST_PRICE']->value,'symbol'=>$_smarty_tpl->tpl_vars['currency_symbol']->value),$_smarty_tpl);?>
</a></td>

                             <td class="text-center">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <div class="make-switch switch-small productVisibleToggle" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
"  data-on="success" data-off="danger" data-on-label="<i class='glyphicon glyphicon-ok'></i>" data-off-label="<i class='glyphicon glyphicon-remove'></i>">
                                            <input type="checkbox" class="productVisibleToggle" <?php if ($_smarty_tpl->tpl_vars['VISIBLE']->value==1) {?>checked="checked"<?php }?>>
                                        </div>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"can_change")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"can_change"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <div class="make-switch switch-small" data-on="success" data-off="danger" data-on-label="<i class='glyphicon glyphicon-ok'></i>" data-off-label="<i class='glyphicon glyphicon-remove'></i>">
                                            <input type="checkbox" class="disabled" disabled="disabled" <?php if ($_smarty_tpl->tpl_vars['VISIBLE']->value==1) {?>checked="checked"<?php }?>>
                                        </div>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"can_change"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                             </td>

                             <td class="text-center">
                             <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update-position','product_id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>
<?php $_tmp34=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_position_block'][0][0]->generatePositionChangeBlock(array('resource'=>"admin.product",'access'=>"UPDATE",'path'=>$_tmp34,'url_parameter'=>"product_id",'in_place_edit_class'=>"productPositionChange",'position'=>$_smarty_tpl->tpl_vars['POSITION']->value,'id'=>$_smarty_tpl->tpl_vars['ID']->value),$_smarty_tpl);?>

                             </td>

                             <td class="actions">
                                 <div class="btn-group">
                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <a class="btn btn-default btn-xs" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit this product'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>$_smarty_tpl->tpl_vars['ID']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><i class="glyphicon glyphicon-edit"></i></a>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"DELETE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"DELETE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                       <a class="btn btn-default btn-xs product-delete" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Delete this product'),$_smarty_tpl);?>
"  href="#product_delete_dialog" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></a>
                                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_delete",'role'=>"ADMIN",'resource'=>"admin.product",'access'=>"DELETE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                 </div>
                              </td>
                         </tr>
                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"product_list",'type'=>"product",'visible'=>"*",'category_default'=>$_smarty_tpl->tpl_vars['category_id']->value,'order'=>$_smarty_tpl->tpl_vars['product_order']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'backend_context'=>"on",'limit'=>$_smarty_tpl->getConfigVariable('max_displayed_products')), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                         </tbody>
                         <tfoot>
                         <tr>
                             <td colspan="100">
                                 <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/catalog",'category_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'product_order'=>$_smarty_tpl->tpl_vars['product_order']->value),$_smarty_tpl);?>
<?php $_tmp35=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('loop_ref'=>"product_list",'max_page_count'=>10,'page_url'=>$_tmp35), 0);?>


                             </td>
                         </tr>
                         </tfoot>
                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"product_list"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"product_list")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                     <thead>
                         <tr>
                             <td class="message"><div class="alert alert-info"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"This category doesn't contains any products. To add a new product, <strong>click the + button</strong> above."),$_smarty_tpl);?>
</div></td>
                         </tr>
                     </thead>
                     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"product_list"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                 </table>
                </div>
             </div>
            </div>
        </div>
        <?php } else { ?>
        <div class="alert alert-info"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"To create a new product, select an existing category, or create a new one."),$_smarty_tpl);?>
</div>
        <?php }?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"categories.bottom",'location'=>"categories_bottom"),$_smarty_tpl);?>


    </div>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"categories.catalog-bottom",'location'=>"catalog_bottom"),$_smarty_tpl);?>


</div>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.admin.category.creation")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.category.creation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    
    <?php $_smarty_tpl->_capture_stack[0][] = array("category_creation_dialog", null, null); ob_start(); ?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

           
           <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories/update','category_id'=>'_ID_'),$_smarty_tpl);?>
" />
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'parent')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'parent'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

           <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['category_id']->value,$_smarty_tpl);?>
" />
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'parent'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'title')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"lang",'name'=>"default-lang",'default_only'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"default-lang",'default_only'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="input-group">
                        <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Category title'),$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Name'),$_smarty_tpl);?>
">
                        <span class="input-group-addon"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>"assets/img/flags/".((string)$_smarty_tpl->tpl_vars['CODE']->value).".png"),$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" /></span>
                    </div>

                    <div class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Enter here the category name in the default language (%title)','title'=>((string)$_smarty_tpl->tpl_vars['TITLE']->value)),$_smarty_tpl);?>
</div>

                    
                    <input type="hidden" name="edit_language_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" />

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'locale')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'locale'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LOCALE']->value,$_smarty_tpl);?>
" />
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'locale'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"default-lang",'default_only'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'title'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'visible')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'visible'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" checked="checked">
                        <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

                    </label>
                </div>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'visible'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"category.create-form",'location'=>"category_create_form"),$_smarty_tpl);?>


    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Create a new category"),$_smarty_tpl);?>
<?php $_tmp36=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['category_creation_dialog'];?>
<?php $_tmp37=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Create this category"),$_smarty_tpl);?>
<?php $_tmp38=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories/create'),$_smarty_tpl);?>
<?php $_tmp39=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_enctype'][0][0]->formEnctype(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>
<?php $_tmp40=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-create-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"category_creation_dialog",'dialog_title'=>$_tmp36,'dialog_body'=>$_tmp37,'dialog_ok_label'=>$_tmp38,'form_action'=>$_tmp39,'form_enctype'=>$_tmp40,'form_error_message'=>$_smarty_tpl->tpl_vars['form_error_message']->value), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.category.creation"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.admin.product.creation")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product.creation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    
    <?php $_smarty_tpl->_capture_stack[0][] = array("product_creation_dialog", null, null); ob_start(); ?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>


        
        <input type="hidden" name="category_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['category_id']->value,$_smarty_tpl);?>
" />

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

           
           <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/update','product_id'=>'_ID_'),$_smarty_tpl);?>
" />
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'success_url'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'default_category')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'default_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

           <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['category_id']->value,$_smarty_tpl);?>
" />
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'default_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ref')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ref'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>

                <div class="from-group">
                    <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Reference'),$_smarty_tpl);?>
">
                </div>

                <div class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Enter here the product reference'),$_smarty_tpl);?>
</div>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'ref'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'title')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"lang",'name'=>"default-lang",'default_only'=>"1",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"default-lang",'default_only'=>"1",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="input-group">
                        <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Title'),$_smarty_tpl);?>
">
                        <span class="input-group-addon"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->functionImage(array('file'=>"assets/img/flags/".((string)$_smarty_tpl->tpl_vars['CODE']->value).".png"),$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
" /></span>
                    </div>

                    <div class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Enter here the product name in the default language (%title)','title'=>((string)$_smarty_tpl->tpl_vars['TITLE']->value)),$_smarty_tpl);?>
</div>

                    
                    <input type="hidden" name="edit_language_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" />

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'locale')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'locale'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LOCALE']->value,$_smarty_tpl);?>
" />
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'locale'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"lang",'name'=>"default-lang",'default_only'=>"1",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'title'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>




        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_rule')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_rule'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
                <div class="form-group">
                    <select id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control">
                        <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Select a tax tule"),$_smarty_tpl);?>
</option>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"tax",'type'=>"tax-rule",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"tax",'type'=>"tax-rule",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <option value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['IS_DEFAULT']->value) {?>selected="selected"<?php }?>><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</option>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"tax",'type'=>"tax-rule",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </select>
                </div>

                <div class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Select here the tax applicable to this product'),$_smarty_tpl);?>
</div>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_rule'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


					<div class="row">
	                    <div class="col-lg-4">
						    <div class="input-group">
						        <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" required="required" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="col-lg-2 form-control automatic_price_field" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product price'),$_smarty_tpl);?>
" data-price-type="price-without-tax" data-rel-price="price_with_tax">
						        <span class="input-group-addon"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SYMBOL']->value,$_smarty_tpl);?>
</span>
						    </div>
					    </div>
					</div>

					<div class="help-block"><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl);?>
<?php $_tmp41=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Enter here the product price in %title','title'=>$_tmp41),$_smarty_tpl);?>
</div>

			        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			            <input type="hidden" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" />
			        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'currency'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'price'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_price')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_price'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
 : </label>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1",'backend_context'=>"1")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1",'backend_context'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


					<div class="row">
	                    <div class="col-lg-4">
						    <div class="input-group">
						        <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="col-lg-2 form-control automatic_price_field" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product tax price'),$_smarty_tpl);?>
" data-price-type="price-with-tax" data-rel-price="price_without_tax">
						        <span class="input-group-addon"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['SYMBOL']->value,$_smarty_tpl);?>
</span>
						    </div>
					    </div>
					</div>

					<div class="help-block"><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl);?>
<?php $_tmp42=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Enter here the product tax price in %title','title'=>$_tmp42),$_smarty_tpl);?>
</div>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"default-currency",'default_only'=>"1",'backend_context'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'tax_price'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <label for="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" class="control-label"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
: </label>

                <div class="row">
                    <div class="col-lg-4">
		                <div class="input-group">
		                    <input type="text" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" class="form-control" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
" title="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Product weight'),$_smarty_tpl);?>
">
		                    <span class="input-group-addon"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Kg"),$_smarty_tpl);?>
</span>
		                </div>
		            </div>
		        </div>

                <div class="help-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Enter here the product weight, in Kilogrammes'),$_smarty_tpl);?>
</div>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'weight'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1">
                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

                </label>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'virtual'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'visible')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'visible'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>has-error<?php }?>">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" value="1" checked="checked">
                        <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl);?>

                    </label>
                </div>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>'visible'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.create-form",'location'=>"product_create_form"),$_smarty_tpl);?>


    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Create a new product"),$_smarty_tpl);?>
<?php $_tmp43=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['product_creation_dialog'];?>
<?php $_tmp44=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Create this product"),$_smarty_tpl);?>
<?php $_tmp45=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/products/create'),$_smarty_tpl);?>
<?php $_tmp46=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_enctype'][0][0]->formEnctype(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>
<?php $_tmp47=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-create-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"product_creation_dialog",'dialog_title'=>$_tmp43,'dialog_body'=>$_tmp44,'dialog_ok_label'=>$_tmp45,'form_action'=>$_tmp46,'form_enctype'=>$_tmp47,'form_error_message'=>$_smarty_tpl->tpl_vars['form_error_message']->value), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.admin.product.creation"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->_capture_stack[0][] = array("category_delete_dialog", null, null); ob_start(); ?>
    <input type="hidden" name="category_id" id="category_delete_id" value="" />

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"category.delete-form",'location'=>"category_delete_form"),$_smarty_tpl);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Delete category"),$_smarty_tpl);?>
<?php $_tmp48=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to delete this category and all its content ?"),$_smarty_tpl);?>
<?php $_tmp49=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['token_url'][0][0]->generateUrlWithToken(array('path'=>'/admin/categories/delete'),$_smarty_tpl);?>
<?php $_tmp50=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['category_delete_dialog'];?>
<?php $_tmp51=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-confirm-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"category_delete_dialog",'dialog_title'=>$_tmp48,'dialog_message'=>$_tmp49,'form_action'=>$_tmp50,'form_content'=>$_tmp51), 0);?>




<?php $_smarty_tpl->_capture_stack[0][] = array("product_delete_dialog", null, null); ob_start(); ?>
    <input type="hidden" name="product_id" id="product_delete_id" value="" />
    <input type="hidden" name="category_id" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['category_id']->value,$_smarty_tpl);?>
" />
    <input type="hidden" name="page" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['page']->value,$_smarty_tpl);?>
">

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"product.delete-form",'location'=>"product_delete_form"),$_smarty_tpl);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Delete product"),$_smarty_tpl);?>
<?php $_tmp52=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to delete this product ?"),$_smarty_tpl);?>
<?php $_tmp53=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['token_url'][0][0]->generateUrlWithToken(array('path'=>'/admin/products/delete'),$_smarty_tpl);?>
<?php $_tmp54=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['product_delete_dialog'];?>
<?php $_tmp55=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-confirm-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"product_delete_dialog",'dialog_title'=>$_tmp52,'dialog_message'=>$_tmp53,'form_action'=>$_tmp54,'form_content'=>$_tmp55), 0);?>



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


    

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap-switch/bootstrap-switch.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-switch/bootstrap-switch.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-switch/bootstrap-switch.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/bootstrap-editable/bootstrap-editable.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-editable/bootstrap-editable.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/bootstrap-editable/bootstrap-editable.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/jquery.typewatch.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jquery.typewatch.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/jquery.typewatch.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <script>
        $(function() {

            // Set proper category ID in delete from
            $('a.category-delete').click(function(ev) {
                $('#category_delete_id').val($(this).data('id'));
            });

            // Set proper product ID in delete from
            $('a.product-delete').click(function(ev) {
                $('#product_delete_id').val($(this).data('id'));
            });

            // JS stuff for creation form
            <?php echo $_smarty_tpl->getSubTemplate ("includes/generic-js-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"category_creation_dialog",'form_name'=>"thelia.admin.category.creation"), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("includes/generic-js-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"product_creation_dialog",'form_name'=>"thelia.admin.product.creation"), 0);?>


            

            $(".categoryVisibleToggle").on('switch-change', function(event, data) {
                $.ajax({
                   url : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/categories/toggle-online'),$_smarty_tpl);?>
",
                   data : {
                       category_id : $(this).data('id'),
                       action : 'visibilityToggle'
                   }
                });
            });


            $(".productVisibleToggle").on('switch-change', function(event, data) {
                $.ajax({
                   url : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'admin/products/toggle-online'),$_smarty_tpl);?>
",
                   data : {
                       product_id : $(this).data('id'),
                       action : 'visibilityToggle'
                   }
                });
            });

            

            $('.categoryPositionChange').editable({
                type        : 'text',
                title       : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Enter new category position"),$_smarty_tpl);?>
',
                mode        : 'popup',
                inputclass  : 'input-mini',
                placement   : 'left',
                success     : function(response, newValue) {
                    // The URL template
                    var url = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('noamp'=>'1','path'=>'/admin/categories/update-position','category_id'=>'__ID__','position'=>'__POS__'),$_smarty_tpl);?>
";

                    // Perform subtitutions
                    url = url.replace('__ID__', $(this).data('id'))
                    .replace('__POS__', newValue);

                    // Reload the page
                    location.href = url;
                }
            });

            $('.productPositionChange').editable({
                type        : 'text',
                title       : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Enter new product position"),$_smarty_tpl);?>
',
                mode        : 'popup',
                inputclass  : 'input-mini',
                placement   : 'left',
                success     : function(response, newValue) {
                    // The URL template
                    var url = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('noamp'=>'1','path'=>'/admin/products/update-position','product_id'=>'__ID__','position'=>'__POS__'),$_smarty_tpl);?>
";

                    // Perform subtitutions
                    url = url.replace('__ID__', $(this).data('id'))
                    .replace('__POS__', newValue);

                    // Reload the page
                    location.href = url;
                }
            });

            

            $('.change-default').change(function(ev) {
                var url = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/categories/set-default','category_id'=>'__ID__'),$_smarty_tpl);?>
";

                // Perform ID subtitutions
                url = url.replace('__ID__', $(this).val());

                // Reload the page
                location.href = url;
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
                        url      : '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/product/calculate-raw-price"),$_smarty_tpl);?>
',
                        data     : {
                            price      : price,
                            action     : operation,
                            tax_rule   : tax_rule_id
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


                
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"categories.js",'location'=>"categories-js"),$_smarty_tpl);?>


                </body>
         </html>

<?php }} ?>
