<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-12-02 21:01:15
         compiled from "/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/pdf/default/invoice.html" */ ?>
<?php /*%%SmartyHeaderCode:1812762245bf1b734c84484-04404192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe469a26c28136efbd0f791f1c5909e126e2d67b' => 
    array (
      0 => '/var/www/vhosts/jacksburgers.fr/web.jacksburgers.fr/templates/pdf/default/invoice.html',
      1 => 1542744042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1812762245bf1b734c84484-04404192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bf1b734e143e6_24756646',
  'variables' => 
  array (
    'order_id' => 0,
    'addresses' => 0,
    'city' => 0,
    'TITLE' => 0,
    'CURRENCY' => 0,
    'SYMBOL' => 0,
    'INVOICE_DATE' => 0,
    'REF' => 0,
    'CUSTOMER' => 0,
    'title' => 0,
    'value' => 0,
    'DELIVERY_ADDRESS' => 0,
    'LONG' => 0,
    'FIRSTNAME' => 0,
    'LASTNAME' => 0,
    'ADDRESS1' => 0,
    'ADDRESS2' => 0,
    'ADDRESS3' => 0,
    'ZIPCODE' => 0,
    'CITY' => 0,
    'COUNTRY' => 0,
    'INVOICE_ADDRESS' => 0,
    'ID' => 0,
    'WAS_IN_PROMO' => 0,
    'PROMO_PRICE' => 0,
    'PROMO_PRICE_TAX' => 0,
    'TAXED_PROMO_PRICE' => 0,
    'PRICE' => 0,
    'PRICE_TAX' => 0,
    'TAXED_PRICE' => 0,
    'TAX_RULE_TITLE' => 0,
    'realTax' => 0,
    'QUANTITY' => 0,
    'ATTRIBUTE_TITLE' => 0,
    'ATTRIBUTE_AVAILABILITY_TITLE' => 0,
    'realPrice' => 0,
    'orderCurrency' => 0,
    'realTaxedPrice' => 0,
    'POSTAGE_TAX_RULE_TITLE' => 0,
    'POSTAGE_TAX' => 0,
    'PAYMENT_MODULE' => 0,
    'DELIVERY_MODULE' => 0,
    'DISCOUNT' => 0,
    'TOTAL_AMOUNT' => 0,
    'POSTAGE' => 0,
    'taxes' => 0,
    'prices' => 0,
    '_price_taxe_' => 0,
    'price' => 0,
    'name' => 0,
    'TOTAL_TAX' => 0,
    'TOTAL_TAXED_AMOUNT' => 0,
    'POSTAGE_UNTAXED' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf1b734e143e6_24756646')) {function content_5bf1b734e143e6_24756646($_smarty_tpl) {?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['default_translation_domain'][0][0]->setDefaultTranslationDomain(array('domain'=>'pdf.default'),$_smarty_tpl);?>


<style>
    h1, h2, h3, h4 {
        color:#f6993c;
        margin: .5em 0;
    }

    h1 {
        font-size: 48px;
    }

    h2 {
        font-size: 16px;
    }

    h3 {
        font-size: 14px;
    }

    h4 {
        color:#58585a;
        font-size: 12px;
    }

    p, td {
        color:#58585a;
        font-size: 9px;
    }

    p {
        margin: .5em 0;
    }

    span {
        font-size: 9px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    tr {
        width: 100%;
    }

    td {
        vertical-align: top;
    }

    .table-info h3 {
        font-size: 18px;
        color: #58585a;
        margin-top: 0;
        margin-bottom: 15px;
    }

    .table-info h3 span {
        font-size: 18px;
        color: #f6993c;
    }

    .table-1 td {
        background: #f1f3f4;
        border:solid 1px #bcbdc0;
    }

    .table-2 td {
        border:solid 1px #bcbdc0;
    }


    .table-3-1, .table-3-2 {
        border: solid 1px #bcbdc0;
    }
    .table-3-1 p {
        font-size: 10px;
    }
    .table-3-2 p {
        font-size: 9px;
        color: #747475;
    }

    .table-3-module h3 {
        margin-top: 1.5em;
    }

    .table-3-module span {
        font-size: 11px;
    }

    .align-left {
        text-align: left;
    }
    .align-center {
        text-align: center;
    }
    .align-right{
        text-align: right;
    }

    .clear {
        padding: 0.5%;
        border-bottom:solid 1px #dddddd;
    }

    .clear-none {
        padding: 0.5%;
    }
	
	{hook name="invoice.css"}

</style>

<page backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm">
    <page_header>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"invoice.header",'order'=>$_smarty_tpl->tpl_vars['order_id']->value),$_smarty_tpl);?>

    </page_header>

    <page_footer>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"invoice.footer-top",'order'=>$_smarty_tpl->tpl_vars['order_id']->value),$_smarty_tpl);?>

        <table>
            <col style="width: 80%; padding: 1mm; border: none; text-align: left;" />
            <col style="width: 20%; padding: 1mm; border: none; text-align: right;" />
            <tbody>
            <tr>
                <td>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"invoice.imprint",'order'=>$_smarty_tpl->tpl_vars['order_id']->value),$_smarty_tpl);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"invoice.imprint")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"invoice.imprint"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<!-- Imprint -->
		                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_name"),$_smarty_tpl);?>

		                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address1"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address2"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_address3"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['addresses'] = new Smarty_variable($_tmp1." ".$_tmp2." ".$_tmp3, null, 0);?>
		                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_zipcode"),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_city"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['city'] = new Smarty_variable($_tmp4." ".$_tmp5, null, 0);?>
		                <?php if ($_smarty_tpl->tpl_vars['addresses']->value!="  ") {?>- <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['addresses']->value,$_smarty_tpl);?>
<?php }?>
		                <?php if ($_smarty_tpl->tpl_vars['city']->value!=" ") {?>- <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['city']->value,$_smarty_tpl);?>
<?php }?>
		                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_country"),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6) {?>
		                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_country"),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp7)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp7), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 - <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"address.country.title",'id'=>$_tmp7), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		                <?php }?>
		                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_business_id"),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8) {?>
		                    - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_business_id"),$_smarty_tpl);?>

		                <?php }?>
		                <br>
		                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_phone"),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9) {?>
		                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Phone: "),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_phone"),$_smarty_tpl);?>

		                <?php }?>
		                <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_email"),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10) {?>
		                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Email: "),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['config'][0][0]->configDataAccess(array('key'=>"store_email"),$_smarty_tpl);?>

		                <?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"invoice.imprint"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </td>
                <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"page"),$_smarty_tpl);?>
 [[page_cu]]/[[page_nb]]</td>
            </tr>
            </tbody>
        </table>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"invoice.footer-bottom",'order'=>$_smarty_tpl->tpl_vars['order_id']->value),$_smarty_tpl);?>

    </page_footer>

    <?php $_smarty_tpl->tpl_vars['taxes'] = new Smarty_variable(array(), null, 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"order.invoice",'type'=>"order",'id'=>$_smarty_tpl->tpl_vars['order_id']->value,'customer'=>"*")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"order.invoice",'type'=>"order",'id'=>$_smarty_tpl->tpl_vars['order_id']->value,'customer'=>"*"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"currency.order",'type'=>"currency",'id'=>$_smarty_tpl->tpl_vars['CURRENCY']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"currency.order",'type'=>"currency",'id'=>$_smarty_tpl->tpl_vars['CURRENCY']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars["orderCurrency"] = new Smarty_variable($_smarty_tpl->tpl_vars['SYMBOL']->value, null, 0);?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"currency.order",'type'=>"currency",'id'=>$_smarty_tpl->tpl_vars['CURRENCY']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <table class="table-info">
        <col style="width: 100%; padding: 0mm;" />
        <tr>
            <td>
                <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"INVOICE"),$_smarty_tpl);?>
</h1>
            </td>
        </tr>
        <tr>
            <td><h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Invoice date"),$_smarty_tpl);?>
 : <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->formatDate(array('date'=>$_smarty_tpl->tpl_vars['INVOICE_DATE']->value,'output'=>"date"),$_smarty_tpl);?>
</span></h3></td>
        </tr>
        <tr>
            <td><h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Invoice REF"),$_smarty_tpl);?>
 : <span><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
</span></h3></td>
        </tr>
        <tr>
            <td><h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Customer Number"),$_smarty_tpl);?>
 : <span><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"customer",'name'=>"customer.invoice",'id'=>$_smarty_tpl->tpl_vars['CUSTOMER']->value,'current'=>"0")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"customer",'name'=>"customer.invoice",'id'=>$_smarty_tpl->tpl_vars['CUSTOMER']->value,'current'=>"0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['REF']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"customer",'name'=>"customer.invoice",'id'=>$_smarty_tpl->tpl_vars['CUSTOMER']->value,'current'=>"0"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></h3></td>
        </tr>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('hookblock', array('name'=>"invoice.information",'order'=>$_smarty_tpl->tpl_vars['order_id']->value,'fields'=>"title,value")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"invoice.information",'order'=>$_smarty_tpl->tpl_vars['order_id']->value,'fields'=>"title,value"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('forhook', array('rel'=>"invoice.information")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"invoice.information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <tr>
            <td><h3><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl);?>
 : <span><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl);?>
</span></h3></td>
        </tr>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['forhook'][0][0]->processForHookBlock(array('rel'=>"invoice.information"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['hookblock'][0][0]->processHookBlock(array('name'=>"invoice.information",'order'=>$_smarty_tpl->tpl_vars['order_id']->value,'fields'=>"title,value"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </table>
	
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"invoice.after-information",'order'=>$_smarty_tpl->tpl_vars['order_id']->value),$_smarty_tpl);?>


    <table class="table-address">
        <col style="width: 50%; padding: 3mm;" />
        <col style="padding: 3mm;" />
        <tr>
            <td style="border-left: solid 1mm #f6993c;" >
                <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Delivery address"),$_smarty_tpl);?>
</h3>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('ifhook', array('rel'=>"invoice.delivery-address")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"invoice.delivery-address"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    
                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['order'][0][0]->orderDataAccess(array('attr'=>"delivery_module"),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"invoice.delivery-address",'module'=>$_tmp11,'order'=>$_smarty_tpl->tpl_vars['order_id']->value),$_smarty_tpl);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifhook'][0][0]->ifHook(array('rel'=>"invoice.delivery-address"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('elsehook', array('rel'=>"invoice.delivery-address")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"invoice.delivery-address"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
                
				<p>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order_address",'name'=>"delivery_address",'id'=>$_smarty_tpl->tpl_vars['DELIVERY_ADDRESS']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_address",'name'=>"delivery_address",'id'=>$_smarty_tpl->tpl_vars['DELIVERY_ADDRESS']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"title",'name'=>"order-invoice-address-title",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"title",'name'=>"order-invoice-address-title",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LONG']->value,$_smarty_tpl);?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"title",'name'=>"order-invoice-address-title",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['FIRSTNAME']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LASTNAME']->value,$_smarty_tpl);?>
<br />
                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ADDRESS1']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ADDRESS2']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ADDRESS3']->value,$_smarty_tpl);?>
<br />
                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ZIPCODE']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CITY']->value,$_smarty_tpl);?>
<br/>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"country",'name'=>"country_delivery",'id'=>$_smarty_tpl->tpl_vars['COUNTRY']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"country_delivery",'id'=>$_smarty_tpl->tpl_vars['COUNTRY']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"country_delivery",'id'=>$_smarty_tpl->tpl_vars['COUNTRY']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_address",'name'=>"delivery_address",'id'=>$_smarty_tpl->tpl_vars['DELIVERY_ADDRESS']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </p>
               	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['elsehook'][0][0]->elseHook(array('rel'=>"invoice.delivery-address"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </td>
            <td style="border-left: solid 1mm #f6993c;">
                <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Invoice address"),$_smarty_tpl);?>
</h3>
                <p>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order_address",'name'=>"delivery_address",'id'=>$_smarty_tpl->tpl_vars['INVOICE_ADDRESS']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_address",'name'=>"delivery_address",'id'=>$_smarty_tpl->tpl_vars['INVOICE_ADDRESS']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"title",'name'=>"order-invoice-address-title",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"title",'name'=>"order-invoice-address-title",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LONG']->value,$_smarty_tpl);?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"title",'name'=>"order-invoice-address-title",'id'=>$_smarty_tpl->tpl_vars['TITLE']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['FIRSTNAME']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['LASTNAME']->value,$_smarty_tpl);?>
<br />
                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ADDRESS1']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ADDRESS2']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ADDRESS3']->value,$_smarty_tpl);?>
<br />
                    <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ZIPCODE']->value,$_smarty_tpl);?>
 <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['CITY']->value,$_smarty_tpl);?>
<br/>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"country",'name'=>"country_delivery",'id'=>$_smarty_tpl->tpl_vars['COUNTRY']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"country_delivery",'id'=>$_smarty_tpl->tpl_vars['COUNTRY']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"country",'name'=>"country_delivery",'id'=>$_smarty_tpl->tpl_vars['COUNTRY']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_address",'name'=>"delivery_address",'id'=>$_smarty_tpl->tpl_vars['INVOICE_ADDRESS']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </p>
            </td>
        </tr>
    </table>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"invoice.after-addresses",'order'=>$_smarty_tpl->tpl_vars['order_id']->value),$_smarty_tpl);?>


    <table cellspacing="0" cellpadding="0" style="padding-top: 5mm;">
        <col style="width: 40%; padding: 1mm;" />
        <col style="width: 12%; padding: 1mm;" />
        <col style="width: 12%; padding: 1mm;" />
        <col style="width: 12%; padding: 1mm;" />
        <col style="width: 12%; padding: 1mm;" />
        <col style="width: 12%; padding: 1mm;" />

        <tr class="table-1">
            <td><h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Product"),$_smarty_tpl);?>
</h4></td>
            <td><h4 class="align-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Unit. price"),$_smarty_tpl);?>
</h4></td>
            <td><h4 class="align-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Tax"),$_smarty_tpl);?>
</h4></td>
            <td><h4 class="align-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Unit taxed price"),$_smarty_tpl);?>
</h4></td>
            <td><h4 class="align-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Quantity"),$_smarty_tpl);?>
</h4></td>
            <td style="background:#f6993c"><h4 style="color:white;" class="align-center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Taxed total"),$_smarty_tpl);?>
</h4></td>
        </tr>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order_product",'name'=>"order-products",'order'=>$_smarty_tpl->tpl_vars['ID']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product",'name'=>"order-products",'order'=>$_smarty_tpl->tpl_vars['ID']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['WAS_IN_PROMO']->value==1) {?>
                <?php $_smarty_tpl->tpl_vars["realPrice"] = new Smarty_variable($_smarty_tpl->tpl_vars['PROMO_PRICE']->value, null, 0);?>
                <?php $_smarty_tpl->tpl_vars["realTax"] = new Smarty_variable($_smarty_tpl->tpl_vars['PROMO_PRICE_TAX']->value, null, 0);?>
                <?php $_smarty_tpl->tpl_vars["realTaxedPrice"] = new Smarty_variable($_smarty_tpl->tpl_vars['TAXED_PROMO_PRICE']->value, null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["realPrice"] = new Smarty_variable($_smarty_tpl->tpl_vars['PRICE']->value, null, 0);?>
                <?php $_smarty_tpl->tpl_vars["realTax"] = new Smarty_variable($_smarty_tpl->tpl_vars['PRICE_TAX']->value, null, 0);?>
                <?php $_smarty_tpl->tpl_vars["realTaxedPrice"] = new Smarty_variable($_smarty_tpl->tpl_vars['TAXED_PRICE']->value, null, 0);?>
            <?php }?>

            <?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TAX_RULE_TITLE']->value,$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('taxes', null, 0);
$_smarty_tpl->tpl_vars['taxes']->value[$_tmp12][] = $_smarty_tpl->tpl_vars['realTax']->value*$_smarty_tpl->tpl_vars['QUANTITY']->value;?>

            <tr class="table-2">
                <td>
                    <p><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
</p>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('ifloop', array('rel'=>"combinations")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"combinations"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('type'=>"order_product_attribute_combination",'name'=>"combinations",'order_product'=>$_smarty_tpl->tpl_vars['ID']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product_attribute_combination",'name'=>"combinations",'order_product'=>$_smarty_tpl->tpl_vars['ID']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_TITLE']->value,$_smarty_tpl);?>
 - <?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['ATTRIBUTE_AVAILABILITY_TITLE']->value,$_smarty_tpl);?>
<br>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product_attribute_combination",'name'=>"combinations",'order_product'=>$_smarty_tpl->tpl_vars['ID']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['ifloop'][0][0]->theliaIfLoop(array('rel'=>"combinations"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </td>
                <td><p class="align-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['realPrice']->value,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</p></td>
                <td><p class="align-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['realTax']->value,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</p></td>
                <td><p class="align-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['realTaxedPrice']->value,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</p></td>
                <td><p class="align-center"><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['QUANTITY']->value,$_smarty_tpl);?>
</p></td>
                <td><p class="align-right"><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['realTaxedPrice']->value*$_smarty_tpl->tpl_vars['QUANTITY']->value,$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp13,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</p></td>
            </tr>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('type'=>"order_product",'name'=>"order-products",'order'=>$_smarty_tpl->tpl_vars['ID']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </table>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"invoice.after-products",'order'=>$_smarty_tpl->tpl_vars['order_id']->value),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['POSTAGE_TAX_RULE_TITLE']->value) {?>
        <?php $_smarty_tpl->createLocalArrayVariable('taxes', null, 0);
$_smarty_tpl->tpl_vars['taxes']->value[$_smarty_tpl->tpl_vars['POSTAGE_TAX_RULE_TITLE']->value][] = $_smarty_tpl->tpl_vars['POSTAGE_TAX']->value;?>
    <?php }?>

    <table cellspacing="0" cellpadding="0" style="padding-top: 5mm;">
        <col style="width: 60%; padding: 1mm;" />
        <col style="width: 40%; padding: 1mm;" />
        <tr>
            <td class="table-3-module">

                <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Payment module"),$_smarty_tpl);?>
</h3>
                <p>
                    <span><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"payment-module",'type'=>"module",'id'=>$_smarty_tpl->tpl_vars['PAYMENT_MODULE']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"payment-module",'type'=>"module",'id'=>$_smarty_tpl->tpl_vars['PAYMENT_MODULE']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"payment-module",'type'=>"module",'id'=>$_smarty_tpl->tpl_vars['PAYMENT_MODULE']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                </p>

                <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Delivery module"),$_smarty_tpl);?>
</h3>
                <p>
                    <span><?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('name'=>"delivery-module",'type'=>"module",'id'=>$_smarty_tpl->tpl_vars['DELIVERY_MODULE']->value)); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"delivery-module",'type'=>"module",'id'=>$_smarty_tpl->tpl_vars['DELIVERY_MODULE']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TITLE']->value,$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"delivery-module",'type'=>"module",'id'=>$_smarty_tpl->tpl_vars['DELIVERY_MODULE']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                </p>

            </td>
            <td>
                <table class="table-3">
                    <col style="width: 50%; padding: 1mm;">
                    <col style="width: 50%; padding: 1mm;">
                    <?php if ($_smarty_tpl->tpl_vars['DISCOUNT']->value) {?>
                    <tr>
                        <td class="table-3-1"><p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Discount"),$_smarty_tpl);?>
</p></td>
                        <td class="table-3-1 align-right"><p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['DISCOUNT']->value,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</p></td>
                    </tr>
                    <?php }?>
                    <tr>
                        <td class="table-3-1"><p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Total without tax"),$_smarty_tpl);?>
</p></td>
                        <td class="table-3-1 align-right"><p><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TOTAL_AMOUNT']->value-$_smarty_tpl->tpl_vars['POSTAGE']->value,$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp14,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</p></td>
                    </tr>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tax", null, null); ob_start(); ?><?php  $_smarty_tpl->tpl_vars['prices'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prices']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prices']->key => $_smarty_tpl->tpl_vars['prices']->value) {
$_smarty_tpl->tpl_vars['prices']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['prices']->key;
?><?php $_smarty_tpl->tpl_vars["_price_taxe_"] = new Smarty_variable("0", null, 0);?><?php  $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price']->key => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_price_taxe_'] = new Smarty_variable($_smarty_tpl->tpl_vars['_price_taxe_']->value+$_smarty_tpl->tpl_vars['price']->value, null, 0);?><?php } ?><?php if ($_smarty_tpl->tpl_vars['_price_taxe_']->value!=0) {?><tr><td class="table-3-2"><p><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl);?>
</p></td><td class="table-3-2 align-right"><P><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['_price_taxe_']->value,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</P></td></tr><?php }?><?php } ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php if (Smarty::$_smarty_vars['capture']['tax']!='') {?>
                    <tr>
                        <td class="table-3-1"><p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Tax"),$_smarty_tpl);?>
</p></td>
                        <td class="table-3-1 align-right"><P><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['TOTAL_TAX']->value,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</P></td>
                    </tr>
                    <?php echo Smarty::$_smarty_vars['capture']['tax'];?>

                    <?php }?>
                    <tr>
                        <td class="table-3-1"><p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Total with tax"),$_smarty_tpl);?>
</p></td>
                        <td class="table-3-1 align-right"><P><?php ob_start();?><?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['TOTAL_TAXED_AMOUNT']->value-$_smarty_tpl->tpl_vars['POSTAGE_UNTAXED']->value,$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_tmp15,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</P></td>
                    </tr>
                    <tr>
                        <td class="table-3-1"><p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Postage"),$_smarty_tpl);?>
</p></td>
                        <td class="table-3-1 align-right"><p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['POSTAGE']->value,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</p></td>
                    </tr>
                    <tr>
                        <td class="table-3-1" style="background:#f6993c;"><h3 style="color:white;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>"Total"),$_smarty_tpl);?>
</h3></td>
                        <td class="table-3-1 align-right" style="background:#f6993c;"><h3 style="color:white;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_money'][0][0]->formatMoney(array('number'=>$_smarty_tpl->tpl_vars['TOTAL_TAXED_AMOUNT']->value,'symbol'=>$_smarty_tpl->tpl_vars['orderCurrency']->value),$_smarty_tpl);?>
</h3></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->processHookFunction(array('name'=>"invoice.after-summary",'order'=>$_smarty_tpl->tpl_vars['order_id']->value),$_smarty_tpl);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['loop'][0][0]->theliaLoop(array('name'=>"order.invoice",'type'=>"order",'id'=>$_smarty_tpl->tpl_vars['order_id']->value,'customer'=>"*"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</page>
<?php }} ?>
