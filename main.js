// GENERAZIONE NAV
// nav
nav = document.createElement("nav");
document.body.prepend(nav);
// funzione per creazione link livelli
function navCreaLink(testo, risorsa, emoji) {
  a = document.createElement("a")
  a.href = "http://localhost/"+risorsa;
  nav.append(a);
  img = document.createElement("img");
  img.src = "http://localhost/svg/"+emoji;
  a.append(img);
  span = document.createElement("span");
  span.classList.add("nav_testo");
  span.innerHTML = testo;
  a.append(span);
}
// funzione per aggiungere barra dopo link
function navAggiungiBarra() {
  barra = document.createElement("span");
  barra.classList.add("nav_barra");
  barra.innerHTML = "/";
  nav.append(barra);
}
// livello 1 (ricette)
navCreaLink("Ricette", "index.php", "1f468-1f3fb-200d-1f373.svg");
/*navAggiungiBarra();
console.log(window.location.pathname);
// livello 2 (categoria) e 3 (ricetta)
categorie = {};
categorie.antipasti = "1F968";
categorie.primi = "1F35E";
categorie.dolci = "1F36C";
url = window.location.pathname;
url = url.slice(1);
url = url.split("/");
switch (url[1]) {
  case "antipasti":
    navCreaLink("Antipasti", url[1]+".php", categorie.antipasti+".svg");
    navAggiungiBarra();
    break;
  case "primi":
    navCreaLink("Primi", url[1]+".php", categorie.primi+".svg");
    navAggiungiBarra();
    break;
  case "dolci":
    navCreaLink("Dolci", url[1]+".php", categorie.dolci+".svg");
    navAggiungiBarra();
    break;
}*/

// IMPOSTA EMOJI E H1 PER OGNI PAGINA
titolo = document.createElement("h1");
titolo.innerHTML = document.title;
document.querySelector("article").prepend(titolo);
emoji_titolo = document.createElement("img");
emoji_titolo.id = "emoji-titolo";
emoji_titolo.src = document.getElementById("emoji").href;
document.querySelector("article").prepend(emoji_titolo);

// AGGIUNGI FRECCIA AI LINK ESTERNI
if (document.querySelector("a[rel='external']") !== 0) {
  freccia_svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  freccia_path = document.createElementNS("http://www.w3.org/2000/svg","path");
  freccia_path.setAttributeNS(null, "d", "M13.646 10.879V3.084c0-.473-.298-.788-.78-.788l-7.794.016c-.465 0-.764.34-.764.73 0 .39.34.723.73.723h2.466l3.951-.15-1.502 1.329-7.413 7.429a.733.733 0 00-.232.506c0 .39.348.764.755.764.19 0 .365-.075.515-.224l7.42-7.43 1.337-1.502-.158 3.777v2.648c0 .382.332.73.739.73.39 0 .73-.323.73-.763z")
  freccia_svg.append(freccia_path);
  document.querySelector("a[rel='external']").prepend(freccia_svg);
}
