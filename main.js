// file corrente
file = ((window.location.pathname == "/") ? "index" : (window.location.pathname.split("/")[1]).split(".php")[0])
titolo = document.title
emoji = document.querySelector("link[rel=icon]").href

// crea nav
header = document.createElement("header")
document.body.prepend(header)
nav = document.createElement("nav")
header.append(nav)

function navCreaLink(testo, url, emoji, barra) {
  link = document.createElement("a")
  link.href = ((url == "index") ? "/" : url)
  link.innerHTML = `
    <img src="emoji/svg/${emoji}.svg">
    <span>${testo}</span>
  `
  nav.append(link)
  if (barra) {
    barra = document.createElement("span")
    barra.classList.add("navBarra")
    barra.innerHTML = "/"
    nav.append(barra)
  }
}

richiestaCreaNav = new XMLHttpRequest();
richiestaCreaNav.open("GET", "estrapola-nav?file="+file, true);
richiestaCreaNav.onreadystatechange = () => {
  if (richiestaCreaNav.readyState==4 && richiestaCreaNav.status==200) {
    livelli = JSON.parse(richiestaCreaNav.response)
    livelli.forEach((livello, i) => {
      navCreaLink(livello["titolo"], livello["file"], livello["emoji"], (i !== (livelli.length-1)))
    })
  }
}
richiestaCreaNav.send()


// cancella pagina
cancellaBottone = document.createElement("span")
cancellaBottone.innerHTML = `
    <svg viewBox="0 0 30 30">
      <path d="M21,5c0-2.2-1.8-4-4-4h-4c-2.2,0-4,1.8-4,4H2v2h2v22h22V7h2V5H21z M13,3h4c1.104,0,2,0.897,2,2h-8C11,3.897,11.897,3,13,3zM24,27H6V7h18V27z M16,11h-2v12h2V11z M20,11h-2v12h2V11z M12,11h-2v12h2V11z"></path>
    </svg>
`
header.append(cancellaBottone)
cancellaContenitore = document.createElement("div")
cancellaContenitore.id = "cancellaContenitore"

arrayNoCancella = ["index", "antipasti", "contorni", "dolci", "liquori", "primi", "secondi"]

Array.prototype.inArray = function (daControllare) {
  for (i=0; i < this.length; i++) {
    if (this[i] == daControllare) {
      return true
    }
  }
  return false
}

if (arrayNoCancella.inArray(file)) {
  cancellaContenitore.innerHTML = `
    <div>
      <h3>Non è possibile cancellare <img src="${emoji}"><img>${titolo}.</h3>
    </div>
  `
  document.body.append(cancellaContenitore)
} else {
  cancellaContenitore.innerHTML = `
    <div>
      <h3>Vuoi cancellare <img src="${emoji}"><img>${titolo}?</h3>
      <button>Sì, cancella</button>
    </div>
  `
  document.body.append(cancellaContenitore)
  cancellaSi = cancellaContenitore.querySelector("button:first-of-type")
  cancellaNo = cancellaContenitore.querySelector("button:last-of-type")
  cancellaNo.addEventListener("click", () => {
    cancellaContenitore.classList.add("off")
    cancellaContenitore.classList.remove("on")
  })
  cancellaSi.addEventListener("click", () => {
    richiesta = new XMLHttpRequest()
    richiesta.open("GET", "cancella-ricetta?file="+file, true)
    richiesta.onreadystatechange = () => {
      if (richiesta.readyState == 4 && richiesta.status == 200) {
        if (richiesta.response) {
          window.location.replace("/")
        } else {
          cancellaContenitore.innerHTML = "";
          cancellaContenitore.innerHTML = `
            <div>
              <h3>Non è stato possibile cancellare <img src="${emoji}"></img>${titolo}.</h3>
            </div>
          `
        }
      }
    }
    richiesta.send()
  })
}

cancellaBottone.addEventListener("click", e => {
  cancellaContenitore.classList.add("on")
  cancellaContenitore.classList.remove("off")
})

cancellaContenitore.addEventListener("click", e => {
  if (e.target !== e.currentTarget) return
  cancellaContenitore.classList.add("off")
  cancellaContenitore.classList.remove("on")
})


// imposta h1 e h1Emoji
h1 = document.createElement("h1")
h1.innerHTML = titolo
h1.contentEditable = "true"
document.querySelector("main").prepend(h1)

h1Emoji = document.createElement("img")
h1Emoji.id = "h1Emoji"
h1Emoji.src = emoji
document.querySelector("main").prepend(h1Emoji)


// modifica titolo
h1.addEventListener("keydown", e => {
  if (e.which == 13) {
    e.preventDefault()
  }
})
h1.addEventListener("blur", () => {
  if (h1.innerHTML !== titolo) {
    richiesta = new XMLHttpRequest()
    richiesta.open("GET", "aggiorna-pagina?file="+file+"&titolo="+h1.innerHTML, true)
    richiesta.onreadystatechange = () => {
      if (richiesta.readyState == 4 && richiesta.status == 200) {
        if (richiesta.response) {
          window.location.replace(richiesta.response)
        } else {
          document.title = document.querySelector("nav > a > span").innerHTML = titolo = h1.innerHTML
        }
      }
    }
    richiesta.send()
  }
})


// modifica emoji
modificaEmojiContenitore = document.createElement("div")
modificaEmojiContenitore.id = "modificaEmojiContenitore"
modificaEmojiContenitore.innerHTML = `
  <div>
    <h3>Scegli la nuova emoji per <img src="${emoji}"></img> ${titolo}</h3>
    <div>
    </div>
  </div>
`
document.body.append(modificaEmojiContenitore)

