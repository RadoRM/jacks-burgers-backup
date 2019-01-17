<!DOCTYPE html>
{declare_assets directory='assets'}
{default_translation_domain domain='fo.default'}

{config_load file='variables.conf'}
{block name="init"}{/block}
{block name="no-return-functions"}{/block}
{assign var="store_name" value="{config key="store_name"}"}
{assign var="store_description" value="{config key="store_description"}"}
{if not $store_name}{assign var="store_name" value="{intl l='Thelia V2'}"}{/if}
{if not $store_description}{assign var="store_description" value="$store_name"}{/if}
<html>
<head>
    {stylesheets file='assets/css/style.css'}<link rel="stylesheet" href="{$asset_url}">{/stylesheets}
    {stylesheets file='assets/css/bootstrap.css'}<link rel="stylesheet" href="{$asset_url}">{/stylesheets}
    {stylesheets file='assets/font/fonts.css'}<link rel="stylesheet" href="{$asset_url}">{/stylesheets}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>{block name="page-title"}{strip}{if $page_title}{$page_title}{elseif $breadcrumbs}{foreach from=$breadcrumbs|array_reverse item=breadcrumb}{$breadcrumb.title|unescape} - {/foreach}{$store_name}{else}{$store_name}{/if}{/strip}{/block}</title>
    {* Meta Tags *}
    <meta name="generator" content="{intl l='Thelia V2'}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    {block name="meta"}
    <meta name="description" content="{if $page_description}{$page_description}{else}{$store_description|strip|truncate:120}{/if}">
    {/block}

    {javascripts file='assets/js/jquery.min.js'}
    <script src="{$asset_url}"></script>
    {/javascripts}

    {javascripts file='assets/js/bootstrap/bootstrap.min.js'}
    <script src="{$asset_url}"></script>
    {/javascripts}


    {javascripts file='assets/js/plugins/bootbox/bootbox.js'}
    <script src="{$asset_url}"></script>
    {/javascripts}

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

    <header>


        <div class="head1">
            <div class="container">
                <a href="/" class="logo">


                    {images file='assets/images/logo.png'}<img src="{$asset_url}" alt="{$store_name}">{/images}

                </a>
                <div class="row">
                    <div class="col-md-2 none">&nbsp;</div>
                    <div class="col-md-7 col-sm-8">
                        <ul class="nav-top1">
                            {loop type="auth" name="customer_info_block" role="CUSTOMER"}
                            <li><a href="/logout"><i class="fa fa-unlock-alt"></i>Se déconnecter</a></li>
                            <li><a href="/account"><i class="fa fa-user"></i>Mon compte</a></li>
                            {/loop}
                            {elseloop rel="customer_info_block"}
                            <li><a href="/login"><i class="fa fa-lock"></i>Se connecter</a></li>
                            <li><a href="/register"><i class="fa fa-plus"></i> Créer un compte</a></li>
                            {/elseloop}
                            <li><a href="/actualites.html"><i class="fa fa-align-right"></i>Blog Jack’s Burgers</a></li>
                            <li class="social-main">
                                <ul class="social_icon">
                                    <li><a href="https://www.facebook.com/JacksBurgers" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://instagram.com/jacksburgers/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="http://www.jacksburgers.fr/eshop" target="_blank"><img src="http://www.jacksburgers.fr/eshop/eshop.png" width="40" height="30" alt="eshop"/></a></li>
                                    
                             
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-4 article-main">

                        {hook name="main.navbar-secondary"}

                    <!--

                    <div class="article"><a>3 <span>articles dans le panier</span><i class="fa fa-chevron-down"></i></a>
                        <div class="article-drop">
                            <ul>
                                <li><span>1</span> menu MEGA JACKS <span class="cost">8,70&euro;</span></li>
                                <li><span>1</span> Chocolat <span class="cost">3,30&euro;</span></li>
                            </ul>
                            <h2>TOTAL : 12.00&euro;</h2>
                            <div class="paying">
                                <a href="#" class="pay">Voir mon panier</a> <a href="#" class="pay1">

                                    {images file='assets/images/coin.png'}<img src="{$asset_url}" alt="{$store_name}">{/images}

                                    PAYER</a>
                            </div>
                        </div>
                    </div>-->



                </div>
                <div class="clearfix"></div>
            </div><!--row-->
        </div><!--container-->
    </div><!--head1-->
    <div class="head2">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 none">&nbsp;</div>
                <div class="col-md-10 col-sm-12 menu">
                    <div class="navbar navbar-default" role="navigation">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle toggleopen" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">ACCUEIL</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LA CARTE<span class="fa fa-chevron-down"></span></a>
                                    <div  class="dropdown-menu" role="menu">
                                        <div class="col-md-4 col-sm-12 menu1">
                                            <ul>

                                                {loop type="category" name="category_tag" id=3}
                                                <li><a href="{$URL}"><span>{loop type="image" name="catimage" category=$ID}<img src="{$IMAGE_URL}" alt="{$TITLE}">{/loop}</span>{$TITLE}</a></li>
                                                {/loop}

                                                {loop type="category" name="category_tag" id=1}
                                                <li><a href="{$URL}"><span>{loop type="image" name="catimage" category=$ID}<img src="{$IMAGE_URL}" alt="{$TITLE}">{/loop}</span>{$TITLE}</a></li>
                                                {/loop}

                                                {loop type="category" name="category_tag" id=4}
                                                <li><a href="{$URL}"><span>{loop type="image" name="catimage" category=$ID}<img src="{$IMAGE_URL}" alt="{$TITLE}">{/loop}</span>{$TITLE}</a></li>
                                                {/loop}

                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-12 menu1">
                                            <ul>
                                                {loop type="category" name="category_tag" id=7}
                                                <li><a href="{$URL}"><span>{loop type="image" name="catimage" category=$ID}<img src="{$IMAGE_URL}" alt="{$TITLE}">{/loop}</span>{$TITLE}</a></li>
                                                {/loop}

                                                {loop type="category" name="category_tag" id=5}
                                                <li><a href="{$URL}"><span>{loop type="image" name="catimage" category=$ID}<img src="{$IMAGE_URL}" alt="{$TITLE}">{/loop}</span>{$TITLE}</a></li>
                                                {/loop}

                                                {loop type="category" name="category_tag" id=11}
                                                <li><a href="{$URL}"><span>{loop type="image" name="catimage" category=$ID}<img src="{$IMAGE_URL}" alt="{$TITLE}">{/loop}</span>{$TITLE}</a></li>
                                                {/loop}
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-12 menu1 menu2">
                                            <ul>
                                                {loop type="category" name="category_tag" id=10}
                                                <li><a href="{$URL}"><span>{loop type="image" name="catimage" category=$ID}<img src="{$IMAGE_URL}" alt="{$TITLE}">{/loop}</span>{$TITLE}</a></li>
                                                {/loop}

                                                {loop type="category" name="category_tag" id=9}
                                                <li><a href="{$URL}"><span>{loop type="image" name="catimage" category=$ID}<img src="{$IMAGE_URL}" alt="{$TITLE}">{/loop}</span>{$TITLE}</a></li>
                                                {/loop}

                                                {loop type="category" name="category_tag" id=8}
                                                <li><a href="{$URL}"><span>{loop type="image" name="catimage" category=$ID}<img src="{$IMAGE_URL}" alt="{$TITLE}">{/loop}</span>{$TITLE}</a></li>
                                                {/loop}

                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="offer">
                                            <a href="/images/menu.pdf" target="_blank"><span>{images file='assets/images/offer.png'}<img src="{$asset_url}" alt="{$store_name}">{/images}</span>

                                                {loop type="module" id="24" name="accroche"}
                                                {$CHAPO}
                                                {/loop}
                                            </a></div>


                                        </div>
                                    </li>

                                    <li class="dropdown2">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown2">NOS RESTAURANTS<span class="fa fa-chevron-down"></span></a>
                                        <div class="dropdown-menu2" role="menu">
                                            <div class="col-md-12 col-sm-12 menu3">
                                                <ul>
                                                    {loop type="folder" name="document_tag" id=7}
                                                    <li><a href="{$URL}">{$TITLE}</a></li>
                                                    {/loop}
                                                    {loop type="folder" name="document_tag" id=8}
                                                    <li><a href="{$URL}">{$TITLE}</a></li>
                                                    {/loop}
                                                    {loop type="folder" name="document_tag" id=11}
                                                    <li><a href="{$URL}">{$TITLE}</a></li>
                                                    {/loop}
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    {loop type="folder" name="document_tag" id=4}
                                    <li><a href="{$URL}">{$TITLE}</a></li>
                                    {/loop}

                                    {loop type="folder" name="document_tag" id=2}
                                    <li><a href="{$URL}">{$TITLE}</a></li>
                                    {/loop}

                                    <li><a href="/contact">CONTACT</a></li>

                                    {loop type="folder" name="document_tag" id=5}
                                    <li><a href="{$URL}">{$TITLE}</a></li>
                                    {/loop}
                                </ul>

                            </div><!--/.nav-collapse -->

                        </div><!--navigation-->
                    </div>

                </div>
            </div>

        </div><!--head2-->

    </header>


    <main class="main-container" role="main">
        <section class="slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="{images file='assets/images/banner.jpg'}{$asset_url}{/images}" alt="First slide">
        </div>
        
        <div class="item">
            <a href="http://www.jacksburgers.fr/eshop"><img class="third-slide" src="{images file='assets/images/banner3.jpg'}{$asset_url}{/images}" alt="Third slide"></a>
        </div>
        
        <div class="item">
            <img class="second-slide" src="{images file='assets/images/banner2.jpg'}{$asset_url}{/images}" alt="Second slide">
        </div>
        
        
        
        
        
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <img src="{images file='assets/images/arrow-left.png'}{$asset_url}{/images}" alt=""/>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <img src="{images file='assets/images/arrow-right.png'}{$asset_url}{/images}" alt=""/>
    </a>
