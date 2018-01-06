var ajaxurl = "<?php echo admin_url('archive/post-product.php'); ?>";

(function($){
    function loadProduct(){
        var result = $.ajax({
            url : post_product.ajax_url,
    		type : 'post',
    		data : {
    			action : 'post_love_add_love',
    			offset : offset
    		}
        });

        result.done(function(data){
            $('#product-wrapper').html(data);
        }).fail(function(error){
            console.log('sorry');
        });
    }
var offset = 0;

loadProduct();

})(jQuery);
