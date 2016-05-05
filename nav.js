$(document).ready(function(){
    $("#li6").hover(function () {
        $("#dropdowns")
            .css({display: "inherit"})
            .hover(function(){
                $("#dropdowns").css({display: "inherit"});
            }, function(){
                $("#dropdowns").css({display: "none"});
            });
    }, function () {
        $("#dropdowns").css({display: "none"});
    });
});