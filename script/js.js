function D20()  {document.getElementById("resultado").innerHTML = Math.floor(Math.random()*20)+1;}
function D10()  {document.getElementById("resultado").innerHTML = Math.floor(Math.random()*10)+1;}
function D100() {document.getElementById("resultado").innerHTML = Math.floor(Math.random()*100)+1;}
function D6()   {document.getElementById("resultado").innerHTML = Math.floor(Math.random()*6)+1;}
function Moeda(){
  var moeda = Math.floor(Math.random()*2);
  if (moeda) {document.getElementById("resultado").innerHTML = "Cara";}
  else {document.getElementById("resultado").innerHTML = "Coroa";}
}
//teste
