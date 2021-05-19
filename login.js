function verifica(event){
    if(form.username.value.length == 0 || form.password.value.length == 0){
        const avviso = document.querySelector('div');
        avviso.classList.remove('hidden');
        event.preventDefault();
    }        
}

const form = document.forms['form'];
form.addEventListener('submit', verifica);