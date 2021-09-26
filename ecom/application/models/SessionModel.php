<?php defined('BASEPATH') OR exit('No direct script access allowed');
class SessionModel extends CI_Model 
{
	public function __construct()
	{
	}

	public function checkadminlogin($allow)
	{
	   $f_name = $this->router->fetch_method();
       $user = $this->session->userdata(ADMIN_SESSION);
      
       if(empty($user))
       {
	   		
      	  if(in_array($f_name, $allow))		
	      {
	      	return true;
	      	exit();
	      }else
	      {
	      	redirect("/admin/login");
	      }
       }
	}
	
	public function checkuserlogin($allow)
	{
	   $f_name = $this->router->fetch_method();
       $user = $this->session->userdata(USER_SESSION);
      
       if(empty($user))
       {
	   		
      	  if(in_array($f_name, $allow))		
	      {
	      	return true;
	      	exit();
	      }else
	      {
	      	redirect("/home/login");
	      }
       }
	}

	public function checksellerlogin($allow)
	{
	   $f_name = $this->router->fetch_method();
       $user = $this->session->userdata(SELLER_SESSION);
      
       if(empty($user))
       {
	   		
      	  if(in_array($f_name, $allow))		
	      {
	      	return true;
	      	exit();
	      }else
	      {
	      	redirect("/seller/login");
	      }
       }
	}

}

?>