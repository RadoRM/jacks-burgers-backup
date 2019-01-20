<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-12-01 11:38:09
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/email/default/password.html" */ ?>
<?php /*%%SmartyHeaderCode:16376582935bec83d12a33e3-33387223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ebf85846fdfe6a40018d936becf8741444acc6b' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/email/default/password.html',
      1 => 1542744041,
      2 => 'file',
    ),
    '99aee8e02f712801b89f5cb1d0f67939094399ed' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/email/default/email-layout.tpl',
      1 => 1542744041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16376582935bec83d12a33e3-33387223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bec83d1361573_25307015',
  'variables' => 
  array (
    'locale' => 0,
    'company_name' => 0,
    'asset_url' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bec83d1361573_25307015')) {function content_5bec83d1361573_25307015($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'email.default'),$_smarty_tpl);?>

<?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['locale']->value,$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_locale'][0][0]->setDefaultLocale(array('locale'=>$_tmp1),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['declare_assets'][0][0]->declareAssets(array('directory'=>'assets'),$_smarty_tpl);?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"url_site"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["url_site"] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable($_tmp3, null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['company_name']->value) {?>
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Thelia V2'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable($_tmp4, null, 0);?>
<?php }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Your password for %store",'store'=>$_tmp5),$_smarty_tpl);?>
</title>

<style type="text/css">

#outlook a{
    padding:0;
}
.ReadMsgBody{
    width:100%;
}
.ExternalClass{
    width:100%;
}
.yshortcuts,a .yshortcuts,a .yshortcuts:hover,a .yshortcuts:active,a .yshortcuts:focus{
    background-color:transparent !important;
    border:none !important;
    color:inherit !important;
}
body{
    margin:0;
    padding:0;
}
img{
    border:0;
    height:auto;
    line-height:100%;
    outline:none;
    text-decoration:none;
}
table,td{
    border-collapse:collapse !important;
    mso-table-lspace:0pt;
    mso-table-rspace:0pt;
}
#bodyTable,#bodyCell{
    height:100% !important;
    margin:0;
    padding:0;
    width:100% !important;
}
#bodyCell{
    padding:20px;
}
.templateContainer{
    width:600px;
}
h1{
    color:#202020;
    display:block;
    font-family:Helvetica;
    font-size:26px;
    font-style:normal;
    font-weight:bold;
    line-height:100%;
    letter-spacing:normal;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
    text-align:left;
}
h2{
    color:#404040;
    display:block;
    font-family:Helvetica;
    font-size:20px;
    font-style:normal;
    font-weight:bold;
    line-height:100%;
    letter-spacing:normal;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
    text-align:left;
}
h3{
    color:#606060;
    display:block;
    font-family:Helvetica;
    font-size:16px;
    font-style:normal;
    font-weight:bold;
    line-height:100%;
    letter-spacing:normal;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
    text-align:left;
}
h4{
    color:#808080;
    display:block;
    font-family:Helvetica;
    font-size:12px;
    font-style:normal;
    font-weight:bold;
    line-height:100%;
    letter-spacing:normal;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
    text-align:left;
}
#templatePreheader{
    background-color:#f5f5f5;
    border-top:10px solid #f5f5f5;
    border-bottom:0;
}
.preheaderContent{
    color:#707070;
    font-family:Helvetica;
    font-size:10px;
    line-height:125%;
    padding-top:10px;
    padding-bottom:10px;
    text-align:left;
}
.preheaderContent a:link,.preheaderContent a:visited,.preheaderContent a .yshortcuts {
    color:#FFFFFF;
    font-weight:normal;
    text-decoration:underline;
}
#templateHeader{
    background-color:#FFFFFF;
    border-top:10px solid #f5f5f5;
    border-bottom:0;
}
.headerContent{
    color:#202020;
    font-family:Helvetica;
    font-size:20px;
    font-weight:bold;
    line-height:100%;
    padding-top:40px;
    padding-right:0;
    padding-bottom:20px;
    padding-left:0;
    text-align:left;
    vertical-align:middle;
}
.headerContent a:link,.headerContent a:visited,.headerContent a .yshortcuts {
    color:#E1523D;
    font-weight:normal;
    text-decoration:underline;
}
#templateBody{
    background-color:#FFFFFF;
    border-top:0;
    border-bottom:0;
}
.titleContentBlock{
    background-color:#ffffff;
    border-top:0px solid #F47766;
    border-bottom:0px solid #B14031;
}
.titleContent{
    color:#7a7a7a;
    font-family:Arial;
    font-size:24px;
    font-weight:normal;
    line-height:110%;
    padding-top:5px;
    padding-bottom:5px;
    text-align:left;
}
.bodyContentBlock{
    background-color:#FFFFFF;
    border-top:0;
    border-bottom:1px solid #E5E5E5;
}
.bodyContent{
    color:#505050;
    font-family:Helvetica;
    font-size:16px;
    line-height:150%;
    padding-top:20px;
    padding-bottom:20px;
    text-align:left;
}
.bodyContent a:link,.bodyContent a:visited,.bodyContent a .yshortcuts {
    color:#E1523D;
    font-weight:normal;
    text-decoration:underline;
}
.templateButton{
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    background-color:#f49a17;
    border:0;
    border-radius:5px;
}
.templateButtonContent,.templateButtonContent a:link,.templateButtonContent a:visited,.templateButtonContent a .yshortcuts {
    color:#FFFFFF;
    font-family:Helvetica;
    font-size:15px;
    font-weight:bold;
    letter-spacing:-.5px;
    line-height:100%;
    text-align:center;
    text-decoration:none;
}
.bodyContent img{
    display:inline;
    height:auto;
    max-width:600px;
}
body,#bodyTable{
    background-color:#444444;
}
#templateFooter{
    border-top:0;
}
.footerContent{
    color:#808080;
    font-family:Helvetica;
    font-size:10px;
    line-height:150%;
    padding-top:20px;
    text-align:left;
}
.footerContent a:link,.footerContent a:visited,.footerContent a .yshortcuts {
    color:#606060;
    font-weight:normal;
    text-decoration:underline;
}
.footerContent img{
    display:inline;
    max-width:600px;
}
@media only screen and (max-width: 480px){
    body,table,td,p,a,li,blockquote{
        -webkit-text-size-adjust:none !important;
    }

    body{
        width:auto !important;
    }

    table[class=templateContainer]{
        width:100% !important;
    }

    table[class=templateContainer]{
        max-width:600px !important;
        width:100% !important;
    }

    h1{
        font-size:24px !important;
        line-height:100% !important;
    }

    h2{
        font-size:20px !important;
        line-height:100% !important;
    }

    h3{
        font-size:18px !important;
        line-height:100% !important;
    }

    h4{
        font-size:16px !important;
        line-height:100% !important;
    }

    table[id=templatePreheader]{
        display:none !important;
    }

    img[id=headerImage]{
        height:auto !important;
        max-width:233px !important;
        width:100% !important;
    }

    td[class=headerContent]{
        font-size:20px !important;
        line-height:150% !important;
        padding-top:40px !important;
        padding-right:10px !important;
        padding-bottom:20px !important;
        padding-left:10px !important;
    }

    img[class=bodyImage]{
        height:auto !important;
        max-width:580px !important;
        width:100% !important;
    }

    td[class=titleContent]{
        font-size:20px !important;
        line-height:125% !important;
        padding-right:10px;
        padding-left:10px;
    }

    td[class=bodyContent]{
        font-size:16px !important;
        line-height:125% !important;
        padding-right:10px;
        padding-left:10px;
    }

    td[class=footerContent]{
        font-size:14px !important;
        line-height:150% !important;
        padding-right:10px;
        padding-left:10px;
    }

    td[class=footerContent] a{
        display:block !important;
    }
}

.preheaderContent a:link,.preheaderContent a:visited,.preheaderContent a .yshortcuts{
    color:#f49a17;
}
.footerContent a:link,.footerContent a:visited,.footerContent a .yshortcuts{
    color:#ffffff;
}
.bodyContent a:link,.bodyContent a:visited,.bodyContent a .yshortcuts{
    color:#f49a17;
    text-decoration:none;
    font-weight:normal;
}
.templateButtonContent,.templateButtonContent a:link,.templateButtonContent a:visited,.templateButtonContent a .yshortcuts{
    font-weight:normal;
}

</style></head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="margin: 0;padding: 0;background-color: #444444;">
<center>
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;margin: 0;padding: 0;background-color: #444444;border-collapse: collapse !important;height: 100% !important;width: 100% !important;">
        <tr>
            <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                    

                    
                    <tr>
                        <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #FFFFFF;border-top: 10px solid #f5f5f5;border-bottom: 0;border-collapse: collapse !important;">
                                <tr>
                                    <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="templateContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 600px;border-collapse: collapse !important;">
                                            <tr>
                                                <td class="headerContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #202020;font-family: Helvetica;font-size: 20px;font-weight: bold;line-height: 100%;padding-top: 40px;padding-right: 0;padding-bottom: 20px;padding-left: 0;text-align: left;vertical-align: middle;border-collapse: collapse !important;">
                                                    
                                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('images', array('file'=>'assets/img/logo.png')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/img/logo.png'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<img src="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['asset_url']->value,$_smarty_tpl);?>
" alt="<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['company_name']->value,$_smarty_tpl);?>
" border="0" style="border: 0px none;border-color: ;border-style: none;border-width: 0px;height: 175px;width: 199px;margin: 0;padding: 0;line-height: 100%;outline: none;text-decoration: none;" width="199" height="175"><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['images'][0][0]->blockImages(array('file'=>'assets/img/logo.png'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #FFFFFF;border-top: 0;border-bottom: 0;border-collapse: collapse !important;">
                                <tr>
                                    <td align="center" valign="top" style="padding-top: 20px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="templateContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 600px;border-collapse: collapse !important;">
                                            <tr>
                                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                                    <table border="0" cellpadding="10" cellspacing="0" width="100%" class="titleContentBlock" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #ffffff;border-top: 0px solid #F47766;border-bottom: 0px solid #B14031;border-collapse: collapse !important;">
                                                        <tr>
                                                            <td valign="top" class="titleContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #7a7a7a;font-family: Arial;font-size: 24px;font-weight: normal;line-height: 110%;padding-top: 5px;padding-bottom: 5px;text-align: left;border-collapse: collapse !important;">
                                                                
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top" style="padding-bottom: 40px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                                    <table border="0" cellpadding="10" cellspacing="0" width="100%" class="bodyContentBlock" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;background-color: #FFFFFF;border-top: 0;border-bottom: 1px solid #E5E5E5;border-collapse: collapse !important;">
                                                        
                                                        <tr>
                                                            <td valign="top" class="bodyContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #505050;font-family: Helvetica;font-size: 14px;line-height: 150%;padding-top: 0px;padding-bottom: 20px;text-align: left;border-collapse: collapse !important;">
                                                                
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Hello,"),$_smarty_tpl);?>
<br /><br />
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"You have requested a new password for your account at %store_name",'store_name'=>$_tmp6),$_smarty_tpl);?>
.<br /><br />
    <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['password']->value,$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Your new password is <span style=\"font-family: courier, fixed; font-size: 120%\">%pass</span>",'pass'=>$_tmp7),$_smarty_tpl);?>
<br /><br />
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'You can change your password in your user account by opening the "Change my password" link under your personal information'),$_smarty_tpl);?>
.<br /><br />
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'Kind regards'),$_smarty_tpl);?>
,<br />
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"The %store team.",'store'=>$_tmp8),$_smarty_tpl);?>


                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-top: 0;border-collapse: collapse !important;">
                                <tr>
                                    <td align="center" valign="top" style="padding-bottom: 40px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-collapse: collapse !important;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="templateContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 600px;border-collapse: collapse !important;">
                                            <tr>
                                                <td valign="top" class="footerContent" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;color: #808080;font-family: Helvetica;font-size: 10px;line-height: 150%;padding-top: 20px;text-align: left;border-collapse: collapse !important;">
                                                    <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Our mailing address is:"),$_smarty_tpl);?>
</strong>
                                                    <br>
                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address1"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address2"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address3"),$_smarty_tpl);?>
<br>
                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_zipcode"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_city"),$_smarty_tpl);?>
,
                                                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_country"),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9) {?>
                                                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_country"),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp10)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
, <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp10), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                    <?php }?>
                                                    <br>
                                                    <br>
                                                    <em><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Copyright"),$_smarty_tpl);?>
 &copy; <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape(date('Y'),$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['company_name']->value,$_smarty_tpl);?>
, <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"All rights reserved."),$_smarty_tpl);?>
</em>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>
</body>
</html><?php }} ?>
