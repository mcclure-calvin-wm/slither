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

    //tried to get an active page highlighter

    //if(window.location.href.match(/action.php/)) {
    //    if ($("puzzle-nav").hover(function () {
    //            $("#action-nav").css({background: "rgba(76, 175, 80, 0)"});
    //        })){
    //        }
    //    else {
    //        $("#action-nav").css({background: "rgba(76, 175, 80, 0.5)"});
    //    }
    //}
});