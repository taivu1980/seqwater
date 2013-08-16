

var $ = jQuery;
var clickSearch = false;
var clickSmallButton = false;

        $(document).ready(function() {

        	ResizeHeightSiderBar();
        	function ResizeHeightSiderBar(){
        		var heightMain = $("#main").height();
        		$("#sidebar-second").height(heightMain);
        	}
        	
        	var t=setTimeout(function(){ResizeHeightSiderBar();},1000);

        	$(".pitch1").find(".bigbannerslider-active").show();

            //for condition show toolbar manager drupal in top menu
        	if($("#toolbar").length > 0){
	            if($("#toolbar").html() != ''){
	                $("#menu").css("top","65px");
	                $("#menu").css("z-index","30");
	                $("#menu-second-template").css("top","65px");
	                $("#menu-second-template").css("z-index","30");

	                $(".search-box").css("top","157px");
	                $(".search-box-follow").css("top","145px");

	                $("#header").css("margin-top","65px");
	            }
            }

            $('#myCarousel').carousel('pause');
            $('#myCarousel3').carousel('pause');
            $('.js-activated').dropdownHover().dropdown();


            $(".li-search-box").click(function(){

                $(".search-box").find(".form-text").attr("class","form-text span5");
                $(".search-box").find(".form-text").attr("style","height: 30px;");
                $(".search-box").find(".form-text").attr("placeholder","SEARCH...");

                $(".search-box").find(".btn").hide();
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
                    ResizeHeightSiderBar();
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

               $('#myCarousel2').carousel().on('slid', function() {
            	   $("#pitch").find(".bigbannerslider-active").hide();
            	   var index = $(this).find(".active").index() + 1;
                   $(".pitch"+index).find(".bigbannerslider-active").show();
               });

               $(".pitch1").click(function(){
            	   $("#pitch").find(".bigbannerslider-active").hide();
                   var item = 0;$('#myCarousel2').carousel(item);
                   $(".pitch1").find(".bigbannerslider-active").show();
                   return false;
               });
               $(".pitch2").click(function(){
            	   $("#pitch").find(".bigbannerslider-active").hide();
                   var item = 1;$('#myCarousel2').carousel(item);
                   $(".pitch2").find(".bigbannerslider-active").show();
                   return false;
               });
               $(".pitch3").click(function(){
            	   $("#pitch").find(".bigbannerslider-active").hide();
                   var item = 2;$('#myCarousel2').carousel(item);
                   $(".pitch3").find(".bigbannerslider-active").show();
                   return false;
               });
               $(".pitch4").click(function(){
            	   $("#pitch").find(".bigbannerslider-active").hide();
                   var item = 3;$('#myCarousel2').carousel(item);
                   $(".pitch4").find(".bigbannerslider-active").show();
                   return false;
               });
               $(".pitch5").click(function(){
            	   $("#pitch").find(".bigbannerslider-active").hide();
                   var item = 4;$('#myCarousel2').carousel(item);
                   $(".pitch5").find(".bigbannerslider-active").show();
                   return false;
               });
        });