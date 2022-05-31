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
    $(":root").css("--c1",cor());
    $(":root").css("--c2",cor());
    $(":root").css("--c3",cor());
    $(":root").css("--c4",cor());
    $(":root").css("--c5",cor());
    $("#pallete").click(function() {
        $(".Pallete").css("background-color",cor());
        $(".Background").css("background-color",cor());
        $(".ULeft").css("background-color",cor());
        $(".URight").css("background-color",cor());
        $(".CDown").css("background-color",cor());
    });
    $("#save").click(function() {
        $("#extract").text("");
        $("#extract").append("--c1:"+$('.Pallete').css("background-color")+";<br>");
        $("#extract").append("--c2:"+$(".Background").css("background-color")+";<br>");
        $("#extract").append("--c3:"+$(".ULeft").css("background-color")+";<br>");
        $("#extract").append("--c4:"+$(".URight").css("background-color")+";<br>");
        $("#extract").append("--c5:"+$(".CDown").css("background-color")+";");
    });
})
