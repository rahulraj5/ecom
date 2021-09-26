
<?php defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// require FCPATH . '/vendor/autoload.php';
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Html;

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->SessionModel->checkadminlogin(array("login","loginajax","maintenance"));
		// $this->load->library('excel');
		// $this->load->model('excel_model');
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	public function login()
	{
		// $this->load->view('admin/header');
		$this->load->view('admin/signin');
		// $this->load->view('admin/footer');
	}

	public function signin()
	{
		$this->load->view('admin/signin_header');
		$this->load->view('admin/signin_index');
		$this->load->view('admin/signin_footer');
	}

	public function maintenance()
	{
		// $this->load->view('admin/header');
		$this->load->view('admin/maintenance');
		// $this->load->view('admin/footer');
	}

	public function loginajax()
	{
		$email_id = trim($_POST['email_id']);
		$password = md5(trim($_POST['password']));
		if(isset($email_id) && !empty($email_id) && isset($password) && !empty($password))
		{
		    		$userdata = $this->Common_model->getSingleRecordById('admin',array('email' => $email_id,'password'=>$password));
		    		//print_r($userdata);
		    		if($userdata){
		    			if($userdata['status']==1){                            
		    	           
		    	           $this->session->set_userdata(ADMIN_SESSION, $userdata);
		    				echo json_encode(array('status'=>1,'msg'=>"successfully login"));
		    				exit();
		    			}
		    			if($userdata['status']== 0){
		    				echo json_encode(array('status'=>0,'msg'=>"Your account has been deactivated"));
		    				exit();
		    			}
		    			if($userdata['status']== 3){
		    				echo json_encode(array('status'=>0,'msg'=>"Your account has been deleted by admin"));
		    				exit();
		    			}
		    		}else{
		    			echo json_encode(array('status'=>0,'msg'=>" Invalid id or password Please try again"));
		    		}
		}else
		{
		    echo json_encode(array('status'=>0,'msg'=>"id and password has been required"));
		    	exit();
		}   
	}

	public function language_list()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['lang_data'] = $this->Common_model->GetWhere('language', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/language_list', $data);
		$this->load->view('admin/footer');
	}

	public function add_language($id = "")
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['lang_data'] = $this->Common_model->getSingleRecordById('language', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/language_add', $data);
		$this->load->view('admin/footer');
	}

	public function add_lang()
	{
		if (isset($_POST['lang_name']) && !empty($_POST['lang_name']) && !empty($_POST['lang_code'])) {
			$l_data = array();
			$l_data['lang_name'] = $_POST['lang_name'];
			$l_data['lang_code'] = $_POST['lang_code'];
			$l_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('language', $l_data, array('id' => $_POST['id']));
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
				$result = $this->Common_model->addRecords('language', $l_data);
				$msg = array('status' => 1, 'msg' => 'Record has been Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function category_test()
	{
		$data = array();
		$whr2 = array('status !=' => 3);
		$data['categories_data'] = $this->Common_model->GetWhere('category', $whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/category_test', $data);
		$this->load->view('admin/footer');
	}

	public function add_category_test($cat_id = "")
	{
		$data = array();
		if (!empty($cat_id)) {
			$whr = array('status !=' => 3, 'category_id' => $cat_id);
			$data['cat_data'] = $this->Common_model->getSingleRecordById('category', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_category_test', $data);
		$this->load->view('admin/footer');
	}

	public function categoryAjaxTest()
	{
		if (isset($_POST['category_name']) && !empty($_POST['category_name'])) {
			$c_data = array();
			$c_data['category_name'] = $_POST['category_name'];
			// $c_data['create_date'] = date('Y-m-d H:i:s');
			if (isset($_POST['category_id']) &&  !empty($_POST['category_id'])) {
				$result = $this->Common_model->updateRecords('category', $c_data, array('category_id' => $_POST['category_id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result = $this->Common_model->addRecords('category', $c_data);
				$msg = array('status' => 1, 'msg' => 'added test Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'Please Enter Category');
			echo json_encode($msg);
			exit();
		}
	}

    public function sub_category_test()
	{
		$data = array();
		$whr2 = array('status !=' => 3);
		$data['subcategory_data'] = $this->Common_model->GetWhere('sub_category', $whr2);
		$data['categories_data'] = $this->Common_model->GetWhere('category', $whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/sub_category_test', $data);
		$this->load->view('admin/footer');
	}

	public function add_subcategory_test($cat_id = "")
	{
		$data = array();
		if (!empty($cat_id)) {
			$whr = array('status !=' => 3, 'subcategory_id' => $cat_id);
			$data['cat_data'] = $this->Common_model->getSingleRecordById('sub_category', $whr);
		}
		$whr = array('status !=' => 3);
		$data['category'] = $this->Common_model->GetWhere('category', $whr);
		// $whr2 = array('status !=' => 3, 'parent_category_id' => 0);
		// $data['sub_category'] = $this->Common_model->GetWhere('sub_category', $whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/add_subcategory_test', $data);
		$this->load->view('admin/footer');
	}

	public function subCategoryAjaxTest()
	{
		// print_r($_POST);die;
		if (isset($_POST['category_name']) && !empty($_POST['category_name']) && !empty($_POST['parent_category_id'])) {
			$c_data = array();
			$c_data['subcategory_name'] = $_POST['category_name'];
			$c_data['subcategory_category_id'] = $_POST['parent_category_id'];
			// $c_data['parent_sub_category_id'] = 1;
			// $c_data['create_date'] = date('Y-m-d H:i:s');
			if (isset($_POST['category_id']) &&  !empty($_POST['category_id'])) {
				$result_id = $this->Common_model->updateRecords('sub_category', $c_data, array('subcategory_id' => $_POST['category_id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result = $this->Common_model->addRecords('sub_category', $c_data);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'Please Enter Category');
			echo json_encode($msg);
			exit();
		}
	}

	public function sub_subcategory_test()
	{
		$data = array();
		$whr2 = array('status !=' => 3);
		$data['subsubcategory_data'] = $this->Common_model->GetWhere('sub_subcategory', $whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/sub_subcategory_test', $data);
		$this->load->view('admin/footer');
	}

	public function add_sub_subcategory_test($cat_id = "")
	{
		$data = array();
		if (!empty($cat_id)) {
			$whr = array('status !=' => 3, 'sub_subcategory_id' => $cat_id);
			$data['cat_data'] = $this->Common_model->getSingleRecordById('sub_subcategory', $whr);
		}
		$whr = array('status !=' => 3);
		$data['subcategory'] = $this->Common_model->GetWhere('sub_category', $whr);
		// $whr2 = array('status !=' => 3, 'parent_category_id' => 0);
		// $data['sub_category'] = $this->Common_model->GetWhere('sub_category', $whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/add_sub_subcategory_test', $data);
		$this->load->view('admin/footer');
	}

	public function subSubCatAjaxTest()
	{
		// print_r($_POST);die;
		if (isset($_POST['category_name']) && !empty($_POST['category_name']) && !empty($_POST['subcategory_id'])) {
			$c_data = array();
			$c_data['sub_subcategory_name'] = $_POST['category_name'];
			$c_data['subsubcategory_subcategory_id'] = $_POST['subcategory_id'];
			// $c_data['parent_sub_category_id'] = 1;
			// $c_data['create_date'] = date('Y-m-d H:i:s');
			if (isset($_POST['category_id']) &&  !empty($_POST['category_id'])) {
				$result_id = $this->Common_model->updateRecords('sub_subcategory', $c_data, array('category_id' => $_POST['category_id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result = $this->Common_model->addRecords('sub_subcategory', $c_data);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'Please Enter Category');
			echo json_encode($msg);
			exit();
		}
	}

	public function category()
	{
		$data = array();
		$whr2 = array('status !=' => 3, 'parent_category_id' => 0);
		$data['categories_data'] = $this->Common_model->GetWhere('categories', $whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/category', $data);
		$this->load->view('admin/footer');
	}

	public function add_category($cat_id = "")
	{
		$data = array();
		if (!empty($cat_id)) {
			$whr = array('status !=' => 3, 'categories_id' => $cat_id);
			$data['cat_data'] = $this->Common_model->getSingleRecordById('categories', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_category', $data);
		$this->load->view('admin/footer');
	}

	public function categoryAjax()
	{
		if (isset($_POST['category_name']) && !empty($_POST['category_name'])) {
			$c_data = array();
			$c_data['category_name'] = $_POST['category_name'];
			$c_data['create_date'] = date('Y-m-d H:i:s');
			if (isset($_POST['categories_id']) &&  !empty($_POST['categories_id'])) {
				$result = $this->Common_model->updateRecords('categories', $c_data, array('categories_id' => $_POST['categories_id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result = $this->Common_model->addRecords('categories', $c_data);
				$msg = array('status' => 1, 'msg' => 'added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'Please Enter Category');
			echo json_encode($msg);
			exit();
		}
	}

	public function sub_category()
	{
		$data = array();
		$whr2 = "WHERE c2.categories_id = c1.parent_category_id and c1.status != 3 && c1.parent_category_id != 0 && c1.parent_sub_category_id != 0";
		$data['categories_data'] = $this->Common_model->GetWheresubcategory($whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/sub_category', $data);
		$this->load->view('admin/footer');
	}

	public function add_subcategory($cat_id = "")
	{
		$data = array();
		if (!empty($cat_id)) {
			$whr = array('status !=' => 3, 'categories_id' => $cat_id);
			$data['cat_data'] = $this->Common_model->getSingleRecordById('categories', $whr);
		}
		$whr2 = array('status !=' => 3, 'parent_category_id' => 0);
		$data['parent_categories'] = $this->Common_model->GetWhere('categories', $whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/add_subcategory', $data);
		$this->load->view('admin/footer');
	}

	public function subCategoryAjax()
	{
		if (isset($_POST['category_name']) && !empty($_POST['category_name']) && !empty($_POST['parent_category_id'])) {
			$c_data = array();
			$c_data['category_name'] = $_POST['category_name'];
			$c_data['parent_category_id'] = $_POST['parent_category_id'];
			$c_data['parent_sub_category_id'] = 1;
			$c_data['create_date'] = date('Y-m-d H:i:s');
			if (isset($_POST['categories_id']) &&  !empty($_POST['categories_id'])) {
				$result_id = $this->Common_model->updateRecords('categories', $c_data, array('categories_id' => $_POST['categories_id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result = $this->Common_model->addRecords('categories', $c_data);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'Please Enter Category');
			echo json_encode($msg);
			exit();
		}
	}

	public function sub_subcategory()
	{
		$data = array();
		$whr2 = "WHERE c2.categories_id = c1.parent_category_id && c1.status != 3 && c1.parent_category_id != 0 && c1.parent_sub_category_id != 1";
		$data['categories_data'] = $this->Common_model->GetWheresubSubcategory($whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/sub_subcategory', $data);
		$this->load->view('admin/footer');
	}

	public function add_sub_subcategory($cat_id = "")
	{
		$data = array();
		if (!empty($cat_id)) {
			$whr = array('status !=' => 3, 'categories_id' => $cat_id);
			$data['cat_data'] = $this->Common_model->getSingleRecordById('categories', $whr);
		}
		$whr2 = array('status !=' => 3, 'status !=' => 0, 'parent_category_id !=' => 0, 'parent_sub_category_id' => 1);
		$data['parent_categories'] = $this->Common_model->getwhere('categories', $whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/add_sub_subcategory', $data);
		$this->load->view('admin/footer');
	}

	public function subSubCatAjax()
	{
		if (isset($_POST['category_name']) && !empty($_POST['category_name']) && !empty($_POST['parent_category_id'])) {
			$c_data = array();
			$c_data['category_name'] = $_POST['category_name'];
			$c_data['parent_category_id'] = $_POST['parent_category_id'];
			$c_data['create_date'] = date('Y-m-d H:i:s');
			if (isset($_POST['categories_id']) &&  !empty($_POST['categories_id'])) {
				$result_id = $this->Common_model->updateRecords('categories', $c_data, array('categories_id' => $_POST['categories_id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result_id = $this->Common_model->addRecords('categories', $c_data);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'Please Enter Category');
			echo json_encode($msg);
			exit();
		}
	}

	public function products()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/ecommerce_products');
		$this->load->view('admin/footer');
	}

	public function products_list()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['product_data'] = $this->Common_model->GetWhere('products', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/ecommerce_products_list',$data);
		$this->load->view('admin/footer');
	}

	public function product_details($id="")
	{
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'product_id' => $id);
			$data['product_details'] = $this->Common_model->getSingleRecordById('products', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/ecommerce_products_details',$data);
		$this->load->view('admin/footer');
	}

	public function add_new_products($pid = "")
	{
		// echo '<pre>';print_r($_POST['colors']);die();
		// echo '<pre>';print_r($_FILES);die();
		$data = array();
		if (isset($_POST['submit'])) {
			
			$pdata = array();
			$pdata['product_name'] = $_POST['prodName'];
			$pdata['category_id'] = $_POST['category'];
			$pdata['subcategory_id'] = $_POST['sub_category'];
			$pdata['sub_subcategory_id'] = $_POST['sub_subcategory'];
			$pdata['brand'] = $_POST['brand'];
			$pdata['unit'] = $_POST['prodUnit'];
			// $pdata['featured'] = $_POST['checkFeaturedProd'];
			// $pdata['flashdeal'] = $_POST['checkFlashDeal'];
			$pdata['featured'] = 0;
			$pdata['flashdeal'] = 0;
			$pdata['video_type'] = $_POST['videoType'];
			$pdata['video_link'] = $_POST['videoLink'];
			$pdata['meta_title'] = $_POST['metaTitle'];
			$pdata['meta_description'] = $_POST['metaDescription'];
	        $pdata['color'] = json_encode($_POST['colors']);
			$pdata['base_price'] = $_POST['basePrice'];
			$pdata['purchase_price'] = $_POST['purchasePrice'];
			$pdata['prod_tax'] = $_POST['productTax'];
			$pdata['discount_type'] = $_POST['discount_type'];
			$pdata['discount'] = $_POST['discount'];
			$pdata['prod_description'] = $_POST['prodDescription'];
			$pdata['shipping_cost'] = $_POST['shippingCost'];
			$filearray = array();
			if (isset($_FILES)) {
				
				if (isset($_FILES['mainImage']['name']) && !empty($_FILES['mainImage']['name'])) {
					$uploadpath = "./uploads/product/main_image/";
					$filearraydata = $this->uploadfilebypath('mainImage', $uploadpath);
					if (isset($filearraydata)) {
						$pdata['main_image'] = $filearraydata;
					}
				}
				if (isset($_FILES['thumbnailImage']['name']) && !empty($_FILES['thumbnailImage']['name'])) {
					$uploadpath = "./uploads/product/thumbnail_image/";
					$filearraythumbnail = $this->uploadfilebypath('thumbnailImage', $uploadpath);
					if (isset($filearraythumbnail)) {
						$pdata['thumbnail_image'] = $filearraythumbnail;
					}
				}
				if (isset($_FILES['metaImage']['name']) && !empty($_FILES['metaImage']['name'])) {
					$uploadpath = "./uploads/product/meta_image/";
					$filearraymeta = $this->uploadfilebypath('metaImage', $uploadpath);
					if (isset($filearraymeta)) {
						$pdata['meta_image'] = $filearraymeta;
					}
				}
				if (isset($_FILES['descrip_image']['name']) && !empty($_FILES['descrip_image']['name'])) {
					$uploadpath = "./uploads/product/other_image/";
					$filearraydescimg = $this->uploadfilebypath('descrip_image', $uploadpath);
					if (isset($filearraydescimg)) {
						$pdata['descrip_image'] = $filearraydescimg;
					}
				}
				if (isset($_FILES['inputPdf']['name']) && !empty($_FILES['inputPdf']['name'])) {
					$uploadpath = "./uploads/product/pdf/";
					$filearraypdf = $this->uploadfilebypath('inputPdf', $uploadpath);
					if (isset($filearraypdf)) {
						$pdata['pdf'] = $filearraypdf;
					}
				}
			}
			$choice_options = array();
	        if(isset($_POST['choice'])){
	            foreach ($_POST['choice_no'] as $key => $no) {
	                $str = 'choice_options_'.$no;
	                $item['name'] = 'choice_'.$no;
	                $item['title'] = $_POST['choice'][$key];
	                $item['options'] = explode(',', implode('|', $_POST[$str]));
	                array_push($choice_options, $item);
	            }
	        }

	        $post_data['choice_options'] = json_encode($choice_options);

	        // $variations = array();
	        //combinations start
	        // $options = array();
	        // if(isset($_POST['colors_active']) && isset($_POST['colors']) && count($_POST['colors']) > 0){
	        //     $colors_active = 1;
	        //     array_push($options, $_POST['colors']);
	        // }

	        // if(isset($_POST['choice_no'])){
	        //     foreach ($_POST['choice_no'] as $key => $no) {
	        //         $name = 'choice_options_'.$no;
	        //         $my_str = implode('|',$_POST[$name]);
	        //         array_push($options, explode(',', $my_str));
	        //     }
	        // }
			$pdata['date'] = date('Y-m-d H:i:s');
			if(isset($_POST['product_id']) && !empty($_POST['product_id'])){
				// p($_POST);
				$this->Common_model->updateRecords("products", $pdata, array('product_id'=>$_POST['product_id']));
				$data['success'] = "Product has been updated successfully";
			}else{
				$product_id = $this->Common_model->addrecords('products',$pdata);
				if($product_id){
					$prdoduct_reg_id = trim(prduct_reg_prefix.$product_id);
					$this->Common_model->updateRecords("products", array('prod_reg_id'=>$prdoduct_reg_id), array('product_id'=>$product_id));
					echo "success";
				}else{
					echo "error";
				}
			}	
		}
		if($pid){
			$data['product_data'] = $this->Common_model->getSingleRecordById("products",array('product_id'=>$pid));
			// p($data['product_data']);
		} 
		$data['color'] = $this->Common_model->getwhere("colors",array(1=>1));
		$data['categorylist'] = $this->Common_model->getwhere("category",array('status'=>0));
		$data['subcategorylist'] = $this->Common_model->getwhere("sub_category",array('status'=>0));
		$data['sub_subcategorylist'] = $this->Common_model->getwhere("sub_subcategory",array('status'=>0));
		$this->load->view('admin/header');
		$this->load->view('admin/ecommerce_add_new_products',$data);
		$this->load->view('admin/footer');
	}

	public function flash_deal()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['flashdeal_product'] = $this->Common_model->GetWhere('flashdeal', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/flashdeal_list',$data);
		$this->load->view('admin/footer');
	}

	public function add_flashdeal_product($id='')
	{
		// echo '<pre>';print_r(json_encode($_POST['product_id']));die();
		// echo '<pre>';print_r($_POST);die();
		$data = array();
		if(isset($_POST['submit'])){
			// echo '<pre>';print_r($_FILES);die();
			$fdata = array();
			$fdata['title'] = $_POST['flashdeal_title'];
			$fdata['bg_color'] = $_POST['bg_color'];
			$fdata['txt_color'] = $_POST['txt_color'];
			$fdata['start_date'] = date('Y-m-d H:i:s',strtotime($_POST['start_date']));
			$fdata['end_date'] = date('Y-m-d H:i:s',strtotime($_POST['end_date']));
			$fdata['product_id'] = json_encode($_POST['product_id']);
			$fdata['flash_discount_type'] = $_POST['discount_type'];
			$fdata['flash_discount_amt'] = $_POST['discount_amt'];
			if (isset($_FILES['banner_img']['name']) && !empty($_FILES['banner_img']['name'])) {
				$uploadpath = "./uploads/flashdeal_products/";
				$filearrayddata = $this->uploadfilebypath('banner_img', $uploadpath);
				if (isset($filearrayddata)) {
					$fdata['banner_img'] = $filearrayddata;
				}
			}
			$fdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('flashdeal', $fdata, array('id' => $_POST['id']));
				redirect(base_url() . 'admin/flash_deal');
			}else{
				$result = $this->Common_model->addrecords('flashdeal',$fdata);
				redirect(base_url() . 'admin/flash_deal');
				echo "success";
			}	
			
		}
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['flashproduct'] = $this->Common_model->getSingleRecordById('flashdeal', $whr);
		}
		$whr = array('status !=' => 3);
		$data['products_list'] = $this->Common_model->GetWhere('products', $whr);
		$whr2 = array('status !=' => 3);
		$data['flashproducts_list'] = $this->Common_model->GetWhere('flashdeal', $whr2);
		$this->load->view('admin/header');
		$this->load->view('admin/add_flashdeal_product',$data);
		$this->load->view('admin/footer');
	}

	public function add_new_product()
	{
		// echo '<pre>';print_r($_POST['colors']);die();
		// echo '<pre>';print_r($_FILES);die();
		$data = array();
		if (isset($_POST['submit'])) {
			
			$pdata = array();
			$pdata['product_name'] = $_POST['prodName'];
			$pdata['category_id'] = $_POST['category'];
			$pdata['subcategory_id'] = $_POST['subCategory'];
			$pdata['sub_subcategory_id'] = $_POST['subSubcategory'];
			$pdata['brand'] = $_POST['brand'];
			$pdata['unit'] = $_POST['prodUnit'];
			// $pdata['featured'] = $_POST['checkFeaturedProd'];
			// $pdata['flashdeal'] = $_POST['checkFlashDeal'];
			$pdata['featured'] = 0;
			$pdata['flashdeal'] = 0;
			$pdata['video_type'] = $_POST['videoType'];
			$pdata['video_link'] = $_POST['videoLink'];
			$pdata['meta_title'] = $_POST['metaTitle'];
			$pdata['meta_description'] = $_POST['metaDescription'];
	        $pdata['color'] = json_encode($_POST['colors']);
			$pdata['base_price'] = $_POST['basePrice'];
			$pdata['purchase_price'] = $_POST['purchasePrice'];
			$pdata['prod_tax'] = $_POST['productTax'];
			$pdata['discount_type'] = $_POST['discount_type'];
			$pdata['discount'] = $_POST['discount'];
			$pdata['prod_description'] = $_POST['prodDescription'];
			$pdata['shipping_cost'] = $_POST['shippingCost'];
			$filearray = array();
			if (isset($_FILES)) {
				
				if (isset($_FILES['mainImage']['name']) && !empty($_FILES['mainImage']['name'])) {
					$uploadpath = "./uploads/product/main_image/";
					$filearraydata = $this->uploadfilebypath('mainImage', $uploadpath);
					if (isset($filearraydata)) {
						$pdata['main_image'] = $filearraydata;
					}
				}
				if (isset($_FILES['thumbnailImage']['name']) && !empty($_FILES['thumbnailImage']['name'])) {
					$uploadpath = "./uploads/product/thumbnail_image/";
					$filearraythumbnail = $this->uploadfilebypath('thumbnailImage', $uploadpath);
					if (isset($filearraythumbnail)) {
						$pdata['thumbnail_image'] = $filearraythumbnail;
					}
				}
				if (isset($_FILES['metaImage']['name']) && !empty($_FILES['metaImage']['name'])) {
					$uploadpath = "./uploads/product/meta_image/";
					$filearraymeta = $this->uploadfilebypath('metaImage', $uploadpath);
					if (isset($filearraymeta)) {
						$pdata['meta_image'] = $filearraymeta;
					}
				}
				if (isset($_FILES['descrip_image']['name']) && !empty($_FILES['descrip_image']['name'])) {
					$uploadpath = "./uploads/product/other_image/";
					$filearraydescimg = $this->uploadfilebypath('descrip_image', $uploadpath);
					if (isset($filearraydescimg)) {
						$pdata['descrip_image'] = $filearraydescimg;
					}
				}
				if (isset($_FILES['inputPdf']['name']) && !empty($_FILES['inputPdf']['name'])) {
					$uploadpath = "./uploads/product/pdf/";
					$filearraypdf = $this->uploadfilebypath('inputPdf', $uploadpath);
					if (isset($filearraypdf)) {
						$pdata['pdf'] = $filearraypdf;
					}
				}
			}
			$pdata['date'] = date('Y-m-d H:i:s');
			$product_id = $this->Common_model->addrecords('products',$pdata);
			if($product_id){
				$prdoduct_reg_id = trim(prduct_reg_prefix.$product_id);
				$this->Common_model->updateRecords("products", array('prod_reg_id'=>$prdoduct_reg_id), array('product_id'=>$product_id));
				echo "success";
			}else{
				echo "error";
			}
		}
		$data['color'] = $this->Common_model->getwhere("colors",array(1=>1));
		$data['categorylist'] = $this->Common_model->getwhere("category",array('status'=>0));
		$this->load->view('admin/header');
		$this->load->view('admin/ecommerce_add_new_product',$data);
		$this->load->view('admin/footer');
	}

	public function getsubcategory(){
		if(isset($_POST['categories_id']) && !empty($_POST['categories_id'])){
			// $data = array();
			$categories_id = $_POST['categories_id'];
			$data = $this->Common_model->getwhere("sub_category",array('status'=>0,'subcategory_category_id'=>$categories_id));
			echo json_encode($data);
		}
	}

	public function getsubsubcategory(){
		if(isset($_POST['sub_category']) && !empty($_POST['sub_category'])){
			// $data = array();
			$categories_id = $_POST['sub_category'];
			$sdata = $this->Common_model->getwhere("sub_subcategory",array('status'=>0,'subsubcategory_subcategory_id'=>$categories_id));
			echo json_encode($sdata);
		}
	}

	public function getproduct(){
		if(isset($_POST['sub_subcategory']) && !empty($_POST['sub_subcategory'])){
			// $data = array();
			$categories_id = $_POST['sub_subcategory'];
			$pdata = $this->Common_model->getwhere("products",array('status'=>0,'sub_subcategory_id'=>$categories_id));
			echo json_encode($pdata);
		}
	}


	public function bulk_product()
	{
		// p($_FILES);
		// if(isset($_POST['submit']) && !empty($_POST['submit'])){
			
		// }
		$this->load->view('admin/header');
		$this->load->view('admin/bulk_product');
		$this->load->view('admin/footer');
	}

	public function generateChar($num) 
	{
		$numeric = ($num - 1) % 26;
		$letter = chr(65 + $numeric);
		$div = ($num - 1) / 26;
		$num2 = (int)$div;
		if ($num2 > 0) {
			return $this->generateChar($num2) . $letter;
		} else {
			return $letter;
		}
	}
	
	public function getLetters($num_col) 
	{
		// initialize array to hold coloumn character
		$letters = [];

		// generate char based on coloumn in db
		for($i=1; $i <= $num_col; $i++) {
			$char = $this->generateChar($i);
			array_push($letters, $char);
		}

		return $letters;
	}

	public function dl_format() {
		$fields = $this->Common_model->getFields();
	
		  $htmlString = '<table>';
		$htmlString .= '<tr>';
		foreach ($fields as $field) {
			$htmlString .= '<th align="center" style="font-weight:bold">';
			$htmlString .= $field;
			$htmlString .= '</th>';
		}
		$htmlString .= '</tr>';
			$htmlString .= '</table>';
	
			// convert to spreadsheet-type
			 $reader = new Html();
			$spreadsheet = $reader->loadFromString($htmlString);
	
			// // generate excel
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment; filename="format_import.xlsx"');
			$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
			$writer->save('php://output');
	}

	public function import() {
		// get number of coloumn
	  $fields = $this->Common_model->getFields();
	  $num_col = $this->Common_model->getCol();
  
	  // get letters array
	  $alphabet = $this->getLetters($num_col);
			
	  // read file that has been uploaded using specific reader
	  $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load('./uploads/import_data.xlsx');
  
		// retieve all data in excel then convert into array
		$sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
  
	  // initialize array to hold inserted data 
		$data = [];
  
		// variable for initialize row
		$n=0;
		foreach ($sheet as $row) {
			// looping each coloumn in each row
			for ($i=0; $i < $num_col; $i++) { 
				$data[$n][$fields[$i]] = $row[$alphabet[$i]];
			}
			// when all coloumn done, move to next row
			$n++;
		}
  
	  // remove the first data (row header)
	  array_shift($data);
  
		// post all data in batch to database
		$this->Common_model->post_batch($data);
		$this->session->set_flashdata('flash', 'Import data has been inserted');
		redirect('');
	}

	public function spreadhseet_format_download()
	{
		// header('Content-Type: application/vnd.ms-excel');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="product_format.xlsx"');
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Product Name');
		$sheet->setCellValue('B1', 'Category ID');
		$sheet->setCellValue('C1', 'SubCategory ID');
		$sheet->setCellValue('D1', 'Sub Subcategory ID');
		$sheet->setCellValue('E1', 'Brand');
		$sheet->setCellValue('F1', 'Unit');
		$sheet->setCellValue('G1', 'Base Price');
		$sheet->setCellValue('H1', 'Purchase Price');
		$sheet->setCellValue('I1', 'Product Tax');
		$sheet->setCellValue('J1', 'Shipping Cost');

		$writer = new Xlsx($spreadsheet);
		// $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save("php://output");
	}
	
	public function spreadsheet_import()
	{
		$upload_file=$_FILES['upload_file']['name'];
		$extension=pathinfo($upload_file,PATHINFO_EXTENSION);
		if($extension=='csv')
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else if($extension=='xls')
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		} else
		{
			$reader= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet=$reader->load($_FILES['upload_file']['tmp_name']);
		$sheetdata=$spreadsheet->getActiveSheet()->toArray();
		$sheetcount=count($sheetdata);
		if($sheetcount>1)
		{
			$data=array();
			for ($i=1; $i < $sheetcount; $i++) { 
				$product_name=$sheetdata[$i][1];
				$category_id=$sheetdata[$i][2];
				$subcategory_id=$sheetdata[$i][3];
				$sub_subcategory_id=$sheetdata[$i][4];
				$brand=$sheetdata[$i][5];
				$unit=$sheetdata[$i][6];
				$base_price=$sheetdata[$i][7];
				$purchase_price=$sheetdata[$i][8];
				$prod_tax=$sheetdata[$i][9];
				$shipping_cost=$sheetdata[$i][10];
				$data[]=array(
					'product_name'=>$product_name,
					'category_id'=>$category_id,
					'subcategory_id'=>$subcategory_id,
					'sub_subcategory_id'=>$sub_subcategory_id,
					'brand'=>$brand,
					'unit'=>$unit,
					'base_price'=>$base_price,
					'purchase_price'=>$purchase_price,
					'prod_tax'=>$prod_tax,
					'shipping_cost'=>$shipping_cost,
				);
			}
			$inserdata=$this->Common_model->insert_batch($data);
			if($inserdata)
			{
				$this->session->set_flashdata('message','<div class="alert alert-success">Successfully Added.</div>');
				redirect('admin');
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger">Data Not uploaded. Please Try Again.</div>');
				redirect('admin');
			}
		}
	}

	public function spreadsheet_export()
	{
		//fetch my data
		$productlist=$this->home_model->product_list();
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="product.xlsx"');
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'S.No');
		$sheet->setCellValue('B1', 'Product Name');
		$sheet->setCellValue('C1', 'Quantity');
		$sheet->setCellValue('D1', 'Price');
		$sheet->setCellValue('E1', 'Subtotal');

		$sn=2;
		foreach ($productlist as $prod) {
			//echo $prod->product_name;
			$sheet->setCellValue('A'.$sn,$prod->product_id);
			$sheet->setCellValue('B'.$sn,$prod->product_name);
			$sheet->setCellValue('C'.$sn,$prod->product_quantity);
			$sheet->setCellValue('D'.$sn,$prod->product_price);
			$sheet->setCellValue('E'.$sn,'=C'.$sn.'*D'.$sn);
			$sn++;
		}
		//TOTAL
		$sheet->setCellValue('D8','Total');
		$sheet->setCellValue('E8','=SUM(E2:E'.($sn-1).')');

		$writer = new Xlsx($spreadsheet);
		$writer->save("php://output");
	}

	// function import()
	// {
    //     // pp($_FILES);
    //     // p($_POST);
	// 	if(isset($_FILES["file"]["name"]))
	// 	{
	// 		$path = $_FILES["file"]["tmp_name"];
	// 		$object = PHPExcel_IOFactory::load($path);
	// 		foreach($object->getWorksheetIterator() as $worksheet)
	// 		{
	// 			$highestRow = $worksheet->getHighestRow();
	// 			$highestColumn = $worksheet->getHighestColumn();
	// 			for($row=2; $row<=$highestRow; $row++)
	// 			{
	// 				$product_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
	// 				$category_id = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
	// 				$subcategory_id= $worksheet->getCellByColumnAndRow(2, $row)->getValue();
	// 				$sub_subcategory_id= $worksheet->getCellByColumnAndRow(3, $row)->getValue();
	// 				$brand= $worksheet->getCellByColumnAndRow(4, $row)->getValue();
    //                 $unit= $worksheet->getCellByColumnAndRow(5, $row)->getValue();
	// 				$base_price= $worksheet->getCellByColumnAndRow(6, $row)->getValue();
	// 				$purchase_price= $worksheet->getCellByColumnAndRow(7, $row)->getValue();
	// 				$prod_tax= $worksheet->getCellByColumnAndRow(8, $row)->getValue();
	// 				$shipping_cost = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    
	// 				$data[] = array(
	// 					'product_name'		=>	$product_name,
	// 					'category_id'		=>	$category_id,
	// 					'subcategory_id'	=>	$subcategory_id,
	// 					'sub_subcategory_id'=>	$sub_subcategory_id,
    //                     'brand'		        =>	$brand,
	// 					'unit'			    =>	$unit,
	// 					'base_price'		=>	$base_price,
	// 					'purchase_price'	=>	$purchase_price,
    //                     'prod_tax'		    =>	$prod_tax,
	// 					'shipping_cost'		=>	$shipping_cost
	// 				);
	// 			}
	// 		}
	// 		$this->excel_import_model->insert($data);
	// 		echo 'Data Imported successfully';
	// 	}	
	// }

	// public function subcategoryhtml(){
	// 	if(isset($_POST['categories_id']) && !empty($_POST['categories_id'])){
	// 		$data = array();
	// 		$categories_id = $_POST['categories_id'];
	// 		$data['subcategory'] = $this->Common_model->getwhere("sub_category",array('status'=>0,'subcategory_category_id'=>$categories_id));
	// 		// echo $this->load->view('admin/subcategorylistbycatid',$data,true);
	// 		echo $this->load->view('admin/ecommerce_add_new_product',$data,true);
	// 	}
	// }

	public function orders()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/ecommerce_orders');
		$this->load->view('admin/footer');
	}

	public function alerts()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/component_alerts');
		$this->load->view('admin/footer');
	}

	public function component_accordions()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/component_accordions');
		$this->load->view('admin/footer');
	}

	public function component_badges()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/component_badges');
		$this->load->view('admin/footer');
	}

	public function component_buttons()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/component_buttons');
		$this->load->view('admin/footer');
	}

	// public function frontend_settings()
	// {
	// 	$data = array();
	// 	$whr = array('status !=' => 3);
	// 	$data['ts_data'] = $this->Common_model->GetWhere('home_top_slider', $whr);
	// 	$data['b_data'] = $this->Common_model->GetWhere('home_banner', $whr);
	// 	$this->load->view('admin/header');
	// 	$this->load->view('admin/frontend_settings',$data);
	// 	$this->load->view('admin/footer');
	// }

	public function frontend_setting()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['ts_data'] = $this->Common_model->GetWhere('home_top_slider', $whr);
		$data['b_data'] = $this->Common_model->GetWhere('home_banner', $whr);
		$data['products_list'] = $this->Common_model->GetWhere('products', $whr);
		$data['product_data'] = $this->Common_model->GetWhere('products', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/frontend_setting',$data);
		$this->load->view('admin/footer');
	}

	public function home_top_slider()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['ts_data'] = $this->Common_model->GetWhere('home_top_slider', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/home_top_slider', $data);
		$this->load->view('admin/footer');
	}

	public function add_home_top_slider($id = '')
	{
		$data = array();
		if (isset($_POST['submit'])) {
			$user_data = array();
			if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
				$uploadpath = "./uploads/home/top_slider/";
				$filearrayddata = $this->uploadfilebypath('image', $uploadpath);
				if (isset($filearrayddata)) {
					$user_data['slider'] = $filearrayddata;
				}
			}
			$user_data['title'] = 'Top Slider';
			$user_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {

				$result_id = $this->Common_model->updateRecords('home_top_slider', $user_data, array('id' => $_POST['id']));
			} else {
				$result_id = $this->Common_model->addRecords('home_top_slider', $user_data);
			}
		}
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['ts_data'] = $this->Common_model->getSingleRecordById('home_top_slider', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_home_top_slider', $data);
		$this->load->view('admin/footer');
	}

	public function home_banner()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['b_data'] = $this->Common_model->GetWhere('home_banner', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/home_banner', $data);
		$this->load->view('admin/footer');
	}

	public function add_home_banner($id = "")
	{
		$data = array();
		if (isset($_POST['submit'])) {
			$user_data = array();
			if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
				$uploadpath = "./uploads/home/banner/";
				$filearrayddata = $this->uploadfilebypath('image', $uploadpath);
				if (isset($filearrayddata)) {
					$user_data['banner'] = $filearrayddata;
				}
			}
			$user_data['title'] = 'Banner';
			$user_data['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {

				$result_id = $this->Common_model->updateRecords('home_banner', $user_data, array('id' => $_POST['id']));
			} else {
				$result_id = $this->Common_model->addRecords('home_banner', $user_data);
			}
		}
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['b_data'] = $this->Common_model->getSingleRecordById('home_banner', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_home_banner', $data);
		$this->load->view('admin/footer');
	}

	public function home_catwise_prod()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/home_catwise_prod');
		$this->load->view('admin/footer');
	}

	public function add_home_catwise_prod()
	{
		$data = array();
		$data['categorylist'] = $this->Common_model->getwhere("category",array('status'=>0));
		$data['subcategorylist'] = $this->Common_model->getwhere("sub_category",array('status'=>0));
		$data['sub_subcategorylist'] = $this->Common_model->getwhere("sub_subcategory",array('status'=>0));
		$this->load->view('admin/header');
		$this->load->view('admin/add_home_catwise_prod',$data);
		$this->load->view('admin/footer');
	}

	public function home_best_sell()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['products_list'] = $this->Common_model->GetWhere('products', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/home_best_sell',$data);
		$this->load->view('admin/footer');
	}

	public function seller_policy()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['seller_policy'] = $this->Common_model->getSingleRecordById('seller_policy', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/policy_seller', $data);
		$this->load->view('admin/footer');
	}

	public function edit_seller_policy()
	{
		$data = array();
		if (isset($_POST['submit'])) {
			$pdata = array();
			$pdata['description'] = $_POST['description'];
			$pdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result_id = $this->Common_model->updateRecords('seller_policy', $pdata, array('id' => $_POST['id']));
				// $msg = array('status' => 0, 'msg' => 'Update Successfully');
				// echo json_encode($msg);
			} else {
				$result_id = $this->Common_model->addRecords('seller_policy', $pdata);
				// $msg = array('status' => 1, 'msg' => 'Added Successfully');
				// echo json_encode($msg);
			}
		}
		$whr = array('id' => 1);
		$data['seller_policy'] = $this->Common_model->getSingleRecordById('seller_policy', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/policy_seller_edit', $data);
		$this->load->view('admin/footer');
	}

	public function return_policy()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['return_policy'] = $this->Common_model->getSingleRecordById('return_policy', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/policy_return', $data);
		$this->load->view('admin/footer');
	}

	public function edit_return_policy()
	{
		$data = array();
		if (isset($_POST['submit'])) {
			$pdata = array();
			$pdata['description'] = $_POST['description'];
			$pdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result_id = $this->Common_model->updateRecords('return_policy', $pdata, array('id' => $_POST['id']));
				// $msg = array('status' => 0, 'msg' => 'Update Successfully');
				// echo json_encode($msg);
			} else {
				$result_id = $this->Common_model->addRecords('return_policy', $pdata);
				// $msg = array('status' => 1, 'msg' => 'Added Successfully');
				// echo json_encode($msg);
			}
		}
		$whr = array('id' => 1);
		$data['return_policy'] = $this->Common_model->getSingleRecordById('return_policy', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/policy_return_edit', $data);
		$this->load->view('admin/footer');
	}

	public function support_policy()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['support_policy'] = $this->Common_model->getSingleRecordById('support_policy', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/policy_support', $data);
		$this->load->view('admin/footer');
	}

	public function edit_support_policy()
	{
		$data = array();
		if (isset($_POST['submit'])) {
			$pdata = array();
			$pdata['description'] = $_POST['description'];
			$pdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result_id = $this->Common_model->updateRecords('support_policy', $pdata, array('id' => $_POST['id']));
				// $msg = array('status' => 0, 'msg' => 'Update Successfully');
				// echo json_encode($msg);
			} else {
				$result_id = $this->Common_model->addRecords('support_policy', $pdata);
				// $msg = array('status' => 1, 'msg' => 'Added Successfully');
				// echo json_encode($msg);
			}
		}
		$whr = array('id' => 1);
		$data['support_policy'] = $this->Common_model->getSingleRecordById('support_policy', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/policy_support_edit', $data);
		$this->load->view('admin/footer');
	}

	public function privacy_policy()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['privacy_policy'] = $this->Common_model->getSingleRecordById('privacy_policy', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/policy_privacy', $data);
		$this->load->view('admin/footer');
	}

	public function edit_privacy_policy()
	{
		$data = array();
		if (isset($_POST['submit'])) {
			$pdata = array();
			$pdata['description'] = $_POST['description'];
			$pdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result_id = $this->Common_model->updateRecords('privacy_policy', $pdata, array('id' => $_POST['id']));
				// $msg = array('status' => 0, 'msg' => 'Update Successfully');
				// echo json_encode($msg);
			} else {
				$result_id = $this->Common_model->addRecords('privacy_policy', $pdata);
				// $msg = array('status' => 1, 'msg' => 'Added Successfully');
				// echo json_encode($msg);
			}
		}
		$whr = array('id' => 1);
		$data['privacy_policy'] = $this->Common_model->getSingleRecordById('privacy_policy', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/policy_privacy_edit', $data);
		$this->load->view('admin/footer');
	}

	public function terms_conditions()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['terms_conditions'] = $this->Common_model->getSingleRecordById('terms_conditions', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/terms_conditions', $data);
		$this->load->view('admin/footer');
	}

	public function edit_terms_conditions()
	{
		$data = array();
		if (isset($_POST['submit'])) {
			$pdata = array();
			$pdata['description'] = $_POST['description'];
			$pdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result_id = $this->Common_model->updateRecords('terms_conditions', $pdata, array('id' => $_POST['id']));
				// $msg = array('status' => 0, 'msg' => 'Update Successfully');
				// echo json_encode($msg);
			} else {
				$result_id = $this->Common_model->addRecords('terms_conditions', $pdata);
				// $msg = array('status' => 1, 'msg' => 'Added Successfully');
				// echo json_encode($msg);
			}
		}
		$whr = array('id' => 1);
		$data['terms_conditions'] = $this->Common_model->getSingleRecordById('terms_conditions', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/terms_conditions_edit', $data);
		$this->load->view('admin/footer');
	}

	public function add_field()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_field');
		$this->load->view('admin/footer');
	}

	public function language_translation()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/language_translation');
		$this->load->view('admin/footer');
	}

	public function smtp_settings()
	{
		$sdata = array();
		$this->load->view('admin/header');
		$this->load->view('admin/smtp_settings', $sdata);
		$this->load->view('admin/footer');
	}

	public function smtpAjax()
	{
		if (isset($_POST['mailHost']) && !empty($_POST['mailHost'])) {
			//creating query
			$query = "INSERT INTO `smtp`
			(`option_name`, `option_value`)
			VALUES ";
			$query .= "('driver','" . $_POST['mailDriver'] . "' ),
			('host','" . $_POST['mailHost'] . "' ),
			('port','" . $_POST['mailPort'] . "' ),
			('username','" . $_POST['mailUsername'] . "' ),
			('password','" . $_POST['mailPassword'] . "' ),
			('encryption','" . $_POST['mailEncryp'] . "' ),
			('from_address','" . $_POST['mailFAdd'] . "' ),
			('name_address','" . $_POST['mailFName'] . "' ) ON DUPLICATE KEY UPDATE option_value=VALUES(option_value)";
			//creating query end
			$response = $this->db->query($query);
			// echo $this->db->last_query();
			if ($response) {
				$msg = array('status' => 1, 'msg' => 'Updated Successfully!');
				echo json_encode($msg);
				exit();
			}
		}
	}

	public function activation()
	{
		$data = array();
		// $whr = array('id' => 1);
		$data['wallet_detail'] = $this->Common_model->getAllRecords('wallet');
		$data['maintenance_val'] = $this->Common_model->getSingleRecordById('maintenance_mode', array('id' =>1));
		$this->load->view('admin/header');
		$this->load->view('admin/activation', $data);
		$this->load->view('admin/footer');
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

	public function google_analytics()
	{
		$data = array();
		$whr = array('status !=' => 3, 'id' => 1);
		$data['ganalytic_data'] = $this->Common_model->getSingleRecordById('google_analytics', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/google_analytics', $data);
		$this->load->view('admin/footer');
	}

	public function googleAnalyticAjax()
	{
		if (isset($_POST) && !empty($_POST)) {
			$gdata = array();
			$gdata['tracking_id'] = $_POST['traking_id'];
			$gdata['featured'] = $_POST['h_feature'];
			$gdata['date'] = date('Y-m-d H:i:s');
			// $result = $this->Common_model->addRecords('google_analytics',$gdata);
			$result_id = $this->Common_model->updateRecords('google_analytics', $gdata, array('id' => 1));
			$msg = array('status' => 1, 'msg' => 'Update Successfully');
			echo json_encode($msg);
			exit();
		} else {
			$msg = array('status' => 0, 'msg' => 'Please Enter Details');
			echo json_encode($msg);
			exit();
		}
	}

	public function social_media_details()
	{
		$data = array();
		$whr = array('status !=' => 3, 'id' => 1);
		$data['socia_data'] = $this->Common_model->getSingleRecordById('socia_media_login', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/social_media_detail',$data);
		$this->load->view('admin/footer');
	}

	public function socialMediaAjax()
	{
		if(isset($_POST['gLogConfig']) && !empty($_POST['gLogConfig']) && !empty($_POST['fLogConfig'])  && !empty($_POST['tLogConfig']))
		{
			$data = array();
			$data['google_login_conf'] = $_POST['gLogConfig'];
			$data['facebook_login_conf'] = $_POST['fLogConfig'];
			$data['twitter_login_conf'] = $_POST['tLogConfig'];
			// $result = $this->Common_model->addRecords('socia_media_login',$data);
			$result_id = $this->Common_model->updateRecords('socia_media_login', $data, array('id' => 1));
			$msg = array('status' => 1, 'msg' => 'Update Successfully');
			echo json_encode($msg);
			exit();
		}else{
			$msg = array('status' => 0, 'msg' => 'Please Enter Details');
			echo json_encode($msg);
			exit();
		}
	}

	// public function social_media_details()
	// {
	// 	// $data = array();
	// 	if (isset($_POST['submit'])) {
	// 		$pdata = array();
	// 		$pdata['description'] = $_POST['description'];
	// 		$pdata['date'] = date('Y-m-d H:i:s');
	// 		if (isset($_POST['id']) &&  !empty($_POST['id'])) {
	// 			$result_id = $this->Common_model->updateRecords('return_policy', $pdata, array('id' => $_POST['id']));
	// 			// $msg = array('status' => 0, 'msg' => 'Update Successfully');
	// 			// echo json_encode($msg);
	// 		} else {
	// 			$result_id = $this->Common_model->addRecords('return_policy', $pdata);
	// 			// $msg = array('status' => 1, 'msg' => 'Added Successfully');
	// 			// echo json_encode($msg);
	// 		}
	// 	}
	// 	$this->load->view('admin/header');
	// 	$this->load->view('admin/social_media_detail');
	// 	$this->load->view('admin/footer');
	// }

	public function currency_list()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['currency_data'] = $this->Common_model->GetWhere('currency', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/currency_list', $data);
		$this->load->view('admin/footer');
	}

	public function add_currency($id = '')
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['currency_data'] = $this->Common_model->getSingleRecordById('currency', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_currency', $data);
		$this->load->view('admin/footer');
	}

	public function currencyAjax()
	{
		if (isset($_POST['currency_name']) && !empty($_POST['currency_name']) && !empty($_POST['currency_sym']) && !empty($_POST['currency_code']) && !empty($_POST['exchange_rate'])) {
			$pdata = array();
			$pdata['currency_name'] = $_POST['currency_name'];
			$pdata['currency_sym'] = $_POST['currency_sym'];
			$pdata['currency_code'] = $_POST['currency_code'];
			$pdata['exchange_rate'] = $_POST['exchange_rate'];
			$pdata['publish'] = $_POST['h_publish'];
			$pdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result_id = $this->Common_model->updateRecords('currency', $pdata, array('id' => $_POST['id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result_id = $this->Common_model->addRecords('currency', $pdata);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function seller_commission()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['commission_data'] = $this->Common_model->getSingleRecordById('seller_commission', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/seller_commission', $data);
		$this->load->view('admin/footer');
	}

	public function sellerCommiAjax()
	{
		if (isset($_POST['commission']) && !empty($_POST['commission'])) {
			$cdata = array();
			$cdata['commission'] = $_POST['commission'];
			$cdata['date'] = date('Y-m-d H:i:s');
			$result_id = $this->Common_model->updateRecords('seller_commission', $cdata, array('id' => 1));
			$msg = array('status' => 1, 'msg' => 'Update Successfully');
			echo json_encode($msg);
			exit();
		}else {
				$msg = array('status' => 0, 'msg' => 'Field are Required');
				echo json_encode($msg);
				exit();
			}
	}

	public function seo_setting()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['seo_data'] = $this->Common_model->getSingleRecordById('seo_setting', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/seo_setting', $data);
		$this->load->view('admin/footer');
	}

	public function seoAjax()
	{
		if (isset($_POST) && !empty($_POST)) {
			$insert_data = array();
			$insert_data['keywords'] = $_POST["keyword"];
			$insert_data['auth_name'] = $_POST["auth_name"];
			$insert_data['revisite_name'] = $_POST["revisit_name"];
			$insert_data['sitemap_link'] = $_POST["site_link"];
			$insert_data['description'] = $_POST["description"];
			$result_id = $this->Common_model->updateRecords('seo_setting', $insert_data, array('id' => 1));
			$msg = array('status' => 1, 'msg' => 'Update Successfully');
			echo json_encode($msg);
			exit();
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function general_settings()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['g_data'] = $this->Common_model->getSingleRecordById('general_setting', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/general_settings', $data);
		$this->load->view('admin/footer');
	}

	public function generalSettAjax()
	{
		if (isset($_POST) && !empty($_POST)) {
			$user_data = array();
			if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
				$uploadpath = "./uploads/general_settings/";
				$filearrayddata = $this->uploadfilebypath('image', $uploadpath);
				if (isset($filearrayddata)) {
					$user_data['site_logo'] = $filearrayddata;
				}
			}
			$user_data['name'] = $_POST['name'];
			$user_data['company_add'] = $_POST['address'];
			$user_data['description'] = $_POST['description'];
			$user_data['number'] = $_POST['number'];
			$user_data['email'] = $_POST['email'];
			$user_data['facebook_login'] = $_POST['fbLink'];
			$user_data['instagram_login'] = $_POST['instaLink'];
			$user_data['twitter_login'] = $_POST['twLink'];
			$user_data['youtube_login'] = $_POST['ybLink'];
			$user_data['google_plus_login'] = $_POST['gpLink'];
			$user_data['date'] = date('Y-m-d H:i:s');
			$result_id = $this->Common_model->updateRecords('general_setting', $user_data, array('id' => 1));
			$msg = array('status' => 1, 'msg' => 'Update Successfully');
			echo json_encode($msg);
			exit();
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function facebook_chat()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['fb_data'] = $this->Common_model->getSingleRecordById('facebook_chat', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/facebook_chat', $data);
		$this->load->view('admin/footer');
	}

	public function fbChatAjax()
	{
		if (isset($_POST) && !empty($_POST)) {
			$fdata = array();
			$fdata['page_id'] = $_POST['fPageId'];
			$fdata['fb_chat_status'] = $_POST['h_fbchat'];
			$fdata['date'] = date('Y-m-d H:i:s');
			$result_id = $this->Common_model->updateRecords('facebook_chat', $fdata, array('id' => 1));
			$msg = array('status' => 1, 'msg' => 'Update Successfully');
			echo json_encode($msg);
			exit();
		} else {
			$msg = array('status' => 0, 'msg' => 'Something get Wrong');
			echo json_encode($msg);
			exit();
		}
	}

	public function facebook_pixel()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['fbp_data'] = $this->Common_model->getSingleRecordById('facebook_pixel', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/facebook_pixel', $data);
		$this->load->view('admin/footer');
	}

	public function fbPixAjax()
	{
		if (isset($_POST) && !empty($_POST)) {
			$fdata = array();
			$fdata['pixel_id'] = $_POST['fPixelId'];
			$fdata['fb_pix_status'] = $_POST['h_fbstatus'];
			$fdata['date'] = date('Y-m-d H:i:s');
			$result_id = $this->Common_model->updateRecords('facebook_pixel', $fdata, array('id' => 1));
			$msg = array('status' => 1, 'msg' => 'Update Successfully');
			echo json_encode($msg);
			exit();
		} else {
			$msg = array('status' => 0, 'msg' => 'Something get Wrong');
			echo json_encode($msg);
			exit();
		}
	}

	public function validation()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/validation_form');
		$this->load->view('admin/footer');
	}

	public function sellers()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['seller_data'] = $this->Common_model->GetWhere('seller', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/seller_list', $data);
		$this->load->view('admin/footer');
	}

	public function add_seller($id = "")
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['seller_data'] = $this->Common_model->getSingleRecordById('seller', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_seller', $data);
		$this->load->view('admin/footer');
	}

	public function sellerAjax()
	{
		$data = array();
		if (isset($_POST['name']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
			$sdata = array();
			$sdata['name'] = $_POST['name'];
			$sdata['email'] = $_POST['email'];
			$sdata['password'] = md5($_POST['password']);
			$sdata['show_password'] = $_POST['password'];
			$sdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result_id = $this->Common_model->updateRecords('seller', $sdata, array('id' => $_POST['id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result = $this->Common_model->addRecords('seller', $sdata);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function customers()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['user_data'] = $this->Common_model->GetWhere('users', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/customers_list',$data);
		$this->load->view('admin/footer');
	}

	public function customer()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/customer_list');
		$this->load->view('admin/footer');
	}

	public function add_customer()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_customer');
		$this->load->view('admin/footer');
	}

	public function newsletter()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['newsletter'] = $this->Common_model->Getwhere('newsletter', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/newsletter_list', $data);
		$this->load->view('admin/footer');
	}

	public function send_newsletter($id = "")
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['newsletter'] = $this->Common_model->getSingleRecordById('newsletter', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/send_newsletter', $data);
		$this->load->view('admin/footer');
	}

	public function staff_list()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['staff_list'] = $this->Common_model->Getwhere('staff', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/staff_list', $data);
		$this->load->view('admin/footer');
	}

	public function staff_permi($id = "")
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['staff_permi'] = $this->Common_model->getSingleRecordById('staff', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/staff_permi', $data);
		$this->load->view('admin/footer');
	}

	public function staffAjax()
	{
		if (isset($_POST['name']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['role']) && !empty($_POST['permission'])) {
			$sdata = array();
			$sdata['name'] = $_POST['name'];
			$sdata['email'] = $_POST['email'];
			$sdata['role'] = $_POST['role'];
			$sdata['permission'] = $_POST['permission'];
			$sdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result = $this->Common_model->updateRecords('staff', $sdata, array('id' => $_POST['id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result = $this->Common_model->addRecords('staff', $sdata);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function attribute()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['attribute_data'] = $this->Common_model->GetWhere('attribute', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/attribute', $data);
		$this->load->view('admin/footer');
	}

	public function add_attribute($id = "")
	{
		// echo '<pre>';print_r($_POST);die();
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['attribute_data'] = $this->Common_model->getSingleRecordById('attribute', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_attribute', $data);
		$this->load->view('admin/footer');
	}

	public function attrAjax()
	{
		// echo '<pre>';print_r($_POST);die();
		if (isset($_POST['attribute_name']) && !empty($_POST['attribute_name']) && !empty($_POST['attributes'])) {
			$adata = array();
			$adata['attribute_name'] = $_POST['attribute_name'];
			$adata['attributes'] = $_POST['attributes'];
			$adata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['id']) &&  !empty($_POST['id'])) {
				$result_id = $this->Common_model->updateRecords('attribute', $adata, array('id' => $_POST['id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result_id = $this->Common_model->addRecords('attribute', $adata);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function pickup_point()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['pick_data'] = $this->Common_model->GetWhere('pickup_point', $whr);
		$this->load->view('admin/header');
		$this->load->view('admin/pickup_point', $data);
		$this->load->view('admin/footer');
	}

	public function add_pickup_point($pick_id = "")
	{
		$data = array();
		if (!empty($pick_id)) {
			$whr = array('status !=' => 3, 'id' => $pick_id);
			$data['pick_data'] = $this->Common_model->getSingleRecordById('pickup_point', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_pickup_point', $data);
		$this->load->view('admin/footer');
	}

	public function pickPointAjax()
	{
		if (isset($_POST['name']) && !empty($_POST['name']) && !empty($_POST['location']) && !empty($_POST['number']) && !empty($_POST['manager'])) {
			$pdata = array();
			$pdata['name'] = $_POST['name'];
			$pdata['location'] = $_POST['location'];
			$pdata['number'] = $_POST['number'];
			$pdata['manager'] = $_POST['manager'];
			$pdata['date'] = date('Y-m-d H:i:s');
			if (isset($_POST['pick_id']) &&  !empty($_POST['pick_id'])) {
				$result_id = $this->Common_model->updateRecords('pickup_point', $pdata, array('id' => $_POST['pick_id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			} else {
				$result_id = $this->Common_model->addRecords('pickup_point', $pdata);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function coupon()
	{
		$data= array();
		$whr = array('status !=' => 3, 'coupon_type' => 'Product');
		$whr1 = array('status !=' => 3, 'coupon_type' => 'Cart');
		$data['prod_coupon_list'] = $this->Common_model->getwhere('coupons',$whr);
		$data['cart_coupon_list'] = $this->Common_model->getwhere('coupons',$whr1);
		$this->load->view('admin/header');
		$this->load->view('admin/coupon',$data);
		$this->load->view('admin/footer');
	}

	public function coupon_cartBase($id = "")
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['coupondata'] = $this->Common_model->getSingleRecordById('coupons', $whr);
		}
		$this->load->view('admin/header');
		$this->load->view('admin/add_cartcoupon',$data);
		$this->load->view('admin/footer');
	}

	public function couponCartBaseAjax()
	{
		if(isset($_POST['coupon_code']) && !empty($_POST['coupon_code']) && !empty($_POST['min_shopping']) && !empty($_POST['max_discount']) && !empty($_POST['discount']) && !empty($_POST['discount_type'])){
			$cdata = array();
			$cdata['added_by'] = 'admin';
			$cdata['added_by_id'] = 1;
			$cdata['coupon_code'] = $_POST['coupon_code'];
			$cdata['coupon_type'] = 'Cart';
			$cdata['min_total_amount'] = $_POST['min_shopping'];
			$cdata['max_discount_amt'] = $_POST['max_discount'];
			$cdata['offer_amount'] = $_POST['discount'];
			$cdata['offer_amount_type'] = $_POST['discount_type'];
			$cdata['create_date'] = date('Y-m-d H:i:s');
			if(isset($_POST['id']) && !empty($_POST['id'])){
				$result = $this->Common_model->updateRecords('coupons', $cdata, array('id' => $_POST['id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			}else{
				$result = $this->Common_model->addRecords('coupons',$cdata);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function coupon_prodBase($id ="")
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['coupondata'] = $this->Common_model->getSingleRecordById('coupons', $whr);
			
		}
		$whr = array('status !=' => 3);
		$data['products_list'] = $this->Common_model->GetWhere('products', $whr);
		$data['categorylist'] = $this->Common_model->getwhere("category",array('status'=>0));
		$data['subcategorylist'] = $this->Common_model->getwhere("sub_category",array('status'=>0));
		$data['sub_subcategorylist'] = $this->Common_model->getwhere("sub_subcategory",array('status'=>0));
		$this->load->view('admin/header');
		$this->load->view('admin/add_prodcoupon',$data);
		$this->load->view('admin/footer');
	}

	public function couponProdBaseAjax()
	{
		if(isset($_POST['coupon_code']) && !empty($_POST['coupon_code']) && !empty($_POST['category']) && !empty($_POST['sub_category']) && !empty($_POST['sub_subcategory']) && !empty($_POST['inputProduct']) && !empty($_POST['dateCouponPB1']) && !empty($_POST['dateCouponPB2']) && !empty($_POST['discount']) && !empty($_POST['discount_type'])){
			$cdata = array();
			$cdata['added_by'] = 'admin';
			$cdata['added_by_id'] = 1;
			$cdata['coupon_code'] = $_POST['coupon_code'];
			$cdata['coupon_type'] = 'Product';
			$cdata['category'] = $_POST['category'];
			$cdata['sub_category'] = $_POST['sub_category'];
			$cdata['sub_subcategory'] = $_POST['sub_subcategory'];
			$cdata['products'] = json_encode($_POST['inputProduct']);
			$cdata['start_date'] = date('Y-m-d H:i:s',strtotime($_POST['dateCouponPB1']));
			$cdata['end_date'] = date('Y-m-d H:i:s',strtotime($_POST['dateCouponPB2']));
			$cdata['offer_amount'] = $_POST['discount'];
			$cdata['offer_amount_type'] = $_POST['discount_type'];
			$cdata['create_date'] = date('Y-m-d H:i:s');
			if(isset($_POST['id']) && !empty($_POST['id'])){
				$result = $this->Common_model->updateRecords('coupons', $cdata, array('id' => $_POST['id']));
				$msg = array('status' => 1, 'msg' => 'Update Successfully');
				echo json_encode($msg);
				exit();
			}else{
				$result = $this->Common_model->addRecords('coupons',$cdata);
				$msg = array('status' => 1, 'msg' => 'Added Successfully');
				echo json_encode($msg);
				exit();
			}
		} else {
			$msg = array('status' => 0, 'msg' => 'All Fields are required');
			echo json_encode($msg);
			exit();
		}
	}

	public function customer_chat_list()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/customer_chat_list');
		$this->load->view('admin/footer');
	}

	public function seller_chat_list()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/seller_chat_list');
		$this->load->view('admin/footer');
	}

	public function customer_chat()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/customer_chat');
		$this->load->view('admin/footer');
	}

	public function seller_chat()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/seller_chat');
		$this->load->view('admin/footer');
	}

	function uploadfilebypath($key, $path)
	{
		$message = array();
		$data = array();
		if ($_FILES[$key]['size'] > 0) {
			$config = array(
				'upload_path' => $path,
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				/*'overwrite' => TRUE*/
				'max_size' => 60000,
				'max_height' => "",
				'max_width' => ""
			);
			$config['remove_spaces'] = true;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			// p($data['ac']);
			if ($this->upload->do_upload($key)) {
				$uploadData = $this->upload->data();
				$image_name = $uploadData['file_name'];
				return $image_name;
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			return 'Your uploaded image file is blank.';
		}
	}

	public function uploadproductImages($ImageName,$ImageType,$TempSrc,$ImageSize,$dir = false)
	{
		$ThumbSquareSize 		= 200; //Thumbnail will be 200x200
		$BigImageMaxSize 		= 1024; //Image Maximum height or width
		$ThumbPrefix			= "thumb_"; //Normal thumb Prefix
		$DestinationDirectory	=  (!empty($dir))? $dir : 'uploads/product_images/'; //Upload Directory ends with / (slash)
		$Quality 				= 60;
		$processImage			= true;
		$RandomNumber			= time();  // We need same random name for both files.
		switch(strtolower($ImageType))
		{
			case 'image/png':
				$CreatedImage = imagecreatefrompng($TempSrc);
				break;

			case 'image/gif':
				$CreatedImage = imagecreatefromgif($TempSrc);
				break;

			case 'image/jpeg':

			case 'image/pjpeg':
				$CreatedImage = imagecreatefromjpeg($TempSrc);
				break;
			default:
				$processImage = false; //image format is not supported!
		}

		//get Image Size

		list($CurWidth,$CurHeight)=getimagesize($TempSrc);

		//Get file extension from Image name, this will be re-added after random name

		$Imagearray = explode(".", $ImageName);

		$ImageExt = array_pop($Imagearray);

		//Construct a new image name (with random number added) for our new image.
		$NewImageName = $ImageSize."_".$RandomNumber.'.'.$ImageExt;

		//Set the Destination Image path with Random Name
		$thumb_DestRandImageName 	= $DestinationDirectory.$ThumbPrefix.$NewImageName; //Thumb name

		$DestRandImageName 			= $DestinationDirectory.$NewImageName; //Name for Big Image

		//Resize image to our Specified Size by calling resizeImage function.

		if($processImage && $this->resizeImage($CurWidth,$CurHeight,$BigImageMaxSize,$DestRandImageName,$CreatedImage,$Quality,$ImageType))
		{
			return $NewImageName;
		}else{
			return false;
		}
	}

	public function resizeImage($CurWidth,$CurHeight,$MaxSize,$DestFolder,$SrcImage,$Quality,$ImageType)
    {
    	//Check Image size is not 0
		if($CurWidth <= 0 || $CurHeight <= 0)
		{
				return false;

		}

		//Construct a proportional size of new image

		$ImageScale      	= min($MaxSize/$CurWidth, $MaxSize/$CurHeight); 

		$NewWidth  			= ceil($ImageScale*$CurWidth);

		$NewHeight 			= ceil($ImageScale*$CurHeight);

		

		if($CurWidth < $NewWidth || $CurHeight < $NewHeight)
		{
			$NewWidth = $CurWidth;
			$NewHeight = $CurHeight;

		}

		$NewCanves 	= imagecreatetruecolor($NewWidth, $NewHeight);

		// Resize Image

		if(imagecopyresampled($NewCanves, $SrcImage,0, 0, 0, 0, $NewWidth, $NewHeight, $CurWidth, $CurHeight))

		{

			switch(strtolower($ImageType))

			{

				case 'image/png':

					imagepng($NewCanves,$DestFolder);

					break;

				case 'image/gif':

					imagegif($NewCanves,$DestFolder);

					break;			

				case 'image/jpeg':

				case 'image/pjpeg':

					imagejpeg($NewCanves,$DestFolder,$Quality);

					break;

				default:

					return false;

			}

		if(is_resource($NewCanves)) { 

	      imagedestroy($NewCanves); 

	    } 

		return true;

		}
	}

	public function deleteRecord()
	{
		$id = $_POST['id'];
		$table = $_POST['table'];
		$colwhr = $_POST['colwhr'];
		// $action = $_POST['action'];
		$this->Common_model->deleteRecords($table, array($colwhr => $id));
		$msg = array('status' => 1, 'msg' => 'Deleted successfully!');
		echo json_encode($msg);
		exit();
	}

	public function change_status()
	{
		$tablename = $_POST['tablename'];
		$status = $_POST['status'];
		$id = $_POST['id'];
		$action = $_POST['action'];
		$whrcol = $_POST['whrcol'];
		$whrstatuscol = $_POST['whrstatuscol'];
		$res = $this->Common_model->updateRecords($tablename, array($whrstatuscol => $status), array($whrcol => $id));
		// $resp = array('code'=>SUCCESS,'message'=>'Record has been '.$action.'successfully');
		// echo json_encode($resp);
		$msg = array('status' => 1, 'msg' => 'Record has been ' . $action . ' successfully');
		echo json_encode($msg);
		exit();
	}








	public function logout()
	{
		// $this->session->sess_destroy();
		$this->session->unset_userdata(ADMIN_SESSION);
		redirect(base_url('admin'),'refresh');
	}

	public function emailbox()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/app_emailbox');
		$this->load->view('admin/footer');
	}
	public function chatbox()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/chatbox');
		$this->load->view('admin/footer');
	}
	public function filemanager()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/file_manager');
		$this->load->view('admin/footer');
	}
	public function contact()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/contact');
		$this->load->view('admin/footer');
	}
	public function todo()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/todo');
		$this->load->view('admin/footer');
	}
	public function invoice()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/invoice');
		$this->load->view('admin/footer');
	}
	public function fullcalender()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/fullcalender');
		$this->load->view('admin/footer');
	}
	public function widgets()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/widgets');
		$this->load->view('admin/footer');
	}

}
