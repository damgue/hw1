function onJson(json){
    //console.log(json);
    let sezione = undefined;
    sezione = document.querySelector("div.case");
    const blocco = document.querySelector("ul");
    blocco.classList.add("blocco");
    blocco.innerHTML="";
    for(elem of json){
        const riga = document.createElement("div");
        riga.classList.add("riga");

        const elenco = document.createElement("li");
        elenco.textContent = elem.nome;
        elenco.dataset.indice=elem;
        //console.log(elenco.dataset.indice);

        const elimina = document.createElement("img");
        elimina.src = "cestino.svg";
        elimina.href = '#';
        elimina.dataset.id = elem.id_servizio;
        console.log(elimina.dataset.id);
        //elimina.textContent = "Elimina prenotazione";
        elimina.classList.add("cancella");
        elimina.addEventListener("click", cancellaPrenotazione);

        riga.appendChild(elenco);
        riga.appendChild(elimina);
        blocco.appendChild(riga);
        sezione.appendChild(blocco);
    }
}

function cancellaPrenotazione(event){
    const id = event.currentTarget.dataset.id;
    console.log(id);
    fetch("elimina_prenotazione.php?id="+id).then(aggiornaPrenotazioni);
    event.preventDefault();
}

function onJsonVisite(json){
    console.log(json);
    let sez = undefined;
    sez = document.querySelector("div.visitePrenotate");
    const blocco = document.querySelector("ul.visite");
    blocco.classList.add("blocco");
    blocco.innerHTML="";
    for(e of json){
        const div = document.createElement("div");
        div.classList.add("div-visite");
        div.dataset.indice = e; 
        console.log(div);

        const rg = document.createElement("li");
        rg.classList.add("rg");
        rg.textContent = e.medico;
        console.log(rg);

        const data = document.createElement("date");
        data.classList.add("data");
        data.textContent = e.data_visita;
        console.log(data);

        div.appendChild(rg);
        div.appendChild(data);

        blocco.appendChild(div);
        sez.appendChild(blocco);
    }
}

function onResponse(response){
    return response.json();
}

function onResponseVisite(response){
    return response.json();
}

function aggiornaPrenotazioni(){
    fetch("profilo_dati.php").then(onResponse).then(onJson);
}

function aggiornaVisite(){
    fetch("profilo_aggiorna_visite.php").then(onResponseVisite).then(onJsonVisite);
}

aggiornaVisite();
aggiornaPrenotazioni();
let indice = null;