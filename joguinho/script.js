function addBola() {

    var bola = document.createElement("div");
    bola.setAttribute("class", "bola");



    var top = Math.floor(Math.random() * 90);
    var left = Math.floor(Math.random() * 90);

    var cores = ["blue", "brown", "purple", "green", "red", "pink", "yellow"];

    var item = cores[Math.floor(Math.random()* cores.length)];
    bola.setAttribute("style", "top: "+top+"%; left: "+left+"%; background: " + item + ";");

    bola.setAttribute("onclick", "estourar(this)");
    document.body.appendChild(bola);
    
    
   
        
        
}

function estourar(elemento) {
        var audio = new Audio('estouro.mp3');
        audio.play();
      document.body.removeChild(elemento);
      var count = parseInt(document.getElementById("numero").innerText) + 1;
      document.getElementById("numero").innerText = count;
  
    let contador = document.getElementById("numero").innerText;
        if(contador == "10") {
            document.body.style.backgroundColor = "lightblue";
        }
        else if(contador == "20") {
            document.body.style.backgroundColor = "darkred";
        }
        else if(contador == "30") {
            document.body.style.backgroundColor = "darkgreen";
        }
         else if(contador == "40") {
            document.body.style.backgroundColor = "#8bfa00";
        }
        else if(contador == "50") {
            document.body.style.backgroundImage = "url(https://i.ytimg.com/vi/5-He6edQR74/maxresdefault.jpg)";
            alert("Você ganhou!");
        }
        
       
}

function iniciar() {

    setInterval(addBola, 1000);
    alert("Destrua o maior número de bolinhas possível!");
}