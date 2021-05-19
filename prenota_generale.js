function prenotaVisita(event){
    const form_data = new FormData(form);
    console.log(form_data);

    
    fetch("prenota_visita.php", {method: 'post', body: form_data});

    const messaggio = document.querySelector("#messaggio");
    messaggio.classList.remove("hidden");
    messaggio.textContent = "Visita prenotata, visita il tuo profilo per visualizzare le tue prenotazioni.";
    event.preventDefault();   
    
}

const form = document.querySelector("form");
form.addEventListener('submit', prenotaVisita);