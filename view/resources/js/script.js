$(document).ready(function() {

    $(".CV").click(function() {
        toggleSelected($(this));
    });

})


$(window).scroll(function() {
    var pos = $(document).scrollTop();
    if (pos > 0)
        $("#up").fadeIn();
    else
        $("#up").fadeOut();
});


function toggleSelected(div) {
    if(div.hasClass("selected")) {
        div.removeClass("selected");
    } else {
        div.addClass("selected");
    }
}

function scrollToTop() {
    $("body").animate({scrollTop: "0px"});
}