richiestaCaricaEmoji = new XMLHttpRequest()
richiestaCaricaEmoji.open("GET", "carica-emoji", true)
richiestaCaricaEmoji.onreadystatechange = () => {
  if (richiestaCaricaEmoji.readyState == 4 && richiestaCaricaEmoji.status == 200) {
    emojiLista = modificaEmojiContenitore.querySelector("div > div > div")
    emojis = JSON.parse(richiestaCaricaEmoji.response)
    emojis.forEach(emoji => {
      emojiDiv = document.createElement("div")
      emojiDiv.innerHTML = `<span class="emoji-${emoji}" onclick="modificaEmoji(this)"></span>`
      emojiLista.append(emojiDiv)
    })
  }
}
richiestaCaricaEmoji.send()

h1Emoji.addEventListener("click", () => {
  modificaEmojiContenitore.classList.add("on")
  modificaEmojiContenitore.classList.remove("off")

})

modificaEmojiContenitore.addEventListener("click", e => {
  if (e.target !== e.currentTarget) return
  modificaEmojiContenitore.classList.add("off")
  modificaEmojiContenitore.classList.remove("on")
})

function modificaEmoji(nuovaEmoji) {
  nuovaEmoji = nuovaEmoji.className.split("emoji-")[1]
  richiesta = new XMLHttpRequest()
  richiesta.open("GET", "aggiorna-pagina?file="+file+"&emoji="+nuovaEmoji, true)
  richiesta.onreadystatechange = () => {
    if (richiesta.readyState == 4 && richiesta.status == 200) {
      if (richiesta.response == true) {
        h1Emoji.src = document.querySelector("link[rel=icon]").href = document.querySelector("nav > a:last-child > img").src = "emoji/svg/"+nuovaEmoji+".svg"
        emoji = nuovaEmoji
        modificaEmojiContenitore.classList.add("off")
        modificaEmojiContenitore.classList.remove("on")
      }
    }
  }
  richiesta.send()
}


// cerca ricette
cercaContenitore = document.createElement("div")
cercaContenitore.id = "cercaContenitore"
cercaContenitore.innerHTML = `
  <div>
    <input placeholder="Cerca una ricetta" required>
    <div>
    </div>
  </div>
`
document.body.append(cercaContenitore)

cercaContenitore.addEventListener("click", e => {
  if (e.target !== e.currentTarget) return
  cercaContenitore.classList.add("off")
  cercaContenitore.classList.remove("on")
  cercaRisultati.innerHTML = ""
})

cercaInput = cercaContenitore.querySelector("div > div > input")
cercaRisultati = cercaContenitore.querySelector("div > div > div")

cercaInput.addEventListener("keydown", e => {
  if (e.which == 13) {
    richiesta = new XMLHttpRequest()
    richiesta.open("GET", "cerca-pagina?stringa="+cercaInput.value, true)
    richiesta.onreadystatechange = () => {
      if (richiesta.readyState == 4 && richiesta.status == 200) {
        if (richiesta.response) {
          cercaRisultati.innerHTML = ""
          risposta = JSON.parse(richiesta.response)
          risposta.forEach(risultato => {
            link = document.createElement("a")
            link.href = risultato["file"]
            link.innerHTML = `
              <img src="emoji/svg/${risultato["emoji"]}.svg">
              <span>${risultato["titolo"]}</span>`
            cercaRisultati.append(link)
          })
        }
      }
    }
    richiesta.send()
  }
})


// eventi intero documento
document.addEventListener("keydown", e => {
  if (e.which == 27) {
    if (modificaEmojiContenitore.className == "on") {
      modificaEmojiContenitore.classList.add("off")
      modificaEmojiContenitore.classList.remove("on")
    }
    if (cercaContenitore.className == "on") {
      cercaContenitore.classList.add("off")
      cercaContenitore.classList.remove("on")
      cercaRisultati.innerHTML = ""
    }
  }
})

document.addEventListener("keyup", e => {
  if (e.ctrlKey && e.shiftKey && e.which == 70) {
    cercaContenitore.classList.add("on")
    cercaContenitore.classList.remove("off")
  }
})

// if (modificaEmojiContenitore.className == "on") {
//   window.alert("ciao");
//   // document.querySelector("main").addEventListener('DOMMouseScroll', preventDefault, false); // older FF
//   // document.querySelector("main").addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
//   // document.querySelector("main").addEventListener('touchmove', preventDefault, wheelOpt); // mobile
//   // document.querySelector("main").addEventListener('keydown', preventDefaultForScrollKeys, false);
// }


// bottone aggiungi ricetta
aggiungiRicettaPulsante = document.createElement("a")
aggiungiRicettaPulsante.href = "aggiungi-ricetta"
aggiungiRicettaPulsante.id = "aggiungiRicettaPulsante"
aggiungiRicettaPulsante.innerHTML = "+"
cercaContenitore.after(aggiungiRicettaPulsante)


// aggiungi freccia link esterni
if (document.querySelector("a[rel='external']") !== null) {
  frecciaSvg = document.createElementNS("http://www.w3.org/2000/svg", "svg")
  frecciaPath = document.createElementNS("http://www.w3.org/2000/svg","path")
  frecciaPath.setAttributeNS(null, "d", "M13.646 10.879V3.084c0-.473-.298-.788-.78-.788l-7.794.016c-.465 0-.764.34-.764.73 0 .39.34.723.73.723h2.466l3.951-.15-1.502 1.329-7.413 7.429a.733.733 0 00-.232.506c0 .39.348.764.755.764.19 0 .365-.075.515-.224l7.42-7.43 1.337-1.502-.158 3.777v2.648c0 .382.332.73.739.73.39 0 .73-.323.73-.763z")
  frecciaSvg.append(frecciaPath)
  document.querySelector("a[rel='external']").prepend(frecciaSvg)
}
