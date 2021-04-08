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
   function validerAjoutApprenants(){
   let nom = document.getElementsByName('nom')[0].value;
   let prenoms = document.getElementsByName('prenoms')[0].value;
   let email = document.getElementsByName('email')[0].value;
   let tel = document.getElementsByName('tel')[0].value;
   let sexe = document.querySelector("input[name='sexe']:checked");
   let habitation = document.getElementsByName('habitation')[0].value;
   let regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   let regextel = new RegExp(/^(01|05|07)[0-9]{10}/gi);

      if(nom.length<3){
         document.querySelector("#erreurnom").textContent="Ce champ est requis ou doit contenir au minimum 3 caractère";
         return false;
      }  else {
         document.querySelector("#erreurnom").textContent="";
      }
      if(prenoms.length<3){
         document.querySelector("#erreurprenoms").textContent="Ce champ est requis ou doit contenir au minimum 3 caractères";
         return false;
      } else {
         document.querySelector("#erreurprenoms").textContent="";
      }
      if(email.length<3){
         document.querySelector("#erreurmail").textContent="Ce champ est requis ou doit contenir au minimum 3 caractères";
         return false;
      } else if(!regex.test(email)){
         document.querySelector("#erreurmail").textContent="Vous n'avez pas saisir une adresse email valide";
         return false;
      }
      else {
         document.querySelector("#erreurmail").textContent="";
      }
      if(tel.length!=10){
         document.querySelector("#erreurtel").textContent="Votre numéro doit obligatoirement être au format 10 chiffres";
         return false;
      // } else if(!regextel.test(tel)){
      //    document.querySelector("#erreurtel").textContent="Votre numéro doit obligatoirement commencer par 01,05,07";
      //    return false;
      // }  else if(regextel.test(tel)){
      //    document.querySelector("#erreurtel").textContent="";
      // }
      } else if(isNaN(tel)){
         document.querySelector("#erreurtel").textContent="Votre numéro ne doit contenir que des Chiffres";
         return false;
      }
      else {
         document.querySelector("#erreurtel").textContent="";
      } 
      if(!sexe){
         document.querySelector("#erreursexe").textContent="Vous devez choisir votre sexe";
         return false;
      } else{
         document.querySelector("#erreursexe").textContent="";
      } if(habitation.length<3){
         document.querySelector("#erreurhabitation").textContent="Vous devez indiquer votre lieu d'habitation";
         return false;
      } else {
         document.querySelector("#erreurhabitation").textContent="";
      }
}