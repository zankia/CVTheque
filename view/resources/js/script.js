$(document).ready(function() {

    //selecteur de CV
    $("#selector > h2:first-of-type").html('Selectionnez des candidats');
    var template = $("#selector  .form-group:first-of-type").remove().clone();
    template.find("input").attr("type", "hidden");

    //quand un profil est selectionné
    $(".CV").click(function() {
        toggleSelected($(this), template);
    });

    //desactivation des liens des modals
    $('[data-toggle="modal"]').attr("href", "#");

})


//ancrage up
$(window).scroll(function() {
    var pos = $(document).scrollTop();
    if (pos > 0)
        $("#up").fadeIn();
    else
        $("#up").fadeOut();
});


function toggleSelected(div, template) {
    var id = div.attr("id").substr(3);
    if(div.hasClass("selected")) {
        div.removeClass("selected");
        $("#" + id).remove();
    } else {
        div.addClass("selected");
        template.attr("id", id);
        var name = div.find("h4").html()
        template.find("label").html(name.substring(0, name.indexOf("<")));
        template.find("input").attr("value", id);
        $("#selector form").prepend(template.clone());
    }
}

function scrollToTop() {
    $("body").animate({scrollTop: "0px"});
}
