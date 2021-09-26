
<?php defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// require FCPATH . '/vendor/autoload.php';
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Html;

class Seller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('shop_helper');
		$this->SessionModel->checksellerlogin(array("login","loginajax"));
		// $this->load->library('excel');
		// $this->load->model('excel_model');
	}

	public function index()
	{
		$this->load->view('seller/header');
		$this->load->view('seller/dashboard');
		$this->load->view('seller/footer');
	}

	public function login()
	{
		// $this->load->view('seller/header');
		$this->load->view('seller/signin');
		// $this->load->view('seller/footer');
	}

	public function signin()
	{
		$this->load->view('seller/signin_header');
		$this->load->view('seller/signin_index');
		$this->load->view('seller/signin_footer');
	}

	public function loginajax()
	{
		$email_id = trim($_POST['email_id']);
		$password = md5(trim($_POST['password']));
		// p($password);
		if(isset($email_id) && !empty($email_id) && isset($password) && !empty($password))
		{
		    		$userdata = $this->Common_model->getSingleRecordById('sellers',array('email' => $email_id,'password'=>$password));
		    		// p(base64_decode($userdata['mobile_no']));
		    		if($userdata){
		    			if($userdata['status']==1){                            
		    	           
		    	           $this->session->set_userdata(SELLER_SESSION, $userdata);
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

	public function products()
	{
		$this->load->view('seller/header');
		$this->load->view('seller/ecommerce_products');
		$this->load->view('seller/footer');
	}

	public function products_list()
	{
		$data = array();
		$seller_id = shopsessionShopid();
		$whr = array('status !=' => 3,'seller_id' => $seller_id);
		$data['product_data'] = $this->Common_model->GetWhere('products', $whr);
		// $data['seller_id'] = shopsessionShopid();
		$this->load->view('seller/header');
		$this->load->view('seller/ecommerce_products_list',$data);
		$this->load->view('seller/footer');
	}

	public function product_details($id="")
	{
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'product_id' => $id);
			$data['product_details'] = $this->Common_model->getSingleRecordById('products', $whr);
		}
		$this->load->view('seller/header');
		$this->load->view('seller/ecommerce_products_details',$data);
		$this->load->view('seller/footer');
	}

	public function add_new_products($pid = "")
	{
		// pp($_POST);
		// echo '<pre>';print_r($_FILES);die();
		$data = array();
		if (isset($_POST['submit'])) {
			
			$pdata = array();
			$pdata['product_name'] = $_POST['prodName'];
			$pdata['seller_id'] = shopsessionShopid();
			$pdata['category_id'] = $_POST['category'];
			$pdata['subcategory_id'] = $_POST['sub_category'];
			$pdata['sub_subcategory_id'] = $_POST['sub_subcategory'];
			$pdata['brand'] = $_POST['brand'];
			$pdata['unit'] = $_POST['prodUnit'];
			// $pdata['featured'] = $_POST['checkFeaturedProd'];
			// $pdata['flashdeal'] = $_POST['checkFlashDeal'];
			$pdata['featured'] = 0;
			$pdata['flashdeal'] = 0;
			// $pdata['video_type'] = $_POST['videoType'];
			// $pdata['video_link'] = $_POST['videoLink'];
			$pdata['meta_title'] = $_POST['metaTitle'];
			$pdata['meta_description'] = $_POST['metaDescription'];
	        $pdata['color'] = json_encode($_POST['colors']);
			$pdata['base_price'] = $_POST['basePrice'];
			$pdata['purchase_price'] = $_POST['purchasePrice'];
			$pdata['prod_tax'] = $_POST['productTax'];
			$pdata['discount_type'] = $_POST['discount_type'];
			$pdata['discount'] = $_POST['discount'];
			$pdata['prod_description'] = $_POST['prodDescription'];
			// $pdata['shipping_cost'] = $_POST['shippingCost'];
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
				// if (isset($_FILES['descrip_image']['name']) && !empty($_FILES['descrip_image']['name'])) {
				// 	$uploadpath = "./uploads/product/other_image/";
				// 	$filearraydescimg = $this->uploadfilebypath('descrip_image', $uploadpath);
				// 	if (isset($filearraydescimg)) {
				// 		$pdata['descrip_image'] = $filearraydescimg;
				// 	}
				// }
				// if (isset($_FILES['inputPdf']['name']) && !empty($_FILES['inputPdf']['name'])) {
				// 	$uploadpath = "./uploads/product/pdf/";
				// 	$filearraypdf = $this->uploadfilebypath('inputPdf', $uploadpath);
				// 	if (isset($filearraypdf)) {
				// 		$pdata['pdf'] = $filearraypdf;
				// 	}
				// }
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
				p($_POST);
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
		$this->load->view('seller/header');
		$this->load->view('seller/ecommerce_add_new_products',$data);
		$this->load->view('seller/footer');
	}

	public function flash_deal()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['flashdeal_product'] = $this->Common_model->GetWhere('flashdeal', $whr);
		$this->load->view('seller/header');
		$this->load->view('seller/flashdeal_list',$data);
		$this->load->view('seller/footer');
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
		$this->load->view('seller/header');
		$this->load->view('seller/add_flashdeal_product',$data);
		$this->load->view('seller/footer');
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
		$this->load->view('seller/header');
		$this->load->view('seller/ecommerce_add_new_product',$data);
		$this->load->view('seller/footer');
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
		$this->load->view('seller/header');
		$this->load->view('seller/bulk_product');
		$this->load->view('seller/footer');
	}

	public function generateChar($num) {
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
	
	  public function getLetters($num_col) {
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
	// 		// echo $this->load->view('seller/subcategorylistbycatid',$data,true);
	// 		echo $this->load->view('seller/ecommerce_add_new_product',$data,true);
	// 	}
	// }

	public function orders()
	{
		$this->load->view('seller/header');
		$this->load->view('seller/ecommerce_orders');
		$this->load->view('seller/footer');
	}

	

	public function seller_commission()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['commission_data'] = $this->Common_model->getSingleRecordById('seller_commission', $whr);
		$this->load->view('seller/header');
		$this->load->view('seller/seller_commission', $data);
		$this->load->view('seller/footer');
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

	

	public function general_settings()
	{
		$data = array();
		$whr = array('id' => 1);
		$data['g_data'] = $this->Common_model->getSingleRecordById('general_setting', $whr);
		$this->load->view('seller/header');
		$this->load->view('seller/general_settings', $data);
		$this->load->view('seller/footer');
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

	public function seller()
	{
		$data = array();
		$seller_id = shopsessionShopid();
		$whr = array('status !=' => 3,'shop_id' =>$seller_id);
		$data['seller_data'] = $this->Common_model->getSingleRecordById('sellers', $whr);
		$this->load->view('seller/header');
		$this->load->view('seller/seller_profile', $data);
		$this->load->view('seller/footer');
	}

	public function add_seller($id = "")
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['seller_data'] = $this->Common_model->getSingleRecordById('seller', $whr);
		}
		$this->load->view('seller/header');
		$this->load->view('seller/add_seller', $data);
		$this->load->view('seller/footer');
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
		$this->load->view('seller/header');
		$this->load->view('seller/customers_list',$data);
		$this->load->view('seller/footer');
	}

	public function customer()
	{
		$this->load->view('seller/header');
		$this->load->view('seller/customer_list');
		$this->load->view('seller/footer');
	}

	public function add_customer()
	{
		$this->load->view('seller/header');
		$this->load->view('seller/add_customer');
		$this->load->view('seller/footer');
	}

	public function newsletter()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['newsletter'] = $this->Common_model->Getwhere('newsletter', $whr);
		$this->load->view('seller/header');
		$this->load->view('seller/newsletter_list', $data);
		$this->load->view('seller/footer');
	}

	public function send_newsletter($id = "")
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['newsletter'] = $this->Common_model->getSingleRecordById('newsletter', $whr);
		}
		$this->load->view('seller/header');
		$this->load->view('seller/send_newsletter', $data);
		$this->load->view('seller/footer');
	}

	public function pickup_point()
	{
		$data = array();
		$whr = array('status !=' => 3);
		$data['pick_data'] = $this->Common_model->GetWhere('pickup_point', $whr);
		$this->load->view('seller/header');
		$this->load->view('seller/pickup_point', $data);
		$this->load->view('seller/footer');
	}

	public function add_pickup_point($pick_id = "")
	{
		$data = array();
		if (!empty($pick_id)) {
			$whr = array('status !=' => 3, 'id' => $pick_id);
			$data['pick_data'] = $this->Common_model->getSingleRecordById('pickup_point', $whr);
		}
		$this->load->view('seller/header');
		$this->load->view('seller/add_pickup_point', $data);
		$this->load->view('seller/footer');
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
		$this->load->view('seller/header');
		$this->load->view('seller/coupon',$data);
		$this->load->view('seller/footer');
	}

	public function coupon_cartBase($id = "")
	{
		$data = array();
		if (!empty($id)) {
			$whr = array('status !=' => 3, 'id' => $id);
			$data['coupondata'] = $this->Common_model->getSingleRecordById('coupons', $whr);
		}
		$this->load->view('seller/header');
		$this->load->view('seller/add_cartcoupon',$data);
		$this->load->view('seller/footer');
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
		$this->load->view('seller/header');
		$this->load->view('seller/add_prodcoupon',$data);
		$this->load->view('seller/footer');
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
		$this->load->view('seller/header');
		$this->load->view('seller/customer_chat_list');
		$this->load->view('seller/footer');
	}

	public function admin_chat_list()
	{
		$this->load->view('seller/header');
		$this->load->view('seller/seller_chat_list');
		$this->load->view('seller/footer');
	}

	public function customer_chat()
	{
		$this->load->view('seller/header');
		$this->load->view('seller/customer_chat');
		$this->load->view('seller/footer');
	}

	public function admin_chat()
	{
		$this->load->view('seller/header');
		$this->load->view('seller/seller_chat');
		$this->load->view('seller/footer');
	}

	// public function deleteRecord()   
	// {
	//     $id = $_POST['id'];
	//     $table = $_POST['table'];
	//     $colwhr = $_POST['colwhr'];
	//   	$this->Common_model->deleteRecords($table,array($colwhr=>$id));
	//  	// redirect(base_url().'admin/', 'refresh');
	// }

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
		$this->session->unset_userdata(SELLER_SESSION);
		redirect(base_url('seller'),'refresh');
	}

}
