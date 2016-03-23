function loadlisttopphim(id) {
	var href = "topphim/"+id +".html";

            $.ajax({
                    type:"POST",
                    url: href,
                    success: function(msg){
                      	$('#topphim').html(msg);
                      	$(' .film-lick1').slick({
				            slidesToShow:7,
				            slidesToScroll: 1,
				            focusOnSelect: true,
				            arrows: true,
				            autoplay: false,
				            prevArrow:'<span class="top-prev"></span>',
				            nextArrow:'<span class="top-next"></span>',
				            responsive:[
				            {
				              breakpoint: 1200,
				              settings: {
				                slidesToShow: 5,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 1024,
				              settings: {
				                slidesToShow: 4,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 480,
				              settings: {
				                slidesToShow: 1,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 768,
				              settings: {
				                slidesToShow: 3,
				                slidesToScroll: 1
				              }
				            }]
				        }); 
				    }
            });
}
function loadlistdecu() {
	var href = "decu/1.html";

            $.ajax({
                    type:"POST",
                    url: href,
                    success: function(msg){
                      	$('#decu').html(msg);
                      	$(' .film-lick2').slick({
				            slidesToShow:7,
				            slidesToScroll: 1,
				            focusOnSelect: true,
				            arrows: true,
				            autoplay: false,
				            prevArrow:'<span class="top-prev"></span>',
				            nextArrow:'<span class="top-next"></span>',
				            responsive:[
				            {
				              breakpoint: 1200,
				              settings: {
				                slidesToShow: 5,
				                slidesToScroll: 2
				              }
				            },
				            {
				              breakpoint: 1024,
				              settings: {
				                slidesToShow: 4,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 480,
				              settings: {
				                slidesToShow: 2,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 768,
				              settings: {
				                slidesToShow: 3,
				                slidesToScroll: 1
				              }
				            }]
				        }); 
				    }
            });
}
function loadlistphimle(id) {
	var href = "phimle/"+id +".html";

            $.ajax({
                    type:"POST",
                    url: href,
                    success: function(msg){
                      	$('#phimle').html(msg);
                      	$(' .film-lick3').slick({
				            slidesToShow:7,
				            slidesToScroll: 1,
				            focusOnSelect: true,
				            arrows: true,
				            autoplay: false,
				            rows: 2,
				            prevArrow:'<span class="top-prev"></span>',
				            nextArrow:'<span class="top-next"></span>',
				            responsive:[
				            {
				              breakpoint: 1200,
				              settings: {
				                slidesToShow: 5,
				                slidesToScroll: 2
				              }
				            },
				            {
				              breakpoint: 1024,
				              settings: {
				                slidesToShow: 4,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 480,
				              settings: {
				                slidesToShow: 2,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 768,
				              settings: {
				                slidesToShow: 3,
				                slidesToScroll: 1
				              }
				            }]
				        }); 
				    }
            });
}
function loadlistphimbo(id) {
	var href = "phimbo/"+id +".html";

            $.ajax({
                    type:"POST",
                    url: href,
                    success: function(msg){
                      	$('#phimbo').html(msg);
                      	$(' .film-lick4').slick({
				            slidesToShow:7,
				            slidesToScroll: 7,
				            focusOnSelect: true,
				            arrows: true,
				            autoplay: false,
				            rows: 2,
				            prevArrow:'<span class="top-prev"></span>',
				            nextArrow:'<span class="top-next"></span>',
				            responsive:[
				            {
				              breakpoint: 1200,
				              settings: {
				                slidesToShow: 5,
				                slidesToScroll: 2
				              }
				            },
				            {
				              breakpoint: 1024,
				              settings: {
				                slidesToShow: 4,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 480,
				              settings: {
				                slidesToShow: 2,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 768,
				              settings: {
				                slidesToShow: 3,
				                slidesToScroll: 1
				              }
				            }]
				        }); 
				    }
            });
}
function loadlistphimchieurap() {
	var href = "phimchieurap/1.html";

            $.ajax({
                    type:"POST",
                    url: href,
                    success: function(msg){
                      	$('#phimchieurap').html(msg);
                      	$(' .film-lick5').slick({
				            slidesToShow:7,
				            slidesToScroll: 7,
				            focusOnSelect: true,
				            arrows: true,
				            autoplay: false,
				            prevArrow:'<span class="top-prev"></span>',
				            nextArrow:'<span class="top-next"></span>',
				            responsive:[
				            {
				              breakpoint: 1200,
				              settings: {
				                slidesToShow: 5,
				                slidesToScroll: 2
				              }
				            },
				            {
				              breakpoint: 1024,
				              settings: {
				                slidesToShow: 4,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 480,
				              settings: {
				                slidesToShow: 2,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 768,
				              settings: {
				                slidesToShow: 3,
				                slidesToScroll: 1
				              }
				            }]
				        }); 
$('a.title').cluetip();
				    }
            });
}
function loadlistphimsapchieu() {
	var href = "phimsapchieu/1.html";

            $.ajax({
                    type:"POST",
                    url: href,
                    success: function(msg){
                      	$('#phimsapchieu').html(msg);
                      	$(' .film-lick6').slick({
				            slidesToShow:7,
				            slidesToScroll: 7,
				            focusOnSelect: true,
				            arrows: true,
				            autoplay: false,
				            prevArrow:'<span class="top-prev"></span>',
				            nextArrow:'<span class="top-next"></span>',
				            responsive:[
				            {
				              breakpoint: 1200,
				              settings: {
				                slidesToShow: 5,
				                slidesToScroll: 2
				              }
				            },
				            {
				              breakpoint: 1024,
				              settings: {
				                slidesToShow: 4,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 480,
				              settings: {
				                slidesToShow: 2,
				                slidesToScroll: 1
				              }
				            },
				            {
				              breakpoint: 768,
				              settings: {
				                slidesToShow: 3,
				                slidesToScroll: 1
				              }
				            }]
				        }); 
				    }
            });
}