<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-27 18:31:39
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/CmCIC/templates/frontOffice/module_cmcic/gotobankservice.html" */ ?>
<?php /*%%SmartyHeaderCode:16177017795bebfcdf0cbbc9-89862992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '088d67e548218a47846de51d27342bcd6325aabe' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/local/modules/CmCIC/templates/frontOffice/module_cmcic/gotobankservice.html',
      1 => 1542744039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16177017795bebfcdf0cbbc9-89862992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bebfcdf156e11_81003921',
  'variables' => 
  array (
    'url_bank' => 0,
    'version' => 0,
    'TPE' => 0,
    'date' => 0,
    'montant' => 0,
    'reference' => 0,
    'MAC' => 0,
    'url_retour' => 0,
    'url_retour_ok' => 0,
    'url_retour_err' => 0,
    'lgue' => 0,
    'societe' => 0,
    'texte' => 0,
    'mail' => 0,
    'nbrech' => 0,
    'dateech1' => 0,
    'montantech1' => 0,
    'dateech2' => 0,
    'montantech2' => 0,
    'dateech3' => 0,
    'montantech3' => 0,
    'dateech4' => 0,
    'montantech4' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bebfcdf156e11_81003921')) {function content_5bebfcdf156e11_81003921($_smarty_tpl) {?><html>
<body>
<div class="panel">

    <div class="panel-heading clearfix">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You're going to be redirected to our bank paiement service"),$_smarty_tpl);?>
.
    </div>
    <!-- PAYMENT FORM TEMPLATE -->
    <div class="panel-body">
        <p>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"If redirection doesn't append, please click the button below"),$_smarty_tpl);?>

        </p>
        <form action="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['url_bank']->value,$_smarty_tpl);?>
" method="post" id="PaymentRequest">
            <p>
                <input type="hidden" name="version" id="version" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['version']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="TPE" id="TPE" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TPE']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="date" id="date" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="montant" id="montant" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['montant']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="reference" id="reference" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['reference']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="MAC" id="MAC" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['MAC']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="url_retour" id="url_retour" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['url_retour']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="url_retour_ok" id="url_retour_ok" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['url_retour_ok']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="url_retour_err" id="url_retour_err" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['url_retour_err']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="lgue" id="lgue" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['lgue']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="societe" id="societe" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['societe']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="texte-libre" id="texte-libre" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['texte']->value-'libre',$_smarty_tpl);?>
"/>
                <input type="hidden" name="mail" id="mail" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['mail']->value,$_smarty_tpl);?>
"/>
                <!-- Uniquement pour le Paiement fractionne -->
                <input type="hidden" name="nbrech" id="nbrech" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['nbrech']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="dateech1" id="dateech1" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dateech1']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="montantech1" id="montantech1" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['montantech1']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="dateech2" id="dateech2" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dateech2']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="montantech2" id="montantech2" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['montantech2']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="dateech3" id="dateech3" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dateech3']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="montantech3" id="montantech3" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['montantech3']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="dateech4" id="dateech4" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['dateech4']->value,$_smarty_tpl);?>
"/>
                <input type="hidden" name="montantech4" id="montantech4" value="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['montantech4']->value,$_smarty_tpl);?>
"/>
                <input type="submit" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Go to paiement service"),$_smarty_tpl);?>
"/>
            </p>
        </form>
    </div>
</div>
<!-- FIN FORMULAIRE TYPE DE PAIEMENT / END PAYMENT FORM TEMPLATE -->
<script type="text/javascript">
    document.forms['PaymentRequest'].submit();
</script>
</body>
</html><?php }} ?>
