$(window).on("load",function()
{
    $(".load").fadeOut(3000)
})
$(".login").animate({
    top:"45%",
},1200,function()
{
    $(this).animate({
        width:"40%"
    },800,function()
    {
        $(this).animate({
            height:"70%"
        })
    })
});
/********************************/
    
let x = Array.from(document.querySelectorAll("input"));


x.forEach(function(item)
{
    item.onkeyup=function()
    {
        let y = item.value.length;

        if(y>25)
        {
           item.nextElementSibling.classList.add("active");
           item.blur();
        }
        else
        {
            item.nextElementSibling.classList.remove("active");
        }


        /************************* */


    }


    item.onblur=function()
    {
        let z = item.value.length;


        if(z ==0)
        {
            item.nextElementSibling.nextElementSibling.classList.add("active");
        }
        else
        {
            item.nextElementSibling.nextElementSibling.classList.remove("active");
        }
    }

})


