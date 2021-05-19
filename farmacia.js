function onJson(json){
    console.log(json);
    const contenitore = document.querySelector("div.contenitore");
    contenitore.classList.add("contenitore");
    contenitore.innerHTML = "";
    const doc = json.results[0].patient.drug[0].medicinalproduct;
    console.log(doc);
    const farmaco = document.createElement("span");
    farmaco.classList.add("farmaco");
    farmaco.textContent = doc;
    contenitore.appendChild(farmaco);
}

function onResponse(response){
    return response.json();
}

function ricerca(event){
    const text = document.querySelector("#text").value;
    console.log(text);
    const form_data = new FormData(form);
    console.log(form_data);
    const url = "farmacia_dati.php";
    fetch(url, {method: 'post', body: form_data, text}).then(onResponse).then(onJson);
    event.preventDefault();
}

const form = document.querySelector("form")
form.addEventListener('submit', ricerca);