import './jquery';
import './bootstrap';

// Edit account information
jQuery('.editAccountData').on('click',function(){
    let activeValue = jQuery(this).prev().val();
    let activeType = jQuery(this).prev().attr('type');
    jQuery('#editAccountModal #updateAccountField').val(activeValue);
    jQuery('#editAccountModal #updateTypeField').val(activeType);
    jQuery('#editAccountModal #updateAccountField').attr('type',activeType);
});

jQuery('#updateAccountData').on('click',function(){
    jQuery('#updateAccountForm').submit();
});