
LANGUAGE = "Javascript">
$(document).ready(function() {
  $("a[href*='#']:not([href='#])").click(function() {
    let target = $(this).attr("href");
    $('html,body').stop().animate({
      scrollTop: $(target).offset().top
    }, 1000);
    event.preventDefault();
  });
});