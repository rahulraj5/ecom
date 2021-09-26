$(".submit").on("click",function(){
        var cat = $("#category_name").val();
        // alert(cat);
        var href = base_url+"admin/add_category";
		// var href = "<?php echo base_url()?>admin/add_category";
		// alert(href);
        $.ajax({
            type: "POST",
            url: href,
            data: { category_name:cat},
            dataType: "json",
            success : function(data){
                // alert(data);
                if (data.status == 1){
					round_success_noti(data.msg);
					// setTimeout(function(){window.location.href=base_url+"category"},1000);
                    setTimeout(function(){location.reload()},1000);
                }else {
                    round_info_noti(data.msg);
				}
            },
            error: function(data) {
                round_warning_noti();
            },
        });
    });