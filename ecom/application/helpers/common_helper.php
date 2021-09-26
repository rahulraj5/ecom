<?php defined('BASEPATH') OR exit('No direct script access allowed');

function getWebOptionValue($option_name)
{
	$ci =&get_instance();
	$optdata = $ci->UserModel->getWhereDataByCol("smtp",array("option_name" => $option_name),"option_value");
  	$opt = (!empty($optdata))? $optdata : "";
	return $opt;
}

function maintenance_mode()
{
	$ci =&get_instance();
	$act = $ci->Common_model->getSingleRecordById('maintenance_mode', array('id' =>1));
	// p($act['status']);
	if($act['status'] == 1){
		echo $ci->load->view('maintenance','',true);exit;
	}else{}
}

function generateRandomStringbylnth($length) {
    $characters = '01234567890123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function createRandomCode(){ 
	$chars = "023456789ABCDEFGHIJKLMNOPQRST";
	srand((double)microtime()*1000000);
	$i = 0; 
	$pass = '' ; 
	while ($i <= 8) { 
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp; 
		$i++; 
	} 
	return $pass; 
}



function p($data)
{
	echo "<pre>"; print_r($data); die();
}

function pp($data)
{
	echo "<pre>"; print_r($data);
}