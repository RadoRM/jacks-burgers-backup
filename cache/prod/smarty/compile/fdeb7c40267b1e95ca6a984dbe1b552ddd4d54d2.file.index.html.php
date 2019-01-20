<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-01-17 20:01:05
         compiled from "/var/www/vhosts/jacksburgers.fr/v2/templates/frontOffice/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:2853458605c3da19077f880-97894008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdeb7c40267b1e95ca6a984dbe1b552ddd4d54d2' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/v2/templates/frontOffice/default/index.html',
      1 => 1547542892,
      2 => 'file',
    ),
    '4842924c270a70a61a5ffaf6d4276781cfbb6285' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/v2/templates/frontOffice/default/layout.tpl',
      1 => 1547751659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2853458605c3da19077f880-97894008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c3da190af5e64_08200794',
  'variables' => 
  array (
    'store_name' => 0,
    'store_description' => 0,
    'asset_url' => 0,
    'page_title' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'page_description' => 0,
    'form' => 0,
    'name' => 0,
    'label_attr' => 0,
    'required' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3da190af5e64_08200794')) {function content_5c3da190af5e64_08200794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/jacksburgers.fr/v2/core/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?><!DOCTYPE html>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['declare_assets'][0][0]->declareAssets(array('directory'=>'assets'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'fo.default'),$_smarty_tpl);?>


<?php  $_config = new Smarty_Internal_Config('variables.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>


    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_tmp1, null, 0);?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["store_name"] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_description"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["store_description"] = new Smarty_variable($_tmp3, null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['store_name']->value) {?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia V2'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["store_name"] = new Smarty_variable($_tmp4, null, 0);?><?php }?>
<?php if (!$_smarty_tpl->tpl_vars['store_description']->value) {?><?php $_smarty_tpl->tpl_vars["store_description"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['store_name']->value), null, 0);?><?php }?>
<html>
    <head>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('stylesheets', array('file'=>'assets/css/style_new.css')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['stylesheets'][0][0]->blockStylesheets(array('file'=>'assets/css/style_new.css'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<link rel="stylesheet" href="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['stylesheets'][0][0]->blockStylesheets(array('file'=>'assets/css/style_new.css'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?php if ($_smarty_tpl->tpl_vars['page_title']->value) {?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['page_title']->value,$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['breadcrumbs']->value) {?><?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = array_reverse($_smarty_tpl->tpl_vars['breadcrumbs']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(htmlspecialchars_decode($_smarty_tpl->tpl_vars['breadcrumb']->value['title'], ENT_QUOTES),$_smarty_tpl);?>
 - <?php } ?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
<?php } else { ?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
<?php }?></title>
        
        <meta name="generator" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia V2'),$_smarty_tpl);?>
">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
        <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['page_description']->value) {?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['page_description']->value,$_smarty_tpl);?>
<?php } else { ?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(smarty_modifier_truncate(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['store_description']->value),120),$_smarty_tpl);?>
<?php }?>">
        

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/app.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/app.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/app.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascripts', array('file'=>'assets/js/plugins/bootbox/bootbox.js')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/plugins/bootbox/bootbox.js'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
"></script>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascripts'][0][0]->blockJavascripts(array('file'=>'assets/js/plugins/bootbox/bootbox.js'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <script>
        $(document).ready(function(){
            $(".article").click(function(){
             $(".dropdown-menu2").hide();
             $(".dropdown-menu").hide();
             $(".article-drop").slideToggle();
         });
        });
        </script>

        <script>
        $(document).ready(function(){
            $(".dropdown").click(function(){
               $(".dropdown-menu2").hide();
               $(".article-drop").hide();
               $(".dropdown-menu").slideToggle();
           });

            $(".dropdown2").click(function(){
                $(".article-drop").hide();
                $(".dropdown-menu").hide();
                $(".dropdown-menu2").slideToggle();
            });
        });
        </script>

        <!--toggle-button-->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- Header -->
                <header class="header">
                    <div class="topNav">
                        <div class="container">
                            <div class="row">
                                <nav class="contentTopNav">
                                    <ul>
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"auth",'name'=>"customer_info_block",'role'=>"CUSTOMER")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"customer_info_block",'role'=>"CUSTOMER"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li>
                                                <a href="/logout">Se déconnecter</a>
                                            </li>
                                            <li>
                                                <a href="/account">Mon compte</a>
                                            </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"auth",'name'=>"customer_info_block",'role'=>"CUSTOMER"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('elseloop', array('rel'=>"customer_info_block")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"customer_info_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li>
                                                <a href="/login">Se connecter</a>
                                            </li>
                                            <li>
                                                <a href="/register">Créer un compte</a>
                                            </li>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elseloop'][0][0]->theliaElseloop(array('rel'=>"customer_info_block"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        
                                        <li>
                                            <a href="/cart">Panier <i class="fas fa-shopping-cart"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cart'][0][0]->cartDataAccess(array('attr'=>"count_item"),$_smarty_tpl);?>
 article</a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/JacksBurgers"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://instagram.com/jacksburgers/"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="contentMenu">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="logo">
                                    <a href="/">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/images_new/logoJacks.png')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/logoJacks.png'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['store_name']->value,$_smarty_tpl);?>
