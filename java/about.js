
let span1 = Array.from(document.querySelectorAll(".gellary .group span"));
let div1 = Array.from(document.querySelectorAll(".gellary .a0"));

let current1 = 0;

for(let i=0 ;i<span1.length;++i)
{
    span1[i].setAttribute("data-choose",i)
}


span1.forEach(function(s)
{
    s.addEventListener("click",function()
    {
        current1=s.getAttribute("data-choose");
        remove1();
        check()
        
    })
})

check();


function check()
{
    div1[current1].classList.add("active")
}

function remove1()
{
    div1.forEach(function(q1)
    {
        q1.classList.remove("active")
    })
}

$('.venobox').venobox(); 


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


var swiper = new Swiper(' .about1 .swiper-container', {
    direction: 'vertical',
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });


  
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


new WOW().init();

let x12 = document.querySelector(".up");

x12.addEventListener("click",function()
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




let x18 = Array.from(document.querySelectorAll(".navbar .navbar-nav .nav-item .nav-link"));


x18.forEach(function(link)
{
    link.addEventListener("click",function()
    {
        remove()
       link.classList.add("active")
    })
})

function remove()
{
    x18.forEach(function(item)
    {
        item.classList.remove("active")
    })
}


$('.venobox1').venobox(); 
$('.venobox2').venobox(); 