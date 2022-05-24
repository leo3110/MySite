$(function(){
    function numero() {
        return Math.floor(Math.random() * (255 - 0 + 1) ) + 0;
    }
    function alfa() {
        return Math.floor(Math.random() * ((100 - 30 + 1) ) + 30) / 100;
    }
    function cor(){
        return "rgba("+numero()+","+numero()+","+numero()+","+alfa()+")";
    }
    $(":root").css("--c1",cor());
    $(":root").css("--c2",cor());
    $(":root").css("--c3",cor());
    $(":root").css("--c4",cor());
    $(":root").css("--c5",cor());
    $("#paleta").click(function() {
        $(".Paleta").css("background-color",cor());
        $(".Fundo").css("background-color",cor());
        $(".CEsquerda").css("background-color",cor());
        $(".CDireita").css("background-color",cor());
        $(".CBaixo").css("background-color",cor());
    });
    $("#salvar").click(function() {
        $("#saida").text("");
        $("#saida").append("--c1:"+$('.Paleta').css("background-color")+";<br>");
        $("#saida").append("--c2:"+$(".Fundo").css("background-color")+";<br>");
        $("#saida").append("--c3:"+$(".CEsquerda").css("background-color")+";<br>");
        $("#saida").append("--c4:"+$(".CDireita").css("background-color")+";<br>");
        $("#saida").append("--c5:"+$(".CBaixo").css("background-color")+";");
    });
})
