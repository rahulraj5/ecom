<?php
	public function contact()
	{
	    $data = array();
		if(isset($_POST['name']) && !empty($_POST['name']))
    	{
  		//   	print_r($_POST);
		// die;
    		$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			// $upass = trim($_POST['pass']);
			$number = trim($_POST['number']);

			if(empty($name))
			{
			$error = "enter your name !";
			$code = 1;
			}
			else if(!ctype_alpha($name))
			{
			$error = "letters only !";
			$code = 1;
			}
			else if(empty($email))
			{
			$error = "enter your email !";
			$code = 2;
			}
			else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
			{
			$error = "not valid email !";
			$code = 2;
			}
			else if(empty($number))
			{
			$error = "Enter Mobile NO !";
			$code = 3;
			}
			else if(!is_numeric($number))
			{
			$error = "Numbers only !";
			$code = 3;
			}
			else if(strlen($number)!=10)
			{
			$error = "10 characters only !";
			$code = 3;
			}
			else
			{
			    
				
				// document.location.href='index.php';
				
			}
		}
		$this->load->view('home/header');
		$this->load->view('home/contact',$data);
		$this->load->view('home/footer');
		
	}	

    public function admissionopen()
	{
			
		if(isset($_POST['name']) && !empty($_POST['name']))
     	{
  	// 		 print_r($_POST);
			// die;
			$insert_data = array();
			$insert_data['name'] = $_POST["name"];
			$insert_data['email'] = $_POST["email"];
			$insert_data['message'] = $_POST["message"];	//query
			$insert_data['number'] = $_POST["number"];	
			$insert_data['city'] = $_POST["city"];		
			$insert_data['course'] = $_POST["course"]; //course
			// $insert_data['stream'] = (isset($_POST["stream"]) ? $_POST["stream"] : '');
			$insert_data['clas'] = $_POST["clas"];		//class
			$insert_data['medium'] = $_POST["medium"];
			$insert_data['know'] = $_POST["know"];
				// $insert_data['create_date'] = date('Y-m-d h:i:s');
			$result = $this->CommonModel->addrecord('contactlist',$insert_data);
			$to = "info@driitian.com";
			$subject = "For Admission";
	        $headers = "From: webmaster@example.com";
	        $template = $this->load->view('home/addmission_template', $insert_data,true);
	        	// $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$_POST["message"]);
	        $rs = send_smtp_mail($to, $_POST["email"], $subject,'',$template);
	     	if($rs)
	    	{
	    		// redirect(base_url().'thankyou');
	    		 echo 'success';
	    	}
	        // echo 'success';
		}
		$this->load->view('home/admissionopen');
		
	}

	public function loginbypassword()
	{
		if (isset($_POST) && !empty($_POST)) {
			if (isset($_POST['mobile_no']) && !empty($_POST['mobile_no']) && isset($_POST['password']) && !empty($_POST['password'])) {
				$mobile_no = $_POST['mobile_no'];
				$password = md5($_POST['password']);
				$checkuser = $this->Common_model->GetWhere('users', array('mobile_no' => $mobile_no, 'password' => $password));
				// print_r($checkuser);
				// die;
				if (isset($checkuser) && !empty($checkuser)) {
					$checkuserrow = $checkuser[0];
					if ($checkuserrow['status'] == 1) {
						// $this->session->set_userdata(USER_SESSION, $checkuserrow);

						$msg = array('status' => 1, 'msg' => 'Login Successfully ! Welcome to eshop.');
						echo json_encode($msg);
						exit();
					} else {
						$msg = array('status' => 0, 'msg' => 'Your account has been deactivated ,please contact with admin');
						echo json_encode($msg);
						exit();
					}
				} else {
					$msg = array('status' => 0, 'msg' => 'Invalid Mobile no. & Password  please try again.');
					echo json_encode($msg);
					exit();
				}
			} else {
				$msg = array('status' => 0, 'msg' => 'Mobile no. & Password has been required please try again.');
				echo json_encode($msg);
				exit();
			}
		}
	}

?>


<form action="" id="contactinfoform" method="post" enctype="multipart/form-data">
    <div class="col-lg-5">
        <div class="contact_form">
            <h3 style="padding-bottom:10px;">Contact With Us</h3>
            
            <?php
            if(isset($error))
            {
            echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button>
                <h4> '.$SUCCESS.' <?php echo $error; ?></h4>
                </div>';
            
            }            
            ?>
                <div class="row row11">
                    <div class="col-lg-12">
                        <div class="form-group">
                        <input type="text" class="form-control" name="name" value="<?php if(isset($name)){echo $name;} ?>" <?php if(isset($code) && $code == 1){ echo "autofocus"; }  ?>  placeholder="Enter Full Name.." id="name" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <input type="email" class="form-control" name="email" value="<?php if(isset($email)){echo $email;} ?>" <?php if(isset($code) && $code == 2){ echo "autofocus"; }  ?> placeholder="Email.." id="email" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <input type="text" class="form-control" name="number" placeholder="Phone.." id="number"  value="<?php if(isset($number)){echo $number;} ?>" <?php if(isset($code) && $code == 3){ echo "autofocus"; }  ?>>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control con" name="message" placeholder="MESSAGE." rows="4" id="message"></textarea>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="submit" id="contactus" name="contactus" class=" btn-default" style="background-color: #3ca8a9!important; padding:11px 25px;  color: white!important; text-decoration: none;">Send Message</button>
                    </div>
                </div>
        </div>
    </div>
</form>	


<script>
    $("#contact").on("click", function(){
        var form = $("#contactinfoform")[0];
        // alert(form);
        var href = base_url+"admissionopen";
        var data = new FormData(form);
        // alert(data);

        $.ajax({

            enctype: 'multipart/form-data',
            processData: false,  // Important!
            contentType: false,
            cache: false,
            type: "POST",
            url: href,
            data:data,
            dataType: "json",
            success : function(data){
                // alert(data);
                // $.notify(data, "success");
                // setTimeout(function(){ window.location.href = base_url+"thankyou"; }, 3000);
                // window.location.href = "base_url().thankyou"; 
                if(data.status==1){
                    $.notify(data.msg, "success");
                    setTimeout(function(){ window.location.href = base_url+"thankyou"; }, 3000);
                }else{
                    $("#contact").removeAttr('disabled');
                    $("#contact").removeClass('buttonload');
                    $("#contact").html('Submit');
                    $.notify(data.msg, "error");
                }
            
            
            },
            error: function(data) {
                $("#contact").removeAttr('disabled');
                $("#contact").removeClass('buttonload');
                $("#contact").html('Submit');
            },
        });
    });
</script>

<?php echo (isset($shop_data['meta_tags']) && !empty($shop_data['meta_tags']) ? $shop_data['meta_tags'] : '') ?>