</div><!-- /.carousel -->
</section>

<div class="content">
    <div >
        {hook name="main.content-top"}
        {block name="breadcrumb"}{include file="misc/breadcrumb.tpl"}{/block}
        <div id="content">{block name="main-content"}{/block}</div>
        {hook name="main.content-bottom"}
    </div><!-- /.container -->

</div>
</main><!-- /.main-container -->


<footer>
    <div class="foot1">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 foot-lf">
                    <img src="{images file='assets/images/icon1.png'}{$asset_url}{/images}" alt=""/>
                    <h2>Vente sur place / À emporter</h2>
                </div>
                <div class="col-sm-4 foot-lf foot-mid">
                    <img src="{images file='assets/images/icon2.png'}{$asset_url}{/images}" alt=""/>
                    <h2>Paiement sécurisé</h2>
                </div>
                <div class="col-sm-4 foot-lf foot-rt">
                    <img src="{images file='assets/images/icon3.png'}{$asset_url}{/images}" alt=""/>
                    <h2>Ouvert 7j/7</h2>
                </div>
                <div class="clearfix"></div>
            </div><!--row-->
        </div><!--container-->
    </div>   <!--foot1-->
    <div class="foot2">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 foot-btm">
                    <h2>Nos Restaurants</h2>
                    <p><span>Hossegor</span></p>
                    <p>73 avenue des Charpentiers</p>
                    <p>40150 Soorts Hossegor</p>
                    <p>05 58 485 485</p>
                    <p><span>Capbreton</span></p>
                    <p>22 Avenue de Verdun</p>
                    <p>40130 Capbreton</p>
                    <p>05 58 425 425</p>
                    <p><span>Soustons</span></p>
                    <p>Route de Tosse - Centre Leclerc</p>
                    <p>40140 Soustons</p>
                    <p>05 58 778 778</p>
                </div>
                <div class="col-sm-3 foot-btm">
                    <h2>La carte</h2>
                    <div class="col-sm-12">
                        <ul>

                            {loop type="category" name="category_tag" id=3}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}

                            {loop type="category" name="category_tag" id=1}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}

                            {loop type="category" name="category_tag" id=4}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}

                            {loop type="category" name="category_tag" id=7}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}

                            {loop type="category" name="category_tag" id=8}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}
                            
                            {loop type="category" name="category_tag" id=5}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}

                            {loop type="category" name="category_tag" id=10}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}

                            {loop type="category" name="category_tag" id=6}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}

                            {loop type="category" name="category_tag" id=9}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}

                            {loop type="category" name="category_tag" id=11}
                            <li><a href="{$URL}" title="{$TITLE}">{$TITLE}</a></li>
                            {/loop}

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 foot-btm">
                    <h2>Suivez-nous</h2>
                    <ul class="foot-icon">
                        <li><a href="https://www.facebook.com/JacksBurgers" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://instagram.com/jacksburgers/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                      
                    </ul>
                </div>
                <div class="col-sm-3 foot-btm foot-mid4">
                    <h2>Newsletter</h2>
                    {ifhook rel="main.footer-body"}

                    {hookblock name="main.footer-body"  fields="id,class,title,content"}
                    {forhook rel="main.footer-body"}

                    {$content nofilter}

                    {/forhook}
                    {/hookblock}
                    {/ifhook} </div>
                </div>
                


                
                <div class="clearfix"></div>
                
                <div class="row">
                    <div class="foot3">
                        <div class="col-sm-6 foot3-lf">                            
                            <p>{loop type="folder" name="document_tag" id=10}<a href="{$URL}">Mentions légales</a>{/loop}  -  {loop type="folder" name="document_tag" id=9}<a href="{$URL}">CGV</a>{/loop}</p>
                        </div>
                        <div class="col-sm-6 foot3-lf">
                            <p>Réalisé par l'agence <a href="http://www.monkimedia.com/">Monkimedia</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--foot3-->
                </div><!--row-->
            </div>
        </div><!--container-->
    </div>
</footer>

{hook name="main.after-javascript-include"}
{block name="after-javascript-include"}{/block}
{hook name="main.javascript-initialization"}
{block name="javascript-initialization"}{/block}
<!-- Custom scripts -->
{javascripts file='assets/js/script.js'}
<script src="{$asset_url}"></script>
{/javascripts}
{hook name="main.body-bottom"}



</body>
</html>



