$(window).scroll(function() {
    var pos = $(document).scrollTop();
    console.log(pos);
    if (pos > 0)
        $("#up").fadeIn();
    else
        $("#up").fadeOut();
});
