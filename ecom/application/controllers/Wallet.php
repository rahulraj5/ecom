<?php defined('BASEPATH') or exit('No direct script access allowed');

class Wallet extends Admin
{

	function __construct()
	{
		parent::__construct();
    }
    
    public function paypal_detail()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['wallet_detail'] = $this->Common_model->getSingleRecordById('wallet', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/wallet_paypal_detail', $data);
		$this->load->view('admin/footer');
	}

	public function paypalAjax()
	{
		if (isset($_POST['clientId']) && !empty($_POST['clientId']) && !empty($_POST['clientSecret'])) {
			$l_data = array();
			$l_data['wallet'] = "PAYPAL";
			$l_data['client_id'] = $_POST['clientId'];
			$l_data['client_secret'] = $_POST['clientSecret'];
			$l_data['sandbox_mode'] = $_POST['h_paypal'];
			// $l_data['client_email'] = $_POST['email'];
			$l_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('wallet', $l_data, array('id' => $_POST['id']));
				if ($result) {
					$msg = array('status' => 1, 'msg' => 'Record has been Update Successfully');
					echo json_encode($msg);
					exit();
				} else {
					$msg = array('status' => 0, 'msg' => 'Not Update');
					echo json_encode($msg);
					exit();
				}
			} else {
				$result = $this->Common_model->addRecords('wallet', $l_data);
				$msg = array('status' => 1, 'msg' => 'Record has been Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function stripe_detail()
	{
		$data = array();
		// $whr = array('id' => 2);
		// $data['wallet_detail'] = $this->Common_model->getSingleRecordById('wallet', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/wallet_stripe_detail', $data);
		$this->load->view('admin/footer');
	}

	public function stripeAjax()
	{
		if (isset($_POST['clientId']) && !empty($_POST['clientId']) && !empty($_POST['clientSecret'])) {
			$l_data = array();
			$l_data['wallet'] = "STRIPE";
			$l_data['client_id'] = $_POST['clientId'];
			$l_data['client_secret'] = $_POST['clientSecret'];
			$l_data['sandbox_mode'] = $_POST['h_stripe'];
			// $l_data['client_email'] = $_POST['email'];
			$l_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('wallet', $l_data, array('id' => $_POST['id']));
				if ($result) {
					$msg = array('status' => 1, 'msg' => 'Record has been Update Successfully');
					echo json_encode($msg);
					exit();
				} else {
					$msg = array('status' => 0, 'msg' => 'Not Update');
					echo json_encode($msg);
					exit();
				}
			} else {
				$result = $this->Common_model->addRecords('wallet', $l_data);
				$msg = array('status' => 1, 'msg' => 'Record has been Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function instamojo_detail()
	{
		$data = array();
		// $whr = array('id' => 3);
		// $data['wallet_detail'] = $this->Common_model->getSingleRecordById('wallet', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/wallet_instamojo_detail', $data);
		$this->load->view('admin/footer');
	}


	public function instamojoAjax()
	{
		if (isset($_POST['clientId']) && !empty($_POST['clientId']) && !empty($_POST['clientSecret'])) {
			$l_data = array();
			$l_data['wallet'] = "INSTAMOJO";
			$l_data['client_id'] = $_POST['clientId'];
			$l_data['client_secret'] = $_POST['clientSecret'];
			$l_data['sandbox_mode'] = $_POST['h_instmo'];
			// $l_data['client_email'] = $_POST['email'];
			$l_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('wallet', $l_data, array('id' => $_POST['id']));
				if ($result) {
					$msg = array('status' => 1, 'msg' => 'Record has been Update Successfully');
					echo json_encode($msg);
					exit();
				} else {
					$msg = array('status' => 0, 'msg' => 'Not Update');
					echo json_encode($msg);
					exit();
				}
			} else {
				$result = $this->Common_model->addRecords('wallet', $l_data);
				$msg = array('status' => 1, 'msg' => 'Record has been Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function razorpay_detail()
	{
		$data = array();
		// $whr = array('id' => 4);
		// $data['wallet_detail'] = $this->Common_model->getSingleRecordById('wallet', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/wallet_razorpay_detail', $data);
		$this->load->view('admin/footer');
	}

	public function rajorAjax()
	{
		if (isset($_POST['clientId']) && !empty($_POST['clientId']) && !empty($_POST['clientSecret'])) {
			$l_data = array();
			$l_data['wallet'] = "RAJORPAY";
			$l_data['client_id'] = $_POST['clientId'];
			$l_data['client_secret'] = $_POST['clientSecret'];
			$l_data['sandbox_mode'] = $_POST['h_razor'];
			// $l_data['client_email'] = $_POST['email'];
			$l_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('wallet', $l_data, array('id' => $_POST['id']));
				if ($result) {
					$msg = array('status' => 1, 'msg' => 'Record has been Update Successfully');
					echo json_encode($msg);
					exit();
				} else {
					$msg = array('status' => 0, 'msg' => 'Not Update');
					echo json_encode($msg);
					exit();
				}
			} else {
				$result = $this->Common_model->addRecords('wallet', $l_data);
				$msg = array('status' => 1, 'msg' => 'Record has been Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function paystack_detail()
	{
		$data = array();
		$whr = array('id' => 5);
		$data['wallet_detail'] = $this->Common_model->getSingleRecordById('wallet', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/wallet_paystack_detail', $data);
		$this->load->view('admin/footer');
	}

	public function paystackAjax()
	{
		if (isset($_POST['clientId']) && !empty($_POST['clientId']) && !empty($_POST['clientSecret'])) {
			$l_data = array();
			$l_data['wallet'] = "PAYSTACK";
			$l_data['client_id'] = $_POST['clientId'];
			$l_data['client_secret'] = $_POST['clientSecret'];
			$l_data['sandbox_mode'] = $_POST['h_paystack'];
			$l_data['client_email'] = $_POST['email'];
			$l_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('wallet', $l_data, array('id' => $_POST['id']));
				if ($result) {
					$msg = array('status' => 1, 'msg' => 'Record has been Update Successfully');
					echo json_encode($msg);
					exit();
				} else {
					$msg = array('status' => 0, 'msg' => 'Not Update');
					echo json_encode($msg);
					exit();
				}
			} else {
				$result = $this->Common_model->addRecords('wallet', $l_data);
				$msg = array('status' => 1, 'msg' => 'Record has been Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function voguepay_detail()
	{
		$data = array();
		$whr = array('id' => 6);
		$data['wallet_detail'] = $this->Common_model->getSingleRecordById('wallet', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/wallet_voguepay_detail', $data);
		$this->load->view('admin/footer');
	}

	public function voguepayAjax()
	{
		if (isset($_POST['clientId']) && !empty($_POST['clientId']) && !empty($_POST['clientSecret'])) {
			$l_data = array();
			$l_data['wallet'] = "VOGUEPAY";
			$l_data['client_id'] = $_POST['clientId'];
			$l_data['client_secret'] = $_POST['clientSecret'];
			$l_data['sandbox_mode'] = $_POST['h_voguepay'];
			// $l_data['client_email'] = $_POST['email'];
			$l_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('wallet', $l_data, array('id' => $_POST['id']));
				if ($result) {
					$msg = array('status' => 1, 'msg' => 'Record has been Update Successfully');
					echo json_encode($msg);
					exit();
				} else {
					$msg = array('status' => 0, 'msg' => 'Not Update');
					echo json_encode($msg);
					exit();
				}
			} else {
				$result = $this->Common_model->addRecords('wallet', $l_data);
				$msg = array('status' => 1, 'msg' => 'Record has been Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function sslcommerz_detail()
	{
		$data = array();
		$whr = array('id' => 6);
		$data['wallet_detail'] = $this->Common_model->getSingleRecordById('wallet', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/wallet_sslcommerz_detail', $data);
		$this->load->view('admin/footer');
	}

	public function sslCommerzAjax()
	{
		if (isset($_POST['clientId']) && !empty($_POST['clientId']) && !empty($_POST['clientSecret'])) {
			$l_data = array();
			$l_data['wallet'] = "SSLCOMMERZ";
			$l_data['client_id'] = $_POST['clientId'];
			$l_data['client_secret'] = $_POST['clientSecret'];
			$l_data['sandbox_mode'] = $_POST['h_sslCommerz'];
			// $l_data['client_email'] = $_POST['email'];
			$l_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('wallet', $l_data, array('id' => $_POST['id']));
				if ($result) {
					$msg = array('status' => 1, 'msg' => 'Record has been Update Successfully');
					echo json_encode($msg);
					exit();
				} else {
					$msg = array('status' => 0, 'msg' => 'Not Update');
					echo json_encode($msg);
					exit();
				}
			} else {
				$result = $this->Common_model->addRecords('wallet', $l_data);
				$msg = array('status' => 1, 'msg' => 'Record has been Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}
}    