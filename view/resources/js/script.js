$(window).scroll(function() {
    var pos = $(document).scrollTop();
    if (pos > 0)
        $("#up").fadeIn();
    else
        $("#up").fadeOut();
});

function scrollToTop() {
    $('body').animate({scrollTop: '0px'});
}
