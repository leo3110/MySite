$(function() {

    function Loop() {
        $(".Criador").fadeToggle(1000,"swing",function() {
            .$(".Criador").fadeToggle(1000,"swing",Loop());
        });
    }
    // function Criador() {
    //     $(".Nome").fadeOut(1000,"swing",function() {
    //         $(".Criador").fadeIn(1000,"swing", Nome());
    //     });
    // }
    Loop();
});
