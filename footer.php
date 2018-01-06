<div class="clearfix"></div>
    <div id="footerbar">
        <div id="footerwrap">
            <div id="footer-left">
                <?php if (is_active_sidebar ('footer-1')) : ?>
                <?php dynamic_sidebar ('footer-1'); ?>
                <?php endif ?>
            </div>
            <div id="footer-center">
                <?php if (is_active_sidebar ('footer-2')) : ?>
                <?php dynamic_sidebar ('footer-2'); ?>
                <?php endif ?>
            </div>
            <div id="footer-right">
                <?php if (is_active_sidebar ('footer-3')) : ?>
                <?php dynamic_sidebar ('footer-3'); ?>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php wp_footer(); ?>

<script>
jQuery(function(){
	
    (function($){
        var f = 0;
        var v = 0;
        var p = 0;

        $('#jandamuda').on('click', function(){
            var x = $(this);
            var y = $('#resmenu');

            if(f === 0){
                y.fadeIn('fast').css('display', 'block');
                x.addClass('change');
                f = 1;
            }else if(f === 1){
                y.fadeOut('fast').css('display', 'none');
                x.removeClass('change');
                f = 0;
            }
        });

        $('#perawandesa').on('click', function(){
            var x = $('.searchy');

            if(v==0){
                x.fadeIn('fast').css('display', 'block');
                v = 1;
            }else if(v==1){
                x.fadeOut('fast').css('display', 'none');
                v = 0;
            }
        });

        function menuPro(x) {
            if(p==0){
                $('#promenu').fadeIn('fast').css('display', 'block');
                p = 1;
            }else if(p==1){
                $('#promenu').fadeOut('fast').css('display', 'none');
                p = 0;
            }
        }

        $('#perawandesa, #jandamuda, #varokah').mouseup(function(){
            var cont = $(this).attr('id');
            if (cont == 'perawandesa'){
                $('#resmenu, #promenu').fadeOut('fast').css('display', 'none');
                $( '#jandamuda' ).removeClass('change');
                f = 0;
                p = 0;
            }else if(cont == 'jandamuda'){
                $('.searchy, #promenu').fadeOut('fast').css('display', 'none');
                v= 0;
                p= 0;
            }else{
                $('#resmenu, .searchy').fadeOut('fast').css('display', 'none');
                $( '#jandamuda' ).removeClass('change');
                f = 0;
                v= 0;
            }
        });

        // START HIDE/SHOW HEADER ON MOBILE
        var lastScrollTop = 0;

        $(document).scroll(function() {
            var x = $('#headblock');
            var y = $(this).scrollTop();
            var z = x.outerHeight(true);
            if (y > z) {
                if (y > lastScrollTop){
                    x.css({'top' : '-95px'});
                    $('#resmenu, #promenu').css('display', 'none');
                    $( '#jandamuda' ).removeClass('change');
                    f = 0;
                    p = 0;
                }else{
                    if(y > z * 2){
                        x.css({'top' : '0px'});
                    }
                }
                lastScrollTop = y;
            }else if(y < z){
                x.css({'top' : '0px'});
            }
        });
        // END HIDE/SHOW HEADER ON MOBILE

    })(jQuery);
});

var unruly = window.unruly || {};
unruly.native = unruly.native || {};
unruly.native.siteId = 1075227
</script>
<script src="//video.unrulymedia.com/native/native-loader.js"></script>
</body>
</html>