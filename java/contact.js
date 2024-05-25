let x16 = document.querySelector(".up");

x16.addEventListener("click",function()
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