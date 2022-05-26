$(function() {
    function Loop() {
        $(".Criador").fadeOut(1000,"swing",function() {
            $(".Nome").fadeIn(2500,"swing",function() {
                $(".Nome").fadeOut(1000,"swing",function() {
                    $(".Criador").fadeIn(2500,"swing",function() {
                        Loop();
                    });
                });
            });
        });
    }
    Loop();
});
