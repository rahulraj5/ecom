<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">eCommerce</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>admin/products_list">Products</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Product</li>
					</ol>
				</nav>
			</div>

		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body p-4">
				<h5 class="card-title">Add New Product</h5>
				<hr />
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-12">
							<div class="border border-3 p-4 rounded">
								<h4 class="card-title">General</h4>
								<hr />
								<form class="row g-3" method="post" enctype="multipart/form-data">
									<div class="col-md-12">
										<label for="inputProductTitle" class="form-label">Product Name</label>
										<input type="text" class="form-control" name="prodName" id="prodName" value="<?php echo (!empty($product_data) && !empty($product_data['product_name']) ? $product_data['product_name'] : "") ?>" placeholder="Enter product title" required>
									</div>
									<?php if (isset($categorylist)) {
										// print_r($categorylist);

									}
									?>
									<!-- <?php pp($product_data); ?> -->
									<!-- <?php pp($categorylist); ?> -->
									<!-- <?php pp($subcategorylist); ?> -->
									<!-- <?php pp($sub_subcategorylist); ?> -->

									<div class="col-4">
										<label for="inputProductType" class="form-label">Select Category</label>
										<select class="form-select" name="category" id="category" required>
											<option value="">Select Category</option>
											<?php
											foreach ($categorylist as $allcategories) {
											?>
												<option value="<?php echo $allcategories['category_id'] ?>" <?php echo (isset($product_data['category_id']) && $product_data['category_id'] == $allcategories['category_id'] ? 'selected' : ''); ?>><?php echo $allcategories['category_name']; ?></option>
											<?php
											}
											?>
										</select>
									</div>

									<div class="col-4">
										<label for="inputProductType" class="form-label">Select Sub Category</label>

										<select class="form-select" name="sub_category" id="sub_category" required>
											<option value="">Select Sub Category</option>
											<?php if (!empty($product_data)) { ?>
												<option value="<?php echo $product_data['subcategory_id'] ?>" <?php echo (isset($product_data['subcategory_id']) && $product_data['subcategory_id'] == $subcategorylist['subcategory_id'] ? 'selected' : ''); ?>><?php echo $product_data['subcategory_id'] ?></option>
											<?php } ?>
										</select>
										<?php
										// } 
										?>
									</div>

									<div class="col-4">
										<label for="inputProductType" class="form-label">Select Sub sub Category</label>
										<select class="form-select" name="sub_subcategory" id="sub_subcategory" required>
											<option value="">Select Sub subcategory</option>

										</select>
									</div>



									<!-- <div class="col-6">
										<label for="inputProductType" class="form-label">Select Brand</label>
										<select class="form-select" name="brand" id="brand" required>
											<option value="">Select Brand</option>
											<option value="1">One</option>
										</select>
									</div> -->
									<div class="col-md-6">
										<label for="inputProductUnit" class="form-label">Brand</label>
										<input type="text" class="form-control" name="brand" id="brand" value="<?php echo (!empty($product_data) && !empty($product_data['brand']) ? $product_data['brand'] : "") ?>" placeholder="Enter Brand" required>
									</div>
									<div class="col-md-6">
										<label for="inputProductUnit" class="form-label">Product Unit</label>
										<input type="text" class="form-control" name="prodUnit" id="prodUnit" value="<?php echo (!empty($product_data) && !empty($product_data['unit']) ? $product_data['unit'] : "") ?>" placeholder="Enter product unit" required>
									</div>

									<h4 class="card-title mt-4">Images</h4>
									<hr />
									<!-- <form class="row g-3"> -->
									<div class="col-md-12">
										<label for="inputMainImage" class="form-label">Main Image * Preferable size 600 * 500</label>
										<input type="file" class="form-control" name="mainImage" id="mainImage" placeholder="Enter Main Image" required>
									</div>
									<div class="col-md-12">
										<label for="inputMainImage" class="form-label">Thumbnail Images * Preferable size 300 * 290</label>
										<input type="file" class="form-control" name="thumbnailImage" id="thumbnailImage" placeholder="Enter Main Image" required>
									</div>

									<div class="col-md-6">
										<div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" name="checkFeaturedProd" id="checkFeaturedProd">
											<label class="form-check-label" for="checkFeaturedProd">Select for the Featured Product</label>
										</div>
										<div class="form-check form-switch">
											<input class="form-check-input" type="checkbox" name="checkFlashDeal" id="checkFlashDeal">
											<label class="form-check-label" for="checkFlashDeal">Select for the Flash Deal</label>
										</div>
									</div>

									<h4 class="card-title mt-4">Video</h4>
									<hr />
									<div class="col-4">
										<label for="inputVideoType" class="form-label">Select One Option</label>
										<select class="form-select" name="videoType" id="videoType" required>
											<option value="">Select</option>
											<option value="1">YouTube</option>
											<option value="2">Vimeo</option>
											<option value="3">Dailymotion</option>
										</select>
									</div>
									<div class="col-md-6">
										<label for="inputVideoLink" class="form-label">Video Link</label>
										<input type="text" class="form-control" name="videoLink" id="videoLink" value="<?php echo (!empty($product_data) && !empty($product_data['video_link']) ? $product_data['video_link'] : "") ?>" placeholder="Enter Video Link" required>
									</div>

									<h4 class="card-title mt-4">Meta Tags</h4>
									<hr />

									<div class="col-md-12">
										<label for="inputMetaTitle" class="form-label">Meta Title</label>
										<input type="text" class="form-control" name="metaTitle" id="metaTitle" value="<?php echo (!empty($product_data) && !empty($product_data['meta_title']) ? $product_data['meta_title'] : "") ?>" placeholder="Enter meta title" required>
									</div>

									<div class="col-md-12">
										<label for="inputMetaDescription" class="form-label">Meta Description</label>
										<textarea class="form-control" name="metaDescription" id="metaDescription" rows="3" value="<?php echo (!empty($product_data) && !empty($product_data['meta_description']) ? $product_data['meta_description'] : "") ?>" required></textarea>
									</div>
									<div class="col-md-12">
										<label for="inputMetaImage" class="form-label">Meta Image</label>
										<input type="file" class="form-control" name="metaImage" id="metaImage" placeholder="Enter image" required>
									</div>

									<h4 class="card-title mt-4">Customer Choice</h4>
									<hr />


									<div class="row mt-3">
										<div class="col-md-3">
											<input class="form-control mb-3" type="text" placeholder="Colors" aria-label="Colors" disabled>
										</div>

										<div class="col-md-9">
											<select class="multiple-select" multiple="multiple" name="colors[]" id="colors" data-placeholder="Choose anything" required>
												<?php if (isset($color) && !empty($color)) {
													foreach ($color as $color) {
												?>
														<option value="<?php echo $color['code']; ?>"><?php echo $color['name'] ?></option>
												<?php }
												} ?>
											</select>
										</div>

									</div>
									<!-- <div class="col-md-12 col-md-7 col-xl-8 order-3 order-md-0 mt-2 mt-md-0">
										<select class="form-control color-var-select js-example-basic-multiple" name="colors[]" id="colors" multiple>
											<?php if (isset($color) && !empty($color)) {
												foreach ($color as $color) {
											?>
													<option value="<?php echo $color['code']; ?>" <?php if (isset($product_data) && !empty($product_data) && in_array($color['code'], json_decode($product_data['colors']))) echo 'selected' ?>><?php echo $color['name']; ?></option>
											<?php }
											} ?>
										</select>
									</div> -->


									<!-- <div class="col-md-6">
										<label for="inputProductUnit" class="form-label">Add More Option</label>
										<input type="text" class="form-control" id="inputProductUnit" placeholder="Enter product unit">
									</div> -->
									<div id="customer_choice_options">
										<?php if (isset($product_data['choice_options'])) {
											foreach (json_decode($product_data['choice_options'], true) as $key => $choice_option) {

										?>
												<div class="row mb-3">
													<div class="col-8 col-md-3 order-1 order-md-0">
														<input type="hidden" name="choice_no[]" value="<?php echo explode('_', $choice_option['name'])[1]; ?>">
														<input type="text" class="form-control" name="choice[]" value="<?php echo $choice_option['title']; ?>" placeholder="Choice Title">
													</div>
													<div class="col-12 col-md-7 col-xl-8 order-3 order-md-0 mt-2 mt-md-0">
														<input type="text" class="form-control" name="choice_options_<?php echo explode('_', $choice_option['name'])[1]; ?>[]" placeholder="Enter choice values" value="<?php echo implode(',', $choice_option['options']) ?>" data-role="tagsinput" onchange="update_sku()">
													</div>
													<div class="col-4 col-xl-1 col-md-2 order-2 order-md-0 text-right">
														<button type="button" onclick="delete_row(this)" class="btn btn-link btn-icon text-danger"><i class="fa fa-trash-o"></i></button>
													</div>
												</div>
										<?php }
										} ?>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="button" class="btn btn-info" onclick="add_more_customer_choice_option()">Add More Customer Choice Option</button>
										</div>
									</div>

									<h4 class="card-title mt-4">Price</h4>
									<hr />

									<div class="col-md-6">
										<label for="inputBasePrice" class="form-label">Base Price</label>
										<input type="text" class="form-control" name="basePrice" id="basePrice" value="<?php echo (!empty($product_data) && !empty($product_data['base_price']) ? $product_data['base_price'] : "") ?>" placeholder="Enter product base price" required>
									</div>
									<div class="col-md-6">
										<label for="inputPurchasePrice" class="form-label">Purchase Price</label>
										<input type="text" class="form-control" name="purchasePrice" id="purchasePrice" value="<?php echo (!empty($product_data) && !empty($product_data['purchase_price']) ? $product_data['purchase_price'] : "") ?>" placeholder="Enter product purchase price" required>
									</div>

									<div class="col-md-6">
										<label for="inputDiscount" class="form-label">Select Discount Type</label>
										<select class="form-select" name="discount_type" id="discount_type" required>
											<option value="">Select Type</option>
											<option value="1">%</option>
											<option value="2">FLAT</option>
										</select>
									</div>
									<div class="col-md-6">
										<label for="inputDiscount" class="form-label">Discount</label>
										<input type="text" class="form-control" name="discount" id="discount" value="<?php echo (!empty($product_data) && !empty($product_data['discount']) ? $product_data['discount'] : "") ?>" placeholder="Enter product Discount" required>
									</div>
									<div class="col-md-6">
										<label for="inputProductTax" class="form-label">Product Tax</label>
										<input type="text" class="form-control" name="productTax" id="productTax" value="<?php echo (!empty($product_data) && !empty($product_data['prod_tax']) ? $product_data['prod_tax'] : "") ?>" placeholder="Enter product tax" required>
									</div>
									<!-- <div class="col-md-12">
										<label for="inputVariantPrice" class="form-label">Variant Wise Price</label>
										<input type="text" class="form-control" name="variantPrice" id="variantPrice" placeholder="Enter product variant price">
									</div> -->

									<h4 class="card-title mt-4">Description</h4>
									<hr />

									<div class="col-md-12">
										<label for="inputDescription" class="form-label">Description</label>
										<textarea class="form-control" name="prodDescription" id="prodDescription" value="<?php echo (!empty($product_data) && !empty($product_data['prod_description']) ? $product_data['prod_description'] : "") ?>" rows="3"></textarea>
									</div>

									<div class="col-md-12">
										<label for="inputUploadImage" class="form-label">Upload Image</label>
										<input type="file" class="form-control" name="descImage" id="descImage" placeholder="Upload Image">
									</div>


									<div class="col-md-6">
										<label for="inputUploadVideo" class="form-label">Upload Video</label>
										<input type="file" class="form-control" name="descVideo" id="descVideo" placeholder="Upload Video">
									</div>

									<h4 class="card-title mt-4">Shipping Info</h4>
									<hr />

									<div class="col-md-12">
										<label for="inputShippingCost" class="form-label">Shipping Cost</label>
										<input type="text" class="form-control" name="shippingCost" id="shippingCost" value="<?php echo (!empty($product_data) && !empty($product_data['shipping_cost']) ? $product_data['shipping_cost'] : "") ?>" placeholder="Enter Shipping Cost" required>
									</div>

									<h4 class="card-title mt-4">Pdf Specs</h4>
									<hr />

									<div class="col-md-12">
										<label for="inputPdfUpload" class="form-label">PDF Upload</label>
										<input type="file" class="form-control" name="inputPdf" id="inputPdf" placeholder="Upoad PDF">
									</div>
									<div class="col-md-12">
										<button type="submit" name="submit" class="btn btn-primary px-5">Submit</button>
									</div>
								</form>
							</div>
						</div>

					</div>
					<!--end row-->
				</div>
			</div>
		</div>


	</div>
</div>
<script>
	var i = $('input[name="choice_no[]"').last().val();
	// alert(i);
    if(isNaN(i)){
		i =0;
	}
	function add_more_customer_choice_option() {
		i++;
		$('#customer_choice_options').append('<div class="row mb-3"><div class="col-8 col-md-3 order-1 order-md-0"><input type="hidden" name="choice_no[]" value="' + i + '"><input type="text" class="form-control" name="choice[]" value="" placeholder="Choice Title"></div><div class="col-12 col-md-7 col-xl-8 order-3 order-md-0 mt-2 mt-md-0"><input type="text" class="form-control tagsInput" name="choice_options_' + i + '[]" placeholder="Enter choice values" onchange="update_sku()"></div><div class="col-4 col-xl-1 col-md-2 order-2 order-md-0 text-right"><button type="button" onclick="delete_row(this)" class="btn btn-link btn-icon text-danger"><i class="fa fa-trash-o"></i></button></div></div>');

		$('.C').tagsinput('items');
	}
	function delete_row(em){
		$(em).closest('.row').remove();
		update_sku();
	}
</script>
<!--end page wrapper >