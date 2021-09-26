<?php defined('BASEPATH') OR exit('No direct script access allowed');
function shopprofilebysession()
{
	$ci =&get_instance();
	$session_userdata = $ci->session->userdata(SELLER_SESSION);
	if(isset($session_userdata) && !empty($session_userdata)){
		$shopdata = $ci->UserModel->getSingleRecordById("sellers",array("shop_id" => $session_userdata['shop_id']));
		return $shopdata;
	}else{
		return "";	
	}
}
function shopsessionShopid(){
	$ci =&get_instance();	
	$session_userdata = $ci->session->userdata(SELLER_SESSION);
	return (isset($session_userdata['shop_id']) ? $session_userdata['shop_id'] : '');	
}