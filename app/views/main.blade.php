<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>

  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="format-detection" content="telephone=no">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta property="og:title" content="Timax" />
    <meta property="og:url" content="http://qdesign.vn/timax" />
    <meta property="og:image" content="http://qdesign.vn/timax/img/icon_fb.jpg" />
      <meta name="keywords" content="Timax Lorem ipsum dolor sit amet conse ctetur adipisicing elit" />
    <meta name="description" content="Timax Lorem ipsum dolor sit amet conse ctetur adipisicing elit" />
      <title>Home</title>

      <link href="{{url('frontend/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{url('frontend/css/fonts.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="{{url('frontend/js/jquery-1.10.2.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <!--BEGIN SLICK-->
    <script type="text/javascript" src="{{url('frontend/js/slick/slick.js')}}"></script>
      <link href="{{url('frontend/js/slick/slick.css')}}" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="{{url('frontend/js/style.js')}}"></script>
      <!--BEGIN SLICK-->
      <script type="text/javascript" src="{{url('frontend/js/ie-emulation-modes-warning.js')}}"></script>
      <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="container-fluid vnt-wrapper">
      <div class="vnt-head">
        <div class="vnt-head-top">
          <div class="col-md-12 phonePage ">
            <ul class="pull-right">
              <li><a href=""><i class="fa fa-facebook"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus"></i></a></li>
              <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
              <li><a href=""><i class="fa fa-user"></i></a></li>
            </ul>
            <div class="telphone pull-right">
              <i class="fa fa-phone"></i><span>+1 323 203 7513</span>
            </div>
          </div>
          <div class="row menuNav">
            <div class="col-md-2"><a href=""><img src="{{url('frontend/img/baner_03.png')}}"></a></div>
            <div class="col-md-12 phonePage phonePageNull">
              <div class="telphone">
                <i class="fa fa-phone"></i><span>+1 323 203 7513</span>
              </div>
              
            </div>
            <div class="col-md-10">
              <nav class="navbar menu-navar ">
                        <div class="container-fluid item">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav" id="mmenu">
                                    <li class="active"><a href="">Home</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Solid Tire Products</a></li>
                                    <li><a href="">Retreading Materials Products</a></li>
                                    <li><a href="">Dealer</a></li>
                                    <li><a href="">FAQ</a></li>
                                    <li><a href="">Contact US</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
            </div>
          </div>

        </div>
	</div>
		@yield('content')
			@yield('services')
        @yield('product')
		<div class="vnt-footer">
			<span>© 2016 NBR GLOBAL. All Rights Reserved.</span>
		</div>
    </div>
  <script type="text/javascript">
  $('#emailkh').click(function(){
    var a = $('#email').val();
    var b = $('#fullname').val();
    var href = "{{url('send_content_kh')}}"+"/"+a+"/"+b;
    $('#footer_show').html('<img src="{{url("frontend/img/loading.gif")}}">');
    var sTimeOut = setTimeout(function () {
      $.ajax({
        type:"POST",
        url: href,
        success: function(msg){
          $('#footer_show').html(msg);  
        },
        complete: function () {
          clearTimeout(sTimeOut);
        }
      });
    }, 2000);  
  });
</script>

</body>
</html>