$(document).ready(function(){
    $('.slideItem').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        focusOnSelect: true,
        fade: true,
        dots: true,
        speed: 700,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2200,
        responsive:[
        {
          breakpoint: 1024,
          settings: {
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }]
    });
    $('.specialSlide').slick({
        slidesToShow:4,
        slidesToScroll: 1,
        focusOnSelect: true,
        
        prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
        responsive:[
            {
                breakpoint: 1260,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint:768,
                settings: {
                    speed: false,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint:480,
                settings: {
                    speed: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

// $(document).ready(function(){

//     $(".row-Faq .item-Faq .show-answer").click(function(){

//         if($(this).parents(".row-Faq").hasClass("show")){
//            $(".row-Faq").removeClass("show");
//            $(this).parents(".row-Faq").find(".item-answer").stop().slideToggle("0");
//         }
//         else{
//             $(".row-Faq.show .item-answer").stop().slideToggle("700");
//             $(".row-Faq").removeClass("show");
//             $(this).parents(".row-Faq").addClass("show");
//             $(this).parents(".row-Faq").find(".item-answer").stop().slideToggle("700");

//         }    

//     });  

// });







