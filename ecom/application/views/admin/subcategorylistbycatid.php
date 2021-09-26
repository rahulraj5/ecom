<select class="form-control" name="sub_categories_id" id="sub_categories_id">
  <option value="">Select Sub Category</option>
  <?php 
  foreach ($subcategory as $subcategory) {
  ?>
    <option value="<?php echo $subcategory['categories_id']?>" ><?php echo $subcategory['category_name'];?></option>
  <?php
  }
  ?>
</select>