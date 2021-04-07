function validerPresence() {
    let email = document.getElementById('email').value;
    let erreurEmail = document.querySelector('#erreur-email');
    let regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;


    //verifie si le champ est vide 
    if (email == "") {
        erreurEmail.textContent = "Ce champ est requis";
        return false;

        //verifie si l'adresse email est valide
    } else if (!regex.test(email)) {
        erreurEmail.textContent = "Adresse email non valide";
        return false;
    }
}