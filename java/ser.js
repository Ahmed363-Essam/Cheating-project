$(window).on("scroll",function()
{

    if($(this).scrollTop() >= (($(".statistics").offset().top)+$(".statistics").innerHeight()) -$(".statistics").innerHeight())
    {
      $('.timer').countTo();
      $(window).off("scroll")
    }
})

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

let x13 = document.querySelector(".up");

x13.addEventListener("click",function()
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


let x2 = Array.from(document.querySelectorAll(".navbar .navbar-nav .nav-item .nav-link"));


x2.forEach(function(link)
{
    link.addEventListener("click",function()
    {
        remove()
       link.classList.add("active")
    })
})

function remove()
{
    x2.forEach(function(item)
    {
        item.classList.remove("active")
    })
}