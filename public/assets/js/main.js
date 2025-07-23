
$(".counter").each(function () {
  var $this = $(this),
    countTo = $this.attr("data-countto");
  countDuration = parseInt($this.attr("data-duration"));
  $({ counter: $this.text() }).animate(
    {
      counter: countTo
    },
    {
      duration: countDuration,
      easing: "linear",
      step: function () {
        $this.text(Math.floor(this.counter));
      },
      complete: function () {
        $this.text(this.counter);
      }
    }
  );
});

// header scroll

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();    
  if (scroll <= 30) {
    $(".header-shrink").removeClass("header-shrink").addClass("custom-shadow");
  }else{

    $(".custom-shadow").removeClass("custom-shadow").addClass("header-shrink");
  }
});

$('.featured-book').owlCarousel({
    loop:true,
    autoplay:true,
    margin:20,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$('.featured-authors').owlCarousel({
    loop:true,
    margin:20,
    autoplay:true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.testimonial').owlCarousel({
  loop:true,
  margin:20,
  autoplay:true,
  nav:false,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:2
      }
  }
})

$('.home-slider').owlCarousel({
  loop:true,
  autoplay:true,
  nav:false,
  dots:false,
  responsive:{

      0:{

          items:2
      },
      600:{

          items:2
      },
      1000:{
          items:2
      }
  }
})

$('.distribution').owlCarousel({
  loop:true,
  margin:20,
  autoplay:true,
  nav:false,
  dots:true,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:3
      },
      1000:{
          items:4
      }
  }
})


$(".nav-pills-custom .nav-link").click(function(){  
  $(".right").removeClass("active");
  $(".nav-pills-custom-right .nav-link").removeClass("active");
});
$(".nav-pills-custom-right .nav-link").click(function(){  
  $(".left").removeClass("active");
  $(".nav-pills-custom .nav-link").removeClass("active");
});


// header
$(".navbar-toggler").click(function(){  
  $(".navbar-collapse.collapse").toggleClass("show");
  
});


$('.slide-ads-banner').owlCarousel({
	loop: true,
	margin: 20,
	nav: false,
	autoplay: true,
	smartSpeed: 2000,
	dots: true,
	lazyLoad: true,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		1000: {
			items: 1
		}
	}
})