"><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/logoJacks.png'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </a>
                                </div>
                                <nav class="nav navbar navbar-light navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navMenu">
                                        <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="/">accueil</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/menu">la carte</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/restaurants">les restaurants</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/actualites">actualités</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="http://www.jacksburgers.fr/eshop">le shop</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/lemag.html">le mag</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/emploi">emploi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/contact">contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <article class="slideContent">
                        <div id="homeSlides" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/images_new/slide1.jpg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/slide1.jpg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" alt="Burgers"><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/slide1.jpg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="container">
                                            <h5>Burgers</h5>
                                            <p>Des burges savoureux faits à partir de viande bovine française</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/images_new/slide2.jpg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/slide2.jpg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" alt="Salades"><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/slide2.jpg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="container">
                                            <h5>Salades</h5>
                                            <p>Des salades fraîches, gourmande et créatives !</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/images_new/slide3.jpg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/slide3.jpg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" alt="Wraps"><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/slide3.jpg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="container">
                                            <h5>Wraps</h5>
                                            <p>Chauds, froids ou végétariens, croquez les wraps du Jack's</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/images_new/slide4.jpg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/slide4.jpg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" alt="Desserts"><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/images_new/slide4.jpg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="container">
                                            <h5>Desserts</h5>
                                            <p>Dégustez nos patisseries et nos glaces artisanalesau goût intense</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#homeSlides" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#homeSlides" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </article>
                </header><!-- End Header -->

                <!-- section -->
                <section class="section home">
                    <div class="container">
                        <div class="row">
                            <!-- 3 Wedgets -->
                            <article class="viande">
                                <img src="images/iconeViandeFrancaise.png" alt="">
                                <h2>Viande bovine francaise</h2>
                                <p>Tous nos burgers sont faits à partir de viande bovine française</p>
                            </article>
                            <article class="partenaire">
                                <img src="images/iconePartenaire.png" alt="">
                                <h2>Partenaires locaux</h2>
                                <p>Nous travaillons avec un réseau de partenaires locaux pour garantir les meilleurs produits</p>
                            </article>
                            <article class="commande">
                                <img src="images/iconeMinute.png" alt="">
                                <h2>Commande a la minute</h2>
                                <p>Toutes les commandes sont préparées juste avant d'être servies</p>
                            </article><!-- END 3 Wedgets -->

                            <!-- Galery home -->
                            <article class="article">
                                <div class="row">
                                    <img src="images/menu.jpg" alt="">
                                    <div class="mask">
                                        <div class="detailsContent">
                                            <div class="details">
                                                <h2>Menu</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article">
                                <div class="row">
                                    <img src="images/burgers.jpg" alt="">
                                    <div class="mask">
                                        <div class="detailsContent">
                                            <div class="details">
                                                <h2>Burger</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="article-">
                                <div class="row">
                                    <img src="images/wraps.jpg" alt="">
                                    <div class="mask">                              
                                        <div class="detailsContent">
                                            <div class="details">
                                                <h2>Wraps</h2>
                                                <p>Lorem ipsum dolor sit amet.</p>                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article--">
                                <div class="row">
                                    <img src="images/sauces.jpg" alt="">
                                    <div class="mask">                              
                                        <div class="detailsContent">
                                            <div class="details">
                                                <h2>Sauces</h2>
                                                <p>Lorem ipsum dolor sit amet.</p>                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article-">
                                <div class="row">
                                    <img src="images/desserts.jpg" alt="">
                                    <div class="mask">                              
                                        <div class="detailsContent">
                                            <div class="details">
                                                <h2>Desserts</h2>
                                                <p>Lorem ipsum dolor sit amet.</p>                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="article">
                                <div class="row">
                                    <img src="images/salades.jpg" alt="">
                                    <div class="mask">                              
                                        <div class="detailsContent">
                                            <div class="details">
                                                <h2>Salades</h2>
                                                <p>Lorem ipsum dolor sit amet.</p>                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article">
                                <div class="row">
                                    <img src="images/boisson.jpg" alt="">
                                    <div class="mask">                              
                                        <div class="detailsContent">
                                            <div class="details">
                                                <h2>Boissons</h2>
                                                <p>Lorem ipsum dolor sit amet.</p>                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article">
                                <div class="row">
                                    <img src="images/kidsBox.jpg" alt="">
                                    <div class="mask">                              
                                        <div class="detailsContent">
                                            <div class="details">
                                                <h2>Kids box</h2>
                                                <p>Lorem ipsum dolor sit amet.</p>                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article">
                                <div class="row">
                                    <img src="images/fingerFood.jpg" alt="">
                                    <div class="mask">                              
                                        <div class="detailsContent">
                                            <div class="details">
                                                <h2>Finger Food</h2>
                                                <p>Lorem ipsum dolor sit amet.</p>                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article><!-- END Galery home -->
                        </div>
                    </div>
                </section><!-- End section -->

                <!-- Footer -->
                <footer class="footer">
                    <div class="topFooter">
                        <div class="container">
                            <div class="row">
                                <div class="vente"><h3>Vente sur place / à emporter</h3></div>
                                <div class="paiement"><h3>Paiement sécirisé</h3></div>
                                <div class="ouverte"><h3>Ouverte 7/7</h3></div>
                            </div>
                        </div>
                    </div>
                    <div class="bottomFooter">
                        <div class="container">
                            <div class="row">
                                <article class="nosRestaurants">
                                    <h4>Nos restaurants</h4>
                                    <h5>Hossegor :</h5>
                                    <p class="separate">73 avenue des Charpantiers - 40150 Soorts Hossegor - 05 58 485 485</p>

                                    <h5>Capbreton :</h5>
                                    <p class="separate">22 avenue de Verdun - 40130 Capbreton - 05 58 425 425</p>

                                    <h5>Soustons :</h5>
                                    <p>Route de tosse - Centre Leclerc - 40140 Soustons - 05 58 778 778</p>

                                </article>
                                <article class="laCarte">
                                    <h4>La carte</h4>
                                    <ul>
                                        <li>
                                            <a href="/menuburger">Menus Burger</a>
                                        </li>
                                        <li>
                                            <a href="/burgers">Burgers</a>
                                        </li>
                                        <li>
                                            <a href="/salades">Salades</a>
                                        </li>
                                        <li>
                                            <a href="/wraps">Wraps</a>
                                        </li>
                                        <li>
                                            <a href="/desserts">Desserts</a>
                                        </li>
                                        <li>
                                            <a href="/bouchées">Finger Food</a>
                                        </li>
                                        <li>
                                            <a href="/sauces">Sauces</a>
                                        </li>
                                        <li>
                                            <a href="/boissons">Boissons</a>
                                        </li>
                                        <li>
                                            <a href="/kids-box.html">Kids Box</a>
                                        </li>
                                    </ul>
                                </article>
                                <article class="suivezNous">
                                    <h4>Suivez-nous <a href="https://www.facebook.com/JacksBurgers"><i class="fab fa-facebook-f"></i></a><a href="https://instagram.com/jacksburgers/"><i class="fab fa-instagram"></i></a></h4>
                                    <p>Enregistrez vous pour recevoir nos dernières nouvelles.</p>

                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"thelia.front.newsletter")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.front.newsletter"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <form class="formRegisterNL" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/newsletter"),$_smarty_tpl);?>
" method="post">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_hidden_fields'][0][0]->renderHiddenFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value),$_smarty_tpl);?>

                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('form_field', array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"email")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"email"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                <input type="email" name="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
" id="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['label_attr']->value['for'],$_smarty_tpl);?>
-mini" class="form-control" maxlength="255" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Your email address",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
" aria-describedby="newsletter-describe" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?> aria-required="true" required<?php }?> autocomplete="off">
                                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form_field'][0][0]->renderFormField(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'field'=>"email"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                            <button type="submit" class="btn-primary btn"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Subscribe",'d'=>"hooknewsletter.fo.default"),$_smarty_tpl);?>
</button>
                                        </form>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]->generateForm(array('name'=>"thelia.front.newsletter"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </article>

                                <a href="" id="go-top"></a>
                            </div>
                        </div>
                    </div>
                </footer><!-- End footer -->
                    
            </div><!-- End row -->
        </div> <!-- End container-fluid -->
    </body>
</html>



<?php }} ?>
