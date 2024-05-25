$(".servs .left1 li").each(function () {
  $(this).on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");

    let x = $(this).attr("data-choose");

    $("#" + x)
      .siblings()
      .fadeOut(200, function () {
        $(this).removeClass("active");
      });

    $("#" + x).fadeIn(200, function () {
      $(this).addClass("active");
    });
  });
});
new WOW().init();

let x14 = document.querySelector(".up");

x14.addEventListener("click", function () {
  window.scroll({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});

$(".option .span1").on("click", function () {
  $(this).parent().toggleClass("close1");
});

$(".option li").on("click", function () {
  $(this).addClass("active");

  let x = $(this).attr("data-color");

  document.documentElement.style.setProperty("--main-color", x);
});

$(window).on("load", function () {
  $(".load").fadeOut(3000);
});

let x3 = Array.from(
  document.querySelectorAll(".navbar .navbar-nav .nav-item .nav-link")
);

x3.forEach(function (link) {
  link.addEventListener("click", function () {
    remove();
    link.classList.add("active");
  });
});

function remove() {
  x3.forEach(function (item) {
    item.classList.remove("active");
  });
}