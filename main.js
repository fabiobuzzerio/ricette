// NOME FILE DELLA PAGINA CORRENTE
if (window.location.pathname == "/") {
  file = "index";
} else {
  file = (window.location.pathname.split("/")[1]).split(".php")[0];
}

// GENERAZIONE NAV
nav = document.createElement("nav");
document.body.prepend(nav);
function navCreaLink(testo, url, emoji, barra) {
  a = document.createElement("a")
  if (url == "index") {
    a.href = "/";
  } else {
    a.href = url;
  }
  nav.append(a);
  img = document.createElement("img");
  img.src = "emoji/svg/"+emoji+".svg";
  a.append(img);
  span = document.createElement("span");
  span.innerHTML = testo;
  a.append(span);
  if (barra) {
    barra = document.createElement("span");
    barra.classList.add("navBarra");
    barra.innerHTML = "/";
    nav.append(barra);
  }
}
navCrea = new XMLHttpRequest();
navCrea.open("GET", "estrapola-nav?file="+file, true);
navCrea.onreadystatechange = function() {
  if (navCrea.readyState==4 && navCrea.status==200) {
    risposta = JSON.parse(navCrea.response);
    for (var i = 0; i < risposta.length; i++) {
      livello = risposta[i];
      if (i==risposta.length-1) {
        navCreaLink(livello["titolo"], livello["file"], livello["emoji"], false);
      } else {
        navCreaLink(livello["titolo"], livello["file"], livello["emoji"], true);
      }
    }
  }
}
navCrea.send();

// IMPOSTA EMOJI E H1 PER OGNI PAGINA
h1 = document.createElement("h1");
h1.innerHTML = document.title;
h1.contentEditable = "true";
document.querySelector("main").prepend(h1);
h1Emoji = document.createElement("img");
h1Emoji.id = "h1Emoji";
h1Emoji.src = document.querySelector("link[rel=icon]").href;
document.querySelector("main").prepend(h1Emoji);

// MODIFICA TITOLO H1 DELLE PAGINE
h1.addEventListener("keydown", function(e) {
  if (e.which==13) {
    e.preventDefault();
  }
});
h1.addEventListener("blur", function() {
  if (h1.innerHTML !== document.title) {
    richiesta = new XMLHttpRequest();
    richiesta.open("GET", "aggiorna-pagina?file="+file+"&titolo="+h1.innerHTML, true);
    richiesta.onreadystatechange = function() {
      if (richiesta.readyState == 4 && richiesta.status == 200) {
        if (richiesta.response = 1) {
          window.location.replace(richiesta.response);
        } else {
          document.title = h1.innerHTML;
        }
      }
    }
    richiesta.send();
  }
});

// MODIFICA EMOJI DELLE PAGINE
// crea dialog box
modificaEmojiContenitore = document.createElement("div");
modificaEmojiContenitore.id = "modificaEmojiContenitore";
document.querySelector("main").after(modificaEmojiContenitore);
modificaEmoji = document.createElement("div");
modificaEmojiContenitore.append(modificaEmoji);
h3 = document.createElement("h3");
h3.innerHTML = "Scegli la nuova emoji per "+document.title;
modificaEmoji.append(h3);
emojiLista = document.createElement("div");
h3.after(emojiLista);
caricaEmoji = new XMLHttpRequest();
caricaEmoji.open("GET", "carica-emoji", true);
caricaEmoji.onreadystatechange = function() {
  if (caricaEmoji.readyState == 4 && caricaEmoji.status == 200) {
      emojis = JSON.parse(caricaEmoji.response);
      for (var i = 0; i < emojis.length; i++) {
        emoji = document.createElement("div");
        emojiLista.append(emoji);
        emojiImg = document.createElement("span");
        emojiImg.scr = "none";
        emojiImg.classList.add("emoji-"+emojis[i]);
        emojiImg.setAttribute('onclick', 'modificaEmoji(this)');
        emoji.append(emojiImg);
      }
  }
}
caricaEmoji.send();
h1Emoji.addEventListener('click', function() {
  modificaEmojiContenitore.classList.add("on");
  modificaEmojiContenitore.classList.remove("off");

});
modificaEmojiContenitore.addEventListener('click', function(e) {
  if (e.target !== e.currentTarget) return;
  modificaEmojiContenitore.classList.add("off");
  modificaEmojiContenitore.classList.remove("on");
});
function modificaEmoji(emoji) {
  emoji = emoji.className;
  emoji = emoji.split("emoji-")[1];
  modificaEmojiRichiesta = new XMLHttpRequest();
  modificaEmojiRichiesta.open("GET", "aggiorna-pagina?file="+file+"&emoji="+emoji, true);
  modificaEmojiRichiesta.onreadystatechange = function() {
    if (modificaEmojiRichiesta.readyState == 4 && modificaEmojiRichiesta.status == 200) {
      if (modificaEmojiRichiesta.response == true) {
        h1Emoji.src = "emoji/svg/"+emoji+".svg";
        document.querySelector("link[rel=icon]").href = "emoji/svg/"+emoji+".svg";
        document.querySelector("nav > a:last-child > img").src = "emoji/svg/"+emoji+".svg";
        modificaEmojiContenitore.classList.add("off");
        modificaEmojiContenitore.classList.remove("on");
      }
    }
  }
  modificaEmojiRichiesta.send(null);
}

