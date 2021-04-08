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
   //déclaration des varibales
   let nom = document.getElementsByName('nom')[0].value;
   let prenoms = document.getElementsByName('prenoms')[0].value;
   let email = document.getElementsByName('email')[0].value;
   let tel = document.getElementsByName('tel')[0].value;
   let sexe = document.querySelector("input[name='sexe']:checked");
   let habitation = document.getElementsByName('habitation')[0].value;
   let regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   let regextel = new RegExp(/^(01|05|07)[0-9]{10}/gi);
   let phoneSize = tel.slice(0,2).toString()[0]+""+tel.slice(0,2).toString()[1];
   
   //vérifiaction de l'initial du numéro de téléphone
   if( phoneSize.toString()==="01" || phoneSize.toString()==="05" || phoneSize.toString()==="07"){
      document.querySelector("#erreurtel").textContent="";
   // si la longeur du numéro est differents de 10 chiffres alors on affiche un message
   }else if(tel.length!=10){
      document.querySelector("#erreurtel").textContent="Votre numéro doit obligatoirement être au format 10 chiffres";
      return false;
   } 
   //si le numero saisir contient des chaine de caractères alors on affiche un message
   else if(isNaN(tel)){
      document.querySelector("#erreurtel").textContent="Votre numéro ne doit contenir que des Chiffres";
      return false;
   }
   else{
      document.querySelector("#erreurtel").textContent="Le numéro de téléphone doit commencer par 01 ou 05 ou 07";
      return false;
   }

   
   //Si le nom est vide ou la longeur est inferieur a 3 alors on affiche un message
   if(nom="" || nom.length<3){
      document.querySelector("#erreurnom").textContent="Ce champ est requis ou doit contenir au minimum 3 caractère";
      return false;
   }  else {
      document.querySelector("#erreurnom").textContent="";
   }

   //Si le prenom est vide ou la longeur est inferieur a 3 alors on affiche un message
   if(prenoms="" || prenoms.length<3){
      document.querySelector("#erreurprenoms").textContent="Ce champ est requis ou doit contenir au minimum 3 caractères";
      return false;
   } else {
      document.querySelector("#erreurprenoms").textContent="";
   }

   //Si l'email est vide 
   if(email.length==0){
      document.querySelector("#erreurmail").textContent="Adresse email est requise";
      return false;
   }
   //vérification du bon format de l'email
   else if(!regex.test(email)){
      document.querySelector("#erreurmail").textContent="Vous n'avez pas saisir une adresse email valide";
      return false;
   }
   else {
      document.querySelector("#erreurmail").textContent="";
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