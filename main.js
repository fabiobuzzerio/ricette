// NOME FILE DELLA PAGINA CORRENTE
if (window.location.pathname == "/") {
  file = "index";
} else {
  file = (window.location.pathname.split("/")[1]).split(".php")[0];
}

// GENERAZIONE NAV
// crea nav nav
nav = document.createElement("nav");
document.body.prepend(nav);
navLink = document.createElement("div");
nav.append(navLink);
// crea link
function navCreaLink(testo, url, emoji) {
  a = document.createElement("a")
  a.href = url+".php";
  navLink.append(a);
  img = document.createElement("img");
  img.src = "svg/"+emoji+".svg";
  a.append(img);
  span = document.createElement("span");
  span.innerHTML = testo;
  a.append(span);
}
// aggiunta / dopo link
function navAggiungiBarra() {
  barra = document.createElement("span");
  barra.classList.add("navBarra");
  barra.innerHTML = "/";
  navLink.append(barra);
}
// nome file ricetta corrente
nomeFilePHP = window.location.pathname.split("/")[1];
nomeFile = nomeFilePHP.split(".php")[0];
// richiesta
richiesta = new XMLHttpRequest();
richiesta.open("GET", "estrapola-nav.php?file="+file, true);
richiesta.onreadystatechange = function() {
  if (richiesta.readyState==4 && richiesta.status==200) {
    risposta = JSON.parse(richiesta.response);
    for (var i = 0; i < risposta.length; i++) {
      livello = risposta[i];
      if (i == risposta.length-1) {
        navCreaLink(livello["titolo"], livello["file"], livello["emoji"]);
      } else {
        navCreaLink(livello["titolo"], livello["file"], livello["emoji"]);
        navAggiungiBarra();
      }

    }
  }
}
richiesta.send();

// IMPOSTA EMOJI E H1 PER OGNI PAGINA
h1 = document.createElement("h1");
h1.innerHTML = document.title;
h1.contentEditable = "true";
document.querySelector("article").prepend(h1);
h1Emoji = document.createElement("img");
h1Emoji.id = "h1Emoji";
h1Emoji.src = document.querySelector("link[rel=icon]").href;
document.querySelector("article").prepend(h1Emoji);

// MODIFICA TITOLO H1 DELLE PAGINE
h1.addEventListener("keydown", function(e) {
  if (e.which==13) {
    e.preventDefault();
  }
});
h1.addEventListener("blur", function() {
  if (this.innerHTML !== document.title) {
    richiesta = new XMLHttpRequest();
    richiesta.open("GET", "aggiorna-database.php?file="+file+"&titolo="+this.innerHTML, true);
    richiesta.onreadystatechange = function() {
      if (richiesta.readyState == 4 && richiesta.status == 200) {
        if (richiesta.response) {
          window.location.replace(richiesta.response+".php");
        }
      }
    }
    richiesta.send();
  }
  document.title = this.innerHTML
});

// MODIFICA EMOJI DELLE PAGINE
// crea dialog box
modifica = document.createElement("div");
modifica.id = "modificaEmoji";
h1Emoji.after(modifica);
form = document.createElement("form");
form.method = "get";
form.action="javascript:void(0)";
modifica.append(form);
label = document.createElement("h3");
label.innerHTML = "Inserisci il codice della nuova emoji per "+document.title;
form.append(label);
input = document.createElement("input");
input.type = "text";
input.name = "nuovaEmoji";
form.append(input);
invia = document.createElement("input");
invia.type = "submit";
invia.value = "Aggiorna";
form.append(invia);
// event listener sull'emoji
h1Emoji.addEventListener('click', function() {
  modifica.classList.add("on");
  modifica.classList.remove("off");
});
modifica.addEventListener('click', function(e) {
  if (e.target !== e.currentTarget) return;
  modifica.classList.add("off");
  modifica.classList.remove("on");
});
form.addEventListener("submit", function(e) {
  emoji = document.querySelector("input[name=nuovaEmoji]").value;
  emoji = emoji.toLowerCase();
  richiesta = new XMLHttpRequest();
  richiesta.open("GET", "aggiorna-emoji.php?file="+file+"&emoji="+emoji, true);
  richiesta.onreadystatechange = function() {
    if (richiesta.readyState == 4 && richiesta.status == 200) {
      if (richiesta.response == "ok") {
        h1Emoji.src = "/svg/"+emoji+".svg";
        document.querySelector("link[rel=icon]").href = "/svg/"+emoji+".svg";
        modifica.classList.add("off");
        modifica.classList.remove("on");
      }
    }
  }
  richiesta.send();
});

// BOTTONE AGGIUNGI RICETTA
aggiungiRicettaPulsante = document.createElement("a");
aggiungiRicettaPulsante.href = "aggiungi-ricetta.php";
aggiungiRicettaPulsante.id = "aggiungiRicettaPulsante";
aggiungiRicettaPulsante.innerHTML = "+";
document.body.append(aggiungiRicettaPulsante);

// AGGIUNGI FRECCIA AI LINK ESTERNI
if (document.querySelector("a[rel='external']") !== null) {
  freccia_svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  freccia_path = document.createElementNS("http://www.w3.org/2000/svg","path");
  freccia_path.setAttributeNS(null, "d", "M13.646 10.879V3.084c0-.473-.298-.788-.78-.788l-7.794.016c-.465 0-.764.34-.764.73 0 .39.34.723.73.723h2.466l3.951-.15-1.502 1.329-7.413 7.429a.733.733 0 00-.232.506c0 .39.348.764.755.764.19 0 .365-.075.515-.224l7.42-7.43 1.337-1.502-.158 3.777v2.648c0 .382.332.73.739.73.39 0 .73-.323.73-.763z")
  freccia_svg.append(freccia_path);
  document.querySelector("a[rel='external']").prepend(freccia_svg);
}
