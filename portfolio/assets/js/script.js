jQuery(document).ready(function($){
    console.log('loading custom js')
    /*----- menu icon toggle -----*/
    $("#navPhone").hide();
    $(".menu-btn").click(function(){
        $("#navPhone").fadeToggle();
    });

     $(window).on('scroll', function () {
        $('.header-section').toggleClass(
            'scroll-navbar-color',
            $(this).scrollTop() > 200
        );
    });

    var typed = new Typed('.title-typed',{
        strings: ["WordPress Developer.", "Laravel Developer.", "Shpify Developer" ],
        typeSpeed: 150,
		backSpeed: 100,
		loop: true,
    });

let counterStarted = false;
$(window).on('scroll', function () {
    if(!counterStarted && $('.timer').length ) {
         $('.timer').counterUp({
        time: $(this).data('time'),
        delay : 10,
    });
    counterStarted = true;
    }
});

var waypoint = new Waypoint( {
  element: document.querySelector('.about-description'),
  handler: function(direction) {
     if (direction === 'down') {
            $('.about-description')
                .addClass('animate__animated animate__fadeInRight');
        }

        if (direction === 'up') {
            $('.about-description')
                .removeClass('animate__animated animate__fadeInRight');
        }
    },

    offset: '100%'
});
// $('.about-description').waypoint(function(direction){
//     if (direction === 'down') {
//             $('.about-description')
//                 .removeClass('animate__animated animate__fadeInRight')
//                 .addClass('animate__animated animate__fadeInRight');
//             }
//             if (direction === 'up') {
//                 $('.about-description').removeClass('animate__animated animate__fadeInRight');
//             }
//         },{
//             offset: '100%'
//         } );
const scrollPercentage = () => {

    let progress = $("#progress-top");

    let scrollTop    = $(window).scrollTop();
    let scrollHeight = $(document).height() - $(window).height();

    if (scrollHeight <= 0) return;

    let percent = Math.round((scrollTop / scrollHeight) * 100);

    progress.css(
        "width", percent + '%'
    );
};

const scrollTopFunc = () => {
    let scrollTop    = $(window).scrollTop();
    const scrollBtn = $('.scroll-top-btn');
    if( scrollTop > 200 ) {
        scrollBtn.addClass('show');
    } else{
        scrollBtn.removeClass('show');
    }
}

     $('.scroll-top-btn').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 90);
    return false;
     });

$(window).on("scroll load", function () {
    scrollPercentage();
    scrollTopFunc();
});


    /*----- courses section slick add -----*/
    $(".slick-items").slick({ 
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        prevArrow: "<span class='left-arrow'><i class='bx bx-chevron-left'></i></span>",
        nextArrow: "<span class='right-arrow'><i class='bx bx-chevron-right'></i></span>",
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    /*----- testimonial section slick -----*/
    $(".testimonial-items").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false
    });

    /*----- blog section slick add -----*/
    $(".blog-wrapper").slick({ 
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        pauseOnHover: false,
          responsive: [
        {
            breakpoint: 1280,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 1024, 
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768, 
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480, 
            settings: {
                slidesToShow: 1
            }
        }
    ]
    });


//  Initial active tab
  $('.courses-tab').first().addClass('active');
  $('.courses-tab-content').first().addClass('active');
  updateDivider($('.courses-tab.active'));

  $('.courses-tab').click(function(){
    $('.courses-tab').removeClass('active');
    $(this).addClass('active');

    $('.courses-tab-content').removeClass('active');
    $('#' + $(this).data('tab')).addClass('active');

    updateDivider($(this));
  });

  function updateDivider(tab){
    var width = tab.outerWidth();
    var left = tab.position().left;
    $('.tab-divider').css({width: width + 'px', left: left + 'px'});
  }
});
