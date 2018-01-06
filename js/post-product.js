(function($){
    function loadProduct(){
        var result = $.ajax({
            url : post_product.ajax_url,
    		type : 'POST',
    		data : {
    			action : 'post_show_product',
    			offset : offset,
                terms : terms
    		}
        });

        result.done(function(data){
            container.html(data);
        }).fail(function(error){
            console.log(error);
        });
    }
    var offset = 0;
    var container = $('#product-wrapper');
    var terms = container.data('terms');

    loadProduct();

    $('#product-pagination').on('click', 'a', function(){
        var x = $(this);
        var y = x.attr('data-offset');
        $('html, body').animate({
            scrollTop: $("#main").offset().top - 100
        }, 500);
        // $('#product-pagination').find('.next').attr('data-offset', y+2);

        $('#product-pagination a').attr('class', 'inactive');
        x.attr('class', 'current');

        offset = y;

        loadProduct();


    });

})(jQuery);
