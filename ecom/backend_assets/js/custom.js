$('.btn_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'categories', colwhr: 'categories_id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }

});

$('.tSlider_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'home_top_slider', colwhr: 'id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$('.banner_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'home_banner', colwhr: 'id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$('.lang_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'language', colwhr: 'id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$('.pick_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  $.ajax({
    type: 'POST',
    url: href,
    data: { id: id, table: 'pickup_point', colwhr: 'id' },
    dataType: 'json',
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        // $.notify(response.msg, "error");
      }
    }

  });
});

$('.currency_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'currency', colwhr: 'id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$('.seller_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'seller', colwhr: 'id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$('.attr_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'attribute', colwhr: 'id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$('.staff_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'staff', colwhr: 'id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$('.flashdeal_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'flashdeal', colwhr: 'id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$('.product_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'products', colwhr: 'product_id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$('.coupon_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'coupons', colwhr: 'id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }
});

$(".pflash_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 0, whrcol: 'product_id', whrstatuscol: 'flashdeal', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".pflash_active").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 1, whrcol: 'product_id', whrstatuscol: 'flashdeal', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".pfeatur_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 0, whrcol: 'product_id', whrstatuscol: 'featured', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".pfeatur_active").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 1, whrcol: 'product_id', whrstatuscol: 'featured', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".coupon_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'coupons', id: id, status: 0, whrcol: 'id', whrstatuscol: 'status', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".coupon_active").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'coupons', id: id, status: 1, whrcol: 'id', whrstatuscol: 'status', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'language', id: id, status: 0, whrcol: 'id', whrstatuscol: 'status', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".activecat").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'language', id: id, status: 1, whrcol: 'id', whrstatuscol: 'status', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".c_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  //alert(href);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'currency', id: id, status: 0, whrcol: 'id', whrstatuscol: 'publish', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".c_activecat").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'currency', id: id, status: 1, whrcol: 'id', whrstatuscol: 'publish', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".pik_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  //alert(href);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'pickup_point', id: id, status: 0, whrcol: 'id', whrstatuscol: 'status', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".pik_activecat").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'pickup_point', id: id, status: 1, whrcol: 'id', whrstatuscol: 'status', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".ga_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  //alert(href);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'google_anlytics', id: id, status: 0, whrcol: 'id', whrstatuscol: 'status', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".ga_activecat").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'google_anlytics', id: id, status: 1, whrcol: 'id', whrstatuscol: 'status', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".flash_featured_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Unfeatured ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'flashdeal', id: id, status: 0, whrcol: 'id', whrstatuscol: 'flash_featured_status', action: "Unfeatured" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".flash_featured_active").click(function (e) {
  var val = confirm("Are you sure you want to Featured ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'flashdeal', id: id, status: 1, whrcol: 'id', whrstatuscol: 'flash_featured_status', action: "Featured" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".flash_publish_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Unpublish ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'flashdeal', id: id, status: 0, whrcol: 'id', whrstatuscol: 'flash_publish_status', action: "Unpublish" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".flash_publish_active").click(function (e) {
  var val = confirm("Are you sure you want to Publish ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'flashdeal', id: id, status: 1, whrcol: 'id', whrstatuscol: 'flash_publish_status', action: "Publish" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".bestseller_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 0, whrcol: 'product_id', whrstatuscol: 'best_seller_status', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".bestseller_active").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 1, whrcol: 'product_id', whrstatuscol: 'best_seller_status', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".home_banner_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'home_banner', id: id, status: 0, whrcol: 'id', whrstatuscol: 'status', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".home_banner_active").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'home_banner', id: id, status: 1, whrcol: 'id', whrstatuscol: 'status', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".home_slider_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'home_top_slider', id: id, status: 0, whrcol: 'id', whrstatuscol: 'status', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});

$(".home_slider_active").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'home_top_slider', id: id, status: 1, whrcol: 'id', whrstatuscol: 'status', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti(response.msg);
        }
      }
    });
  }
});


