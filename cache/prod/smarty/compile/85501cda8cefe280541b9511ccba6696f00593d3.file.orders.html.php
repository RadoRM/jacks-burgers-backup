<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 09:41:08
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/orders.html" */ ?>
<?php /*%%SmartyHeaderCode:18023877605bfd0324d95417-73708575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85501cda8cefe280541b9511ccba6696f00593d3' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/backOffice/default/orders.html',
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
  'nocache_hash' => '18023877605bfd0324d95417-73708575',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bfd03251ee563_50699146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfd03251ee563_50699146')) {function content_5bfd03251ee563_50699146($_smarty_tpl) {?>


    <?php ob_start();?>admin.order<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php $_tmp2=ob_get_clean();?><?php ob_start();?>view<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['check_auth'][0][0]->checkAuthFunction(array('role'=>"ADMIN",'resource'=>$_tmp1,'module'=>$_tmp2,'access'=>$_tmp3,'login_tpl'=>"/admin/login"),$_smarty_tpl);?>




    <?php $_smarty_tpl->tpl_vars['admin_current_location'] = new Smarty_variable('order', null, 0);?>



<?php  $_config = new Smarty_Internal_Config('variables.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['declare_assets'][0][0]->declareAssets(array('directory'=>'assets'),$_smarty_tpl);?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'bo.default'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lang_code']->value,$_smarty_tpl);?>
">
<head>
    <meta charset="utf-8">

    <title><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Orders'),$_smarty_tpl);?>
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


	
    <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape((($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['order_page'] = new Smarty_variable($_tmp9, null, 0);?>
    <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['assertType'][0][0]->assertTypeModifier($_GET['status'],'IntListType'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['status_filter'] = new Smarty_variable($_tmp10, null, 0);?>
<div class="orders">

    <div id="wrapper" class="container">

        <ul class="breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/home'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Home"),$_smarty_tpl);?>
</a></li>
            <li><a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Orders"),$_smarty_tpl);?>
</a></li>
        </ul>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"orders.top",'location'=>"orders_top"),$_smarty_tpl);?>


        <div class="row">
            <div class="col-md-12">
                <div class="general-block-decorator">
                	<div class="table-responsive">
	                    <table class="table table-striped table-condensed table-left-aligned">
	                        <caption class="clearfix">
	                           <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Orders'),$_smarty_tpl);?>

	                        </caption>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"order-list")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"order-list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	                        <thead>
		                        <tr>
                                    <th class="object-title">
                                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/orders'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'ID'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'order'=>'id','reverse_order'=>'id-reverse','path'=>$_tmp11,'request_parameter_name'=>'orders_order','label'=>$_tmp12),$_smarty_tpl);?>
 </th>

                                    <th class="object-title">
                                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/orders'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Reference'),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'order'=>'reference','reverse_order'=>'reference-reverse','path'=>$_tmp13,'request_parameter_name'=>'orders_order','label'=>$_tmp14),$_smarty_tpl);?>
 </th>

                                    <th class="object-title">
                                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/orders'),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Date & Hour'),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'order'=>'create-date','reverse_order'=>'create-date-reverse','path'=>$_tmp15,'request_parameter_name'=>'orders_order','label'=>$_tmp16),$_smarty_tpl);?>
 </th>

                                    <th class="object-title">
                                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/orders'),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Company'),$_smarty_tpl);?>
<?php $_tmp18=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'order'=>'company','reverse_order'=>'company-reverse','path'=>$_tmp17,'request_parameter_name'=>'orders_order','label'=>$_tmp18),$_smarty_tpl);?>
 </th>

                                    <th class="object-title">
                                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/orders'),$_smarty_tpl);?>
<?php $_tmp19=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Cutomer Name'),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'order'=>'customer-name','reverse_order'=>'customer-name-reverse','path'=>$_tmp19,'request_parameter_name'=>'orders_order','label'=>$_tmp20),$_smarty_tpl);?>
 </th>

                                    <th class="object-title text-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Amount'),$_smarty_tpl);?>
</th>

                                    <th class="object-title text-center">
                                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/orders'),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Status'),$_smarty_tpl);?>
<?php $_tmp22=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['admin_sortable_header'][0][0]->generateSortableColumnHeader(array('current_order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'order'=>'status','reverse_order'=>'status-reverse','path'=>$_tmp21,'request_parameter_name'=>'orders_order','label'=>$_tmp22),$_smarty_tpl);?>
 </th>

	                               <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"orders.table-header",'location'=>"orders_table_header"),$_smarty_tpl);?>


	                               <th class="actions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Actions"),$_smarty_tpl);?>
</th>
		                        </tr>
	                        </thead>

                            <tbody>

                                <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['order_page']->value,$_smarty_tpl);?>
<?php $_tmp23=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order",'name'=>"order-list",'customer'=>"*",'order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'backend_context'=>"1",'page'=>$_tmp23,'limit'=>((string)$_smarty_tpl->getConfigVariable('max_displayed_orders')),'status'=>(($tmp = @$_smarty_tpl->tpl_vars['status_filter']->value)===null||$tmp==='' ? '*' : $tmp),'search_term'=>$_smarty_tpl->tpl_vars['search_term']->value,'search_in'=>((string)$_smarty_tpl->tpl_vars['search_in']->value))); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order",'name'=>"order-list",'customer'=>"*",'order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'backend_context'=>"1",'page'=>$_tmp23,'limit'=>((string)$_smarty_tpl->getConfigVariable('max_displayed_orders')),'status'=>(($tmp = @$_smarty_tpl->tpl_vars['status_filter']->value)===null||$tmp==='' ? '*' : $tmp),'search_term'=>$_smarty_tpl->tpl_vars['search_term']->value,'search_in'=>((string)$_smarty_tpl->tpl_vars['search_in']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"currency",'name'=>"order-currency",'id'=>$_smarty_tpl->tpl_vars['CURRENCY']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"order-currency",'id'=>$_smarty_tpl->tpl_vars['CURRENCY']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->tpl_vars['orderCurrency'] = new Smarty_variable($_smarty_tpl->tpl_vars['SYMBOL']->value, null, 0);?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"currency",'name'=>"order-currency",'id'=>$_smarty_tpl->tpl_vars['CURRENCY']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order_address",'name'=>"order-invoice-address",'id'=>$_smarty_tpl->tpl_vars['INVOICE_ADDRESS']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_address",'name'=>"order-invoice-address",'id'=>$_smarty_tpl->tpl_vars['INVOICE_ADDRESS']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->tpl_vars["orderInvoiceFirstName"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIRSTNAME']->value, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars["orderInvoiceLastName"] = new Smarty_variable($_smarty_tpl->tpl_vars['LASTNAME']->value, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars["orderInvoiceCompany"] = new Smarty_variable($_smarty_tpl->tpl_vars['COMPANY']->value, null, 0);?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_address",'name'=>"order-invoice-address",'id'=>$_smarty_tpl->tpl_vars['INVOICE_ADDRESS']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order-status",'name'=>"order-status",'id'=>$_smarty_tpl->tpl_vars['STATUS']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order-status",'name'=>"order-status",'id'=>$_smarty_tpl->tpl_vars['STATUS']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->tpl_vars["orderStatus"] = new Smarty_variable($_smarty_tpl->tpl_vars['TITLE']->value, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars["orderStatusLabel"] = new Smarty_variable("order_".((string)$_smarty_tpl->tpl_vars['CODE']->value), null, 0);?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order-status",'name'=>"order-status",'id'=>$_smarty_tpl->tpl_vars['STATUS']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		                            <tr>

                                        <td><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/order/update/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
</a></td>
		                               	<td><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/order/update/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
</a></td>
		                               	<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->formatDate(array('date'=>$_smarty_tpl->tpl_vars['CREATE_DATE']->value),$_smarty_tpl);?>
</td>
		                               	<td><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['orderInvoiceCompany']->value,$_smarty_tpl);?>
</td>
		                               	<td><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/customer/update','customer_id'=>$_smarty_tpl->tpl_vars['CUSTOMER']->value),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(ucwords($_smarty_tpl->tpl_vars['orderInvoiceFirstName']->value),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(mb_strtoupper($_smarty_tpl->tpl_vars['orderInvoiceLastName']->value, 'UTF-8'),$_smarty_tpl);?>
</a></td>
		                               	<td class="text-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['TOTAL_TAXED_AMOUNT']->value,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</td>
		                               	<td class="text-center"><span class="label label-<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->getConfigVariable($_smarty_tpl->tpl_vars['orderStatusLabel']->value),$_smarty_tpl);?>
"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['orderStatus']->value,$_smarty_tpl);?>
</span></td>
                                        
		                                <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
<?php $_tmp24=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"orders.table-row",'location'=>"orders_table_row",'order_id'=>$_tmp24),$_smarty_tpl);?>


                                        <td>
		                                    <div class="btn-group">

				                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"UPDATE")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"UPDATE"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				                                   <a class="btn btn-default btn-xs" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Edit this order'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/order/update/".((string)$_smarty_tpl->tpl_vars['ID']->value)),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-edit"></span></a>
                                                    <?php if ($_smarty_tpl->tpl_vars['STATUS']->value!==5) {?>
				                                        <a class="btn btn-default btn-xs order-cancel" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Cancel this order'),$_smarty_tpl);?>
" href="#cancel_order_dialog" data-id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl);?>
" data-toggle="modal"><span class="glyphicon glyphicon-remove-sign"></span></a>
                                                    <?php }?>
				                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"can_change",'role'=>"ADMIN",'resource'=>"admin.order",'access'=>"UPDATE"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				                            </div>
		                                </td>
		                            </tr>

                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order",'name'=>"order-list",'customer'=>"*",'order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'backend_context'=>"1",'page'=>$_tmp23,'limit'=>((string)$_smarty_tpl->getConfigVariable('max_displayed_orders')),'status'=>(($tmp = @$_smarty_tpl->tpl_vars['status_filter']->value)===null||$tmp==='' ? '*' : $tmp),'search_term'=>$_smarty_tpl->tpl_vars['search_term']->value,'search_in'=>((string)$_smarty_tpl->tpl_vars['search_in']->value)), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="100">
                                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/orders",'status'=>$_smarty_tpl->tpl_vars['status_filter']->value,'orders_order'=>$_smarty_tpl->tpl_vars['orders_order']->value,'search_term'=>$_smarty_tpl->tpl_vars['search_term']->value,'search_in'=>((string)$_smarty_tpl->tpl_vars['search_in']->value)),$_smarty_tpl);?>
<?php $_tmp25=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('loop_ref'=>"order-list",'max_page_count'=>10,'page_url'=>$_tmp25), 0);?>


                                    </td>
                                </tr>
                            </tfoot>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"order-list"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"order-list")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"order-list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <tr>
                                    <td colspan="8">
                                        <div class="alert alert-info">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'You have no orders for the moment.'),$_smarty_tpl);?>

                                        </div>
                                    </td>
                                </tr>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"order-list"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	                    </table>
	                </div>
                </div>
            </div>
        </div>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"orders.bottom",'location'=>"orders_bottom"),$_smarty_tpl);?>


    </div>
</div>



<?php $_smarty_tpl->_capture_stack[0][] = array("cancel_order_dialog", null, null); ob_start(); ?>
    <input type="hidden" name="order_page" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['order_page']->value,$_smarty_tpl);?>
">
    <input type="hidden" name="order_id" id="cancel_order_id" />
    <input type="hidden" name="status_id" value="5" />
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Delete an order"),$_smarty_tpl);?>
<?php $_tmp26=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Do you really want to cancel this order ?"),$_smarty_tpl);?>
<?php $_tmp27=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['token_url'][0][0]->generateUrlWithToken(array('path'=>'/admin/order/update/status'),$_smarty_tpl);?>
<?php $_tmp28=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['cancel_order_dialog'];?>
<?php $_tmp29=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("includes/generic-confirm-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dialog_id'=>"cancel_order_dialog",'dialog_title'=>$_tmp26,'dialog_message'=>$_tmp27,'form_action'=>$_tmp28,'form_content'=>$_tmp29,'form_id'=>"cancel-order-form"), 0);?>




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


    

    <script type="text/javascript">
        $(".order-cancel").click(function(){
            $("#cancel_order_id").val($(this).attr("data-id"));
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


                
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"orders.js",'location'=>"orders-js"),$_smarty_tpl);?>


                </body>
         </html>

<?php }} ?>
