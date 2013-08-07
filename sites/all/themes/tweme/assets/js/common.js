


var clickSearch = false;
var clickSmallButton = false;

        $(document).ready(function() {
            
            //for condition show toolbar manager drupal in top menu
        	if($("#toolbar").length > 0){
	            if($("#toolbar").html() != ''){
	                $("#menu").css("top","65px");
	                $("#menu").css("z-index","9999");

	                $(".search-box").css("top","157px");
	                $(".search-box-follow").css("top","145px");
	                //$("#wraper-content").css("padding-top","80px");
	            }
            }

            $('#myCarousel').carousel('pause');
            $('#myCarousel3').carousel('pause');
            $('.js-activated').dropdownHover().dropdown();


            $(".li-search-box").click(function(){
                if(!clickSearch){
                    $(".search-box").show();
                    $(".search-box-follow").show();clickSearch = true;
                }
                else {
                    $(".search-box").hide();
                    $(".search-box-follow").hide();clickSearch = false;
                }
            });

            $(".btn-show-menu").click(function(){
                if(!clickSmallButton){
                    $(".menu-small").show();clickSmallButton = true;
                }
                else {
                    $(".menu-small").hide();clickSmallButton = false;
                }
            });

            resizePeopleBlock();
                //when window is resized by customer
                $(window).resize(function () {
                    resizeHeightMenu();resizePeopleBlock();
                });

                function resizeHeightMenu(){
                    var bodyWidth = $(window).width();
                    if(bodyWidth > 748) $(".menu-small").hide();
                    else $("#logo").attr("class","");
                }
                function resizePeopleBlock(){
                    var bodyWidth = $(window).width();
                    if(bodyWidth > 748) {
                        $("#showCarouselInSmall").hide();
                        $("#showCarouselInLarge").show();
                    }
                    else {
                        $("#showCarouselInLarge").hide();
                        $("#showCarouselInSmall").show();
                    }
                }

               $('#myCarousel2').carousel({
                    interval: 5000
               });

               $(".pitch1").click(function(){
                   var item = 0;$('#myCarousel2').carousel(item);return false;
               });
               $(".pitch2").click(function(){
                   var item = 1;$('#myCarousel2').carousel(item);return false;
               });
               $(".pitch3").click(function(){
                   var item = 2;$('#myCarousel2').carousel(item);return false;
               });
               $(".pitch4").click(function(){
                   var item = 3;$('#myCarousel2').carousel(item);return false;
               });
               $(".pitch5").click(function(){
                   var item = 4;$('#myCarousel2').carousel(item);return false;
               });
        });