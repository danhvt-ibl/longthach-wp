jQuery(document).ready(function($)
{$(document).on('click','.wcps-zoom-colse',function()
{$(this).parent().fadeOut();})
$(document).on('click','.wcps-zoom',function()
{var slider_id=$(this).attr('slider-id');var product_id=$(this).attr('product-id');jQuery.ajax({type:'POST',context:this,url:wcps_ajax.wcps_ajaxurl,data:{"action":"wcps_get_item_thumb_url","product_id":product_id},success:function(data)
{jQuery('.wcps-zoom-thumb-'+slider_id).fadeIn();jQuery('.wcps-zoom-thumb-'+slider_id+' img').attr('src',data);}});})});