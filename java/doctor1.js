$(".servs li").each(function()
{
    $(this).on("click",function()
    {
        $(this).addClass("active").siblings().removeClass("active")
    })
})
      
var mixer = mixitup('.ahmed404');


let x15 = document.querySelector(".up");

x15.addEventListener("click",function()
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


let x5 = Array.from(document.querySelectorAll(".navbar .navbar-nav .nav-item .nav-link"));


x5.forEach(function(link)
{
    link.addEventListener("click",function()
    {
        remove()
       link.classList.add("active")
    })
})

function remove()
{
    x5.forEach(function(item)
    {
        item.classList.remove("active")
    })
}