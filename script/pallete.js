$(function(){
    function num() {
        return Math.floor(Math.random() * (255 - 0 + 1) ) + 0;
    }
    function alfa() {
        return Math.floor(Math.random() * ((100 - 30 + 1) ) + 30) / 100;
    }
    function cor(){
        return "rgba("+num()+","+num()+","+num()+","+alfa()+")";
    }
	$(".Pallete").css("background-color",cor());
	$(".Background").css("background-color",cor());
	$(".ULeft").css("background-color",cor());
	$(".URight").css("background-color",cor());
	$(".CDown").css("background-color",cor());
    $("#New").click(function() {
        $(".Pallete").css("background-color",cor());
        $(".Background").css("background-color",cor());
        $(".ULeft").css("background-color",cor());
        $(".URight").css("background-color",cor());
        $(".CDown").css("background-color",cor());
    });
    $("#Save").click(function() {
        $("#Extract").text("");
        $("#Extract").append("<span>--p1:"+$('.Pallete').css("background-color")+"</span>;<br>");
        $("#Extract").append("<span>--p2:"+$(".Background").css("background-color")+"</span>;<br>");
        $("#Extract").append("<span>--p3:"+$(".ULeft").css("background-color")+"</span>;<br>");
        $("#Extract").append("<span>--p4:"+$(".URight").css("background-color")+"</span>;<br>");
        $("#Extract").append("<span>--p5:"+$(".CDown").css("background-color")+"</span>;");
    });
})
