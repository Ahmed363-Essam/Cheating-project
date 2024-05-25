
let x10 = ""
$("[placeholder]").on("focus",function()
{
     x10 = $(this).attr("placeholder");

     $(this).attr("placeholder"," ");

}).blur(function()
{
    
    $(this).attr("placeholder",x10);
})


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
