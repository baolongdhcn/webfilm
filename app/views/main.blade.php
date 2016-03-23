<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
<meta name="format-detection" content="telephone=no">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/responsive.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">

<!-- <link rel="stylesheet" type="text/css" href="frontend/plugin/moving-box/css/style.css"> -->


<link rel="stylesheet" type="text/css" href="{{url('frontend/plugin/slick/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('frontend/plugin/OwlCarousel/owl-carousel/owl.theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('frontend/plugin/OwlCarousel/owl-carousel/owl.carousel.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="frontend/plugin/moving-box/css/style.css"> -->

<script type="text/javascript" src="{{url('frontend/js/option.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery-1.7.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/plugin/OwlCarousel/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/plugin/carouFredSel/jquery.carouFredSel-6.2.1.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/plugin/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.cluetip.min.js')}}"></script>




<title>Phim</title>
</head>
<body>
    <div class="container-fluid" style="padding:0"> 
        <nav class="navbar navbar-default">
          <div class="" style="margin:0">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="{{url('frontend/images/logo.png')}}" width="90px" class="img-responsive"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="menu-1" li-index="0">
                    <a href="#">
                        <span class="ic-phimle">
                        </span>
                        PHIM LE
                    </a>      
                    <div class="submenu">
                        <div class="submenu-ct">
                            <ul class="clearfix">
                                <li><a href="" >Phim Hành Động</a></li>
                                <li><a href="" >Phim Phiêu Lưu</a></li>
                                <li><a href="" >Phim Kinh Dị</a></li>
                                <li><a href="" >Phim Tình Cảm</a></li>
                                <li><a href="" >Phim Hoạt Hình</a></li>
                                <li><a href="" >Phim Võ Thuật</a></li>
                            </ul>
                        </div>
                    </div>                               
                </li>
                <li class="menu-1" li-index="1">
                    <a href="#">
                        <span class="ic-phimbo"></span>
                        PHIM BỘ
                    </a>
                    <div class="submenu">
                        <div class="submenu-ct">
                            <ul class="clearfix">
                                <li><a href="#">Phim 1</a></li>
                                <li><a href="#">Phim 2</a></li>
                                <li><a href="#">Phim 3</a></li>
                                <li><a href="#">Phim 4</a></li>
                                <li><a href="#">Phim 5</a></li>
                                <li><a href="#">Phim 6</a></li>
                                <li><a href="#">Phim 7</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#contact">
                        <span class="ic-tintuc"></span>
                        TIN TỨC
                    </a>
                                         
                </li>
                <li class="menu-1" li-index="3">
                    <a href="#">
                        <span class="ic-more"></span>
                        MORE
                    </a>
                    <div class="submenu">
                        <div class="submenu-ct">
                            <ul class="clearfix">
                                <li><a href="#">Phim 1</a></li>
                                <li><a href="#">Phim 2</a></li>
                                <li><a href="#">Phim 3</a></li>
                                <li><a href="#">Phim 4</a></li>
                                <li><a href="#">Phim 5</a></li>
                                <li><a href="#">Phim 6</a></li>
                                <li><a href="#">Phim 7</a></li>
                                <li><a href="#">Phim 5</a></li>
                                <li><a href="#">Phim 6</a></li>
                                <li><a href="#">Phim 7</a></li>
                                <li><a href="#">Phim 5</a></li>
                                <li><a href="#">Phim 6</a></li>
                                <li><a href="#">Phim 7</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
              </ul>
              <div class="pull-right" id="searchct">
                <div class="form-group">
                    <input id="inputsearch" type="text" class="form-control" placeholder="Tìm: Phim, Đạo diễn, Diễn viên..." >
                </div>
                
              </div>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <div class="bgMenu"></div>
        @yield('content')
       
        <!-- /maincontent -->
        <div class="footer-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <p class="title">HDONLINE</p>
                        <ul class="">

                            <li><a href="">Giới thiệu</a></li>

                            <li><a href="">Phiên bản Mobile</a></li>

                            <li><a href="">Facebook HDO</a></li>

                            <li><a href="">Youtube Channel</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p class="title">ĐÓNG GÓP</p>
                        <ul class="">

                            <li><a href="">Thành viên VIP</a></li>

                            <li><a href="">Hướng dẫn sử dụng</a></li>

                            <li><a href="">Liên hệ quảng cáo</a></li>



                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p class="title">QUY ĐỊNH</p>
                        <ul class="">

                            <li><a href="">Điều khoản sử dụng</a></li>

                            <li><a href="">Chính sách riêng tư</a></li>

                            <li><a href="">Nguyên tắc cộng dồng</a></li>

                            <li><a href="">Khiếu nại bản quyền</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p class="title">TRỢ GIÚP</p>
                        <ul class="">

                            <li><a href="">Hỏi đáp</a></li>

                            <li><a href="">Liên hệ</a></li>

                            <li><a href="">Góp ý</a></li>

                            <li><a href="">Báo lỗi</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /footer-menu -->
        <div class="footer-cp">
            <div id="copyright">
                Copyright ©2016 HDONLINE.VN. All Rights Reserved. Phiên bản thử nghiệm đang chờ xin giấy phép bộ TT & TT.
            </div>
        </div>
       <!-- /footer-cp -->
        
    </div> <!-- /container-fluid -->
    <script type="text/javascript">
      
    
  

    $( document ).ready(function() {
        setInterval(function(){
            var slider=$(".slider").height();
            $("#sidebar-right").css({height:slider});
        },3000);
        
    
        var owlphimtop = $('#phimtop .owl-carousel');
            owlphimtop.owlCarousel({
            items : 6, //10 items above 1000px browser width
            itemsDesktop : [1130,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,4], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false,
        })

        $("#top-next").click(function(){
            owlphimtop.trigger('owl.next');
        })
        $("#top-prev").click(function(){
            owlphimtop.trigger('owl.prev');
        })

        var owlphimdc = $('#phimdc .owl-carousel');
            owlphimdc.owlCarousel({
            items : 6, //10 items above 1000px browser width
            itemsDesktop : [1130,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,4], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false,
        })
        $("#phimdc-next").click(function(){
            owlphimdc.trigger('owl.next');
        })
        $("#phimdc-prev").click(function(){
            owlphimdc.trigger('owl.prev');
        })

        var owlphimle = $('#phimle .owl-carousel');
            owlphimle.owlCarousel({
            items : 6, //10 items above 1000px browser width
            itemsDesktop : [1130,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,4], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false,
        })
        $("#next-le").click(function(){
            owlphimle.trigger('owl.next');
        })
        $("#prev-le").click(function(){
            owlphimle.trigger('owl.prev');
        })    

        var owlphimbo = $('#phimbo .owl-carousel');
            owlphimbo.owlCarousel({
            items : 6, //10 items above 1000px browser width
            itemsDesktop : [1130,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,4], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false,
        })
        $("#phimbo-next").click(function(){
            owlphimbo.trigger('owl.next');
        })
        $("#phimbo-prev").click(function(){
            owlphimbo.trigger('owl.prev');
        }) 

        var owlphimsapchieu = $('#phimsapchieu .owl-carousel');
            owlphimsapchieu.owlCarousel({
            items : 6, //10 items above 1000px browser width
            itemsDesktop : [1130,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,4], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false,
        })
        $("#phimsapchieu-next").click(function(){
            owlphimsapchieu.trigger('owl.next');
        })
        $("#phimsapchieu-prev").click(function(){
            owlphimsapchieu.trigger('owl.prev');
        }) 

        var owlphimchieurap = $('#phimchieurap .owl-carousel');
            owlphimchieurap.owlCarousel({
            items : 6, //10 items above 1000px browser width
            itemsDesktop : [1130,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,4], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false,
        })
        $("#phimchieurap-next").click(function(){
            owlphimchieurap.trigger('owl.next');
        })
        $("#phimchieurap-prev").click(function(){
            owlphimchieurap.trigger('owl.prev');
        })
      })