$('.btn_commission').click(function () {
  var form = $("#commission_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/sellerCommiAjax";

  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      warning_noti(response.msg);
    },
  });
});

$('.socil_m').click(function (e) {
  var gLogConfig = $("#gLogConfig").val();
  var fLogConfig = $("#fLogConfig").val();
  var tLogConfig = $("#tLogConfig").val();
  var href = base_url + "admin/socialMediaAjax";
  // alert(gLogConfig);

  $.ajax({
    type: 'POST',
    url: href,
    data: { gLogConfig: gLogConfig, fLogConfig: fLogConfig, tLogConfig: tLogConfig },
    dataType: 'json',
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

// $('.btn_lang').click( function (e) {
//   var lang_name = $("#lang_name").val();
//   var lang_code = $("#lang_code").val();
//   var href = base_url + "admin/add_lang";
//   // alert(lang_name);

//   $.ajax({
//     type: 'POST',
//     url: href,
//     data: { lang_name: lang_name, lang_code :lang_code },
//     dataType: 'json',
//     success: function (response) {
//       if (response.status == 1) {
//         $('#lang_name').val('');
//         $('#lang_code').val('');
//         // success_noti(response.msg);
//         round_success_noti(response.msg);
//         // setTimeout(function () { location.reload() }, 1000);
//         setTimeout(function(){window.location.href=base_url+"admin/language_list"},1000);
//       } else {
//         // error_noti(response.msg);
//         round_error_noti(response.msg);
//       }
//     },
//     error: function (response) {
//       // warning_noti(response.msg);
//       round_error_noti(response.msg);
//     },

//   });
// });



$('.btn_lang').click(function () {
  var form = $("#langform")[0];
  var data = new FormData(form);
  var href = base_url + "admin/add_lang";

  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        $('#lang_name').val('');
        $('#lang_code').val('');
        round_success_noti(response.msg);
        // setTimeout(function () { location.reload() }, 1000);
        setTimeout(function () { window.location.href = base_url + "admin/language_list" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      warning_noti(response.msg);
    },
  });
});

$(".asCat").on("click", function () {
  var form = $("#category_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/categoryAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { window.location.href = base_url + "admin/category" }, 1000);
        // setTimeout(function() {location.reload()}, 1000);
      } else {
        // error_noti(response.msg);
        round_error_noti(response.msg);
        // info_noti(response.msg);
      }
    },
    error: function (response) {
      // warning_noti(response.msg);
      round_error_noti(response.msg);
    },

  });
});

$(".subCat_btn").on("click", function () {
  var form = $("#subCat_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/subCategoryAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { window.location.href = base_url + "admin/sub_category" }, 1000);
        // setTimeout(function() {location.reload()}, 1000);
      } else {
        // error_noti(response.msg);
        round_error_noti(response.msg);
        // info_noti(response.msg);
      }
    },
    error: function (response) {
      // warning_noti(response.msg);
      round_error_noti(response.msg);
    },

  });
});

$(".subSubCat_btn").on("click", function () {
  var form = $("#subSubCat_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/subSubCatAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { window.location.href = base_url + "admin/sub_subcategory" }, 1000);
        // setTimeout(function() {location.reload()}, 1000);
      } else {
        // error_noti(response.msg);
        round_error_noti(response.msg);
        // info_noti(response.msg);
      }
    },
    error: function (response) {
      // warning_noti(response.msg);
      round_error_noti(response.msg);
    },

  });
});

$("#feature").change(function () {
  if ($(this).prop('checked')) {
    $('#h_feature').val(1);
  } else {
    $('#h_feature').val(0);
  }

});

