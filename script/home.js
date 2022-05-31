$(function() {
    function Loop() {
        $(".Creator").fadeOut(1000,"swing",function() {
            $(".Name").fadeIn(2200,"swing",function() {
                $(".Name").fadeOut(1000,"swing",function() {
                    $(".Creator").fadeIn(2200,"swing",function() {
                        Loop();
                    });
                });
            });
        });
    }
    Loop();
});