$( ".owl-carousel .item .film-item" ).hover(function() {
    console.log($(this).position().left);
    $(this).removeClass("leftarrow");
    $(this).removeClass("rightarrow");
    var w=$(window).width();
    if($(this).offset().left>w/2){
        $(this).find(".tomtat-film").css({left:"-180%"});
        $(this).addClass("rightarrow");
    }
    else
    {
        $(this).find(".tomtat-film").css({left:$(this).find("img").width()});
        $(this).addClass("leftarrow");
    }
    $(this).find(".film-overplay").css({top:-$(this).find("img").height()/2});
    $(this).find(".tomtat-film").stop(true,true).delay(500).show(0);
      

  }, function() {
    $(this).find(".tomtat-film").stop(true,true).delay(500).hide(0);
  }
);

    $( ".navbar .menu-1" ).hover(
        
        function () {
            
            $(this).find(".submenu").css({
                left: -$(this).attr("li-index")*$(this).width()
              });
             $( ".bgMenu" ).height( $(this).find(".submenu").height() ).css({
                display: "block"
              });

        }, 
                
        function () {
            $(this).find(".submenu").css({
                left: 0
              });
            $( ".bgMenu" ).css({
                display: "none"
              });
        }
   
    ); 
        $('.slider-sclik').slick({
         slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  prevArrow:'<span class="nav-banner-pre"></span>',
  nextArrow:'<span class="nav-banner-next"></span>',
  fade: true,
  asNavFor: '.slider-nav'
    });
        $('.slider-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slider-sclik',

  centerMode: true,
  focusOnSelect: true
});     
                       
 




        $( ".nav-banner-pre" ).click(function() {
            var citem=$("#slider .item").size();
            $("#slider .item").each(function(){
                if($(this).hasClass( "slick-active" )){
                    if($(this).index()==citem-1){
                        $(".slider-nav .btn-circle").eq(0).removeClass("slick-current");
                        $(".slider-nav .btn-circle").eq(citem-1).addClass("slick-current");  
                    }
                    else{
                        $(".slider-nav .btn-circle").eq($(this).index()).addClass("slick-current");  
                        $(".slider-nav .btn-circle").eq($(this).index()+1).removeClass("slick-current");
                    }
                }
                else{
                    // $("#slider .kte).find(".click-active").removeClass("slick-current");
                }
                // $( "#slider" ).find( ".slick-active" ).css( "background-color", "red" );
            });
            
        });
         $( ".nav-banner-next" ).click(function() {
            $("#slider .item").each(function(){
                if($(this).hasClass( "slick-active" )){
                    $(".slider-nav .btn-circle").eq($(this).index()).addClass("slick-current");  
                    $(".slider-nav .btn-circle").eq($(this).index()-1).removeClass("slick-current");
                }
                else{
  
                }
            
        });

    });

  </script>
 

</body>

</html>