// CERCA RICETTE
cercaContenitore = document.createElement("div");
cercaContenitore.id = "cercaContenitore";
modificaEmojiContenitore.after(cercaContenitore);
cerca = document.createElement("div");
cercaContenitore.append(cerca);
cercaInput = document.createElement("input");
cercaInput.placeholder = "Cerca ricetta";
cercaInput.type = "text";
cerca.append(cercaInput);
risultati = document.createElement("section");
cercaInput.after(risultati);
document.addEventListener("keyup", function(e) {
  if (e.ctrlKey && e.shiftKey && e.which == 70) {
    cercaContenitore.classList.add("on");
    cercaContenitore.classList.remove("off");
  }
});
cercaContenitore.addEventListener("click", function(e) {
  if (e.target !== e.currentTarget) return;
  cercaContenitore.classList.add("off");
  cercaContenitore.classList.remove("on");
});
cercaInput.addEventListener("keydown", function(e) {
  if (e.which==13) {
    cercaRichiesta = new XMLHttpRequest();
    cercaRichiesta.open("GET", "cerca-pagina?stringa="+this.value, true);
    cercaRichiesta.onreadystatechange = function() {
      if (cercaRichiesta.readyState == 4 && cercaRichiesta.status == 200) {
        if (cercaRichiesta.response) {
          risultati.innerHTML = "";
          risposta = JSON.parse(cercaRichiesta.response);
          for (var i = 0; i < risposta.length; i++) {
            a = document.createElement("a");
            a.href = risposta[i]["file"];
            risultati.append(a);
            img = document.createElement("img");
            img.src = "emoji/svg/"+risposta[i]["emoji"]+".svg";
            a.append(img);
            span = document.createElement("span");
            span.innerHTML = risposta[i]["titolo"];
            img.after(span);
          }
        }
      }
    }
    cercaRichiesta.send();
  }
});


document.addEventListener("keydown", function(e) {
  if (e.which == 27) {
    if (modificaEmoji.className = "on") {
      modificaEmoji.classList.add("off");
      modificaEmoji.classList.remove("on");
    }
    if (cercaContenitore.className = "on") {
      cercaContenitore.classList.add("off");
      cercaContenitore.classList.remove("on");
    }
  }
});


// BOTTONE AGGIUNGI RICETTA
aggiungiRicettaPulsante = document.createElement("a");
aggiungiRicettaPulsante.href = "aggiungi-ricetta";
aggiungiRicettaPulsante.id = "aggiungiRicettaPulsante";
aggiungiRicettaPulsante.innerHTML = "+";
cercaContenitore.after(aggiungiRicettaPulsante);

// AGGIUNGI FRECCIA AI LINK ESTERNI
if (document.querySelector("a[rel='external']") !== null) {
  freccia_svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  freccia_path = document.createElementNS("http://www.w3.org/2000/svg","path");
  freccia_path.setAttributeNS(null, "d", "M13.646 10.879V3.084c0-.473-.298-.788-.78-.788l-7.794.016c-.465 0-.764.34-.764.73 0 .39.34.723.73.723h2.466l3.951-.15-1.502 1.329-7.413 7.429a.733.733 0 00-.232.506c0 .39.348.764.755.764.19 0 .365-.075.515-.224l7.42-7.43 1.337-1.502-.158 3.777v2.648c0 .382.332.73.739.73.39 0 .73-.323.73-.763z")
  freccia_svg.append(freccia_path);
  document.querySelector("a[rel='external']").prepend(freccia_svg);
}
