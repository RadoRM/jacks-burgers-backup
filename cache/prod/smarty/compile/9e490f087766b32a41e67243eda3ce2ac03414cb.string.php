<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-14 11:38:16
         compiled from "9e490f087766b32a41e67243eda3ce2ac03414cb" */ ?>
<?php /*%%SmartyHeaderCode:7679809295bebfb18ad8f07-58265190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e490f087766b32a41e67243eda3ce2ac03414cb' => 
    array (
      0 => '9e490f087766b32a41e67243eda3ce2ac03414cb',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '7679809295bebfb18ad8f07-58265190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_ref' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebfb18ae07b2_39654469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebfb18ae07b2_39654469')) {function content_5bebfb18ae07b2_39654469($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Confirmation du paiement de votre commande sur http://www.jacksburgers.fr </title>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 100%;
            text-align: center;
        }
        #liencompte {
            margin: 15px 0;
            text-align: center;
            font-size: 10pt;
        }
        #wrapper {
            width: 480pt;
            margin: 0 auto;
        }
        #entete {
            padding-bottom: 20px;
            margin-bottom: 10px;
            border-bottom: 1px dotted #000;
        }
        #logotexte {
            float: left;
            width: 180pt;
            height: 75pt;
            border: 1pt solid #000;
            font-size: 18pt;
            text-align: center;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div id="entete">
        <h1 id="logotexte"><img src="http://www.jacksburgers.fr/assets/frontOffice/default/template-assets/assets/images/50cec3b.png" width="100"></h1>
        <h2 id="info">Confirmation du paiement de votre commande</h2>
        <h3 id="commande">N&deg; <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['order_ref']->value,$_smarty_tpl);?>
</h3>
    </div>
    <p id="liencompte">
        Le suivi de votre commande est disponible dans la rubrique mon compte sur
        <a href="http://www.jacksburgers.fr/">Jacks Burgers</a>
    </p>
    <p>Merci pour votre achat !</p>
    <p>L'équipe <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
</p>
</div>
</body>
</html><?php }} ?>
