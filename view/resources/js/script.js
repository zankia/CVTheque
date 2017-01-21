$(document).ready(function() {

    //selecteur de CV
    $("#selector > h2:first-of-type").html('Selectionnez des candidats');
    var template = $("#selector  .form-group:first-of-type").remove().clone();
    template.find("input").attr("type", "hidden");

    //quand un profil est selectionné
    $(".CV").click(function() {
        toggleSelected($(this), template);
    });

    //gestion du non js pour les boutons du nav
    $("#connection").attr("href", "#");
    $("#register").attr("href", "#");

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
        template.find("label").html(div.find("h4").html());
        template.find("input").attr("value", id);
        $("#selector form").prepend(template.clone());
    }
}

function scrollToTop() {
    $("body").animate({scrollTop: "0px"});
}