$(".gAna_btn").on("click", function () {
  var form = $("#googleAnaly_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/googleAnalyticAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        // $('#traking_id').val('');
        round_success_noti(response.msg);
        // setTimeout(function(){window.location.href=base_url+"admin/category"},1000);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$("#fbPix_status").change(function () {
  if ($(this).prop('checked')) {
    $('#h_fbstatus').val(1);
  } else {
    $('#h_fbstatus').val(0);
  }

});

$(".fbPix_btn").on("click", function () {
  var form = $("#fb_pix_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/fbPixAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        // $('#traking_id').val('');
        round_success_noti(response.msg);
        // setTimeout(function(){window.location.href=base_url+"admin/category"},1000);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$("#fbChat_status").change(function () {
  if ($(this).prop('checked')) {
    $('#h_fbchat').val(1);
  } else {
    $('#h_fbchat').val(0);
  }

});

$(".fbChat_btn").on("click", function () {
  var form = $("#fbchat_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/fbChatAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        // $('#traking_id').val('');
        round_success_noti(response.msg);
        // setTimeout(function(){window.location.href=base_url+"admin/category"},1000);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$(".btn_smtp").on("click", function () {
  var form = $("#smtp_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/smtpAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$("#publish").change(function () {
  if ($(this).prop('checked')) {
    $('#h_publish').val(1);
  } else {
    $('#h_publish').val(0);
  }
});

$(".curr_btn").on("click", function () {
  var form = $("#currency_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/currencyAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        // setTimeout(function() {location.reload()}, 1000);
        setTimeout(function () { window.location.href = base_url + "admin/currency_list" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$(".seo_btn").on("click", function () {
  var form = $("#seo_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/seoAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
        // setTimeout(function () { window.location.href = base_url + "admin/currency_list" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$(".gSetti_btn").on("click", function () {
  var form = $("#generalSetti_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/generalSettAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
        // setTimeout(function () { window.location.href = base_url + "admin/currency_list" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$(".attr_btn").on("click", function () {
  var form = $("#attr_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/attrAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        // setTimeout(function() {location.reload()}, 1000);
        setTimeout(function () { window.location.href = base_url + "admin/attribute" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$(".pick_btn").on("click", function () {
  var form = $("#pickPoint_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/pickPointAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        // setTimeout(function() {location.reload()}, 1000);
        setTimeout(function () { window.location.href = base_url + "admin/pickup_point" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$(".seller_btn").on("click", function () {
  var form = $("#seller_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/sellerAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        // setTimeout(function() {location.reload()}, 1000);
        setTimeout(function () { window.location.href = base_url + "admin/sellers" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$(".staff_btn").on("click", function () {
  var form = $("#staff_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/staffAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        // setTimeout(function() {location.reload()}, 1000);
        setTimeout(function () { window.location.href = base_url + "admin/staff_list" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$(".prodCoupon_btn").on("click", function () {
  var form = $("#prodCoupon_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/couponProdBaseAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { window.location.href = base_url + "admin/coupon" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$(".cartCoupon_btn").on("click", function () {
  var form = $("#cartCoupon_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/couponCartBaseAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { window.location.href = base_url + "admin/coupon" }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$("#sBmode").change(function () {
  if ($(this).prop('checked')) {
    $('#h_paypal').val(0);
  } else {
    $('#h_paypal').val(1);
  }
});

$(".paypal_btn").on("click", function () {
  var form = $("#paypal_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/paypalAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        // setTimeout(function() {location.reload()}, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$("#sBMode_strip").change(function () {
  if ($(this).prop('checked')) {
    $('#h_stripe').val(1);
  } else {
    $('#h_stripe').val(0);
  }
});

$(".stripe_btn").on("click", function () {
  var form = $("#stripe_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/stripeAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$("#sBMode_instmo").change(function () {
  if ($(this).prop('checked')) {
    $('#h_instmo').val(1);
  } else {
    $('#h_instmo').val(0);
  }
});

$(".instamojo_btn").on("click", function () {
  var form = $("#instamojo_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/instamojoAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$("#sBMode_razor").change(function () {
  if ($(this).prop('checked')) {
    $('#h_razor').val(1);
  } else {
    $('#h_razor').val(0);
  }
});

$(".razor_btn").on("click", function () {
  var form = $("#razor_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/rajorAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },

  });
});

$("#sBMode_paystack").change(function () {
  if ($(this).prop('checked')) {
    $('#h_paystack').val(1);
  } else {
    $('#h_paystack').val(0);
  }
});

$(".paystack_btn").on("click", function () {
  var form = $("#paystack_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/paystackAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },
  });
});

$("#sBMode_voguepay").change(function () {
  if ($(this).prop('checked')) {
    $('#h_voguepay').val(1);
  } else {
    $('#h_voguepay').val(0);
  }
});

$(".voguepay_btn").on("click", function () {
  var form = $("#voguepay_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/voguepayAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },
  });
});

$("#sBMode_sslCommerz").change(function () {
  if ($(this).prop('checked')) {
    $('#h_sslCommerz').val(1);
  } else {
    $('#h_sslCommerz').val(0);
  }
});

$(".sslCommerz_btn").on("click", function () {
  var form = $("#sslCommerz_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/sslCommerzAjax";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { location.reload() }, 1000);
      } else {
        round_error_noti(response.msg);
      }
    },
    error: function (response) {
      round_error_noti(response.msg);
    },
  });
});

$("#deactivePaypal").change(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 0, whrcol: 'id', whrstatuscol: 'activate', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#activePypal").change(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 1, whrcol: 'id', whrstatuscol: 'activate', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#deactiveStripe").change(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 0, whrcol: 'id', whrstatuscol: 'activate', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#activeStripe").change(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 1, whrcol: 'id', whrstatuscol: 'activate', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#deactiveInstamojo").change(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 0, whrcol: 'id', whrstatuscol: 'activate', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#activeInstamojo").change(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 1, whrcol: 'id', whrstatuscol: 'activate', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#deactiveRazor").change(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 0, whrcol: 'id', whrstatuscol: 'activate', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#activeRazor").change(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 1, whrcol: 'id', whrstatuscol: 'activate', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#deactivePaystack").change(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 0, whrcol: 'id', whrstatuscol: 'activate', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#activePaystack").change(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 1, whrcol: 'id', whrstatuscol: 'activate', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#deactiveVogue").change(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 0, whrcol: 'id', whrstatuscol: 'activate', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#activeVogue").change(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 1, whrcol: 'id', whrstatuscol: 'activate', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#deactiveSslcom").change(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 0, whrcol: 'id', whrstatuscol: 'activate', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#activeSslcom").change(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'wallet', id: id, status: 1, whrcol: 'id', whrstatuscol: 'activate', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#maintenance_deactive").change(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  // alert(id);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'maintenance_mode', id: id, status: 0, whrcol: 'id', whrstatuscol: 'status', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$("#maintenance_active").change(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'maintenance_mode', id: id, status: 1, whrcol: 'id', whrstatuscol: 'status', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 500);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$(".ppub_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  //alert(href);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 0, whrcol: 'product_id', whrstatuscol: 'publish', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$(".ppub_active").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 1, whrcol: 'product_id', whrstatuscol: 'publish', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$(".digi_prod_deactive").click(function (e) {
  var val = confirm("Are you sure you want to Deactive ?");
  //e.preventDefault(); 
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  //alert(href);
  //var btn = this;
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 0, whrcol: 'product_id', whrstatuscol: 'digital_product_status', action: "Deactive" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$(".digi_prod_active").click(function (e) {
  var val = confirm("Are you sure you want to Active ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/change_status";
  if (val) {
    $.ajax({
      type: "POST",
      url: href,
      data: { tablename: 'products', id: id, status: 1, whrcol: 'product_id', whrstatuscol: 'digital_product_status', action: "Active" },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          round_error_noti();
        }
      }
    });
  }
});

$(".category_btn").on("click", function () {
  var form = $("#category_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/categoryAjaxTest";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { window.location.href = base_url + "admin/category_test" }, 1000);
        // setTimeout(function() {location.reload()}, 1000);
      } else {
        // error_noti(response.msg);
        round_error_noti(response.msg);
        // info_noti(response.msg);
      }
    },
    error: function (response) {
      // warning_noti(response.msg);
      round_error_noti(response.msg);
    },

  });
});

$(".subCategory_btn").on("click", function () {
  var form = $("#subCat_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/subCategoryAjaxTest";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        setTimeout(function () { window.location.href = base_url + "admin/sub_category_test" }, 1000);
        // setTimeout(function() {location.reload()}, 1000);
      } else {
        // error_noti(response.msg);
        round_error_noti(response.msg);
        // info_noti(response.msg);
      }
    },
    error: function (response) {
      // warning_noti(response.msg);
      round_error_noti(response.msg);
    },

  });
});

$(".subSubCategory_btn").on("click", function () {
  var form = $("#subSubCat_form")[0];
  var data = new FormData(form);
  var href = base_url + "admin/subSubCatAjaxTest";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        round_success_noti(response.msg);
        // setTimeout(function () { window.location.href = base_url + "admin/sub_subcategory_test" }, 1000);
        setTimeout(function() {location.reload()}, 1000);
      } else {
        // error_noti(response.msg);
        round_error_noti(response.msg);
        // info_noti(response.msg);
      }
    },
    error: function (response) {
      // warning_noti(response.msg);
      round_error_noti(response.msg);
    },

  });
});

$('.cat_delete').click(function () {
  var val = confirm("Are you sure you want to delete ?");
  var id = $(this).attr("href-data");
  var href = base_url + "admin/deleterecord";
  // alert(id);
  if (val) {
    $.ajax({
      type: 'POST',
      url: href,
      data: { id: id, table: 'category', colwhr: 'category_id' },
      dataType: 'json',
      success: function (response) {
        if (response.status == 1) {
          round_success_noti(response.msg);
          setTimeout(function () { location.reload() }, 1000);
        } else {
          // $.notify(response.msg, "error");
        }
      }

    });
  }

});

$('#category').on('change', function(){
  var cat_id = $("#category").val();
  // alert(cat_id);
  $.ajax({
      url:base_url+ 'admin/getsubcategory',
      method:"POST",
      data:{categories_id:cat_id},
      async : true,
      dataType : 'json',
      success: function(data){
        // alert(data);
        // handleData(data); 
        // anim5_noti();
        $('select[name="sub_category"]').empty();
        $.each(data, function(key, value) {
            $('select[name="sub_category"]').append('<option value="'+ value.subcategory_id +'">'+ value.subcategory_name +'</option>');
        });
        // var html = '';
        // var i;
        // for(i=0; i<data.length; i++){
        //     html += '<option value='+data[i].subcategory_id+'>'+data[i].subcategory_name+'</option>';
        // }
        // // $('#sub_category').val(data);
        // $('#sub_category').html(data);
      }
  });
  return false;
});

$('#sub_category').on('change', function(){
  var cat_id = $("#sub_category").val();
  // alert(cat_id);
  $.ajax({
      url:base_url+ 'admin/getsubsubcategory',
      method:"POST",
      data:{sub_category:cat_id},
      async : true,
      dataType : 'json',
      success: function(data){
        $('select[name="sub_subcategory"]').empty();
        $.each(data, function(key, value) {
            $('select[name="sub_subcategory"]').append('<option value="'+ value.sub_subcategory_id +'">'+ value.sub_subcategory_name +'</option>');
        });
      }
  });
  return false;
});

$('#sub_subcategory').on('change', function(){
  var cat_id = $("#sub_subcategory").val();
  // alert(cat_id);
  $.ajax({
      url:base_url+ 'admin/getproduct',
      method:"POST",
      data:{sub_subcategory:cat_id},
      async : true,
      dataType : 'json',
      success: function(data){
        $('select[name="inputProduct[]"]').empty();
        $.each(data, function(key, value) {
            $('select[name="inputProduct[]"]').append('<option value="'+ value.product_id +'">'+ value.product_name +'</option>');
        });
      }
  });
  return false;
});

// $('#import_btn').on("click", function () {
//   var form = $("#import_form")[0];
//   var data = new FormData(form);
//   // alert(data);
//   $.ajax({
//     enctype: 'multipart/form-data',
//     url: base_url+ 'excel_import/import',
//     method:"POST",
//     contentType:false,
//     cache:false,
//     processData:false,
//     data: data,
//     dataType: "json",
//     success:function(data){
//       $('#file').val('');
//       load_data();
//       alert(data);
//     }
//   })
// });

$(".import_btn").on("click", function () {
  var form = $("#import_form")[0];
  var data = new FormData(form);
  var href = base_url + "excel_import/import";
  // $("#category_form").prop("disabled", true);
  $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    url: href,
    data: data,
    dataType: "json",
    success:function(data){
      anim5_noti();
      $('#file').val('');
      load_data();
      alert(data);
    }
    // success: function (response) {
    //   if (response.status == 1) {
    //     round_success_noti(response.msg);
    //     // setTimeout(function () { window.location.href = base_url + "admin/sub_subcategory_test" }, 1000);
    //     setTimeout(function() {location.reload()}, 1000);
    //   } else {
    //     // error_noti(response.msg);
    //     round_error_noti(response.msg);
    //     // info_noti(response.msg);
    //   }
    // },
    // error: function (response) {
    //   // warning_noti(response.msg);
    //   round_error_noti(response.msg);
    // },

  });
});

// function add_more_customer_choice_option(){
//   i++;
//   $('#customer_choice_options').append('<div class="row mb-3"><div class="col-8 col-md-3 order-1 order-md-0"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="" placeholder="Choice Title"></div><div class="col-12 col-md-7 col-xl-8 order-3 order-md-0 mt-2 mt-md-0"><input type="text" class="form-control tagsInput" name="choice_options_'+i+'[]" placeholder="Enter choice values" onchange="update_sku()"></div><div class="col-4 col-xl-1 col-md-2 order-2 order-md-0 text-right"><button type="button" onclick="delete_row(this)" class="btn btn-link btn-icon text-danger"><i class="fa fa-trash-o"></i></button></div></div>');
  
//       $('.C').tagsinput('items');
// }


// $("#paypalActi").change(function () {
//   // var val = confirm("Are you sure you want to Active ?");
//   var id = $(this).attr("href-data");
//   var href = base_url + "admin/change_status";
//   alert(id);
//   // if (val) {
//     if ($(this).prop('checked')) {
//       // alert(1);
//       // $('#h_paypalActi').val(1);
//       $.ajax({
//         type: "POST",
//         url: href,
//         data: { tablename: 'wallet', id: id, status: 1, whrcol: 'id', whrstatuscol: 'activate', action: "Active" },
//         dataType: 'json',
//         success: function (response) {
//           if (response.status == 1) {
//             round_success_noti(response.msg);
//             // setTimeout(function () { location.reload() }, 1000);
//           } else {
//             round_error_noti();
//           }
//         }
//       });
//     } else {
//       // alert(0);
//       // $('#h_paypalActi').val(0);
//       $.ajax({
//         type: "POST",
//         url: href,
//         data: { tablename: 'wallet', id: id, status: 0, whrcol: 'id', whrstatuscol: 'activate', action: "Deactive" },
//         dataType: 'json',
//         success: function (response) {
//           if (response.status == 1) {
//             round_success_noti(response.msg);
//             // setTimeout(function () { location.reload() }, 1000);
//           } else {
//             round_error_noti();
//           }
//         }
//       });
//     }
//   // }
// });

// $(".walletstatuschg").click(function (e) {
//   var val = confirm("Are you sure you want to Active ?");
//   var id = $(this).attr("href-data");

//   var href = base_url + "admin/change_status";
//   if (val) {
//     $.ajax({
//       type: "POST",
//       url: href,
//       data: { tablename: 'wallet', id: id, status: 1, whrcol: 'id', whrstatuscol: 'status', action: "Active" },
//       dataType: 'json',
//       success: function (response) {
//         if (response.status == 1) {
//           round_success_noti(response.msg);
//           setTimeout(function () { location.reload() }, 1000);
//         } else {
//           round_error_noti();
//         }
//       }
//     });
//   }
// });


