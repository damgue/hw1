function onJsonMedico(json){
    console.log(json);
    let equipe = undefined;
    equipe = document.querySelector("ul.equipe");
    for (medico of json){
        const elenco = document.createElement("li");
        elenco.classList.add("elenco");
        const cognome = document.createElement("span");
        cognome.classList.add("cognome");
        cognome.textContent = medico.cognome;
        elenco.appendChild(cognome);
        equipe.appendChild(elenco);
    }

    let scelta_medico = undefined;
    scelta_medico = document.querySelector("select#medico");
    for(medico of json){
        const nome_medico = document.createElement("option");
        nome_medico.classList.add("nome_medico");
        nome_medico.textContent = medico.cognome;
        scelta_medico.appendChild(nome_medico);
    }
}

function onResponseMedico(response){
    return response.json();
}

function aggiungiMedico(){
    fetch("equipe_dati.php").then(onResponseMedico).then(onJsonMedico);
}
aggiungiMedico();
