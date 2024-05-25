let x = Array.from(document.querySelectorAll(".navbar .navbar-nav .nav-item .nav-link"));


x.forEach(function(link)
{
    link.addEventListener("click",function()
    {
        remove()
       link.classList.add("active")
    })
})

function remove()
{
    x.forEach(function(item)
    {
        item.classList.remove("active")
    })
}

let x1 = $(window).innerHeight();
 $(".header").innerHeight(x1);
 $(".carousel-item").innerHeight(x1)

 $(window).on("resize",function()
 {
    let x1 = $(window).innerHeight();
    $(".header").innerHeight(x1);
    $(".carousel-item").innerHeight(x1) 
})


var typed = new Typed('.animate', {
    strings: ['Attendence'
    , 'Cheating',

],
    smartBackspace: true ,

    typeSpeed:50,
    backSpeed:50,
    startDelay:200,
    loop: true,
  });

  var typed = new Typed('.animate1', {
    strings: ['Attendence'
    , 'Cheating',



],
    smartBackspace: true ,

    typeSpeed:50,
    backSpeed:50,
    startDelay:200,
    loop: true,
  });




  $('.venobox').venobox(); 



  $('.Partners .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    stagePadding:true,
    dots:true,
    center:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false,
            loop:true
        }
    }
})


  $(window).on("scroll",function()
  {

      if($(this).scrollTop() >= (($(".statistics").offset().top)+$(".statistics").innerHeight()) -$(".statistics").innerHeight())
      {
        $('.timer').countTo();
        $(window).off("scroll")
      }
  })


  $('.gellary .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    stagePadding:true,
    dots:true,
    center:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false,
            loop:true
        }
    }
})


let span = Array.from(document.querySelectorAll(".gellary .group span"));
let div = Array.from(document.querySelectorAll(".gellary .a0"));

let current = 0;

for(let i=0 ;i<span.length;++i)
{
    span[i].setAttribute("data-choose",i)
}


span.forEach(function(s)
{
    s.addEventListener("click",function()
    {
        current=s.getAttribute("data-choose");
        remove1();
        check()
        
    })
})

check();


function check()
{
    div[current].classList.add("active")
}

function remove1()
{
    div.forEach(function(q1)
    {
        q1.classList.remove("active")
    })
}


$('.team .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    stagePadding:true,
    dots:true,
    center:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
            loop:true
        }
    }
});


new WOW().init();


$(window).on("scroll",function()
{
    if($(this).scrollTop() > $(this).innerHeight())
    {
        $(".up").fadeIn(1000)
    }
    else
    {
        $(".up").fadeOut(1000)
    }
});

let x11 = document.querySelector(".up");

x11.addEventListener("click",function()
{
    window.scroll({
        top:0,
        left:0,
        behavior:"smooth"
    })
});

$(".option .span1").on("click",function()
{
    $(this).parent().toggleClass("close1")
});

$(".option li").on("click",function()
{
    $(this).addClass("active");

    let x = $(this).attr("data-color");
    
    document.documentElement.style.setProperty("--main-color",x)
});


$(window).on("load",function()
{
    $(".load").fadeOut(3000)
})


$('.venobox1').venobox(); 
$('.venobox2').venobox(); 